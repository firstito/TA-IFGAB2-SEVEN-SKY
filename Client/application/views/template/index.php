
                <!-- Begin Page Content -->
                <div class="container-fluid">

<!-- DataTales Example
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example  
                            <a href="<?php echo base_url('Home/tambah_data'); ?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                            // set nilai awal no
                                            $no = 1;
                                            foreach($tampil->pegawai as $result) {
                                        ?>
                                            <tr>
                                                <td><?= $no; ?></td>
                                                <td><?= $result->kd_pgw ?></td>
                                                <td><?= $result->nama_pgw ?></td>
                                                <td><?= $result->alamat_pgw ?></td>
                                                <td><?= $result->telepon_pgw ?></td>
                                                <td>
                                                    <a href="" class="badge badge-primary">Edit</a>
                                                    <a href="" class="badge badge-danger">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            
            <!-- End of Main Content -->