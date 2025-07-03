<!DOCTYPE html>
<?php 
header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Origin: http://localhost'); 

include_once './config/config.php'; 
?>
<html lang="en">

<head>
    <base href="../../../" />
    <title>Infotroop | Admin</title>
    <meta charset="utf-8" />
    <!-- <meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />-->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Infotroop IT Solutions" />
    <meta property="og:url" content="https://infotroop.co.in" />
    <meta property="og:site_name" content="Infotroop IT Solutions" />
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/media/logos/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <link href="<?php echo BASE_URL; ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BASE_URL; ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

    <script>
    // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>

<body id="kt_body" class="auth-bg bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
    <script>
    var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if (localStorage.getItem("data-bs-theme") !== null) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }
        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
    </script>

    <div class="d-flex flex-column flex-root">

        <!-- <style>
        body {
            background-image: url('<?php echo BASE_URL; ?>assets/media/auth/PartnerLoginPage1.jpg');
        }

        [data-bs-theme="dark"] body {
            background-image: url('<?php echo BASE_URL; ?>assets/media/auth/bg4-dark.jpg');
        }
        </style> -->

        <div class="dvh-90">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="bg-light card shadow-lg bg-white rounded" style="border-radius: 1rem;">
                            <div class="row">
                                <div class="col-md-8 col-lg-6 d-none d-md-block" style="">
                                    <img src="<?php echo BASE_URL; ?>assets/media/img/login-img-3.jpg" alt="login img"
                                        class="img-fluid h-500px" style="border-radius: 1rem 0 0 1rem;" />
                                </div>
                                <div class="col-md-4 col-lg-6 d-flex align-items-center">
                                    <div class="card-body m-4 p-lg-5 text-black">

                                        <form class="form align-items-center justify-content-center text-center"
                                            novalidate="novalidate" id="kt_sign_in_form">

                                            <div class="d-flex align-items-center justify-content-center mb-6">
                                                <img alt="Logo" style="width:50%;"
                                                    src="<?php echo BASE_URL; ?>assets/media/logos/InfoTroopLogo.png" />
                                            </div>

                                            <h5 class="fw-bold mb-5" style="letter-spacing: 1px;">Sign into your
                                                Admin account</h5>

                                            <div class="form-outline mb-8">
                                                <input type="email" name="email" id="email"
                                                    class="form-control form-control-lg" placeholder="Email address"
                                                    autocomplete="off" />
                                                <span id="email_error" style="color: red;display:none;">Email address is
                                                    required</span>
                                            </div>

                                            <div class="form-outline mb-8">
                                                <input type="password" name="password" id="password" autocomplete="off"
                                                    class="form-control form-control-lg" placeholder="Password" />
                                                <span id="password_error" style="color: red;display:none;">password is
                                                    required</span>
                                            </div>

                                            <div class="d-grid mb-10">
                                                <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">

                                                    <span class="indicator-label">Sign In</span>

                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>

                                                </button>
                                            </div>

                                            <!-- <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a
                                        href="#!" style="color: #393f81;">Register here</a></p> -->
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <a href="https://www.infotroop.co.in/our-team"
                                                        target="_blank" class="mx-4">About</a>
                                                    <a href="https://www.infotroop.co.in/contact"
                                                        target="_blank">Contact Us</a>
                                                </div>
                                                <div>
                                                    <a href="">Forgot password?</a>
                                                </div>
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
            <!--begin::Footer-->
            <div class="footer bg-white pb-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-gray-900 order-2 order-md-1">
                        <span class="text-muted fw-semibold me-1"><?php echo date('Y'); ?>&copy;</span>
                        <a href="https://www.infotroop.co.in/" target="_blank"
                            class="text-gray-800 text-hover-primary">InfoTroop IT Solutions Pvt. Ltd.</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Menu-->
                    <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                        <li class="menu-item">
                            <a href="https://www.infotroop.co.in/" target="_blank" class="menu-link px-2">About</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://www.infotroop.co.in/contact" target="_blank"
                                class="menu-link px-2">Support</a>
                        </li>
                    </ul>
                    <!--end::Menu-->
                </div>
                <!--end::Container-->
            </div>
    </div>

    <script>
    var hostUrl = "assets/";
    </script>
    <script src="<?php echo BASE_URL; ?>assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/scripts.bundle.js"></script>

    <script src="<?php echo BASE_URL; ?>assets/js/custom/authentication/sign-in/general.js"></script>
    <script>
