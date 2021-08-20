<?php
require('fpdf/fpdf.php');
include('config.php');
$id = $_GET['id'];

$pdf = new FPDF();
///var_dump(get_class_methods($pdf));

$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,10,'Fecha: '.date('d-m-Y').'',0,"R");
$pdf->Ln(14);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(100,10,'Perfil de Usuario',1,0);

$query="SELECT * FROM empleados WHERE nombreCompleto='$id'";
$result = mysqli_query($mysqli, $query);
$no=0;
while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(50,8,'No.',1,0);
	$pdf->Cell(50,8,$no,1,1);
	
	$pdf->Cell(50,8,'Nombre',1,0);
	$pdf->Cell(50,8,$row['nombreCompleto'],1,1);
	
	$pdf->Cell(50,8,'Fecha nacimiento',1,0);
	$pdf->Cell(50,8,$row['fechaNacimiento'],1,1);
	
	$pdf->Cell(50,8,'Correo',1,0);
	$pdf->Cell(50,8,$row['correo'],1,1);
	
	$pdf->Cell(50,8,'Telefono',1,0);
	$pdf->Cell(50,8,$row['telefono'],1,1);
	
	$pdf->Cell(50,8,'Genero',1,0);
	$pdf->Cell(50,8,$row['genero'],1,1);
	
	$pdf->Cell(50,8,'Celular',1,0);
	$pdf->Cell(50,8,$row['celular'],1,1);
}

$pdf->Output();
?>