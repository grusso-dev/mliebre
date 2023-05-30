### Paso 1
1) Crear una estructura con Node.js y express (npm install)

2) En esta estructura crear los directorios public y views. 
    Dentro del directorio public crear los directorios img y css

3) Poner en el directorio views el archivo html entregado y en el directorio img la imagen entregada

4) En app.js hacer que “levante” express en el puerto 3030

5) Lograr reproducir el archivo html con express

### Paso 2

1)Crear la estructura de un proyecto express y levantar un servidor

2) Copiar las imágenes que recibiste en su carpeta del proyecto “img”

3) Crear un archivo home.html con la estructura html necesaria. 
	El mismo deberá tener las secciones header, main y footer.

El header deberá tener:

○ Logo
○ Lugar para poner la barra de búsqueda
○ Comprá en cuotas y sin tarjeta de crédito
○ Barra de navegación que posea las siguientes opciones (en el orden que decidas):
○ Ofertas
○ Tiendas Oficiales
○ Vender
○ Ayuda
○ Creá tu cuenta
○ Ingresá
○ Mis compras

El main deberá tener dos secciones con información de productos:

● Basado en tu última visita
Imagen de producto
Precio producto
Porcenta de descuento (si tiene)
Nombre de producto

Ejemplos:

imagen de MacBook
$230.000
20% off
MacBook Pro 2019

imagen del Samsung Galaxy
$70.500
10% off
Samsung Galaxy S10

● Sección de Ofertas

Imagen de producto
Precio de producto
Porcentaje de descuento (si tiene)
Nombre de producto

Ejemplos:

imagen de MacBook
$230.000
20% off
MacBook Pro 2019

imagen del Samsung Galaxy
$70.500
10% off
Samsung Galaxy S10

### Paso 3
Modificar el header, de nuestro HTML, en cuanto a elementos y estética, es decir modificar en HTML y CSS. Para esto tendremos que trabajar cada elemento que contenga el header (navbar, login bar, search bar) para que quede similar a la muestra de ejemplo.

Utilizar estos estilos:

Paleta de colores:

Amarillo: #EAC926; 
Azul: #03264C; 
Celeste: #1259c3; 
Gris oscuro: #666; 
Gris claro: #ebebeb; 
Verde: #39b54a; 

Tamaños Tipográficos: 
Cuerpos de texto: 12px 
Titulares (Visita/Ofertas): 24px 
Precios: 18px 
Descuentos: 16px
Descripciones: 16px

Tipografías:

Familia: 'Roboto’

Para saber como cargarla:
[Fuente]https://drive.google.com/file/d/1c1MqhN6a77eVXoQ7hJpzBoG1OPTqA-Ad/view 

Iconos

Fontawesome

[Iconos]https://fontawesome.com/icons?d=gallery&m=free 


Modificar el pie de pagina (footer) de nuestro sitio web. 
Trabajar cada elemento del mismo para mejorarlo en cuanto a estética.
Tener en consideración los estilos anteriormente brindados.

Dentro del mismo deben cumplirse las siguientes consignas:

El contenido de todos los artículos debe estar centrado

Los iconos deben tener un tamaño de 2em y un margen inferior de 10px (este margen genera una separación de 10 pixeles)

### Paso 4
Centrar la sección main
La sección main debe ocupar un 90% de la pantalla
El logo de envio, el precio, el porcentaje de descuento y la descripción del articulo deben estar dentro de una “caja” general por cada articulo
La caja general realizada debe tener borde superior de 1 pixel, línea solida y color #ebebeb
La caja general realizada debe tener separado el contenido de sus bordes en 15 pixeles en cada uno de sus lados

Implementar los cortes:

Navegación en tablets (ancho mínimo 361 px)
Navegación en desktop (ancho mínimo 769 px)

En el caso de mobile la descripción no se vera

Para los dipositivos tablets o superiores agregar box-shadow. De la forma:

box-shadow : 0px 0px 10px rgb ( 100 , 100 , 100 );

Para el header, en la versión mobile ocultar el site y login navbar. Y en las otras versiones mostrarlos pero ocultar la imagen del menu hamburguesa.





