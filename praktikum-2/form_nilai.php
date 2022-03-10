<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Nilai</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');

        *{
            font-family: 'Josefin Sans', sans-serif;
        }
        #tengah{
            text-align: center;
        }
    </style>
</head>
<body><br><br>
    <div class="container card">
        <div class="row bg-light pt-3 fs-6">
            <div class="col-12" id="tengah">Sistem Penilaian</div>
        </div>
        <div class="row fs-4">
            <div class="col-12" id="tengah">Form Nilai Siswa
                <hr>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-12">
                <form method="GET" action="form_nilai.php">
                    <div class="form-group row ">
                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                        <div class="col-8">
                            <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row pt-3">
                        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                        <div class="col-8">
                            <select id="matkul" name="matkul" class="custom-select">
                                <option value="Jaringan Komputer">Jaringan komputer</option>
                                <option value="Basis Data">Basis Data</option>
                                <option value="Pemrograman Web II">Pemrograman Web II</option>
                                <option value="PPKN">PPKN</option>
                                <option value="Bahasa inggris">Bahasa inggris</option>
                                <option value="Stastik & Probabilitas">Stastik & probabilitas</option>
                                <option value="Komunikasi Efektif">Komunikasi Efektif</option>
                                <option value="UX & UX">UI & UX</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                        <div class="col-8">
                            <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row pt-3">
                        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                        <div class="col-8">
                            <input id="nilai_uas" name="nilai_uas" placeholder="Nilai_UAS" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row pt-3">
                        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas / Praktikum</label> 
                        <div class="col-8">
                            <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row pt-3 pb-3">
                        <div class="offset-4 col-8">
                            <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><br>

    <?php
        $proses = isset($_GET['proses']) ? $_GET['proses'] : "";
        $nama_siswa = isset($_GET['nama']) ? $_GET['nama'] : "";
        $mata_kuliah = isset($_GET['matkul']) ? $_GET['matkul'] : "";
        $nilai_uts = isset($_GET['nilai_uts']) ? $_GET['nilai_uts'] : "";
        $nilai_uas = isset($_GET['nilai_uas']) ? $_GET['nilai_uas'] : "";
        $nilai_tugas = isset($_GET['nilai_tugas']) ? $_GET['nilai_tugas'] : "" ;

        echo "Proses $proses";
        echo "<br/>Nama : $nama_siswa";
        echo "<br/>Mata Kuliah : $mata_kuliah";
        echo "<br/>Nilai UTS : $nilai_uts";
        echo "<br/>Nilai UAS : $nilai_uas";
        echo "<br/>Nilai Tugas : $nilai_tugas";
    ?>

<div class="row bg-light" style="text-align: right;">
    <div class="col-12">Develop by @muhammadirfanhakim @2022</div>
</div>
 </div>
</body>
</html>