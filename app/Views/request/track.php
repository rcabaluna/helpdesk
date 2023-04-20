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
                            <a href="<?=base_url('request');?>"><button class="btn btn-secondary btn-tone m-r-5">Create Request</button></a>
                            <a href="<?=base_url('request/track');?>"><button class="btn btn-info btn-tone m-r-5 active">Track Request</button></a>
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
                                    <h2>Track your ICT Request</h2>
                                    <p class="m-b-30">Enter the tracking number to see the details of your request:</p>
                                    <form id="frm-track-request">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="txtfname">Tracking Number <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="txttrackrequest" name="trackrequest" required>
                                            </div>
                                        </div>
                                        <div class="form-group text-right">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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

    <script type="text/javascript">
        $("#frm-track-request").submit(function (e) { 
            e.preventDefault();
            
        });
    </script>
</body>

</html>