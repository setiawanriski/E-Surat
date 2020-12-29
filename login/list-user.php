<?php 
include '../act/secure-page.php';
include '../conf/config.php';
if (isset($_GET['id'])) {
    $id_edit = base64_decode($_GET['id']);
    $query = mysqli_query($conn, "SELECT * FROM `user_login` WHERE id_user='$id_edit'"); 
    $data = mysqli_fetch_assoc($query);
    // print_r($data);
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $tingkat = $_POST['tingkat'];
        if (isset($_POST['password'])) {
            $edit = mysqli_query($conn, "UPDATE `user_login` SET `username`='$username',`password`='$password',`tingkat`='$tingkat' WHERE id_user='$id_edit'"); 
            if ($edit) {
                echo '  <script type="text/javascript">
                             alert("Edit User Berhasil");
                        </script>
                        <meta http-equiv="refresh" content="1; url='.$base_url.'/login/list-user">';
            } else {
                 echo '  <script type="text/javascript">
                             alert("Edit User Gagal");
                        </script>
                        <meta http-equiv="refresh" content="1; url='.$base_url.'/login/list-user">';
            }
        } else {
            $edit = mysqli_query($conn, "UPDATE `user_login` SET `username`='$username',`tingkat`='$tingkat' WHERE id_user='$id_edit'"); 
            if ($edit) {
                echo '  <script type="text/javascript">
                             alert("Edit User Berhasil");
                        </script>
                        <meta http-equiv="refresh" content="1; url='.$base_url.'/login/list-user">';
            } else {
                 echo '  <script type="text/javascript">
                             alert("Edit User Gagal");
                        </script>
                        <meta http-equiv="refresh" content="1; url='.$base_url.'/login/list-user">';
            }
        }
    }
}
 ?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>List Users</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <?php include 'lib/navbar.php'; ?>

         <?php include 'lib/sidebar.php'; ?>
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <!-- Modal content-->
                <?php if (isset($_GET['id'])) {
                    if ($data['tingkat'] == 1) {
                        $tingkat = '<option disabled="">-- Pilih Role --</option>
                                    <option selected="" value="1">Admin</option>
                                    <option value="2">User</option>';
                    } else {
                        $tingkat = '<option disabled="">-- Pilih Role --</option>
                                    <option value="1">Admin</option>
                                    <option selected="" value="2">User</option>';
                    }
                    echo '<div class="modal-content">
                  <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                    <h4 class="modal-title">Edit User</h4>
                  </div>
                  <div class="modal-body">
                    <form action="list-user?id='.$_GET['id'].'" method="POST">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustomUsername">Tingkat</label>
                            <div class="input-group">
                                <select name="tingkat" class="form-control">
                                 '.$tingkat.'   
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustomUsername">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                </div>
                                <input type="text" name="username" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required="" value="'.$data['username'].'">
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
                  <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                    </form>
                </div>
                </div>';
                } ?>
                
                <br>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">List User</h2>
                            <p class="pageheader-text"></p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data User</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">List Users</li>
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
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">List User</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Tingkat</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                                <?php 
                                                    $sql = mysqli_query($conn,"SELECT * FROM `user_login` ");
                                                   while ($isi = mysqli_fetch_array($sql)) {
                                                        $no = 1;
                                                        $id = base64_encode($isi['id_user']);
                                                        if ($isi['tingkat'] == '1') {
                                                            $tingkat = 'Admin';
                                                        } else {
                                                            $tingkat = 'User';
                                                        }
                                                        echo '  <tr>
                                                                    <td>'.$no.'</td>
                                                                    <td>'.$isi['username'].'</td>
                                                                    <td>'.$tingkat.'</td>
                                                                    <td><a href="list-user?id='.$id.'" style="color:red">Edit</a> | <a href="delete-user?id='.$id.'" style="color:blue">Delete</a></td>
                                                                </tr>';
                                                        $no++;
                                                    } 
                                                 ?>
                                               
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Tingkat</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
                
                
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php 
                include 'lib/footer.php';
             ?>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="../assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    
</body>
 
</html>