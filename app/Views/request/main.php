<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DOST 10 | Helpdesk </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url('assets/images/logo/favicon.png'); ?>">

    <!-- page css -->

    <!-- Core css -->
    <link href="<?=base_url('assets/css/app.min.css'); ?>" rel="stylesheet">
    <script>
        var BASE_URL = '<?=base_url('');?>';
    </script>
</head>

<body>
    <div class="app">
        <div class="container-fluid p-0 h-100">
            <div class="row no-gutters h-100 full-height">
                <div class="col-lg-4 d-none d-lg-flex bg" style="background-image:url('<?=base_url('assets/images/others/bg.jpg'); ?>')">
                    <div class="d-flex h-100 p-h-40 p-v-15 flex-column justify-content-between">
                        <div style="max-height:10%;">
                            <img src="<?=base_url('assets/images/logo/logo.png'); ?>" style="max-height:100%;">
                        </div>
                        <div>
                            <h1 class="text-white m-b-20 font-weight-normal">DOST 10 ICT Services</h1>
                            <p class="text-white font-size-16 lh-2 w-80 opacity-08">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo non facilis voluptates illo deleniti? Laboriosam omnis beatae quasi cumque, maxime culpa repellat tenetur, distinctio ipsa voluptate tempora eius sit earum.</p>
                            <button class="btn btn-secondary btn-tone m-r-5">Create Request</button>
                            <button class="btn btn-info btn-tone m-r-5">Follow up Request</button>
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
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label for="txtfname">Firstname</label>
                                                <input type="text" class="form-control" id="txtfname" name="fname" >
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="txtmname">Middlename</label>
                                                <input type="text" class="form-control" id="txtmname" name="mname" >
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="txtlname">Lastname</label>
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
                                                <label for="txtemail">Email</label>
                                                <input type="email" class="form-control" id="txtemail" name="email" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="txtmobileno">Mobile No</label>
                                                <input type="number" class="form-control" id="txtmobileno" name="mobileno" >
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="txtposition">Position</label>
                                                <input type="text" class="form-control" id="txtposition" name="position" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="seldivision">Division</label>
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
                                                <label for="sellocation">Location</label>
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
                                            <label for="selunit">Unit</label>
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
            </div>
        </div>
    </div>
    
    <!-- Core Vendors JS -->
    <script src="<?=base_url('assets/js/vendors.min.js'); ?>"></script>
    <!-- page js -->
    <script src="<?=base_url('assets/vendors/jquery-validation/jquery.validate.min.js'); ?>"></script>
    <script src="<?=base_url('assets/vendors/quill/quill.min.js'); ?>"></script>
    <!-- Core JS -->
    <script src="<?=base_url('assets/js/app.min.js'); ?>"></script>

    <script>
        var reqsummary;
        var requesttype;

        function select_location(){
            var divisionval = $("#seldivision").val() ;

            if (divisionval == '') {
                $("#sellocation").val("").attr('disabled',false);
                return;
            }

            if(divisionval != "TSD"){
                $("#sellocation").val("RO").attr('disabled',true);
            }else{
                $("#sellocation").val("").attr('disabled',false);
            }
            get_units(divisionval);
        }

        function get_units(divisionval){
            $.post(BASE_URL + "request/getUnits", {
                divisionval:divisionval
            }, function(data) {
                $("#units-container").html(data);
            })
        }

        $("#frm-request").submit(function (e) {
            var disabled = $("#frm-request").find(':input:disabled').removeAttr('disabled');
            reqsummary = $("#frm-request").serialize();
            disabled.attr('disabled','disabled');
            show_step_two();
            e.preventDefault();
        });

        function show_step_two(){
            $.post(BASE_URL + "request/showStepTwo", {
            }, function(data) {
                $("#main-frm-container").html(data);
            })
        }

        function show_step_three(){
            $.post(BASE_URL + "request/showStepThree", {
                requesttype:requesttype
            }, function(data) {
                $("#main-frm-container").html(data);
            })
        }
    </script>
</body>

</html>