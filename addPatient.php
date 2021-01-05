<?php include('head.php')?>

<body class="bg-theme bg-theme1">

    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
    <!-- end loader -->

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <?php include('sidebar.php')?>
        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumb-->
                <div class="row pt-2 pb-2">
                    <div class="col-sm-9">
                        <h4 class="page-title">Form Validation</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javaScript:void();">Dashtreme</a></li>
                            <li class="breadcrumb-item"><a href="javaScript:void();">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Validation</li>
                        </ol>
                    </div>
                    <div class="col-sm-3">
                        <div class="btn-group float-sm-right">
                            <button type="button" class="btn btn-light waves-effect waves-light"><i
                                    class="fa fa-cog mr-1"></i> Setting</button>
                            <button type="button"
                                class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light"
                                data-toggle="dropdown">
                                <span class="caret"></span>
                            </button>
                            <div class="dropdown-menu">
                                <a href="javaScript:void();" class="dropdown-item">Action</a>
                                <a href="javaScript:void();" class="dropdown-item">Another action</a>
                                <a href="javaScript:void();" class="dropdown-item">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a href="javaScript:void();" class="dropdown-item">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Breadcrumb-->


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form id="signupForm">
                                    <h4 class="form-header text-uppercase">
                                        <i class="fa fa-address-book-o"></i>
                                        Patient Profile
                                    </h4>
                                    <div class="form-group row">
                                        <label for="input-10" class="col-sm-2 col-form-label">First Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="input-10" name="firstname">
                                        </div>
                                        <label for="input-11" class="col-sm-2 col-form-label">Last Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="input-11" name="lastname">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input-12" class="col-sm-2 col-form-label">Middle Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="input-12" name="middlename">
                                        </div>
                                        <label for="input-13" class="col-sm-2 col-form-label">Suffix</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="input-13" name="suffix">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="input-16" class="col-sm-2 col-form-label">Contact Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-16" name="contactnumber">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="input-17" class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="address" rows="4" id="input-17"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i>
                                            CLEAR</button>
                                        <button type="submit" class="btn btn-success"><i
                                                class="fa fa-check-square-o"></i> SAVE</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Row-->
                <!--start overlay-->
                <div class="overlay toggle-menu"></div>
                <!--end overlay-->
            </div>
            <!-- End container-fluid-->

        </div>
        <!--End content-wrapper-->

        <?php 
    include('theme.php');
    ?>
    <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>

  <!--Form Validatin Script-->
    <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
        <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
        <script>
            $(document).ready(function(){ 
                // validate signup form on keyup and submit
                $("#signupForm").validate({
                    rules: {
                        firstname: "required",
                        lastname: "required",
                        middlename: "required",
                        contactnumber: {
                            required: true,
                            minlength: 10
                        },
                        address : "required"
                    },
                    messages: {
                        firstname: "Please enter your firstname",
                        lastname: "Please enter your lastname",
                        username: {
                            required: "Please enter a username",
                            minlength: "Your username must consist of at least 2 characters"
                        },
                        password: {
                            required: "Please provide a password",
                            minlength: "Your password must be at least 5 characters long"
                        },
                        confirm_password: {
                            required: "Please provide a password",
                            minlength: "Your password must be at least 5 characters long",
                            equalTo: "Please enter the same password as above"
                        },
                        email: "Please enter a valid email address",
                        contactnumber: "Please enter your 10 digit number",
                        agree: "Please accept our policy",
                        address: "Please enter your address"
                    }
                });

            });
        </script>
</body>