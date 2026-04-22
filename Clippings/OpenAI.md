---
title: "OpenAI"
source: "https://docs.openclaw.ai/es/providers/openai"
author:
published:
created: 2026-04-13
description:
tags:
  - "clippings"
---
## OpenAI

OpenAI proporciona APIs para desarrolladores de modelos GPT. OpenClaw admite dos rutas de autenticación:
- **API key** — acceso directo a OpenAI Platform con facturación por uso (modelos `openai/*`)
- **Suscripción de Codex** — inicio de sesión en ChatGPT/Codex con acceso por suscripción (modelos `openai-codex/*`)
OpenAI admite explícitamente el uso de OAuth de suscripción en herramientas y flujos de trabajo externos como OpenClaw.

## Primeros pasos

Elige tu método de autenticación preferido y sigue los pasos de configuración.

- API key (OpenAI Platform)
- Suscripción de Codex

**Ideal para:** acceso directo a la API y facturación por uso.

### Resumen de rutas

| Referencia del modelo | Ruta | Autenticación |
| --- | --- | --- |
| `openai/gpt-5.4` | API directa de OpenAI Platform | `OPENAI_API_KEY` |
| `openai/gpt-5.4-pro` | API directa de OpenAI Platform | `OPENAI_API_KEY` |

El inicio de sesión de ChatGPT/Codex se enruta mediante `openai-codex/*`, no `openai/*`.

### Ejemplo de configuración

```json5
{
  env: { OPENAI_API_KEY: "sk-..." },
  agents: { defaults: { model: { primary: "openai/gpt-5.4" } } },
}
```

OpenClaw **no** expone `openai/gpt-5.3-codex-spark` en la ruta directa de API. Las solicitudes en vivo a la API de OpenAI rechazan ese modelo. Spark es solo de Codex.

## Generación de imágenes

El Plugin integrado `openai` registra la generación de imágenes mediante la herramienta `image_generate`.

| Capacidad | Valor |
| --- | --- |
| Modelo predeterminado | `openai/gpt-image-1` |
| Máximo de imágenes por solicitud | 4 |
| Modo de edición | Habilitado (hasta 5 imágenes de referencia) |
| Anulaciones de tamaño | Compatible |
| Relación de aspecto / resolución | No se reenvían a la API de imágenes de OpenAI |

```json5
{
  agents: {
    defaults: {
      imageGenerationModel: { primary: "openai/gpt-image-1" },
    },
  },
}
```

