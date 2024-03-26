<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa OOP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h2 style="text-align: center;">Form Nilai Siswa</h2>
        <hr/>
<form method="POST" action="nilai.php">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" placeholder="Masukkan nim anda" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Pilih MK</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar-Dasar Pemrograman</option>
        <option value="WEB">Pemrograman web</option>
        <option value="BASDAT">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" placeholder="Masukkan Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" placeholder="Masukkan Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai Praktikum</label> 
    <div class="col-8">
      <input id="praktikum" name="praktikum" placeholder="Masukkan Nilai Praktikum" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" value="simpan" class="btn btn-primary">Submit</button>
    </div>
    </div>
  </div>
</form>
<?php
require_once 'class_nilai.php';
if($_POST){
    $ns = new Mahasiswa($_POST['nim'], $_POST['matkul'], $_POST['uts'], $_POST['uas'], $_POST['praktikum']);
    echo 'NIM : '.$ns->nim;
    echo '<br/>Mata Kuliah : '.$ns->matkul;
    echo '<br/>Nilai uts : '.$ns->uts;
    echo '<br/>Nilai uas : '.$ns->uas;
    echo '<br/>Nilai praktikum : '.$ns->praktikum;
    echo '<br/>Rata-Rata : '.$ns->hitung();
}

function getGrade($nilai) {
  if ($nilai >= 80) {
      return 'A';
  } elseif ($nilai >= 70) {
      return 'B';
  } elseif ($nilai >= 60) {
      return 'C';
  } else {
      return 'D';
  }
}
function getStatus($nilai) {
  return ($nilai >= 60) ? 'Lulus' : 'Tidak Lulus';
}

$nilai_akhir = ($ns->uts + $ns->uas + $ns->praktikum) / 3;
$grade = getGrade($nilai_akhir);
echo '<br/>Grade : ' . $grade;

    // Determine pass or fail
    $status = getStatus($nilai_akhir);
    echo '<br/>Status : ' . $status;
?>
</body>
</html>