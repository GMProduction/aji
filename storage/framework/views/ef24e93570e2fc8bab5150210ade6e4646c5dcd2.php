<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laporan Transaksi</title>
    <!-- Fonts -->

    <!-- Styles -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css" type="text/css">


</head>

<body>

<style>
    footer {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        height: 0;
    }
</style>

<br>
<div style="width:100%">
    <h4 class="text-center">Laporan Transaksi</h4>
    <p class="text-center text-black-50">Tanggal awal - Tanggal ahkir</p>
</div>
<br>
<br>

<table class="table table-striped">
    <tr>
        <th> #</th>
        <th> No Pesanan</th>
        <th> Tanggal Pesan</th>
        <th> Nama Pemesan</th>
        <th> Status</th>
        <th> Sub Total</th>
        <th> Diskon </th>
        <th> Total Harga </th>
        <th> Status</th>
    </tr>
    <?php $i=1; ?>










</table>
<div style="right:10px;width: 300px;display: inline-block;margin-top:70px">
    <p class="text-center mb-5">Pimpinan</p>
    <p class="text-center">( ........................... )</p>
</div>

<div style="left:10px;width: 300px; margin-left : 100px;display: inline-block">
    <p class="text-center mb-5">Admin</p>
    <p class="text-center">(

        )</p>
</div>


<footer class="footer">
    <?php $date = new DateTime("now", new DateTimeZone('Asia/Bangkok') ); ?>
    <p class="text-right small mb-0 mt-0 pt-0 pb-0"> di cetak oleh :

    </p>
    <p class="text-right small mb-0 mt-0 pt-0 pb-0"> tgl: <?php echo e($date->format('d F Y, H:i:s')); ?> </p>
</footer>

<!-- JS -->
<script src="js/app.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php /**PATH C:\PROJECT\WEBSITE\cilikan\aji\resources\views/admin/pesanan/cetak.blade.php ENDPATH**/ ?>