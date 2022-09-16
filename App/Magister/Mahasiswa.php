<?php

namespace Magister;
class Mahasiswa {
    private $nama;
    private $nim;
    private $prodi;
    private $sarjana;

    const LEVEL = "Magister";

    public function __construct($nama, $nim, $prodi, $sarjana){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->sarjana = $sarjana;
    }

    public function getNim(){
        return $this->nim;
    }

    public function getNama(){
        return $this->nama;
    }

    public function getProdi(){
        return $this->prodi;
    }

    public function getSarjana(){
        return $this->sarjana;
    }
}