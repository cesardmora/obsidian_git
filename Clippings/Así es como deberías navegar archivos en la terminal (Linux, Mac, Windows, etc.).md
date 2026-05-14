![](https://www.youtube.com/watch?v=wepL2iNO2qY)

## Transcript

### El problema de navegar archivos en la terminal

**0:00** · Como desarrolladores nos gusta pasar mucho tiempo en la terminal, no queremos dejar la terminal, queremos hacer todo desde la terminal y hay un proceso que tenemos que hacer muchísimo y que si lo pensamos es bastante antinatural o al menos un poco extraño.

**0:19** · Y me refiero a la forma de movernos entre directorios. Normalmente lo que vamos a estar haciendo es usar el comando LS y esto es necesario para ver qué directorios y archivos tenemos en la ruta actual. y después podríamos navegar utilizando el comando CD. Pero después de hacer esto, tenemos que repetir el comando LS a menos de que sepamos bien la ruta específica o que tengamos algún predictor, pero aún así nos vamos a ver constantemente haciendo uso de LSCD.

**0:41** · La herramienta que les quiero mostrar un día de hoy es una herramienta que he estado usando durante un buen tiempo y y créanme que ha mejorado muchísimo mi experiencia de navegar entre archivos en la terminal. Esta herramienta nos permite hacer absolutamente todo lo que podríamos hacer con un manejador de archivos, pero desde la terminal. Bien, este herramienta es Yasi, es un manejador de archivos para la terminal.

### Presentación de Yazi

**1:06** · Está escrita en Rust, por lo cual va superrápido, superfuida y además nos permite opcionalmente extenderla utilizando otras herramientas de líneas de comandos. Esta es la documentación oficial y les voy a dejar el enlace en la descripción del video. Podemos instalar ya mediante un gestor de paquetes en virtualmente cualquier sistema operativo. No importa qué sistema operativo estés utilizando, muy probablemente vas a poder instalar ya así. De hecho, estoy pensando seriamente en instalarlo en mi refrigerador o en mi horno de microondas.

### Instalación en cualquier sistema operativo

**1:37** · En mi caso, estoy en Mac y voy a utilizar HBR. Entonces, hago clic aquí y simplemente sigo estas instrucciones. Bien, después de haber instalado YSI, voy a poder hacer uso del comando YSI en la terminal. Lo primero que podemos observar es que tenemos tres paneles. El panel central representa la ruta actual. A la derecha tenemos una previsualización de lo que hay dentro de este directorio y a la izquierda tenemos una ruta anterior a la ruta actual.

### Primer vistazo

**2:03** · Además, en la parte inferior tenemos una barra con extración, como por ejemplo el tamaño del archivo o del folder, información sobre si es un directorio, si lo podemos ejecutar, etcétera, etcétera. Algo que me encanta Yasi es que podemos utilizar VIN Motions.

### Movimientos básicos

**2:17** · Entonces, nos podemos mover arriba, abajo, izquierda, derecha con las flechas o con hjklamos en fin. En realidad es bastante intuitivo y si has utilizado BIM es como estar en casa. Algo genial de yasi es que no solo nos permite previsualizar qué hay dentro de un directorio, sino que también qué hay dentro de un archivo. Esto es genial porque nos permite leer el contenido del archivo sin tener que abrirlo. Y hablando sobre abrir archivos, esta es una de las partes que más me gusta sobre y porque se integra muy bien con mi flujo de trabajo. En este caso, supongamos que quiero editar algo sobre este archivo.

### Previsualización de directorios y archivos

### Abrir archivos

**2:51** · Entonces, presionamos O y con esto estamos abriendo el archivo. Ya se va a utilizar el editor de texto que tengas marcado por defecto. En mi caso, yo estoy utilizando Neo Beam. Entonces, esto lo abre directamente en Newam. Aquí podría editar o hacer lo que sea y después cerrar el archivo. Y estoy de vuelta en Yasin. Y claro, también podemos visualizar imágenes. Creo que esta es una de las cosas más impresionantes de Yasi. Algo genial sobre Yasi es que es superconfigurable.

### Visualizar imágenes desde la terminal

### Yazi es altamente configurable

**3:19** · nos permite configurar qué paneles queremos ver, los tamaños de los paneles, la barra, los colores, absolutamente todo. Si nos dirigimos a configuración, podremos ver que ya sí utiliza tres archivos de configuración.

### Archivos de configuración y preset inicial

**3:32** · El primero es para la configuración general, el segundo es para los atajos de teclados y el tercero es para el tema. Además, aquí nos dejan un enlace hacia la configuración por defecto en GitHub. Vamos a ir a la configuración general por defecto. Vamos a hacer clic en este botón para copiar.

**3:50** · Bien, y como cualquier herramienta que se respete, vamos a estar guardando la configuración dentro de DC config.

**3:55** · Entonces, para este caso, vamos a utilizar el comando mdar-p.

**3:59** · Eso va a crear los directorios que sean necesarios si no los tenemos creados. Y nuestra ruta docfig/jas.

### Creando el archivo de configuración

**4:06** · Vamos a acceder a esta ruta y aquí vamos a crear un archivo Yazon. Y en este vamos a pegar la configuración que hemos copiado de GitHub, ¿ven? Y vamos a guardar esto. Como en toda herramienta, siempre recomiendo empezar con un preset e ir modificando este preset poco a poco. Es cuestión simplemente de ir buscando los pequeños ajustes que querramos hacer. Algo genial de Yasi también es que podemos tener atajos de ruta, como por ejemplo cuando presionamos G, esto va a abrir este panel y podemos ir podemos ir a la ruta home o podemos ir a config.

### Atajos de ruta (G + letra)

**4:35** · Entonces, si yo pongo G y después C, estoy yendo a mi ruta de configuración, donde tengo todas las configuraciones de mis herramientas.

**4:44** · Y si quiero ir a home nuevamente, simplemente hago GH. Todo esto es configurable y lo podemos configurar desde el archivo de Keimap. La documentación es superceta, entonces les recomiendo muchísimo revisarla bien.

### Documentación de atajos

**4:56** · ¿Okay? En cuanto tema se habla, podemos tanto crear nuestro propio tema o utilizar flavors. Entonces, para usar un flavor, simplemente vamos a hacer clic aquí. Y esto nos va a llevar al repositorio donde están todos los flavors. Hay muchísimas opciones con todos los sabores y todos los colores.

### Cambiando temas y usando flavors

**5:13** · En mi caso, voy a probar con el mejor tema de colores que es Grbox. Bien, entonces lo primero que tenemos que hacer es crear un nuevo directorio en nuestra configuración. Entonces, ya sabemos cómo navegar hacia nuestra configuración. Hacemos hacemos CG. Con esto estamos en nuestra configuración.

**5:29** · Si presiono F, puedo filtrar entre los directorios y archivos que hay aquí. Voy a escribir ya. Aquí lo tenemos.

**5:37** · Simplemente voy a entrar a esta ruta y voy a presionar A para agregar un nuevo archivo o directorio. En este caso voy a crear un nuevo directorio y lo voy a llamar flavors y voy a terminar con slash. Eso significa que es un folder y no un archivo. Si lo terminara simplemente así o si pusiera alguna extensión, es un archivo. Pero en este caso queremos hacer un directorio.

**5:58** · Entonces terminamos con slash, presionamos enter y ya tenemos nuestro directorio flavor. Lo siguiente que debemos hacer es copiar el enlace de instalación del tema que nos haya gustado. Vamos a venir a la terminal, vamos a pegar el comando y vamos a ejecutarlo. Bien, después de instalar el tema, si volvemos a nuestra ruta de flavors, vamos a ver que ahora tenemos este nuevo tema. Además, nos incluyó este nuevo archivo de package con el flavor que estamos utilizando. Bien, ahora para utilizar este tema, lo que debemos hacer es configurarlo dentro de nuestro archivo theme.

**6:27** · En este caso yo tengo una configuración personalizada para mi tema. Entonces, lo que voy a hacer para este video, voy a renombrar este archivo y voy a crear un nuevo archivo. Para renombrar un archivo, simplemente presiono R y en este caso le voy a poner off. y vamos a crear uno nuevo. Presiono A y el nombre del archivo. Ahora presiono O para abrir y voy a copiar la configuración que nos muestran el GitHub. La pegamos en el archivo de configuración de tema, guardamos. Voy a cerrar Yasi presionando Q y abrimos nuevamente.

**6:55** · Ahora, como podemos ver, ya estamos utilizando este tema. es ligeramente diferente porque básicamente estoy utilizando la misma paleta de colores, pero si se dan cuenta la barra es diferente, tiene unos colores como grises y la que estaba utilizando eran como azules.

**7:12** · Honestamente creo que ahora me gusta más este tema. Bueno, ya lo veré después.

### Acciones básicas: abrir, crear, mover

**7:17** · Bien, ya vimos varias de las acciones fundamentales como abrir un archivo, crear un archivo o un folder, movernos entre directorios, pero hay cosas que son super necesarias como copiar un archivo, mover un archivo, eliminar un archivo. Entonces, veamos todo esto.

### Seleccionar archivos (espacio)

**7:33** · Para empezar, ¿cómo seleccionamos un archivo? Para seleccionar o deseleccionar uno o más archivos, utilizo la tecla de espacio. Entonces, supongamos que quiero seleccionar esta imagen. Entonces, presiono espacio.

**7:45** · Tenemos un indicador de este lado junto al archivo que he seleccionado como en la esquina superior derecha, en este caso con un número uno porque solo tengo un archivo seleccionado. Supongamos que quiero seleccionar también este otro archivo. Entonces, presiona espacio y ahora tengo dos archivos seleccionados.

### Copiar archivos (Y + P)

**8:01** · Bien, ahora podríamos copiar o mover estos archivos. Para copiar un archivo, simplemente presiono Y, como lo haríamos en VM, y nos movemos a la ruta donde queremos pegar esos archivos. Creemos un nuevo directorio aquí, presionamos A y lo vamos a llamar copy. Vamos a entrar a este directorio y aquí vamos a pegarlo presionando la letra P. Y ya tenemos una copia de estos archivos. Para eliminar un archivo, simplemente presiono D. nos va a preguntar si queremos eliminarlo y presionamos dependiendo si sí o si no, yes o no.

### Eliminar archivos (D y Shift+D)

**8:31** · Al hacerlo de esa forma va a estar mandando el archivo a la papelera de reciclaje. Si quisiéramos eliminar un archivo definitivamente, utilizamos shift D. Y con esto hemos eliminado el archivo completamente. Ahora, si en lugar de copiar un archivo queremos cortar un archivo, presionamos la letra X y repetimos el mismo proceso. Nos dirigimos a donde queremos pegarlo y con la letra Pegamos. Otra cosa genial de Yasi es que podemos ejecutar comandos de terminal sin tener que cerrar Yasi. Esto es genial porque supongamos que queremos instalar un nuevo flavor.

### Cortar archivos (X)

### Ejecutar comandos sin salir de Yazi (; y :)

**9:02** · Entonces, digamos que quiero instalar este de aquí. Voy a copiar el comando para instalar y en lugar de abrir una nueva tab de la terminal o lo que sea, puedo simplemente presionar punto y coma y escribir aquí el comando que quiero ejecutar. Entonces puedo pegar el comando, presionar enter y listo, se ejecutó el comando e instaló el nuevo paquete. Todo esto sin tener que haber salido de la terminal y de la misma manera podríamos hacer algo parecido pero presionando dos puntos. Esto va a abrir una nueva shell, pero bloqueando.

**9:33** · Ejecutamos un nuevo comando.

**9:36** · Algo que va a mejorar muchísimo tu flujo de trabajo con Yasi es utilizar este shell wrapper. Básicamente lo que hace esta función es lo siguiente.

### Mejorar workflow con el shell wrapper

**9:44** · Actualmente estoy en el directorio home y supongamos que abro Yas y empiezo a navegar hacia project y después hacia cualquier proyecto y después voy a cerrar Yas presionando Q. Me mantengo en el directorio actual. Esto podría ser conveniente o inconveniente dependiendo del caso, porque si ya estoy en ese directorio, muy probablemente quiero seguir trabajando. Ahí es aquí donde interviene este shell wrapper. Entonces vamos a copiar el código necesario dependiendo del shell que estemos utilizando. En mi caso, yo estoy utilizando Cell.

**10:13** · Si no sabes qué shell estás utilizando, puedes ejecutar este comando. Entonces, en mi caso, estoy utilizando Cell. Por lo tanto, voy a copiar este código de aquí. Voy a abrir mi configuración de shell y lo voy a pegar ahí. Después de haber pegado esto en mi configuración, vamos a guardar.

### Configurar shell para usar el comando “y”

**10:30** · Ahora, en lugar de utilizar el comando de Yasi, vamos a ejecutar simplemente Y.

**10:35** · Y eso va a funcionar exactamente igual.

### Mantener ruta al cerrar Yazi (Q vs Shift+Q)

**10:38** · Pero ahora si voy a alguna ruta y después presiono Q, ahora en la terminal me encuentro dentro de ese directorio. Ahora supongamos que no quiero que tenga este comportamiento.

**10:50** · Volvamos a abrir con Y. Navegamos por algunos directorios y ahora quiero cerrar Yassi, pero sin moverme de directorio. Entonces voy a presionar Shift Q y con eso cierro el programa, pero me mantengo en el directorio que me encontraba previamente. Bien, vamos a dejar este video por aquí. Creo que he mostrado como los highlights de esta herramienta. Y dime qué te pareció, dime qué te pareció esta herramienta, qué te pareció este video, si te fue útil y si crees que le vas a dar una oportunidad a Yasi.

### Conclusión y despedida

**11:18** · Muchas gracias por haber visto este video, muchas gracias por haberle dado me gusta, espero que sea así y muchas gracias por suscribirte. Nos vemos en la próxima.