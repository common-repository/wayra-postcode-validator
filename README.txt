=== Wayra - Validar Código Postal Argentino ===
Contributors: wayradigital
Donate link: https://wayradigital.com
Tags: codigo postal argentino, woocommerce, postcode, argentino, argentina, codigo postal, validar
Requires at least: 5.0
Tested up to: 5.9
WC tested up to: 6.1.1
Requires PHP: 5.6
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugin para WooCommerce que valida el Código Postal Argentino (formatos válidos 0000, X0000, X0000XXX).

== Description ==

El plugin valida el código postal argentino siendo válidos los siguientes formatos:
* 0000  - Por ejemplo 7540
* X0000 - Por ejemplo B7540
* X0000XXX - Por ejemplo B7540AFE

La validación se realiza en el checkout de WooCommerce en el código postal de facturación y envío si el país elegido es Argentina.

El Código Postal Argentino (CPA) es un sistema que comprende una serie de códigos de ciudades utilizados para el servicio postal. 
Su implementación actual comenzó en el año 1998 1​ y es un complemento de los códigos postales utilizados hasta ese momento. 
Este código es utilizado indistintamente por cualquier compañía postal que opere en la Argentina y sigue conviviendo con el sistema anterior.

El CPA está compuesto por ocho caracteres:
* Una letra identificatoria de la provincia, según la norma ISO 3166-2:AR.
* Un número de 4 dígitos que identifica la localidad, ciudad o barrio.
* Una combinación de tres letras que identifican la cara de manzana.

Fuente: [Wikipedia](https://es.wikipedia.org/wiki/C%C3%B3digo_Postal_Argentino)

== screenshots ==

1. Si se elije Argentina como páis se verifica que el código postal cumpla con el formato requerido.

== Installation ==

= Desde el administrador de WordPress =
* plugins -> Agregar nuevo
* buscar el archivo 'wayra-postcode-validator'
* click en Instalar Ahora y luego Activar.

= usando FTP o similar =
* Descomprima el archivo "wayra-postcode-validator.zip" y 
* Suba la carpeta "wayra-postcode-validator" en "/wp-content/plugins/".
* Active el plugin desde en menú "Plugins" en WordPress.

== Upgrade Notice ==

= usando FTP o similar =
* Borre la carpeta wayra-postcode-validator.
* Descomprima el archivo wayra-postcode-validator.zip y 
* Suba la carpeta "wayra-postcode-validator" a "/wp-content/plugins/".
* Active el plugin desde en menú "Plugins" en WordPress.

= Desde el administrador de WordPress =
* Cuando una nueva versión es liberada - verá el link 'actualizar ahora' en wp-admin -> plugins
* haga click en 'actualizar ahora'
o
* desde WordPress 5.5, Si activo la actualización automática.  
El plugin se actualizará solo cuando haya una nueva verión.

== Contact and Support ==

Por cualquier inconveniente o sugerencias: 

* por favor cree una [nueva consulta](https://wordpress.org/support/plugin/wayra-postcode-validator/)  

* plugins@wayradigital.com  

== Give Support ==

Si te gustó el plugin y te es útil, dejanos [5 estrellas](https://wordpress.org/support/plugin/wayra-postcode-validator/reviews/#new-post)  

== Changelog ==
= 1.0.1 =
* Brand update.

= 1.0.0 =
* Versión inicial.