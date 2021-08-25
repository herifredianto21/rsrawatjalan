<?php
/*
*
* @author M.Fadli Prathama (09081003031)
* email : m.fadliprathama@gmail.com
*
*/

/* setting zona waktu */
date_default_timezone_set('Asia/Jakarta');
$this->fpdf->FPDF("P","cm","A4");

// kita set marginnya dimulai dari kiri, atas, kanan. jika tidak diset, defaultnya 1 cm
$this->fpdf->SetMargins(1,1,1);
/* AliasNbPages() merupakan fungsi untuk menampilkan total halaman
di footer, nanti kita akan membuat page number dengan format : number page / total page
*/
$this->fpdf->AliasNbPages();

// AddPage merupakan fungsi untuk membuat halaman baru
$this->fpdf->AddPage();

// Setting Font : String Family, String Style, Font size
$this->fpdf->SetFont('Times','B',20);

/* Kita akan membuat header dari halaman pdf yang kita buat
————– Header Halaman dimulai dari baris ini —————————–
*/
$this->fpdf->Cell(0,0.6,'RS Rawat Jalan',0,0,'C');

// fungsi Ln untuk membuat baris baru
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Ln();
$this->fpdf->Cell(0,0.6,' ',0,0,'C');
$this->fpdf->Ln();

$this->fpdf->Cell(0,0.6,' ',0,0,'C');
$this->fpdf->Ln();
/* Setting ulang Font : String Family, String Style, Font size
kenapa disetting ulang ???
jika tidak disetting ulang, ukuran font akan mengikuti settingan sebelumnya.
tetapi karena kita menginginkan settingan untuk penulisan alamatnya berbeda,
maka kita harus mensetting ulang Font nya.
jika diatas settingannya : helvetica, ‘B’, ’12’
khusus untuk penulisan alamat, kita setting : helvetica, ”, 10
yang artinya string stylenya normal / tidak Bold dan ukurannya 10
*/

/* Fungsi Line untuk membuat garis */
$this->fpdf->Line(1,3,20,3);
$this->fpdf->Line(1,3.05,20,3.05);

/* ————– Header Halaman selesai ————————————————*/

$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(0,1,'Laporan kunjungan Pasien',0,0,'C');
/* setting header table */
$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','B',11);
$this->fpdf->Cell(5.1 , 1, '' , 0, 'LR', 'L');
$this->fpdf->Cell(0.6 , 1, 'No' , 1, 'LR', 'L');
$this->fpdf->Cell(4 , 1, ' Nama Pasien' , 1, 'LR', 'L');
$this->fpdf->Cell(4 , 1, ' Tanggal Kunjungan' , 1, 'LR', 'L');

/* generate hasil query disini */

$a=0;
foreach($pendaftaran as $data)
{
$this->fpdf->Ln();
$this->fpdf->SetFont('Times',"",11);
$this->fpdf->Cell(5.1 , 0.7,'' , 0, 'LR', 'L');
$this->fpdf->Cell(0.6 , 0.7, ++$a , 1, 'LR', 'L');
$this->fpdf->Cell(4 , 0.7, $data->nama_pasien , 1, 'LR', 'L');
$this->fpdf->Cell(4 , 0.7, $data->waktu , 1, 'LR', 'L');

} 

/* setting posisi footer 3 cm dari bawah */

$this->fpdf->SetY(-3);

/* setting font untuk footer */
$this->fpdf->SetFont('Times',"",10);

/* setting cell untuk waktu pencetakan */
$this->fpdf->Cell(9.5, 0.5, 'Printed on : '.date('d/m/Y H:i').' | Created by : Heri Fredianto',0,'LR','L');

/* setting cell untuk page number */
$this->fpdf->Cell(9.5, 0.5, 'Page '.$this->fpdf->PageNo().'/{nb}',0,0,'R');

/* generate pdf jika semua konstruktor, data yang akan ditampilkan, dll sudah selesai */
$this->fpdf->Output("laporan_kunjungan_pasien.pdf","I");
?>