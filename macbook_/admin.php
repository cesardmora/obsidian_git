<?php
// admin2024
// PROTECCIÓN: accede con ?key=TU_CLAVE
// $SECRET_KEY = 'Nobili2026Secure!';
// if (!isset($_GET['key']) || $_GET['key'] !== $SECRET_KEY) {
//     http_response_code(403);
//     die('Acceso denegado. Necesitas la clave de acceso.');
// }

chdir(dirname(__DIR__));
require 'vendor/autoload.php';
$app = require 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Property;

$message = '';

// Leer datos POST — compatible con IONOS/.htaccess
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $raw = file_get_contents('php://input');
    if (!empty($raw) && empty($_POST)) {
        parse_str($raw, $_POST);
    }
}

if (!empty($_POST) && isset($_POST['password'])) {
    if ($_POST['password'] !== 'admin2024') {
        $message = '<div class="msg error">❌ Contraseña incorrecta</div>';
    } else {
        $id = $_POST['id'];
        $property = Property::find($id);
        if ($property) {
            // Gallery images — convertir texto a array
            $galleryRaw = trim($_POST['gallery_images'] ?? '');
            $gallery = array_filter(array_map('trim', explode("\n", $galleryRaw)));

            // Amenities — convertir texto a array
            $amenitiesRaw = trim($_POST['amenities'] ?? '');
            $amenities = array_filter(array_map('trim', explode("\n", $amenitiesRaw)));

            $property->update([
                'name'             => $_POST['name'],
                'slug'             => $_POST['slug'],
                'century'          => $_POST['century'],
                'tagline'          => $_POST['tagline'],
                'description'      => $_POST['description'],
                'long_description' => $_POST['long_description'],
                'guests'           => (int)$_POST['guests'],
                'bedrooms'         => (int)$_POST['bedrooms'],
                'bathrooms'        => (int)$_POST['bathrooms'],
                'image_url'        => $_POST['image_url'],
                'gallery_images'   => array_values($gallery),
                'amenities'        => array_values($amenities),
                'location'         => $_POST['location'],
                'is_published'     => isset($_POST['is_published']) ? true : false,
                'is_coming_soon'   => isset($_POST['is_coming_soon']) ? true : false,
                'sort_order'       => (int)$_POST['sort_order'],
            ]);
            $message = '<div class="msg success">✓ <strong>' . htmlspecialchars($_POST['name']) . '</strong> actualizada correctamente</div>';
        }
    }
}

