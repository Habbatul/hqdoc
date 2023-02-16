<?php
include 'conn.php';
$id=$_GET['id'];
// memanggil library FPDF
require('print/fpdf.php');
//nanti new pdf aja di $pdf karena udah extends class fpdf biar dia nerapin footer sama header
class PDF extends FPDF
{
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-1.5);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,1,'Halaman '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// intance object dan memberikan pengaturan halaman PDF
$pdf = new PDF('P', 'cm', 'A4');
$pdf->AliasNbPages();
// membuat halaman baru
$pdf->AddPage();

$mahasiswa = mysqli_query($conn, "select * from keluhan where id='$id'");
while ($row = mysqli_fetch_array($mahasiswa)) {
//Ln() untuk ganti baris
$pdf->SetFont('times', 'B', 25);
$pdf->SetTextColor(255, 0, 0);
$pdf->Ln();
$pdf->MultiCell(0, 1, $row['judul'], 0, 'C');
$pdf->Ln(1.2);
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(0, 0, 0);
$pdf->Write(1, 'Nama : '.$row['nama_pengirim']);
$pdf->Ln(0.5);
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(0, 0, 0);
$pdf->Write(1, 'Konsultan : Dr. '.$row['nama_pembalas']);

$pdf->Ln(1.4);
$pdf->SetFont('Arial', 'B', 11);
$pdf->SetTextColor(255, 0, 0);
$pdf->MultiCell(0, 0.5, "Keluhan : ");
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetTextColor(0, 0, 0);
//parameter kedua adalah spasi antar baris, multicell untuk string yang bisa ganti baris
$pdf->MultiCell(0, 0.5, $row['deskripsi']);

$pdf->Ln(1);
$pdf->SetFont('Arial', 'B', 11);
$pdf->SetTextColor(255, 0, 0);
$pdf->MultiCell(0, 0.5, "Balasan : ");
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetTextColor(0, 0, 0);
//parameter kedua adalah spasi antar baris, multicell untuk string yang bisa ganti baris
$pdf->MultiCell(0, 0.5, $row['balasan']);
}
$pdf->Output();

?>