<div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard">Dasboard</a>
                                        </li>

                                        <?php if ($_SESSION['tingkat'] == 'MQ==') {
                                            echo '<li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">Data User</a>
                                            <div id="submenu-1-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="list-user">List user</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="modal" data-target="#myModal" href="#">Tambah user</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3-4-5" aria-controls="submenu-1-2">Data Surat</a>
                                            <div id="submenu-3-4-5" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="surat-masuk">Surat masuk</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="surat-keluar">Surat keluar</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="jenis-surat">Jenis keluar</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6-7" aria-controls="submenu-1-2">Laporan Surat</a>
                                            <div id="submenu-6-7" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="laporan-surat-masuk">Laporan surat masuk</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="laporan-surat-keluar">Laporan surat keluar</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="logout">Logout</a>
                                        </li>';
                                        } ?>
                                    </ul>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"> Close</h4>
                </div>
                <div class="modal-body">
                    <form action="../act/act-add-user" method="POST">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustomUsername">Tingkat</label>
                            <div class="input-group">
                                <select name="tingkat" class="form-control">
                                    <option selected="" disabled="">-- Pilih Role --</option>
                                    <option value="1">Admin</option>
                                    <option value="2">User</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustomUsername">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                </div>
                                <input type="text" name="username" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustomUsername">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                </div>
                                <input type="password" name="password" class="form-control" id="validationCustomUsername" placeholder="Password" aria-describedby="inputGroupPrepend" required="">
                                <div class="invalid-feedback">
                                    Please choose a password.
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </form>
                </div>
              </div>
              
            </div>
          </div>