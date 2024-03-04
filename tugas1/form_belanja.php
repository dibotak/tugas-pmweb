<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container d-flex justify-content-between mt-4">
        <div class="w-50">
            <h1>Belanja Online</h1>
            <form class="mt-4" method="POST" action="form_belanja.php">
                <div class="form-group row">
                    <label for="customer" class="col-4 col-form-label">Customer</label> 
                    <div class="col-8">
                    <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label> 
                    <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="product" id="product_0" type="radio" class="custom-control-input" value="TV"> 
                        <label for="product_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="product" id="product_1" type="radio" class="custom-control-input" value="Kulkas"> 
                        <label for="product_1" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="product" id="product_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                        <label for="product_2" class="custom-control-label">Mesin Cuci</label>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                    <div class="col-8">
                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div>
            <ul class="list-group">
                <li class="list-group-item active">Daftar Harga</li>
                <li class="list-group-item">TV: 4.200.000</li>
                <li class="list-group-item">Kulkas: 3.100.000</li>
                <li class="list-group-item">Mesin Cuci: 3.800.000</li>
                <li class="list-group-item active">Harga dapat berubah setiap saat</li>
            </ul>
        </div>
    </div>
    <?php
        $harga = array(
            'TV' => 4200000,
            'Kulkas' => 3100000,
            'Mesin Cuci' => 3800000
        );

        $customer = $_POST['customer'];
        $product = $_POST['product'];
        $jumlah = $_POST['jumlah'];
        $total = intval($jumlah) * $harga[$product];

        if ($total) {
            $temp_total = strval($total);
            $total = '';
            for ($i = 0; $i < strlen($temp_total); $i++) {
                $total .= $temp_total[$i];
                if ((strlen($temp_total) - $i) % 3 == 1 && $i != strlen($temp_total)-1) {
                    $total .= '.';
                }
            }
        }

        if ($customer && $product && $jumlah) {
            include('result.php');
        }
    ?>
</body>
</html>
