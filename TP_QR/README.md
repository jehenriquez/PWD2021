# Utilización de códigos QR en PHP

Se hace uso de la librería PHPQRCode

[Página web oficial](http://phpqrcode.sourceforge.net/)

## Instalación de la libreria
[Descarga del .zip](http://sourceforge.net/apps/mediawiki/phpqrcode/index.php?title=Main_Page)

Luego, se incluyen los archivos dentro de la carpeta `Libs`.

## Uso de la librería

La librería nos permite generar códigos QR en diferentes formatos. A continuación, se detallan los principales.
### Generar PNG
Se requiere de un string a codificar de manera obligatoria. 

`png ($texto, $ruta_archivo=false, $nivel_error=QR_ECLEVEL_L, $tamanio=3, $margen=4)`

#### Niveles de correción de error
* QR_ECLEVEL_L (~7%)
* QR_ECLEVEL_M (15%)
*	QR_ECLEVEL_Q (~25%)
*	QR_ECLEVEL_H (~30%)
