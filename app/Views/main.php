<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DOST 10 ICT Service Request System</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url('assets/images/logo/favicon.png'); ?>">

    <!-- page css -->
    <link href="<?=base_url('assets/vendors/datatables/dataTables.bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Core css -->
    <link href="<?=base_url('assets/css/app.min.css'); ?>" rel="stylesheet">
    <script>
        var BASE_URL = '<?=base_url('');?>';
    </script>

    <!-- Core Vendors JS -->
    <script src="<?=base_url('assets/js/vendors.min.js'); ?>"></script>
</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <div class="header">
                <div class="logo logo-dark">
                    <a href="index.html">
                        <img src="<?=base_url('assets/images/logo/logo.png'); ?>" alt="Logo">
                        <img class="logo-fold" src="<?=base_url('assets/images/logo/logo-fold.png'); ?>" alt="Logo">
                    </a>
                </div>
                <div class="logo logo-white">
                    <a href="index.html">
                        <img src="<?=base_url('assets/images/logo/logo-white.png'); ?>" alt="Logo">
                        <img class="logo-fold" src="<?=base_url('assets/images/logo/logo-fold-white.png'); ?>" alt="Logo">
                    </a>
                </div>
                <div class="nav-wrap">
                    <ul class="nav-left">
                        <li class="desktop-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li class="mobile-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="dropdown dropdown-animated scale-left">
                            <a href="javascript:void(0);" data-toggle="dropdown">
                                <i class="anticon anticon-bell notification-badge"></i>
                            </a>
                            <div class="dropdown-menu pop-notification">
                                <div class="p-v-15 p-h-25 border-bottom d-flex justify-content-between align-items-center">
                                    <p class="text-dark font-weight-semibold m-b-0">
                                        <i class="anticon anticon-bell"></i>
                                        <span class="m-l-10">Notification</span>
                                    </p>
                                    <a class="btn-sm btn-default btn" href="javascript:void(0);">
                                        <small>View All</small>
                                    </a>
                                </div>
                                <div class="relative">
                                    <div class="overflow-y-auto relative scrollable" style="max-height: 300px">
                                        <a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">
                                            <div class="d-flex">
                                                <div class="avatar avatar-blue avatar-icon">
                                                    <i class="anticon anticon-mail"></i>
                                                </div>
                                                <div class="m-l-15">
                                                    <p class="m-b-0 text-dark">You received a new message</p>
                                                    <p class="m-b-0"><small>8 min ago</small></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-animated scale-left">
                            <div class="pointer" data-toggle="dropdown">
                                <div class="avatar avatar-image  m-h-10 m-r-15">
                                    <img src="<?=base_url('assets/images/others/thumb-3.jpg'); ?>"  alt="">
                                </div>
                            </div>
                            <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                                <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                    <div class="d-flex m-r-50">
                                        <div class="m-l-10">
                                            <p class="m-b-0 text-dark font-weight-semibold">
                                                <?php

                                                    $name = session()->firstname." ";
                                                    $middlename = session()->middlename;
                                                    $suffix = session()->suffix;

                                                    if ($middlename) {
                                                        $name .= substr($middlename, 0, 1)." ";
                                                    }
                                                    $name.= session()->lastname;
                                                    if ($suffix) {
                                                        $name .= " ".$suffix;
                                                    }
                                                    echo $name;
                                                ?>
                                            </p>
                                            <p class="m-b-0 opacity-07">UI/UX Desinger</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                            <span class="m-l-10">Edit Profile</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="<?=base_url('credentials/logout')?>" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                            <span class="m-l-10">Logout</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>    
            <!-- Header END -->

            <?= $this->include('sidebar') ?>

            <!-- Page Container START -->
            <div class="page-container">

                <?= $this->renderSection('content') ?>

                <!-- Footer START -->
                <footer class="footer">
                    <div class="footer-content">
                        <p class="m-b-0">Copyright © 2019 Theme_Nate. All rights reserved.</p>
                        <span>
                            <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                            <a href="" class="text-gray">Privacy &amp; Policy</a>
                        </span>
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->
        </div>
       
    </div>

    


    <!-- page js -->
    <script src="<?=base_url('assets/vendors/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?=base_url('assets/vendors/datatables/dataTables.bootstrap.min.js'); ?>"></script>
    <script src="<?=base_url('assets/js/pages/e-commerce-order-list.js'); ?>"></script>
    <script src="<?=base_url('assets/vendors/jquery-validation/jquery.validate.min.js'); ?>"></script>
    <script src="<?=base_url('assets/vendors/quill/quill.min.js'); ?>"></script>
    <!-- Core JS -->
    <script src="<?=base_url('assets/js/app.min.js'); ?>"></script>
</body>

</html>