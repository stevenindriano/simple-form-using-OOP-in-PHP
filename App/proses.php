<?php 
require_once "init.php";
use Magister\Mahasiswa as Magister;
use Sarjana\Mahasiswa as Sarjana;

switch($_POST['tombol']) {
    case "ts": $mhs = new Sarjana($_POST['nama'],
    $_POST['nim'], $_POST['prodi']); break;
    case "tm": $mhs = new Magister($_POST['nama'],
    $_POST['nim'], $_POST['prodi'], $_POST['gelar']);  break;
}

echo "Object Mahasiswa " . $mhs::LEVEL . " berhasil dibuat.<br />";
if($mhs::LEVEL == "Sarjana") {
    echo "NIM: " . $mhs->getNIM() . "<br />";
    echo "Nama: " . $mhs->getNama() . "<br />";
    echo "Prodi: " . $mhs->getProdi();
} else {
    echo "NIM: " . $mhs->getNim() . "<br />";
    echo "Nama: " . $mhs->getNama() . "<br />";
    echo "Prodi: " . $mhs->getProdi() . "<br />";
    echo "Gelar Sarjana: " . $mhs->getSarjana();
}