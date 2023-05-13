<?php
require('fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $categoria=$_POST['categoria'];
    // Arial bold 15
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(35,20,utf8_decode('Reporte de artículos de la categoría:                           '),0,0,'C');
    $this->Cell(40,20,utf8_decode($categoria),0,0,'C');
    // Salto de línea
    $this->image('img/robotica.png',20,10,20,15,'png');
    $this->image('img/robotica2.png',170,10,25,20,'png');
    $this->Ln(20);
    $this->Cell(15, 10, 'Id',1, 0, 'C', 0);
    $this->Cell(45, 10,utf8_decode('Nombre'),1, 0, 'C', 0);
    $this->Cell(25, 10, 'Marca',1, 0, 'C', 0);
    $this->Cell(30, 10, 'Modelo',1, 0, 'C', 0);
    $this->Cell(20, 10, 'Color',1, 0, 'C', 0);
    $this->Cell(22, 10, 'Cantidad',1, 0, 'C', 0);
    $this->Cell(30, 10, 'categoria',1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}
require '../../includes/_sesion/editar.php';
$categoria=$_POST['categoria'];

if ($categoria==$categoria){
$consulta="SELECT * FROM articulos WHERE categoria = '$categoria'";
$resultado = $conexion->query($consulta);
}
if ($categoria=='Todos'){
$consulta="SELECT * FROM articulos";
$resultado = $conexion->query($consulta);
}
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while($row= $resultado->fetch_assoc()){
    $pdf->Cell(15, 10, $row['id'],1, 0, 'C', 0);
    $pdf->Cell(45, 10, utf8_decode($row['nombre']),1, 0, 'C', 0);
    $pdf->Cell(25, 10, utf8_decode($row['marca']),1, 0, 'C', 0);
    $pdf->Cell(30, 10, utf8_decode($row['modelo']),1, 0, 'C', 0);
    $pdf->Cell(20, 10, $row['color'],1, 0, 'C', 0);
    $pdf->Cell(22, 10, $row['cantidad'],1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['categoria'],1, 1, 'C', 0);
    
}

$pdf->Output();
?>