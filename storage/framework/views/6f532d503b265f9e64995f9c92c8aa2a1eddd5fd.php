<?php $__env->startSection('content'); ?>


    <section class="container mt-5 mb-5">


        <div class="text-left mt-5">
            <h2><i class="mr-3" data-feather="shopping-cart"></i>Cart</h2>
            <div class="d-block bg-gradient-success mb-2" style="height: 3px; width: 300px; margin-top: 20px">
            </div>
        </div>



        <div class="card">

            <!-- Light table -->
            <div class="table-responsive">
                <table id="tabel" class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort text-center" data-sort="name">#</th>
                        <th scope="col" class="sort text-center" data-sort="completion">gambar</th>
                        <th scope="col" class="sort text-center" data-sort="budget">Nama Produk</th>
                        <th scope="col" class="sort text-center" data-sort="budget">Qty</th>
                        <th scope="col" class="sort text-center" data-sort="completion">Harga</th>
                        <th scope="col" class="sort text-center" data-sort="completion">Total</th>
                    </tr>
                    </thead>
                    <tbody class="list">
                    
                    <tr>
                        <td class="text-center">1</td>
                        <td class="text-center"><img src="<?php echo e(asset('assets/img/slider/slider1.jpg')); ?>"
                                                     style="height: 100px; width: 100px; object-fit: cover"></td>
                        <td class="text-center">Jesrey Persis Solo</td>
                        <td class="text-center"> 3</td>
                        <td class="text-center"> Rp 100.000</td>
                        <td class="text-center"> Rp 300.000</td>

                    </tr>
                    
                    </tbody>
                </table>
            </div>
        </div>

            <div class="col-12">
                <div class="text-left mt-5">
                    <h2><i class="mr-3" data-feather="twitch"></i>Total Harga & Pengiriman</h2>
                    <div class="d-block bg-gradient-success mb-2" style="height: 3px; width: 300px; margin-top: 20px">
                    </div>
                </div>



                <div class="col-lg-12">
                    <div class="card p-3">

















                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="harga">Total</label>
                                <input type="number" readonly id="harga" name="harga"
                                       class="form-control">
                            </div>
                        </div>









                        <div class="col-lg-2 mt-auto mb-auto ml-auto">
                            <a href="/admin/transaksi/cetak" class="btn btn-md btn-success">Check Out</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PROJECT\WEBSITE\cilikan\aji\resources\views/cart.blade.php ENDPATH**/ ?>