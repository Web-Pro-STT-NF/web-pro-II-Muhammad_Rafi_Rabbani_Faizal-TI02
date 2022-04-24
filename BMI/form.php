
<?php
            error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form BMI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h3 class="text-center p-2">Perhitungan BMI</h3>
        <form action="" method="POST">
            <div class=" form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input"
                            value="L">
                        <label for="jenis_kelamin_0" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input"
                            value="P">
                        <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Periksa</label>
                <div class="col-8">
                    <input id="tgl_periksa" name="tgl_periksa" type="date" class="form-control">
                </div>
            </div>
            
            
            <div class="form-group row">
                <label for="bb" class="col-4 col-form-label">Berat Badan</label>
                <div class="col-8">
                    <input id="bb" name="bb" placeholder="Masukkan Berat Badan" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tb" class="col-4 col-form-label">Tinggi Badan</label>
                <div class="col-8">
                    <input id="tb" name="tb" placeholder="Masukkan Tinggi Badan" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" placeholder="Masukkan Email" type="email" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                <div class="col-8">
                    <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan Tempat Lahir" type="text"
                        class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

        <?php
            require_once "class_pasien.php";
            require_once 'class_bmipasien.php';

            $nama_pasien = $_POST['nama'];
            $tmp_lahir = $_POST['tmp_lahir'];
            $tgl_periksa = $_POST['tgl_periksa'];
            $email = $_POST['email'];
            $jk = $_POST['jenis_kelamin'];
            $bb = $_POST['bb'];
            $tb = $_POST['tb'];
            $hasilbmi = new bmiPasien($nama_pasien, $tmp_lahir, $tgl_periksa, $email, $jk, $bb, $tb, null); 
            $ket = $hasilbmi -> nilai();
        ?>

        <h3 class="text-center p-2">Hasil BMI</h3>
    </div>

    <table class="table table-success table-striped mt-4">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal Periksa</th>
                <th scope="col">Kode Pasien</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Gender</th>
                <th scope="col">Berat (kg)</th>
                <th scope="col">Tinggi (cm)</th>
                <th scope="col">Nilai BMI</th>
                <th scope="col">Status</th>
                </tr>
            </thead>


            <tbody>
                
            <?php
                $pasien1 = new bmiPasien('Ahma', 'bandung', '2022-01-10', '1.com', 'L', 59.8, 159, 'P001');
                $pasien2 = new bmiPasien('Rina', 'jakarta', '2022-01-10', '2.com', 'P', 55.3, 165, 'P002');
                $pasien3 = new bmiPasien('Luthfi', 'bojong', '2022-01-11', '3.com', 'L', 45.2, 171, 'P003');

            
            
                // panggil attribut dari class Pasien
                $dataPasien = [$pasien1, $pasien2, $pasien3];
                $nomor = 1;
                $kode = 1;
                foreach ($dataPasien as $pasien) {
                echo '<tr><td>' . $nomor . '</td>';
                echo '<td>' . $pasien->tglperiksa . '</td>';
                echo '<td>P00' . $kode . '</td>';
                echo '<td>' . $pasien->namapasien . '</td>';
                echo '<td>' . $pasien->jk . '</td>';
                echo '<td>' . $pasien->bb . '</td>';
                echo '<td>' . $pasien->tb . '</td>';
                echo '<td>' . $pasien->nilai() . '</td>';
                echo '<td>' . $pasien->status() . '</td>';
                $nomor++;
                $kode++;
                }

                echo '<tr><td>' . $nomor . '</td>';
                echo '<td>' . $tgl_periksa . '</td>';
                echo '<td>A12' . $kode . '</td>';
                echo '<td>' . $nama_pasien . '</td>';
                echo '<td>' . $jk . '</td>';
                echo '<td>' . $bb . '</td>';
                echo '<td>' . $tb . '</td>';
                echo '<td>' . $hasilbmi->nilai() . '</td>';
                echo '<td>' . $hasilbmi->status($ket) . '</td>'; 
            ?>
            </tbody>
        </table>
    
    
</body>
</html>