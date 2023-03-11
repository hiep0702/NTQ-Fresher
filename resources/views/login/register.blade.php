
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark" data-body-image="img-1" data-preloader="disable">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta charset="utf-8" />
    <title>Sign Up | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
</head>

<body>

    <div class="auth-page-wrapper pt-5">

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="index.html" class="d-inline-block auth-logo">
                                    <img src="assets/images/logo-light.png" alt="" height="20">
                                </a>
                            </div>
                            <p class="mt-3 fs-15 fw-medium">Premium Admin & Dashboard Template</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4 card-bg-fill">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Create New Account</h5>
                                    <p class="text-muted">Get your free velzon account now</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form class="needs-validation" novalidate action="{{ URL::to('/singUp') }}" method="post">

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" >
                                            <div class="invalid-feedback">
                                                Please enter email
                                            </div>
                                            <span id="span-email" style="color: red"></span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Username <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" >
                                            <div class="invalid-feedback">
                                                Please enter username
                                            </div>
                                            <span id="span-name" style="color: red"></span>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup">
                                                <input type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" name="password" id="password" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                <div class="invalid-feedback">
                                                    Please enter password
                                                </div>
                                            </div>
                                            <span id="span-password" style="color: red"></span>
                                        </div>

                                        <div class="mb-3">
                                            <label for="birthday" class="form-label">Birthday <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Enter birthday" >
                                            <div class="invalid-feedback">
                                                Please enter birthday
                                            </div>
                                            <span id="span-birthday" style="color: red"></span>
                                        </div>

                                        <div class="mb-3">
                                            <label for="phone_number" class="form-label">Phone number <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="Enter phone number" >
                                            <div class="invalid-feedback">
                                                Please enter phone_number
                                            </div>
                                            <span id="span-phone_number" style="color: red"></span>
                                        </div>

                                        <div class="mb-3">
                                            <label for="gender" class="form-label">Gender <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="gender" name="gender" placeholder="Enter gender" >
                                            <div class="invalid-feedback">
                                                Please enter gender
                                            </div>
                                            <span id="span-gender" style="color: red"></span>
                                        </div>

                                        <div class="mb-3">
                                            <label for="avatar" class="form-label">Avatar <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="avatar" name="avatar" placeholder="Enter avatar">
                                            <div class="invalid-feedback">
                                                Please enter avatar
                                            </div>
                                            <span id="span-avatar" style="color: red"></span>
                                        </div>

                                        <div class="mb-4">
                                            <p class="mb-0 fs-12 text-muted fst-italic">By registering you agree to the Velzon <a href="#" class="text-primary text-decoration-underline fst-normal fw-medium">Terms of Use</a></p>
                                        </div>

                                        <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                            <h5 class="fs-13">Password must contain:</h5>
                                            <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                                            <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                            <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                            <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="button" id="btn-singup">Sign Up</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="fs-13 mb-4 title text-muted">Create account with</h5>
                                            </div>

                                            <div>
                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <p class="mb-0">Already have an account ? <a href="auth-signin-basic.html" class="fw-semibold text-primary text-decoration-underline"> Signin </a> </p>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- particles js -->
    <script src="assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="assets/js/pages/particles.app.js"></script>
    <!-- validation init -->
    <script src="assets/js/pages/form-validation.init.js"></script>
    <!-- password create init -->
    <script src="assets/js/pages/passowrd-create.init.js"></script>

    <script>
        $(document).ready(function () {
            $('#btn-singup').click(function (e) { 
                e.preventDefault();
                
                let data = {
                    email: $('#email').val(),
                    name: $('#name').val(),
                    password: $('#password').val(),
                    birthday: $('#birthday').val(),
                    phone_number: $('#phone_number').val(),
                    gender: $('#gender').val(),
                    avatar: $('#avatar').val(),
                    _token: $('meta[name="csrf-token"]').attr('content')
                }
                console.log(data);
                $.ajax({
                    type: "post",
                    url: "/singup",
                    data: JSON.stringify(data),
                    dataType: "json",
                    contentType: 'application/json',
                    success: function (response) {
                        console.log(response);
                    },
                    error: function (response) {
                        console.log(response.responseJSON.errors);
                        $('#span-email').html(response.responseJSON.errors.email)
                        $('#span-name').html(response.responseJSON.errors.name)
                        $('#span-password').html(response.responseJSON.errors.password)
                        $('#span-birthday').html(response.responseJSON.errors.birthday)
                        $('#span-phone_number').html(response.responseJSON.errors.phone_number)
                        $('#span-gender').html(response.responseJSON.errors.gender)
                        $('#span-avatar').html(response.responseJSON.errors.avatar)
                    }
                });
            });
        });
    </script>
</body>

</html>