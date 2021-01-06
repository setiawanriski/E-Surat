<!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Laporan - Surat - Masuk</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Laporan - Surat - Masuk</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Laporan - Surat</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nomor Surat</th>
                                                <th>Judul Surat</th>
                                                <th>Perihal</th>
                                                <th>Jenis Surat</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $query = mysqli_query($conn,"SELECT * FROM `data_surat` WHERE jenis_surat='masuk' ORDER BY `data_surat`.`tgl_diterima` ASC" ) ;
                                                $no = 1;
                                                while ($data = mysqli_fetch_array($query)) {
                                                  

                                               ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $data['no_surat']; ?></td>
                                                <td><?php $nama = explode('($)', $data['file_surat']); echo $nama[1]; ?></td>
                                                <td><?php echo $data['perihal']; ?></td>
                                                <td><?php echo $data['jenis_surat']; ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#pop-up<?php echo md5($data['file_surat']);?>">View</button>
                                                    <a href="delete-surat?surat=<?php echo base64_encode($data['id_surat']);?>">
                                                    <button style="background-color: red" type="button" class="btn btn-info btn-lg">Delete</button></a>
                                                    <div class="modal fade" id="pop-up<?php echo md5($data['file_surat']);?>" role="dialog">
                                                      <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h4 class="modal-title">Isi Surat</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                          </div>
                                                          <div  class="modal-body">
                                                            <iframe style="height: 500px" src='../act/file/<?php echo $data["file_surat"];?>' width="100%"></iframe>
                                                          </div>
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php 
                                                $no++;
                                                } 
                                             ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nomor Surat</th>
                                                <th>Judul Surat</th>
                                                <th>Perihal</th>
                                                <th>Jenis Surat</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end data table  -->
                    <!-- ============================================================== -->
                </div>