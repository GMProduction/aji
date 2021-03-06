<?php $__env->startSection('content'); ?>


    <section class="container mt-5 mb-5">

        <div class="row">
            <div class="col-8">
                <div class="text-left mt-5">
                    <h2><i class="mr-3" data-feather="shopping-cart"></i>Data Barang</h2>
                </div>

                <div class="d-block bg-gradient-success mb-2" style="height: 3px; width: 300px; margin-top: 20px">

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
                                <td class="text-center"> pcs</td>
                                <td class="text-center"> Rp 100.000</td>
                                <td class="text-center"> Rp 300.000</td>

                            </tr>
                            
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <input type="hidden" name="id" value="">
                    <h6 class="heading-small text-muted mb-1"></h6>
                    <div class="pl-lg-4">
                        <div class="row">




                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label class="form-control-label" for="total">Total Harga</label>
                                    <input type="text" id="total" name="total" readonly
                                           class="form-control" value="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="text-left mt-5">
                    <h2><i class="mr-3" data-feather="csuccessit-card"></i>Upload Bukti Pembayaran</h2>
                </div>

                <div class="d-block bg-gradient-success mb-2" style="height: 3px; width: 300px; margin-top: 20px">

                </div>


                <div class="card">

                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <h6 class="heading-small text-muted mb-4">Data</h6>
                            <div class="pl-lg-4">
                                <div class="row">

                                    <div class="form-group col-lg-12">
                                        <label for="bank">Bank</label>
                                        <select class="form-control" id="bank" name="bank">
                                            <option value="bca">BCA</option>
                                            <option value="bri">BRI</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12">
                                        <a>Bukti Transfer</a>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gambar"
                                                   name="gambar" lang="en">
                                            <label class="custom-file-label" for="gambar">Select file</label>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <hr class="my-4"/>
                            <!-- Description -->
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="text-left mt-5">
                    <h2><i class="mr-3" data-feather="briefcase"></i>Daftar Bank</h2>
                    <div class="d-block bg-gradient-success mb-2" style="height: 3px; width: 300px; margin-top: 20px">

                    </div>

                    <div class="card text-center p-3 ">
                        <img class="ml-auto mr-auto" src="<?php echo e(asset('assets/img/bank/bca.png')); ?>" style="width: 150px;">
                        <h4 class="mb-1">No. rek: 7997971237</h4>
                        <h5>Holder Name: Rofiq</h5>
                    </div>

                    <div class="card text-center p-3 ">
                        <img class="ml-auto mr-auto" src="<?php echo e(asset('assets/img/bank/bri.png')); ?>" style="width: 150px;">
                        <h4 class="mb-1">No. rek: 1317997971237</h4>
                        <h5>Holder Name: Rofiq</h5>
                    </div>
                </div>

            </div>
        </div>


    </section>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PROJECT\WEBSITE\cilikan\aji\resources\views/payment.blade.php ENDPATH**/ ?>