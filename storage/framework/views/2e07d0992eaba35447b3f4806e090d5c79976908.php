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
                <div class="col-xl-4 order-xl-2">
                    <div class="card card-profile">
                        <img src="../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        <img src="../assets/img/theme/team-4.jpg" class="rounded-circle">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body pt-5">

                            <div class="text-left">
                                <p class="mb-1">Nama</p>
                                <h6 class="h3 mb-4">

                                </h6>
                                <p class="mb-1">email</p>
                                <h6 class="h3 mb-4">

                                </h6>

                                <p class="mb-1">Phone</p>
                                <h6 class="h3 mb-4">

                                </h6>

                                <p class="mb-1">Alamat</p>
                                <h6 class="h3 mb-4">

                                </h6>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Edit profile </h3>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <form action="/user/pemohon/update" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="">
                                <h6 class="heading-small text-muted mb-4">Data User</h6>
                                <div class="pl-lg-4">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="namaMitra">Nama</label>
                                                <input type="text" id="namaMitra" name="namaMitra"
                                                       class="form-control" value="">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="email">Email</label>
                                                <input type="text" id="email" name="email"
                                                       class="form-control" value="">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="phone">Phone</label>
                                                <input type="text" id="phone" name="phone"
                                                       class="form-control" value="">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="alamat">Alamat</label>
                                                <input type="text" id="alamat" name="alamat"
                                                       class="form-control" value="">
                                            </div>
                                        </div>

                                        <hr class="my-4"/>
                                        <!-- Description -->
                                        <div class="col-12 text-right">
                                            <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
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

<?php echo $__env->make('user.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PROJECT\WEBSITE\cilikan\aji\resources\views/user/profil/profil.blade.php ENDPATH**/ ?>