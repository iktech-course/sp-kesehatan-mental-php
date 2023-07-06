<?php

    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Beranda- sp kesehatan mental</title>
    
    <!-- Link -->
    <?php include('components/link.php')?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    
    <!-- Sidebar -->
    <?php include('components/sidebar.php')?>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
            
            <!-- Topbar -->
            <?php include('components/topbar.php')?>


                <!-- Begin Page Content -->
                <div class="container-fluid">


                <?php
                if(isset($_GET['page'])) {
                    if($_GET['page'] =='beranda') {
                        include('page/beranda.php');
                    }
                    else if($_GET['page'] =='gejala-list') {
                        include('page/gejala-list.php');
                    }
                    else if($_GET['page'] =='penyakit-list') {
                        include('page/penyakit-list.php');
                    }
                    else if($_GET['page'] =='rule-list') {
                        include('page/rule-list.php');
                    }
                    else if($_GET['page'] =='user-list') {
                        include('page/user-list.php');
                    }
                    else if($_GET['page'] =='gejala-add') {
                        include('page/gejala-add.php');
                    }
                    else if($_GET['page'] =='penyakit-add') {
                        include('page/penyakit-add.php');
                    }
                    else if($_GET['page'] =='rule-add') {
                        include('page/rule-add.php');
                    }
                    else if($_GET['page'] =='user-add') {
                        include('page/user-add.php');
                    }
                    else if($_GET['page'] =='gejala-edit') {
                        include('page/gejala-edit.php');
                    }
                    else if($_GET['page'] =='penyakit-edit') {
                        include('page/penyakit-edit.php');
                    }
                    else if($_GET['page'] =='rule-edit') {
                        include('page/rule-edit.php');
                    }
                    else if($_GET['page'] =='user-edit') {
                        include('page/user-edit.php');
                    }
                    else {
                        include('page/beranda.php');  
                    }
                }
                ?>
                
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('components/footer.php')?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php include('components/logout-modal.php')?>

 <!-- Script -->
 <?php include('components/script.php')?>


</body>

</html>