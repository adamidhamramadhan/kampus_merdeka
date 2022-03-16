<?php

$namaPegawai = 'Adam Idham Ramadhan';
$agama = 'Islam';
$jabatan = 'Kabag';
$status = 'Belum';
$jumlahAnak = 0;

switch($jabatan) {
  case 'Manager':
    $gajiPokok = 20000000;
    break;
  case 'Asisten':
    $gajiPokok = 15000000;
    break;
  case 'Kabag':
    $gajiPokok = 10000000;
    break;
  case 'Staff':
    $gajiPokok = 4000000;
    break;
  default:
    $gajiPokok = 0;   
}

$tunjanganJabatan = 0.2 * $gajiPokok;

if ($status == 'Sudah' && $jumlahAnak > 0 && $jumlahAnak <= 2) {
  $tunjanganKeluarga = 0.05 * $gajiPokok;
} else if ($status == 'Sudah' && $jumlahAnak > 2 && $jumlahAnak <= 5) {
  $tunjanganKeluarga = 0.1 * $gajiPokok;
} else {
  $tunjanganKeluarga = 0;
}

$gajiKotor = $gajiPokok + $tunjanganJabatan + $tunjanganKeluarga;

$zakatPenghasilan = ($agama == 'Islam' && $gajiKotor >= 6000000) ? 0.025 * $gajiKotor : 0;

$gajiBersih = $gajiKotor - $zakatPenghasilan;

?>
