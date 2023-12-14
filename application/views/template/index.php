<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800">Border box</h1> -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <!-- Paket 1 -->
                <div class="col-4 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h3 font-weight-bold text-info text-uppercase mb-1">Paket 1
                                    </div>
                                    <p>tes</p>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="text-xs mb-0 mr-3 font-weight-bold text-gray-800"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <!-- Utk Logo -->

                                </div>
                                <div class=" row">
                                    <div class="col-12 ">
                                        <a href="<?=base_url('admin/data_pesanan');?>" class="btn btn-outline-info float-center">
                                            Buat Pesanan <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Paket 1 -->

                <div class="col-4 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h3 font-weight-bold text-info text-uppercase mb-1">Paket 2 </div>
                                    <p><?=
								$this->ModelPaket->getPaket(['hrg_sewa'])->num_rows();
								?></p>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="text-xs mb-0 mr-3 font-weight-bold text-gray-800"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <!-- Utk Logo -->

                                </div>
                                <div class=" row">
                                    <div class="col-12 ">
                                        <a href="<?=base_url('admin/data_pesanan');?>" class="btn btn-outline-info float-center">
                                            Buat Pesanan <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php $this->load->view('template/footer'); ?>