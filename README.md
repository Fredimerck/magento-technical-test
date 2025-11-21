# Prueba técnica Magento – Interrapidísimo

## Descripción
Este repositorio contiene la solución de la prueba técnica de Magento 2. Incluye:  
1. **Módulo Vendor_HelloWorld**  
   - Controlador frontend en `/helloworld/index/index` que muestra el mensaje: "Hola Mundo desde mi módulo".  
   - Sobrescritura del bloque `Magento\Catalog\Block\Product\View\Description` para agregar un texto adicional en la descripción del producto: "Descripción modificada por Vendor_HelloWorld".  

2. **Tema CustomTheme**  
   - Basado en Luma (`Magento/luma`) con logo personalizado.  
   - Personalización del título de producto en la página de detalle para que se muestre en color rojo.

## Estructura del repositorio
app/
├── code/Vendor/HelloWorld/ # Módulo completo
└── design/frontend/Vendor/customtheme/ # Tema personalizado


## Instalación / Uso
1. Copiar los archivos a la instalación de Magento 2 en `app/code` y `app/design/frontend`.  
2. Ejecutar en la terminal:
```bash
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy -f
php bin/magento cache:flush

Activar el tema en Stores > Configuration > Design > Configuration, asignando Vendor/customtheme al Store View deseado.

Probar el módulo accediendo a /helloworld/index/index y la página de detalle de cualquier producto para ver las modificaciones.

Nota

Todos los cambios están hechos siguiendo buenas prácticas de Magento 2 y arquitectura modular.

La  personalización del tema respeta la herencia de Luma y permite mantener futuras actualizaciones sin conflictos
