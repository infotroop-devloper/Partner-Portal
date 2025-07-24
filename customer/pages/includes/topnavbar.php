<!--begin::Header-->
<style>
[data-bs-theme="dark"] .logo-light {
    display: none !important;
}
[data-bs-theme="dark"] .logo-dark {
    display: inline !important;
}

/* Show light logo in light theme (default) */
.logo-light {
    display: inline;
}
.logo-dark {
    display: none;
}
</style>
<div id="kt_header" class="header shadow-lg" data-kt-sticky="true" data-kt-sticky-name="header"
    data-kt-sticky-animation="false" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-center flex-lg-stack">
        <!--begin::Brand-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <!--begin::Wrapper-->
            <div class="flex-grow-1">
                <!--begin::Aside toggle-->
                <button class="btn btn-icon btn-color-gray-800 btn-active-color-primary me-3" id="kt_aside_toggle">
                    <i class="ki-duotone ki-abstract-14 fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </button>
                <!--end::Aside toggle-->
                <!--begin::Header Logo-->
                <a href="<?php echo BASE_URL; ?>pages/dashboard.php">
                    <!-- Light Theme Logo -->
                    <img alt="Logo" src="<?php echo BASE_URL; ?>/assets/media/logos/InfoTroopLogo.png"
                        style="height:50px !important;" class="logo-light" />

                    <!-- Dark Theme Logo -->
                    <img alt="Logo" src="<?php echo BASE_URL; ?>/assets/media/logos/InfoTroop-Logo-White.png"
                        style="height:50px !important;" class="logo-dark d-none" />
                </a>
                <!--end::Header Logo-->
            </div>
            <!--end::Wrapper-->

        </div>
        <!--end::Brand-->
        <!--begin::Toolbar wrapper-->
        <div class="d-flex align-items-stretch flex-shrink-0">
            <!--begin::Button-->
            <!-- <a href="#" class="btn btn-light-success me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">Create</a> -->
            <!--end::Button-->
            <!--begin::Activities-->

            <!--end::Activities-->
            <!--begin::Theme mode-->
            <div class="d-flex align-items-center ms-1 ms-lg-3">
                <!--begin::Menu toggle-->
                <a href="#"
                    class="btn btn-color-gray-800 btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                    data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                    data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-night-day theme-light-show fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        <span class="path5"></span>
                        <span class="path6"></span>
                        <span class="path7"></span>
                        <span class="path8"></span>
                        <span class="path9"></span>
                        <span class="path10"></span>
                    </i>
                    <i class="ki-duotone ki-moon theme-dark-show fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </a>
                <!--begin::Menu toggle-->
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                    data-kt-menu="true" data-kt-element="theme-mode-menu">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-duotone ki-night-day fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                    <span class="path7"></span>
                                    <span class="path8"></span>
                                    <span class="path9"></span>
                                    <span class="path10"></span>
                                </i>
                            </span>
                            <span class="menu-title">Light</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-duotone ki-moon fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <span class="menu-title">Dark</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Theme mode-->
            <!--begin::User menu-->
            <div class="d-flex align-items-center ms-1 ms-lg-3">
                <!--begin::Menu wrapper-->
                <div class="btn btn-color-gray-800 btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px position-relative btn btn-color-gray-800 btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                    data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-user fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--begin::User account menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                    data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <div class="menu-content d-flex align-items-center px-3">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img alt="Logo" src="<?php echo BASE_URL; ?>/assets/media/avatars/300-1.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Username-->
                            <div class="d-flex flex-column">
                                <div class="fw-bold d-flex align-items-center fs-5"><?php echo $_SESSION['firstname'];?>
                                    <!--<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>-->
                                </div>
                                <a href="#"
                                    class="fw-semibold text-muted text-hover-primary fs-7"><?php echo $_SESSION['email'];?></a>
                            </div>
                            <!--end::Username-->
                        </div>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu separator-->
                    <div class="separator my-2"></div>
                    <!--end::Menu separator-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="./profile.php" class="menu-link px-5">My Profile</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="#" onClick="fn_logout()" class="menu-link px-5">Sign Out</a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::User account menu-->
                <!--end::Menu wrapper-->
            </div>
            <!--end::User menu-->
            <!--begin::Chat-->

            <!--end::Chat-->
        </div>
        <!--end::Toolbar wrapper-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header-->