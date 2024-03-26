<?php
class Kulkas {
    // Properti
    public $merk = "kosong";
    public $ukuran = "kosong";
    public $warna = "kosong";

    // Method
    private function getKulkas($merk, $ukuran, $warna) {
        echo "Merk kulkas ini adalah : " . $merk . "<br>";
        echo "Ukurannya adalah: " . $ukuran . "<br>";
        echo "Warnanya adalah: " . $warna . "<br>";
    }

    public function getDetail() {
        $this->getKulkas("Sharp", "138 cm", "Silver");
    }
}

// Objek Kulkas 1
$Kulkas1 = new Kulkas();
$Kulkas1->merk = "Sharp";
$Kulkas1->ukuran = "138 cm";
$Kulkas1->warna = "Silver";

echo "<br><br><hr>";

// Objek Kulkas 2
$Kulkas2 = new Kulkas();
$Kulkas2->getDetail();
echo "<br><br>";
?>
