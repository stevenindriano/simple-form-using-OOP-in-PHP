<?php

namespace Sarjana;
class Mahasiswa {
    private $nama;
    private $nim;
    private $prodi;

    const LEVEL = "Sarjana";

    public function __construct($nama, $nim, $prodi){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->prodi = $prodi;
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
}