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
    <script>
        var BASE_URL = '<?=base_url('');?>';
    </script>


</head>

<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('<?=base_url('assets/images/others/login-3.png'); ?>')">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <img class="img-fluid" alt="" src="<?=base_url('assets/images/logo/logo.png'); ?>">
                                        <h2 class="m-b-0">Login</h2>
                                    </div>
                                        <div class="alert alert-danger" id="error-msg" style="display:none;">Incorrect username or password.</div>
                                    <form id="login-frm">
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="userName">Username:</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Password:</label>
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="font-size-13 text-muted">
                                                    Don't have an account? 
                                                    <a class="small" href="<?=base_url('register')?>">Register</a>
                                                </span>
                                                <button class="btn btn-primary">Login</button>
                                            </div>
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

    <script>
        $("#login-frm").submit(function (e) { 
            $.post(BASE_URL+"credentials/loginProcess",{
                username : $("#username").val(),
                password : $("#password").val()
            },function(data){
                if (data == "SUCCESS") {
                    window.location.replace(BASE_URL);
                }
                else {
                    $("#error-msg").css("display", "block");
                }
            });
            e.preventDefault();
            
        });
    </script>
</body>

</html>