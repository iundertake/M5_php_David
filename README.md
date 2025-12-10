# M5 PHP David - Generador de PDF con Datos Personales

Este proyecto genera un PDF con datos personales, incluyendo el número de control y la firma en la misma línea.

## Requisitos

- PHP 7.0 o superior
- Biblioteca FPDF

## Instalación

1. Descargar la biblioteca FPDF:
```bash
curl -L https://raw.githubusercontent.com/Setasign/FPDF/master/fpdf.php -o fpdf.php
```

2. Crear el directorio de fuentes y descargar las fuentes necesarias:
```bash
mkdir -p font
cd font
curl -L https://raw.githubusercontent.com/Setasign/FPDF/master/font/helvetica.php -o helvetica.php
curl -L https://raw.githubusercontent.com/Setasign/FPDF/master/font/helveticab.php -o helveticab.php
cd ..
```

## Uso

Para generar el PDF, ejecuta:
```bash
php mis_datos.php
```

Esto abrirá el PDF en el navegador. Si deseas guardarlo en un archivo, modifica la última línea de `mis_datos.php`:
```php
$pdf->Output('F', 'mis_datos.pdf'); // Guarda en archivo
```

## Características

- Muestra datos personales (nombre, correo, cargo, domicilio)
- **El número de control y la firma están en la misma línea** (requisito principal)
- Formato profesional en PDF

## Autor

David Ceron Meneses
