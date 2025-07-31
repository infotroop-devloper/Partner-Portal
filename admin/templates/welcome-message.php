<?php require "../config/app_config.php";?>
<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../" />
    <title>Email Template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets\media\logos\favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <link href="<?php echo BASE_URL; ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BASE_URL; ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="auth-bg">

    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-column-fluid">
            <div class="scroll-y flex-column-fluid px-10 py-10" data-kt-scroll="true" data-kt-scroll-activate="true"
                data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header_nav"
                data-kt-scroll-offset="5px" data-kt-scroll-save-state="true"
                style="background-color:#D5D9E2; --kt-scrollbar-color: #d9d0cc; --kt-scrollbar-hover-color: #d9d0cc">
                <!--begin::Email template-->
                <style>
                html,
                body {
                    padding: 0;
                    margin: 0;
                    font-family: Inter, Helvetica, "sans-serif";
                }

                a:hover {
                    color: #009ef7;
                }
                </style>
                <div id="#kt_app_body_content"
                    style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; min-height: 100%; font-weight: normal; font-size: 15px; color: #2F3044; margin:0; padding:0; width:100%;">
                    <div
                        style="background-color:#ffffff; padding: 45px 0 34px 0; border-radius: 24px; margin:40px auto; max-width: 600px;">
                        <table class="text-center border-none w-100" cellpadding="0" cellspacing="0" height="auto"
                            style="border-collapse:collapse">
                            <tbody>
                                <tr>
                                    <td class="text-center pb-2">
                                        <!--begin:Email content-->
                                        <div class="text-center mb-5 mx-3 mt-0">
                                            <!--begin:Logo-->
                                            <div style="margin-bottom: 10px">
                                                <a href="https://keenthemes.com" rel="noopener" target="_blank">
                                                    <img alt="Logo"
                                                        src="<?php echo BASE_URL; ?>/assets/media/logos/InfoTroopLogo.png"
                                                        style="height: 60px;" />
                                                </a>
                                            </div>
                                            <!--end:Logo-->
                                            <!--begin:Media-->
                                            <div style="margin-bottom: 15px">
                                                <img alt="Logo"
                                                    src="<?php echo BASE_URL; ?>/assets/media/email/icon-positive-vote-1.svg" />
                                            </div>
                                            <!--end:Media-->
                                            <!--begin:Text-->
                                            <div
                                                style="font-size: 14px; font-weight: 500; margin-bottom: 27px; font-family:Arial,Helvetica,sans-serif;">
                                                <p
                                                    style="margin-bottom:9px; color:#181C32; font-size: 22px; font-weight:700">
                                                    Hey {{first_name}}, Welcome to Infotroop!</p>
                                                <p style="margin-bottom:2px; color:#7E8299">Lots of people make mistakes
                                                    while creating</p>
                                                <p style="margin-bottom:2px; color:#7E8299">paragraphs. Some writers
                                                    just put whitespace in</p>
                                                <p style="margin-bottom:2px; color:#7E8299">their text in random places
                                                </p>
                                            </div>
                                            <p style="margin-bottom:2px;font-weight:bold; color:#5E6278">Username:
                                                <span class="text-success">{{username}}</span>
                                            </p>
                                            <p style="margin-bottom:2px;font-weight:bold; color:#5E6278">Password:
                                                <span class="p-1 text-success border-radius-2">{{password}}</span>
                                            </p>
                                            <!--end:Text-->
                                            <!--begin:Action-->
                                            <a href='https://partner.infotroop.co.in/' target="_blank" class="btn btn-success mt-5">Login</a>
                                            <!--begin:Action-->
                                        </div>
                                        <!--end:Email content-->
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center"
                                        style="font-size: 13px; text-align:center; padding: 0 10px 10px 10px; font-weight: 500; font-family:Arial,Helvetica,sans-serif">
                                        <!-- <p style="color:#181C32; font-size: 16px; font-weight: 600; margin-bottom:9px">It’s all about customers!</p> -->
                                        <p style="margin-bottom:2px">Call our customer care number: <a
                                                href="tel:+91 9168682217" aria-label="Call Support"
                                                data-bs-original-title="Call Support">+91 9168682217</a>
                                            </a></p>
                                        <p style="margin-bottom:4px">You may reach us at
                                            <a href="https://www.infotroop.co.in/contact" rel="noopener" target="_blank"
                                                style="font-weight: 600">support@infotroop.co.in</a>
                                        </p>
                                        <p>We serve</p><span class="fw-bold text-black">Mon-Sat, 9:30AM - 6:30PM</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="text-align:center; padding-bottom: 20px;">
                                        <a href="#" style="margin-right:10px">
                                            <img alt="Logo"
                                                src="https://partner.infotroop.co.in/assets/media/email/icon-linkedin.svg" />
                                        </a>
                                        <a href="#" style="margin-right:10px">
                                            <img alt="Logo"
                                                src="https://partner.infotroop.co.in/assets/media/email/icon-dribbble.svg" />
                                        </a>
                                        <a href="#" style="margin-right:10px">
                                            <img alt="Logo"
                                                src="https://partner.infotroop.co.in/assets/media/email/icon-facebook.svg" />
                                        </a>
                                        <a href="#">
                                            <img alt="Logo"
                                                src="https://partner.infotroop.co.in/assets/media/email/icon-twitter.svg" />
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"
                                        style="font-size: 13px; padding:0 15px; text-align:center; font-weight: 500;font-family:Arial,Helvetica,sans-serif">
                                        <p>&copy; Copyright Infotroop IT Solutions Pvt Ltd.
                                            <!-- <a href="https://keenthemes.com" rel="noopener" target="_blank" style="font-weight: 600;font-family:Arial,Helvetica,sans-serif">Unsubscribe</a>&nbsp; from newsletter.</p> -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--end::Email template-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Wrapper-->
    </div>
    <script src="https://partner.infotroop.co.in/assets/plugins/global/plugins.bundle.js"></script>
    <script src="https://partner.infotroop.co.in/assets/js/scripts.bundle.js"></script>
</body>
<!--end::Body-->

</html>