Consulta [Image Generation](https://docs.openclaw.ai/es/tools/image-generation) para ver los parámetros compartidos de la herramienta, la selección de proveedor y el comportamiento de conmutación por error.

## Generación de video

El Plugin integrado `openai` registra la generación de video mediante la herramienta `video_generate`.

| Capacidad | Valor |
| --- | --- |
| Modelo predeterminado | `openai/sora-2` |
| Modos | Texto a video, imagen a video, edición de un solo video |
| Entradas de referencia | 1 imagen o 1 video |
| Anulaciones de tamaño | Compatible |
| Otras anulaciones | `aspectRatio`, `resolution`, `audio`, `watermark` se ignoran con una advertencia de la herramienta |

```json5
{
  agents: {
    defaults: {
      videoGenerationModel: { primary: "openai/sora-2" },
    },
  },
}
```

Consulta [Video Generation](https://docs.openclaw.ai/es/tools/video-generation) para ver los parámetros compartidos de la herramienta, la selección de proveedor y el comportamiento de conmutación por error.

## Capa de personalidad

OpenClaw agrega una pequeña capa de prompt específica de OpenAI para ejecuciones `openai/*` y `openai-codex/*`. La capa hace que el asistente sea cálido, colaborativo, conciso y un poco más expresivo emocionalmente sin reemplazar el prompt base del sistema.

| Valor | Efecto |
| --- | --- |
| `"friendly"` (predeterminado) | Habilita la capa específica de OpenAI |
| `"on"` | Alias de `"friendly"` |
| `"off"` | Usa solo el prompt base de OpenClaw |

- Config
- CLI

```json5
{
  plugins: {
    entries: {
      openai: { config: { personality: "friendly" } },
    },
  },
}
```

Los valores no distinguen entre mayúsculas y minúsculas en tiempo de ejecución, por lo que `"Off"` y `"off"` desactivan ambos la capa.

## Voz y habla

El Plugin integrado `openai` registra síntesis de voz para la superficie `messages.tts`.

| Ajuste | Ruta de configuración | Predeterminado |
| --- | --- | --- |
| Modelo | `messages.tts.providers.openai.model` | `gpt-4o-mini-tts` |
| Voz | `messages.tts.providers.openai.voice` | `coral` |
| Velocidad | `messages.tts.providers.openai.speed` | (sin definir) |
| Instrucciones | `messages.tts.providers.openai.instructions` | (sin definir, solo `gpt-4o-mini-tts`) |
| Formato | `messages.tts.providers.openai.responseFormat` | `opus` para notas de voz, `mp3` para archivos |
| API key | `messages.tts.providers.openai.apiKey` | Usa `OPENAI_API_KEY` como respaldo |
| URL base | `messages.tts.providers.openai.baseUrl` | `https://api.openai.com/v1` |

Modelos disponibles: `gpt-4o-mini-tts`, `tts-1`, `tts-1-hd`. Voces disponibles: `alloy`, `ash`, `ballad`, `cedar`, `coral`, `echo`, `fable`, `juniper`, `marin`, `onyx`, `nova`, `sage`, `shimmer`, `verse`.

```json5
{
  messages: {
    tts: {
      providers: {
        openai: { model: "gpt-4o-mini-tts", voice: "coral" },
      },
    },
  },
}
```

Establece `OPENAI_TTS_BASE_URL` para anular la URL base de TTS sin afectar el endpoint de la API de chat.

El Plugin integrado `openai` registra transcripción en tiempo real para el Plugin Voice Call.

| Ajuste | Ruta de configuración | Predeterminado |
| --- | --- | --- |
| Modelo | `plugins.entries.voice-call.config.streaming.providers.openai.model` | `gpt-4o-transcribe` |
| Duración del silencio | `...openai.silenceDurationMs` | `800` |
| Umbral de VAD | `...openai.vadThreshold` | `0.5` |
| API key | `...openai.apiKey` | Usa `OPENAI_API_KEY` como respaldo |

Usa una conexión WebSocket a `wss://api.openai.com/v1/realtime` con audio G.711 u-law.

El Plugin integrado `openai` registra voz en tiempo real para el Plugin Voice Call.

| Ajuste | Ruta de configuración | Predeterminado |
| --- | --- | --- |
| Modelo | `plugins.entries.voice-call.config.realtime.providers.openai.model` | `gpt-realtime` |
| Voz | `...openai.voice` | `alloy` |
| Temperatura | `...openai.temperature` | `0.8` |
| Umbral de VAD | `...openai.vadThreshold` | `0.5` |
| Duración del silencio | `...openai.silenceDurationMs` | `500` |
| API key | `...openai.apiKey` | Usa `OPENAI_API_KEY` como respaldo |

Admite Azure OpenAI mediante las claves de configuración `azureEndpoint` y `azureDeployment`. Admite llamadas bidireccionales a herramientas. Usa formato de audio G.711 u-law.

## Configuración avanzada

OpenClaw usa primero WebSocket con respaldo a SSE (`"auto"`) tanto para `openai/*` como para `openai-codex/*`.En modo `"auto"`, OpenClaw:
- Reintenta una vez un fallo temprano de WebSocket antes de pasar a SSE
- Tras un fallo, marca WebSocket como degradado durante ~60 segundos y usa SSE durante el enfriamiento
- Adjunta encabezados estables de identidad de sesión y turno para reintentos y reconexiones
- Normaliza los contadores de uso (`input_tokens` / `prompt_tokens`) entre variantes de transporte

| Valor | Comportamiento |
| --- | --- |
| `"auto"` (predeterminado) | Primero WebSocket, respaldo a SSE |
| `"sse"` | Forzar solo SSE |
| `"websocket"` | Forzar solo WebSocket |

```json5
{
  agents: {
    defaults: {
      models: {
        "openai-codex/gpt-5.4": {
          params: { transport: "auto" },
        },
      },
    },
  },
}
```

Documentación relacionada de OpenAI:
- [API Realtime con WebSocket](https://platform.openai.com/docs/guides/realtime-websocket)
- [Respuestas de API en streaming (SSE)](https://platform.openai.com/docs/guides/streaming-responses)

OpenClaw habilita el calentamiento de WebSocket de forma predeterminada para `openai/*` para reducir la latencia del primer turno.

```json5
// Desactivar calentamiento
{
  agents: {
    defaults: {
      models: {
        "openai/gpt-5.4": {
          params: { openaiWsWarmup: false },
        },
      },
    },
  },
}
```

OpenClaw expone una alternancia compartida de modo rápido para `openai/*` y `openai-codex/*`:
- **Chat/UI:** `/fast status|on|off`
- **Config:** `agents.defaults.models["<provider>/<model>"].params.fastMode`
Cuando está habilitado, OpenClaw asigna el modo rápido al procesamiento prioritario de OpenAI (`service_tier = "priority"`). Los valores existentes de `service_tier` se conservan, y el modo rápido no reescribe `reasoning` ni `text.verbosity`.

```json5
{
  agents: {
    defaults: {
      models: {
        "openai/gpt-5.4": { params: { fastMode: true } },
        "openai-codex/gpt-5.4": { params: { fastMode: true } },
      },
    },
  },
}
```

Las anulaciones de sesión tienen prioridad sobre la configuración. Al borrar la anulación de sesión en la interfaz de Sessions, la sesión vuelve al valor predeterminado configurado.

La API de OpenAI expone el procesamiento prioritario mediante `service_tier`. Configúralo por modelo en OpenClaw:

```json5
{
  agents: {
    defaults: {
      models: {
        "openai/gpt-5.4": { params: { serviceTier: "priority" } },
        "openai-codex/gpt-5.4": { params: { serviceTier: "priority" } },
      },
    },
  },
}
```

Valores compatibles: `auto`, `default`, `flex`, `priority`.

`serviceTier` solo se reenvía a endpoints nativos de OpenAI (`api.openai.com`) y a endpoints nativos de Codex (`chatgpt.com/backend-api`). Si enrutas cualquiera de los proveedores a través de un proxy, OpenClaw deja `service_tier` intacto.

Para los modelos directos de OpenAI Responses (`openai/*` en `api.openai.com`), OpenClaw habilita automáticamente Compaction del lado del servidor:
- Fuerza `store: true` (a menos que la compatibilidad del modelo establezca `supportsStore: false`)
- Inyecta `context_management: [{ type: "compaction", compact_threshold: ... }]`
- `compact_threshold` predeterminado: 70% de `contextWindow` (u `80000` cuando no está disponible)

- Habilitar explícitamente
- Umbral personalizado
- Desactivar

Útil para endpoints compatibles como Azure OpenAI Responses:

```json5
{
  agents: {
    defaults: {
      models: {
        "azure-openai-responses/gpt-5.4": {
          params: { responsesServerCompaction: true },
        },
      },
    },
  },
}
```

`responsesServerCompaction` solo controla la inyección de `context_management`. Los modelos directos de OpenAI Responses siguen forzando `store: true` a menos que la compatibilidad establezca `supportsStore: false`.

Para ejecuciones de la familia GPT-5 en `openai/*` y `openai-codex/*`, OpenClaw puede usar un contrato de ejecución integrado más estricto:

```json5
{
  agents: {
    defaults: {
      embeddedPi: { executionContract: "strict-agentic" },
    },
  },
}
```

Con `strict-agentic`, OpenClaw:
- Ya no trata un turno de solo planificación como progreso exitoso cuando hay disponible una acción de herramienta
- Reintenta el turno con una guía de actuar ahora
- Habilita automáticamente `update_plan` para trabajo sustancial
- Muestra un estado bloqueado explícito si el modelo sigue planificando sin actuar

Limitado solo a ejecuciones de la familia GPT-5 de OpenAI y Codex. Otros proveedores y familias de modelos más antiguas mantienen el comportamiento predeterminado.

OpenClaw trata los endpoints directos de OpenAI, Codex y Azure OpenAI de forma diferente a los proxies genéricos compatibles con OpenAI `/v1`:**Rutas nativas** (`openai/*`, `openai-codex/*`, Azure OpenAI):
- Mantienen intacto `reasoning: { effort: "none" }` cuando el razonamiento se desactiva explícitamente
- Usan de forma predeterminada el modo estricto para los esquemas de herramientas
- Adjuntan encabezados ocultos de atribución solo en hosts nativos verificados
- Mantienen el formato de solicitud exclusivo de OpenAI (`service_tier`, `store`, compatibilidad de razonamiento, sugerencias de caché de prompts)
**Rutas proxy/compatibles:**
- Usan un comportamiento de compatibilidad más flexible
- No fuerzan esquemas de herramientas estrictos ni encabezados exclusivos de nativo
Azure OpenAI usa transporte nativo y comportamiento de compatibilidad nativo, pero no recibe los encabezados ocultos de atribución.

## Relacionado

## [Selección de modelo](https://docs.openclaw.ai/es/concepts/model-providers)

Elegir proveedores, referencias de modelo y comportamiento de conmutación por error.

## [Generación de imágenes](https://docs.openclaw.ai/es/tools/image-generation)

Parámetros compartidos de la herramienta de imagen y selección de proveedor.

## [Generación de video](https://docs.openclaw.ai/es/tools/video-generation)

Parámetros compartidos de la herramienta de video y selección de proveedor.

## [OAuth y autenticación](https://docs.openclaw.ai/es/gateway/authentication)

Detalles de autenticación y reglas de reutilización de credenciales.