<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $harga = [
        'nasi_goreng' => 10000,
        'ayam_goreng' => 12000,
        'es_teh' => 2000,
        'kopi' => 3000
    ];
    
    $totalBelanja = 0;
    foreach ($harga as $key => $value) {
        $jumlah = isset($_POST[$key]) ? (int)$_POST[$key] : 0;
        $totalBelanja += $jumlah * $value;
    }
    
    $totalBayar = $totalBelanja;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Pemesanan Makanan</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h1>Form Pemesanan Makanan</h1>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nasi_goreng">Nasi Goreng (Rp. 10.000)</label>
                                <input type="number" class="form-control" name="nasi_goreng" id="nasi_goreng" value="0" min="0">
                            </div>
                            <div class="form-group">
                                <label for="ayam_goreng">Ayam Goreng (Rp. 12.000)</label>
                                <input type="number" class="form-control" name="ayam_goreng" id="ayam_goreng" value="0" min="0">
                            </div>
                            <div class="form-group">
                                <label for="es_teh">Es Teh (Rp. 2.000)</label>
                                <input type="number" class="form-control" name="es_teh" id="es_teh" value="0" min="0">
                            </div>
                            <div class="form-group">
                                <label for="kopi">Kopi (Rp. 3.000)</label>
                                <input type="number" class="form-control" name="kopi" id="kopi" value="0" min="0">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <?php if (isset($totalBelanja)) { ?>
                        <div class="mt-3">
                            <p>Total Belanja: Rp<?= number_format($totalBelanja, 0, ',', '.') ?></p>
                            <p><strong>Total Bayar: Rp<?= number_format($totalBayar, 0, ',', '.') ?></strong></p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
