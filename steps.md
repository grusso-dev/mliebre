### Paso 1 (4.1)
1) Crear una estructura con Node.js y express (npm install)

2) En esta estructura crear los directorios public y views. 
    Dentro del directorio public crear los directorios img y css

3) Poner en el directorio views el archivo html entregado y en el directorio img la imagen entregada

4) En app.js hacer que “levante” express en el puerto 3030

5) Lograr reproducir el archivo html con express

### Paso 2 (4.2)

1) Crear la estructura de un proyecto express y levantar un servidor

2) Copiar las imágenes que recibiste en su carpeta del proyecto “img”

3) Crear un archivo home.html con la estructura html necesaria. 
	El mismo deberá tener las secciones header, main y footer.

El header deberá tener:

<ol>
<li>1. Logo </li>
<li> 2. Lugar para poner la barra de búsqueda </li>
<li> 3. Comprá en cuotas y sin tarjeta de crédito </li>
<li> 4. Barra de navegación que posea las siguientes opciones (en el orden que decidas):
    <ul>
        <li>Ofertas</li>
        <li>Tiendas Oficiales</li>
        <li>Vender</li>
        <li>Ayuda</li>
        <li>Creá tu cuenta</li>
        <li>Ingresá</li>
        <li>Mis compras</li>
    </ul>
</li>
</ol>

##### El main deberá tener dos secciones con información de productos:

<table>
<tr>
<td>
Basado en tu última visita

Imagen de producto
Precio producto
Porcenta de descuento (si tiene)
Nombre de producto
</td>
<td>
Sección de Ofertas

Imagen de producto
Precio de producto
Porcentaje de descuento (si tiene)
Nombre de producto
</td>
</tr>

<tr>
<td>
Ejemplos:

imagen de MacBook
$230.000
20% off
MacBook Pro 2019

imagen del Samsung Galaxy
$70.500
10% off
Samsung Galaxy S10
</td>
<td>
Ejemplos:

imagen de MacBook
$230.000
20% off
MacBook Pro 2019

imagen del Samsung Galaxy
$70.500
10% off
Samsung Galaxy S10
</td>
</tr>
</table>


#### El footer deberá tener las siguientes secciones:

<table>
<tr>
<td>
Pagá con tarjeta o efectivo

Con Mercado Liebre Cash, tenés cuotas sin interés con tarjeta o efectivo en puntos de pago. ¡Y siempre es seguro!
</td>
<td>
Envío gratis desde $ 2.500

Solo por estar registrad@ en Mercado Liebre tenés envíos gratis en miles de productos. Es un beneficio de Mercado Puntos.
</td>
<td>
Seguridad, de principio a fin

¿No te gusta? ¡Devolvelo! En Mercado Liebre, no hay nada que no puedas hacer, porque estás siempre protegid@.
</td>
<td>
Copyright © 1999-2020 MercadoLiebre S.R.L.
</td>
</tr>
</table>

### Paso 3 (4.3)
Modificar el header, de nuestro HTML, en cuanto a elementos y estética, es decir modificar en HTML y CSS. Para esto tendremos que trabajar cada elemento que contenga el header (navbar, login bar, search bar) para que quede similar a la muestra de ejemplo.

#### Utilizar estos estilos:

<table>
<tr>
<td>
Paleta de colores

    Amarillo: #EAC926; 
    Azul: #03264C; 
    Celeste: #1259c3; 
    Gris oscuro: #666; 
    Gris claro: #ebebeb; 
    Verde: #39b54a; 
</td>
<td>
Tamaños Tipográficos 

    Cuerpos de texto: 12px 
    Titulares (Visita/Ofertas): 24px 
    Precios: 18px 
    Descuentos: 16px
    Descripciones: 16px
</td>

</tr>

<tr>
<td>
Tipografías 

Familia: 'Roboto’

Para saber como cargarla:
https://drive.google.com/file/d/1c1MqhN6a77eVXoQ7hJpzBoG1OPTqA-Ad/view 
</td>
<td>
Iconos

Fontawesome

https://fontawesome.com/icons?d=gallery&m=free 

</td>
</tr>
</table>

Modificar el pie de pagina (footer) de nuestro sitio web. 
Trabajar cada elemento del mismo para mejorarlo en cuanto a estética.
Tener en consideración los estilos anteriormente brindados.

Dentro del mismo deben cumplirse las siguientes consignas:

El contenido de todos los artículos debe estar centrado

Los iconos deben tener un tamaño de 2em y un margen inferior de 10px (este margen genera una separación de 10 pixeles)


### Paso 4 (4.4)

1) Centrar la sección main
2) La sección main debe ocupar un 90% de la pantalla
3) El logo de envio, el precio, el porcentaje de descuento y la descripción del articulo deben estar dentro de una “caja” general por cada articulo
4) La caja general realizada debe tener borde superior de 1 pixel, línea solida y color #ebebeb
5) La caja general realizada debe tener separado el contenido de sus bordes en 15 pixeles en cada uno de sus lados

#### Implementar los cortes:

Navegación en tablets (ancho mínimo 361 px)
Navegación en desktop (ancho mínimo 769 px)

En el caso de mobile la descripción no se vera

Para los dipositivos tablets o superiores agregar box-shadow. De la forma:

box-shadow : 0px 0px 10px rgb ( 100 , 100 , 100 );

Para el header, en la versión mobile ocultar el site y login navbar. Y en las otras versiones mostrarlos pero ocultar la imagen del menu hamburguesa.