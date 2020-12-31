<div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="dashboard">E - Surat</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Selamat Datang, <?php echo base64_decode($_SESSION['username']); ?> <img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"> </a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo base64_decode($_SESSION['username']); ?></h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#profile"><i class="fas fa-user mr-2"></i>Account</a>
                                <!-- <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a> -->
                                <a class="dropdown-item" href="logout"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
         <div class="modal fade" id="profile" role="dialog">
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                            <h4>Ubah Kata Sandi</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title"> close</h4>
                        </div>
                        <div class="modal-body">
                            <form action="../act/act-update-sandi" method="POST" enctype="multipart/form-data"> 
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <!-- <label for="validationCustomUsername">Username</label> -->
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span style="width: 150px" class="input-group-text" id="inputGroupPrepend">Kata Sandi</span>
                                </div>
                                <input type="password" name="kata_sandi1" class="form-control" id="validationCustomUsername" placeholder="Kata Sandi" aria-describedby="inputGroupPrepend" required="">
                            </div>
                        </div>
                        <br>    
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <!-- <label for="validationCustomUsername">Password</label> -->
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span style="width: 150px" class="input-group-text" id="inputGroupPrepend">Konfirmasi Kata Sandi</span>
                                </div>
                                <input type="password" name="kata_sandi2" class="form-control" id="validationCustomUsername" placeholder="Konfirmasi Kata Sandi" aria-describedby="inputGroupPrepend" required="">
                            </div>
                        </div>  
                        <div class="modal-footer">
                          <button type="submit" name="upload" class="btn btn-primary">Simpan</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                            </form>
                      
                    </div>
                  </div>
                  
                </div>