$("#kt_sign_in_submit").on("click", function(e) {
    e.preventDefault(); // Prevent form submission
    
    // Hide error messages
    $("#email_error").hide();
    $("#password_error").hide();
    
    var flag = 1;
    if ($("#email").val() == '') {
        document.getElementById("email_error").style.display = 'block';
        flag = 0;
    }
    if ($("#password").val() == '') {
        document.getElementById("password_error").style.display = 'block';
        flag = 0;
    }
    if (flag == 0) {
        return false;
    }
    
    // Show loading state
    $(".indicator-label").css("display", "none");
    $(".indicator-progress").css("display", "block");

    var myKeyVals = {
        email: $("#email").val(),
        password: $("#password").val(),
        op: 'login',
        serviceName: 'login.php'
    };
    
    console.log('Sending data:', myKeyVals); // Debug log
    console.log('API URL:', "<?php echo BASE_URL;?>api/rootapi.php"); // Debug log
    
    $.ajax({
        type: 'POST',
        url: "<?php echo BASE_URL;?>api/rootapi.php",
        data: myKeyVals,
        dataType: "text",
        timeout: 10000, // 10 second timeout
        success: function(resultData) {
            console.log('Raw response:', resultData); // Debug log
            
            try {
                var jsonObj = JSON.parse(resultData);
                console.log('Parsed response:', jsonObj); // Debug log
                
                if (jsonObj.status == "success" && jsonObj.data.hasOwnProperty('token')) {
                    var token = jsonObj.data.token;
                    var userdata = jsonObj.data.userdata;
                    
                    // Store in sessionStorage instead of localStorage for security
                    localStorage.setItem('token', token);
                    localStorage.setItem('email', userdata.email);
                    localStorage.setItem('firstname', userdata.firstname);
                    localStorage.setItem('uid', userdata.uid);
                    localStorage.setItem('user_type', userdata.user_type);

                    Swal.fire({
                        text: "You have successfully logged in!",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    }).then((function(e) {
                        if (e.isConfirmed) {
                            location.href = "<?php echo BASE_URL;?>pages/dashboard.php";
                        }
                    }));
                } else {
                    $(".indicator-label").css("display", "block");
                    $(".indicator-progress").css("display", "none");
                    
                    Swal.fire({
                        text: jsonObj.msg || "Login failed",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }
            } catch (parseError) {
                console.error('JSON parse error:', parseError);
                console.error('Response was:', resultData);
                
                $(".indicator-label").css("display", "block");
                $(".indicator-progress").css("display", "none");
                
                Swal.fire({
                    text: "Server response error",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            }
        },
        error: function(xhr, status, error) {
            console.error('AJAX Error:', {
                status: status,
                error: error,
                responseText: xhr.responseText,
                statusCode: xhr.status
            });
            
            $(".indicator-label").css("display", "block");
            $(".indicator-progress").css("display", "none");
            
            var errorMsg = "Connection error";
            if (xhr.status === 404) {
                errorMsg = "API endpoint not found";
            } else if (xhr.status === 500) {
                errorMsg = "Server error";
            } else if (status === 'timeout') {
                errorMsg = "Request timeout";
            }
            
            Swal.fire({
                text: errorMsg,
                icon: "error",
                buttonsStyling: false,
                confirmButtonText: "Ok, got it!",
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            });
        }
    });
});
    </script>

</body>

</html>