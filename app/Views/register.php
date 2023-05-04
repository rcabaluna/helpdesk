<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DOST 10 ICT Service Request System</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url('assets/images/logo/favicon.png'); ?>">

    <!-- page css -->

    <!-- Core css -->
    <link href="<?=base_url('assets/css/app.min.css'); ?>" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('<?=base_url('assets/images/others/login-3.png'); ?>')">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-8 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <img class="img-fluid" alt="" src="<?=base_url('assets/images/logo/logox.png'); ?>">
                                        <h2 class="m-b-0">Register</h2>
                                    </div>
                                    <form id="frm-request">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-flex p-h-40 justify-content-between">
                    <span class="">© <?=date('Y')?> <a href="https://region10.dost.gov.ph">DOST 10</a></span>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="<?=base_url('assets/js/vendors.min.js'); ?>"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="<?=base_url('assets/js/app.min.js'); ?>"></script>

</body>

</html>