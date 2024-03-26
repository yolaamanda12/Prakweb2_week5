<?php
// class nilai
class Mahasiswa{
    //property
public $nim,$matkul,$uts,$uas,$praktikum;

//method
function __construct($nim,$matkul,$uts,$uas,$praktikum){
    //fungsi this -> memanggil property dari luar method
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->uts = $uts;
    $this->uas = $uas;
    $this->praktikum = $praktikum;
}
public function Hitung(){
    return ($this->uts + $this->uas + $this->praktikum) / 3;
}

}