$properties = Property::orderBy('sort_order')->get();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin — Case dei Nobili</title>
<style>
  * { box-sizing: border-box; margin: 0; padding: 0; }
  body { font-family: Georgia, serif; background: #f0e8d8; color: #1a1917; padding: 2rem 1rem; }
  .wrap { max-width: 900px; margin: 0 auto; }
  h1 { font-size: 1.6rem; font-weight: 300; letter-spacing: 0.1em; padding-bottom: 1rem; border-bottom: 1px solid #b8956b; margin-bottom: 2rem; color: #1a3a4a; }
  h1 span { color: #b8956b; }
  .property-block { background: white; border: 1px solid #ddd4c4; margin-bottom: 2rem; overflow: hidden; }
  .property-header { background: #1a3a4a; color: #f0e8d8; padding: 1rem 1.5rem; display: flex; align-items: center; gap: 1rem; cursor: pointer; }
  .property-header .badge { background: rgba(184,149,107,0.3); color: #d4b896; font-size: 0.65rem; letter-spacing: 0.15em; text-transform: uppercase; padding: 0.2rem 0.6rem; }
  .property-header h2 { font-size: 1.1rem; font-weight: 300; }
  .property-header .toggle { margin-left: auto; font-size: 1.2rem; }
  .property-form { padding: 1.5rem; display: none; }
  .property-form.open { display: block; }
  .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
  .grid-3 { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 1rem; }
  .grid-4 { display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 1rem; }
  .field { margin-bottom: 1rem; }
  label { display: block; font-size: 0.68rem; letter-spacing: 0.12em; text-transform: uppercase; color: #8a7d6b; margin-bottom: 0.4rem; font-family: sans-serif; }
  input[type=text], input[type=number], input[type=url], textarea, input[type=password] {
    width: 100%; padding: 0.55rem 0.8rem; border: 1px solid #d0c8bc;
    font-family: Georgia, serif; font-size: 0.9rem; background: #faf6ef;
    transition: border-color 0.2s;
  }
  input:focus, textarea:focus { outline: none; border-color: #b8956b; }
  textarea { resize: vertical; }
  .checkbox-row { display: flex; gap: 2rem; margin: 0.5rem 0; }
  .checkbox-row label { display: flex; align-items: center; gap: 0.4rem; font-size: 0.8rem; text-transform: none; letter-spacing: 0; cursor: pointer; color: #3d3b38; }
  .checkbox-row input[type=checkbox] { width: auto; margin: 0; }
  .img-preview { margin-top: 0.5rem; height: 70px; object-fit: cover; border: 1px solid #ddd; opacity: 0.85; }
  .pwd-row { display: flex; gap: 1rem; align-items: flex-end; padding-top: 1rem; border-top: 1px solid #e8e0d4; margin-top: 1rem; }
  .pwd-row input { max-width: 180px; }
  button[type=submit] { background: #b8956b; color: white; border: none; padding: 0.7rem 2rem; font-size: 0.75rem; letter-spacing: 0.15em; text-transform: uppercase; cursor: pointer; font-family: sans-serif; transition: background 0.2s; }
  button[type=submit]:hover { background: #9a7a55; }
  .msg { padding: 0.9rem 1.2rem; margin-bottom: 1.5rem; font-family: sans-serif; font-size: 0.9rem; border-radius: 2px; }
  .msg.success { background: #eaf5ea; border: 1px solid #a3d4a3; color: #2d6a2d; }
  .msg.error   { background: #fbeaea; border: 1px solid #d4a3a3; color: #6a2d2d; }
  .hint { font-size: 0.7rem; color: #9a8d7d; margin-top: 0.3rem; font-family: sans-serif; }
  .section-title { font-size: 0.7rem; letter-spacing: 0.15em; text-transform: uppercase; color: #b8956b; margin: 1.2rem 0 0.6rem; font-family: sans-serif; border-bottom: 1px solid #e8e0d4; padding-bottom: 0.3rem; }

  /* NUEVO: Estilos para el editor HTML mejorado */
  .editor-tabs { display: flex; gap: 0.5rem; margin-bottom: 0.5rem; }
  .editor-tabs button { 
    background: transparent; border: none; padding: 0.4rem 1rem;
    font-size: 0.7rem; letter-spacing: 0.1em; text-transform: uppercase;
    cursor: pointer; color: #8a7d6b; border-bottom: 2px solid transparent;
    font-family: sans-serif;
  }
  .editor-tabs button.active { color: #b8956b; border-bottom-color: #b8956b; }
  
  .editor-panel { display: none; }
  .editor-panel.active { display: block; }
  
  /* Vista previa estilizada */
  .preview-box { 
    background: #faf6ef; border: 1px solid #d0c8bc; padding: 1.5rem;
    font-family: Georgia, serif; line-height: 1.8; color: #2c3e50;
    max-height: 300px; overflow-y: auto;
  }
  .preview-box p { margin-bottom: 1rem; }
  .preview-box strong { color: #1a252f; font-weight: 600; }
  .preview-box em { color: #555; font-style: italic; }
  .preview-box blockquote { 
    border-left: 3px solid #c9a227; padding-left: 1rem; margin: 1rem 0;
    font-style: italic; color: #555; background: linear-gradient(to right, rgba(201, 162, 39, 0.05), transparent);
    padding: 1rem 1rem 1rem 1.5rem;
  }
  .preview-box ul { margin: 1rem 0; padding-left: 1.5rem; }
  .preview-box li { margin-bottom: 0.3rem; list-style: none; position: relative; }
  .preview-box li::before { content: "✦"; position: absolute; left: -1.2rem; color: #c9a227; font-size: 0.7rem; }
  .preview-box h3 { font-size: 1.1rem; color: #1a3a4a; margin: 1.5rem 0 0.8rem; font-weight: 400; }
  
  /* Toolbar de formato */
  .toolbar { 
    display: flex; gap: 0.3rem; margin-bottom: 0.5rem; padding: 0.4rem;
    background: #f5f0e8; border: 1px solid #d0c8bc; flex-wrap: wrap;
  }
  .toolbar button { 
    background: white; border: 1px solid #d0c8bc; padding: 0.4rem 0.7rem;
    cursor: pointer; font-size: 0.75rem; border-radius: 3px;
    font-family: sans-serif; color: #5a5045; transition: all 0.2s;
  }
  .toolbar button:hover { background: #b8956b; color: white; border-color: #b8956b; }
  .toolbar button:active { transform: translateY(1px); }
  
  /* Textarea de código */
  .code-editor {
    font-family: 'Monaco', 'Menlo', 'Courier New', monospace !important;
    font-size: 0.8rem !important;
    line-height: 1.5;
    tab-size: 2;
  }
</style>
</head>
<body>
<div class="wrap">

  <h1>Case dei Nobili &mdash; <span>Panel de Administración</span></h1>

  <?= $message ?>

  <?php foreach($properties as $p): ?>
  <div class="property-block">

    <div class="property-header" onclick="toggleForm(<?= $p->id ?>)">
      <?php if($p->century): ?>
        <span class="badge"><?= htmlspecialchars($p->century) ?></span>
      <?php endif; ?>
      <h2><?= htmlspecialchars($p->name) ?></h2>
      <?php if($p->is_coming_soon): ?>
        <span class="badge" style="background:rgba(255,200,100,0.2); color:#d4a855;">Próximamente</span>
      <?php endif; ?>
      <?php if(!$p->is_published): ?>
        <span class="badge" style="background:rgba(200,100,100,0.2); color:#d48855;">No publicada</span>
      <?php endif; ?>
      <span class="toggle" id="toggle-<?= $p->id ?>">▼</span>
    </div>

    <div class="property-form" id="form-<?= $p->id ?>">
      <form method="POST" action="/admin.php">
        <input type="hidden" name="id" value="<?= $p->id ?>">

        <div class="section-title">Información básica</div>
        <div class="grid-2">
          <div class="field">
            <label>Nombre</label>
            <input type="text" name="name" value="<?= htmlspecialchars($p->name) ?>" required>
          </div>
          <div class="field">
            <label>Slug (URL)</label>
            <input type="text" name="slug" value="<?= htmlspecialchars($p->slug) ?>">
            <p class="hint">Solo minúsculas, guiones. Ej: casa-gotica</p>
          </div>
        </div>

        <div class="grid-3">
          <div class="field">
            <label>Siglo / Era</label>
            <input type="text" name="century" value="<?= htmlspecialchars($p->century ?? '') ?>">
          </div>
          <div class="field">
            <label>Tagline (subtítulo corto)</label>
            <input type="text" name="tagline" value="<?= htmlspecialchars($p->tagline ?? '') ?>">
          </div>
          <div class="field">
            <label>Ubicación</label>
            <input type="text" name="location" value="<?= htmlspecialchars($p->location ?? '') ?>">
          </div>
        </div>

        <div class="field">
          <label>Descripción corta</label>
          <textarea name="description" rows="3"><?= htmlspecialchars($p->description ?? '') ?></textarea>
        </div>

        <!-- EDITOR MEJORADO PARA DESCRIPCIÓN LARGA -->
        <div class="field">
          <label>Descripción larga (con formato HTML)</label>
          
          <!-- Toolbar de atajos -->
          <div class="toolbar">
            <button type="button" onclick="wrapText('long-desc-<?= $p->id ?>', '<p>', '</p>')">¶ Párrafo</button>
            <button type="button" onclick="wrapText('long-desc-<?= $p->id ?>', '<strong>', '</strong>')"><b>B</b> Negrita</button>
            <button type="button" onclick="wrapText('long-desc-<?= $p->id ?>', '<em>', '</em>')"><i>I</i> Cursiva</button>
            <button type="button" onclick="wrapText('long-desc-<?= $p->id ?>', '<blockquote>', '</blockquote>')">" Cita</button>
            <button type="button" onclick="wrapText('long-desc-<?= $p->id ?>', '<ul>\n  <li>', '</li>\n  <li></li>\n</ul>')">• Lista</button>
            <button type="button" onclick="wrapText('long-desc-<?= $p->id ?>', '<h3>', '</h3>')">Título</button>
            <button type="button" onclick="wrapText('long-desc-<?= $p->id ?>', '<br>', '')">↵ Salto</button>
            <button type="button" onclick="insertAtCursor('long-desc-<?= $p->id ?>', '&nbsp;')">␣ Espacio</button>
          </div>
          
          <!-- Tabs -->
          <div class="editor-tabs">
            <button type="button" class="active" onclick="switchTab(<?= $p->id ?>, 'edit')">Editar HTML</button>
            <button type="button" onclick="switchTab(<?= $p->id ?>, 'preview')">Vista previa</button>
          </div>
          
          <!-- Panel de edición (SIN htmlspecialchars para permitir HTML) -->
          <div class="editor-panel active" id="panel-edit-<?= $p->id ?>">
            <textarea 
              id="long-desc-<?= $p->id ?>"
              name="long_description" 
              rows="8" 
              class="code-editor"
              spellcheck="false"
            ><?= $p->long_description ?></textarea>
            <p class="hint">
              Etiquetas permitidas: &lt;p&gt;, &lt;strong&gt;, &lt;em&gt;, &lt;blockquote&gt;, &lt;ul&gt;/&lt;li&gt;, &lt;h3&gt;, &lt;br&gt;
            </p>
          </div>
          
          <!-- Panel de vista previa -->
          <div class="editor-panel" id="panel-preview-<?= $p->id ?>">
            <div class="preview-box" id="preview-content-<?= $p->id ?>">
              <?= $p->long_description ?>
            </div>
          </div>
        </div>

        <div class="section-title">Capacidad</div>
        <div class="grid-4">
          <div class="field">
            <label>Huéspedes</label>
            <input type="number" name="guests" value="<?= $p->guests ?>" min="0">
          </div>
          <div class="field">
            <label>Dormitorios</label>
            <input type="number" name="bedrooms" value="<?= $p->bedrooms ?>" min="0">
          </div>
          <div class="field">
            <label>Baños</label>
            <input type="number" name="bathrooms" value="<?= $p->bathrooms ?>" min="0">
          </div>
          <div class="field">
            <label>Orden</label>
            <input type="number" name="sort_order" value="<?= $p->sort_order ?>" min="0">
          </div>
        </div>

        <div class="section-title">Imágenes</div>
        <div class="field">
          <label>URL imagen principal</label>
          <input type="text" name="image_url" value="<?= htmlspecialchars($p->image_url ?? '') ?>">
          <?php if($p->image_url): ?>
            <img src="<?= htmlspecialchars($p->image_url) ?>" class="img-preview">
          <?php endif; ?>
        </div>

        <div class="field">
          <label>Galería de imágenes (una URL por línea)</label>
          <textarea name="gallery_images" rows="4"><?= htmlspecialchars(implode("\n", $p->gallery_images ?? [])) ?></textarea>
          <p class="hint">Pega una URL por línea</p>
        </div>

        <div class="section-title">Servicios / Amenities</div>
        <div class="field">
          <label>Amenities (uno por línea)</label>
          <textarea name="amenities" rows="4"><?= htmlspecialchars(implode("\n", $p->amenities ?? [])) ?></textarea>
          <p class="hint">Ej: Patio privado / Wi-Fi alta velocidad / Cocina equipada</p>
        </div>

        <div class="section-title">Estado</div>
        <div class="checkbox-row">
          <label>
            <input type="checkbox" name="is_published" <?= $p->is_published ? 'checked' : '' ?>>
            Publicada
          </label>
          <label>
            <input type="checkbox" name="is_coming_soon" <?= $p->is_coming_soon ? 'checked' : '' ?>>
            Próximamente
          </label>
        </div>

        <div class="pwd-row">
          <div class="field">
            <label>Contraseña admin</label>
            <input type="password" name="password" placeholder="••••••••" required>
          </div>
          <button type="submit">Guardar cambios</button>
        </div>

      </form>
    </div>

  </div>
  <?php endforeach; ?>

</div>

<script>
function toggleForm(id) {
  const form = document.getElementById('form-' + id);
  const toggle = document.getElementById('toggle-' + id);
  form.classList.toggle('open');
  toggle.textContent = form.classList.contains('open') ? '▲' : '▼';
}

// Cambiar entre tabs de editor
function switchTab(id, mode) {
  const editPanel = document.getElementById('panel-edit-' + id);
  const previewPanel = document.getElementById('panel-preview-' + id);
  const buttons = editPanel.parentElement.querySelectorAll('.editor-tabs button');
  
  if (mode === 'edit') {
    editPanel.classList.add('active');
    previewPanel.classList.remove('active');
    buttons[0].classList.add('active');
    buttons[1].classList.remove('active');
  } else {
    // Actualizar vista previa con el contenido actual del textarea
    const content = document.getElementById('long-desc-' + id).value;
    document.getElementById('preview-content-' + id).innerHTML = content;
    
    editPanel.classList.remove('active');
    previewPanel.classList.add('active');
    buttons[0].classList.remove('active');
    buttons[1].classList.add('active');
  }
}

// Envolver texto seleccionado con etiquetas
function wrapText(textareaId, openTag, closeTag) {
  const textarea = document.getElementById(textareaId);
  const start = textarea.selectionStart;
  const end = textarea.selectionEnd;
  const text = textarea.value;
  const selected = text.substring(start, end);
  
  const replacement = openTag + selected + closeTag;
  textarea.value = text.substring(0, start) + replacement + text.substring(end);
  
  // Restaurar cursor después del texto insertado
  const newCursor = start + replacement.length;
  textarea.setSelectionRange(newCursor, newCursor);
  textarea.focus();
  
  // Actualizar vista previa si está visible
  const id = textareaId.replace('long-desc-', '');
  const previewPanel = document.getElementById('panel-preview-' + id);
  if (previewPanel && previewPanel.classList.contains('active')) {
    document.getElementById('preview-content-' + id).innerHTML = textarea.value;
  }
}

// Insertar texto en posición del cursor
function insertAtCursor(textareaId, text) {
  const textarea = document.getElementById(textareaId);
  const start = textarea.selectionStart;
  const end = textarea.selectionEnd;
  const value = textarea.value;
  
  textarea.value = value.substring(0, start) + text + value.substring(end);
  textarea.setSelectionRange(start + text.length, start + text.length);
  textarea.focus();
}

// Auto-guardar en localStorage (backup por si se cierra el navegador)
document.querySelectorAll('textarea[name="long_description"]').forEach(textarea => {
  const id = textarea.id;
  
  // Restaurar backup si existe
  const backup = localStorage.getItem('backup_' + id);
  if (backup && backup !== textarea.value) {
    // Opcional: mostrar alerta de recuperación
  }
  
  // Guardar backup cada 30 segundos
  setInterval(() => {
    localStorage.setItem('backup_' + id, textarea.value);
  }, 30000);
  
  // Limpiar backup al enviar formulario
  textarea.closest('form').addEventListener('submit', () => {
    localStorage.removeItem('backup_' + id);
  });
});
</script>

</body>
</html>