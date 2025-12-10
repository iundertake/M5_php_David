<?php
    // Verificar que la biblioteca FPDF esté disponible
    if (!file_exists('fpdf.php')) {
        die('Error: La biblioteca FPDF no está instalada. Por favor, consulte el README.md para instrucciones de instalación.');
    }
    require_once('fpdf.php');
    
    $nombres= "David";
    $apellidos = "Ceron Meneses";
    $correo = "ceron.david@gmail.com";
    $cargo = "Ingeniero en sistemas";
    $domicilio = "CDMX";
    $no_control = "12345678";

    $nombre_completo = $nombres . " " . $apellidos;
    
    // Crear instancia de PDF
    $pdf = new FPDF();
    $pdf->AddPage();
    
    // Título
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 10, 'Datos Personales', 0, 1, 'C');
    $pdf->Ln(10);
    
    // Contenido
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(50, 10, 'Nombre completo:', 0, 0);
    $pdf->Cell(0, 10, $nombre_completo, 0, 1);
    
    $pdf->Cell(50, 10, 'Correo:', 0, 0);
    $pdf->Cell(0, 10, $correo, 0, 1);
    
    $pdf->Cell(50, 10, 'Cargo:', 0, 0);
    $pdf->Cell(0, 10, $cargo, 0, 1);
    
    $pdf->Cell(50, 10, 'Domicilio:', 0, 0);
    $pdf->Cell(0, 10, $domicilio, 0, 1);
    
    $pdf->Ln(10);
    
    // No. de control y firma en la misma línea
    $pdf->Cell(60, 10, 'No. de control: ' . $no_control, 0, 0);
    $pdf->Cell(0, 10, 'Firma: _________________', 0, 1);
    
    // Salida del PDF con headers apropiados
    header('Content-Type: application/pdf');
    header('Content-Disposition: inline; filename="mis_datos.pdf"');
    $pdf->Output('I', 'mis_datos.pdf');
