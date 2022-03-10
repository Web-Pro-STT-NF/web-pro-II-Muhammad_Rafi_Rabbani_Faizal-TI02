<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Nilai Siswa</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');

        *{
            font-family: 'Josefin Sans', sans-serif;
        }
        #tengah{text-align: center;
        }
    </style>
</head>
<body>
    <div class="container card">
        <div class="row bg-light pt-3 fs-6" id="tengah">
            <div class="col-12">Sistem Penilaian</div>
        </div>
        <div class="row fs-4" id="tengah">
            <div class="col-12">Form Nilai Siswa
                <hr>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-12">
                <form method="POST" action="nilai_siswa.php">
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
        </div><hr>
    <?php
        if (isset($_POST['proses'])){
            $proses = $_POST['proses'];
            $nama_siswa = $_POST['nama'];
            $mata_kuliah = $_POST['matkul'];
            $nilai_uts = $_POST['nilai_uts'];
            $nilai_uas = $_POST['nilai_uas'];
            $nilai_tugas = $_POST['nilai_tugas'];

            echo "Proses $proses";
            echo "<br/>Nama : $nama_siswa";
            echo "<br/>Mata Kuliah : $mata_kuliah";
            echo "<br/>Nilai UTS : $nilai_uts";
            echo "<br/>Nilai UAS : $nilai_uas";
            echo "<br/>Nilai Tugas : $nilai_tugas";

            $hasil_uts = intval($nilai_uts) * 0.3;
            $hasil_uas = intval($nilai_uas) * 0.35;
            $hasil_tugas = intval($nilai_tugas) * 0.35;
            $nilai_akhir = $hasil_uts + $hasil_tugas + $hasil_uas;
            
            echo "<br> <p>Nilai Anda : $nilai_akhir</p>";
            if( $nilai_akhir > 55){
                echo "<h3>LULUS</h3>";
            }else{
                echo "<h3>TIDAK LULUS</h3>";
            }
        

            $nilai_A = $nilai_akhir >= 85;
            $nilai_B = $nilai_akhir >= 70;
            $nilai_C = $nilai_akhir >= 56;
            $nilai_D = $nilai_akhir >= 36;
            $nilai_E = $nilai_akhir >= 0;
            if($nilai_A){
                echo "Grade : A";
            }elseif($nilai_B){
                echo "Grade : B";
            }elseif($nilai_C){
                echo "Grade : C";
            }elseif($nilai_D){
                echo "Grade : D";
            }elseif($nilai_E){
                echo "Grade : E";
            }else{
                echo "Grade : I";
            }
            

            switch(true){
                case ($nilai_A):
                    echo "<br/>Predikat : Sangat Memuaskan";
                    break;
                case ($nilai_B):
                    echo "<br/>Predikat : Memuaskan";
                    break;
                case ($nilai_C):
                    echo "<br/>Predikat : Cukup";
                    break;
                case ($nilai_D):
                    echo "<br/>Predikat : Kurang";
                    break;
                case ($nilai_E):
                    echo "<br/>Predikat : Sangat Kurang";
                    break;
                default:
                    echo "<br/>Tidak Ada";
            }
        }
    ?>
        <div class="row bg-light">
            <div class="col-12" style="text-align: right;">Develop by @muhammdirfanhakim @2022</div>
        </div>
    </div>

</body>
</html>