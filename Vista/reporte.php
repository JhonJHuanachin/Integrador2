<?php
require('../LIBRERIA/fpdf.php');

class PDF extends FPDF
{
    function Header()
    {     
      
        $this->SetFont('Arial', 'B', 18);
        $this->Cell(0, 10, 'EMPRESA TEC S.A.C', 1, 1, 'C', false);
        
        $this->SetFont('Arial', '', 10);
        $this->Cell(0, 6, 'Av.Central', 0, 1, 'C');
        $this->Cell(0, 6, 'Administrador', 0, 1, 'C');
        $this->Cell(0, 6, 'usuario_ejemplo@gmail.com', 0, 1, 'C');

        $this->Ln(10);

        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 10, 'REPORTE DE INCIDENTES', 0, 1, 'C');

        $this->Ln(5);

        $this->SetFont('Arial', 'B', 10);
        $this->SetFillColor(255, 204, 153);
        $this->Cell(30, 10, 'N', 1, 0, 'C', true);
        $this->Cell(40, 10, 'CATEGORIA', 1, 0, 'C', true);
        $this->Cell(40, 10, 'PRIORIDAD', 1, 0, 'C', true);
        $this->Cell(30, 10, 'ESTADO', 1, 0, 'C', true);
        $this->Cell(30, 10, 'USUARIO', 1, 1, 'C', true);
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo(), 0, 0, 'C');

        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        
        $timezone = new DateTimeZone('America/Lima'); 
        $date = new DateTime('now', $timezone);
        $currentDateTime = $date->format('d/m/Y H:i:s');
        $this->Cell(0, 10, ''. $currentDateTime, 0, 0, 'R');
    }
}

require_once '../Modelo/conexion.php';
$query = "SELECT * FROM u_incidentes";
$resultado = mysqli_query($conexion, $query);
if (!$resultado) {
    die('Error al ejecutar la consulta: ' . mysqli_error($conexion));
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);

while ($row = mysqli_fetch_assoc($resultado)) {
    $pdf->Cell(30, 10, $row['id_incidente'], 1, 0, 'C');
    $pdf->Cell(40, 10, $row['categoria'], 1, 0, 'C');
    $pdf->Cell(40, 10, $row['prioridad'], 1, 0, 'C');
    $pdf->Cell(30, 10, $row['estado'], 1, 0, 'C');
    $pdf->Cell(30, 10, $row['id_usuario'], 1, 1, 'C');
}

$pdf->Output();
