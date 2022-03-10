<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>form Belanja</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');

        *{
        font-family: 'Josefin Sans', sans-serif;
        }
    </style>
</head>
<body><br><br><br><br><br>
    <div class="container card position-relative">
        <div class="row">
            <div class="col-8">
                <H4>Belanja Online</H4>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <form method="POST" action="form_belanja.php">
                <div class="form-group row pt-3">
                    <label for="costumer" class="col-4 col-form-label">Costumer</label> 
                    <div class="col-4">
                    <input id="costumer" name="costumer" placeholder="Nama Costumer" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row pt-3">
                    <label class="col-4">Pilih Produk</label> 
                    <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="Produk_0" type="radio" class="custom-control-input" value="TV"> 
                        <label for="Produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="Produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
                        <label for="Produk_1" class="custom-control-label">KULKAS</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="Produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
                        <label for="Produk_2" class="custom-control-label">MESIN CUCI</label>
                    </div>
                    </div>
                    </div>
                    <div class="form-group row pt-3">
                        <label for="Jumlah" class="col-4 col-form-label">Jumlah</label> 
                        <div class="col-4">
                        <input id="jumlah" name="jumlah" placeholder="Jumlah"  type="text" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row pt-3 pb-3">
                        <div class="offset-4 col-8">
                        <button name="proses" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-8">
                        <hr>
                        <?php 
                            if(isset($_POST['proses'])){
                                $costumer = $_POST['costumer'];
                                $produk = $_POST['produk'];
                                $jumlah = $_POST['jumlah'];

                                echo "<br>Nama Costumer : $costumer";
                                echo "<br>Produk : $produk";
                                echo "<br>Jumlah Beli : $jumlah";

                                $kulkas = 3100000 * intval($jumlah);
                                $mesincuci = 3800000 * intval($jumlah);
                                $TV1 = 4200000 * intval($jumlah);
                                
                                switch($produk){
                                    case 'KULKAS':
                                        echo "<br>" . "Total Belanja : " . number_format($kulkas,0,',','.');
                                        break;
                                    case 'TV':
                                        echo "<br>" . "Total Belanja : " . number_format($TV1,0,',','.');
                                        break;
                                    default:
                                        echo "<br>" . "Total Belanja : " . number_format($mesincuci,0,',','.');
                                        break;

                                }
                                
                            }
                        ?>
                    </div>
                </div>
                <table class="table w-25 position-absolute top-0 end-0">
                        <tr style="background-color:blue; color:white;">
                        <td scope="col">Daftar Harga</td>
                        </tr>
                        <tr>
                        <td scope="row">TV : 4.200.000</td>
                        </tr>
                        <tr>
                        <td scope="row">KULKAS : 3.100.000</td>
                        </tr>
                        <tr>
                        <td scope="row">MESIN CUCI : 3.800.000</td>
                        </tr>
                        <tr style="background-color:blue; color:white;">
                        <td scope="row">Harga Dapat Berubah Setiap Saat</td>
                        </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>