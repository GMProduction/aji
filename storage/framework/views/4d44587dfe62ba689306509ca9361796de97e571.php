<?php $__env->startSection('content'); ?>

    <div class="main-content" id="panel">

        <!-- Header -->
        <div class="header pb-6 d-flex align-items-center"
             style="min-height: 100px; background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-success opacity-8"></span>
            <!-- Header container -->

        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">

                <div class="col-xl-12 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0 mb-2">Data Barang</h3>
                                </div>

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card ">

                                                <!-- Light table -->
                                                <div class="table-responsive">
                                                    <table class="table align-items-center table-flush">
                                                        <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col" class="sort" data-sort="name">#</th>
                                                            <th scope="col" class="sort" data-sort="completion">gambar
                                                            </th>
                                                            <th scope="col" class="sort" data-sort="budget">Nama
                                                                Produk
                                                            </th>
                                                            <th scope="col" class="sort" data-sort="completion">Qty
                                                            </th>


                                                        </tr>
                                                        </thead>
                                                        <tbody class="list">
                                                        <tr>

                                                            <td class="budget">
                                                                1
                                                            </td>

                                                            <td class="budget">
                                                                <img src="<?php echo e(asset('assets/img/brand/logo.jpg')); ?>" href="<?php echo e(asset('assets/img/brand/logo.jpg')); ?>"  style="height: 50px">
                                                            </td>

                                                            <td class="budget">
                                                                Kursi
                                                            </td>


                                                            <td class="budget">
                                                                12
                                                            </td>


                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="/user/pemohon/update" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="">
                                <h6 class="heading-small text-muted mb-1"></h6>
                                <div class="pl-lg-4">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="tanggalPinjam">Tanggal Pesan</label>
                                                <input type="text" id="tanggalPinjam" name="tanggalPinjam" readonly
                                                       class="form-control" value="">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="status">Status</label>
                                                <input type="text" id="status" name="status" readonly
                                                       class="form-control" value="">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="total">Total Harga</label>
                                                <input type="text" id="total" name="total" readonly
                                                       class="form-control" value="">
                                            </div>
                                        </div>


                                        <hr class="my-4"/>
                                        <!-- Description -->
                                        <div class="col-12 text-right">
                                            <a type="submit" href="https://wa.me/62897123341?text=Saya%20ingin%20dengan%20menanyakan%20pesanan" class="btn btn-lg btn-success">Contact Admin</a>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PROJECT\WEBSITE\cilikan\aji\resources\views/user/pesanan/detailpesanan.blade.php ENDPATH**/ ?>