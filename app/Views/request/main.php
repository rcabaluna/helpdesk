<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DOST 10 | ICT Service Request</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url('assets/images/logo/favicon.png'); ?>">

    <!-- page css -->

    <!-- Core css -->
    <link href="<?=base_url('assets/css/app.min.css'); ?>" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="layout">

            <!-- Page Container START -->
            <div class="container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container">
                        <div class="text-center m-t-30 m-b-40">
                            <h2>Subscription plans</h2>
                            <p class="w-45 m-h-auto m-b-30">Climb leg rub face on everything give attitude nap all day for under the bed. Chase mice attack feet but rub face.</p>
                        </div>
<<<<<<< HEAD
                        <div class="row align-items-center" id="monthly-view">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between p-b-20 border-bottom">
                                            <div class="media align-items-center">
                                                <div class="m-l-15">
                                                    <h4>STEP 1: Requester Contact Information</h4>
                                                    <p>Please fill out the form below:</p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled m-v-30">
                                            <li class="m-b-20">
                                            <form id="frm-request">
=======
                        <div>
                            <h1 class="text-white m-b-20 font-weight-normal">DOST 10 ICT Services</h1>
                            <p class="text-white font-size-16 lh-2 w-80 opacity-08">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo non facilis voluptates illo deleniti? Laboriosam omnis beatae quasi cumque, maxime culpa repellat tenetur, distinctio ipsa voluptate tempora eius sit earum.</p>
                            <a href="<?=base_url('request');?>"><button class="btn btn-secondary btn-tone m-r-5 active">Create Request</button></a>
                            <a href="<?=base_url('request/track');?>"><button class="btn btn-info btn-tone m-r-5">Track Request</button></a>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-white">© <?=date('Y')?> <a href="https://region10.dost.gov.ph/">DOST 10</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 bg-white">
                    <div class="container h-100">
                        <div class="row no-gutters h-100 align-items-center">
                            <div class="col-md-8 col-lg-7 col-xl-10 mx-auto">
                                <div id="main-frm-container">
                                    <h2>STEP 1: Requester Contact Information</h2>
                                    <p class="m-b-30">Please fill out the form below:</p>
                                    <form id="frm-request">
>>>>>>> ba60916d7c33b7c651a38c5644c4e964a7cb2a71
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label for="txtfname">Firstname <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="txtfname" name="fname" >
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="txtmname">Middlename <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="txtmname" name="mname" >
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="txtlname">Lastname <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="txtlname" name="lname" >
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="selsuffix">Suffix</label>
                                                <select name="suffix" id="selsuffix" class="form-control">
                                                    <option></option>
                                                    <option value="Sr">Sr</option>
                                                    <option value="Jr">Jr</option>
                                                    <option value="II">II</option>
                                                    <option value="III">III</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="txtemail">Email <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" id="txtemail" name="email" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="txtmobileno">Mobile No <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" id="txtmobileno" name="mobileno" >
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="txtposition">Position <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="txtposition" name="position" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="seldivision">Division <span class="text-danger">*</span></label>
                                                <select name="divisioncode" id="seldivision" class="form-control" onchange="select_location()" >
                                                    <option></option>
                                                    <?php foreach ($division as $divisionRow) { ?>
                                                        <option value="<?=$divisionRow['divisioncode']?>"><?=$divisionRow['name']?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="sellocation">Location <span class="text-danger">*</span></label>
                                                <div>
                                                    <select name="locationcode" id="sellocation" class="form-control" >
                                                        <option></option>
                                                        <?php foreach ($location as $locationRow) { ?>
                                                            <option value="<?=$locationRow['locationcode']?>"><?=$locationRow['name']?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6" id="units-container">
                                            <label for="selunit">Unit <span class="text-danger">*</span></label>
                                                <div>
                                                    <select name="unitid" id="selunit" class="form-control" >
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group text-right">
                                            <button type="submit" class="btn btn-primary">Next</button>
                                        </div>
                                    </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="footer">
                    <div class="text-center">
                        <p class="m-b-0 ">Copyright © <?=date('Y')?> <a href="https://region10.dost.gov.ph">DOST 10</a>. All rights reserved.</p>
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="<?=base_url('assets/js/vendors.min.js'); ?>"></script>

    <!-- page js -->
    <script src="<?=base_url('assets//js/pages/pricing.js'); ?>"></script>

    <!-- Core JS -->
    <script src="<?=base_url('assets/js/app.min.js'); ?>"></script>

</body>

</html>