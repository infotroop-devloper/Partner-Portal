<!--- HEADER --->
<?php include('./includes/header.php');
if($_COOKIE['uid']){
	$_SESSION['uid'] = $_COOKIE['uid'];
	$_SESSION['firstname'] = $_COOKIE['firstname'];
	$_SESSION['email'] = $_COOKIE['email'];
	$_SESSION['user_type'] = $_COOKIE['user_type'];
}
?>
<style>
body {
    background-color: #f9f9f9;
}

.card-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card-hover:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
}

.card-body p {
    margin: 0;
}

.search-box {
    max-width: 400px;
}

.partner-logo {
    height: 100px;
    width: 100px;
    object-fit: contain;
}

.card-footer {
    background-color: #fff;
}

.partner-card {
    opacity: 1;
    transform: translateY(0);
    transition: opacity 0.4s ease-out, transform 0.4s ease-out;
    visibility: visible;
    height: auto;
    overflow: hidden;
}

.partner-card.hide {
    opacity: 0;
    transform: translateY(20px);
    visibility: hidden;
    position: absolute;
    transition: opacity 0.3s ease-out, transform 0.3s ease-out, height 0.3s ease-out;
}

.partner-card.show {
    opacity: 1;
    transform: translateY(0);
    visibility: visible;
    height: auto;
}
</style>
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">

        <!--- SIDEBAR --->
        <?php include('./includes/sidebar.php') ?>

        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <?php include('./includes/topnavbar.php');?>
            <section class="banner-img container-fluid d-flex justify-content-start align-items-center"
                style="background-image: url('../assets/media/img/banner-image5.jpg'); background-size: cover; background-position: top; height: 200px;">

                <p class="fw-bold text-white m-0" style="font-size: 30px;">
                    Partner Directory :
                </p>
            </section>
            <!--begin::Container-->
            <div class="container-fluid py-5 my-4">
                <div class="d-flex justify-content-between g-4 align-items-center mx-8 mb-4">
                    <h2 class="fw-bold fs-1">Partner Listings</h2>
                    <div class="search-wrapper" style="position: relative;">
                        <input type="text" class="form-control search-box" id="searchInput"
                            placeholder="Search partners...">
                        <span id="clearSearch"
                            style=" position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer; font-size: 18px; color: red; display: none;">&times;</span>
                    </div>
                </div>

                <div class="row g-8" id="partnerList">
                    <!-- Partner Card 1 -->
                    <div class="col-md-3  partner-card" data-name="Adobe">
                        <div class="card card-hover h-100">
                            <div class="card-body">
                                <img src="../assets/media/img/Adobe-Logo.jpg" class="partner-logo mb-3" alt="Adobe">
                                <h6 class="text-muted">Platinum Partner</h6>
                                <h5>Adobe</h5>
                                <p class="small">It offers a wide range of programs from web design tools, photo manipulation and vector creation, through to video/audio editing, mobile app development, print layout and animation software.</p>
                                <br>
                                <p><strong>HQ:</strong> Uttar Pradesh, India</p>
                                <hr>
                                <p><strong>Specializations:</strong> 20+</p>
                                <p><strong>Certifications:</strong> 500+</p>
                                <p><strong>Customer Deployments:</strong> 100+</p>
                                <p><strong>Partner Solutions:</strong> 5</p>
                            </div>
                        </div>
                    </div>

                    <!-- Partner Card 2 -->
                    <div class="col-md-3 partner-card" data-name="Microsoft">
                        <div class="card card-hover h-100">
                            <div class="card-body">
                                <img src="../assets/media/img/Microsoft-Logo.jpg" class="partner-logo mb-3" alt="Microsoft">
                                <h6 class="text-muted">Platinum Partner</h6>
                                <h5>Microsoft</h5>
                                <p class="small">Microsoft Corporation is an American multinational corporation and technology conglomerate headquartered in Redmond, Washington.</p>
                                    <br>
                                <p><strong>HQ:</strong> Hyderabad, India</p>
                                <hr>
                                <p><strong>Specializations:</strong> 19</p>
                                <p><strong>Certifications:</strong> 500+</p>
                                <p><strong>Customer Deployments:</strong> 50+</p>
                                <p><strong>Partner Solutions:</strong> 4</p>
                            </div>
                        </div>
                    </div>

                    <!-- Partner Card 3 -->
                    <div class="col-md-3 partner-card" data-name="Zoho">
                        <div class="card card-hover h-100">
                            <div class="card-body">
                                <img src="../assets/media/img/Zoho-Logo.jpg" class="partner-logo mb-3" alt="Zoho">
                                <h6 class="text-muted">Platinum Partner</h6>
                                <h5>Zoho</h5>
                                <p class="small">Zoho a cloud-based software suite designed for businesses of all sizes,
                                    offering over 55+ apps to cover various business needs like CRM, email, accounting,
                                    project management, and more</p>
                                    <br>
                                <p><strong>HQ:</strong> Chennai, India</p>
                                <hr>
                                <p><strong>Specializations:</strong> 11</p>
                                <p><strong>Certifications:</strong> 500+</p>
                                <p><strong>Customer Deployments:</strong> 20+</p>
                                <p><strong>Partner Solutions:</strong> 8</p>
                            </div>
                        </div>
                    </div>

                    <!-- Partner Card 4 -->
                    <div class="col-md-3 partner-card" data-name="Hewlett Packard">
                        <div class="card card-hover h-100">
                            <div class="card-body">
                                <img src="../assets/media/img/Hewlett Packard-logo.jpg" class="partner-logo mb-3" alt="Hewlett Packard">
                                <h6 class="text-muted">Platinum Partner</h6>
                                <h5>Hewlett Packard</h5>
                                <p class="small"> Hewlett Packard is a global technology company that specializes in IT infrastructure, cloud services, and software, focusing on helping businesses connect, protect, and manage their data and applications.</p>
                                    <br>
                                <p><strong>HQ:</strong> Bangalore, India</p>
                                <hr>
                                <p><strong>Specializations:</strong> 11</p>
                                <p><strong>Certifications:</strong> 500+</p>
                                <p><strong>Customer Deployments:</strong> 20+</p>
                                <p><strong>Partner Solutions:</strong> 8</p>
                            </div>
                        </div>
                    </div>
                    <!-- Partner Card 5 -->
                    <div class="col-md-3  partner-card" data-name="Dell">
                        <div class="card card-hover h-100">
                            <div class="card-body">
                                <img src="../assets/media/img/Dell-Logo.jpg" class="partner-logo mb-3" alt="Dell">
                                <h6 class="text-muted">Platinum Partner</h6>
                                <h5>Dell</h5>
                                <p class="small">Dell Inc. is an American technology company that develops, sells, repairs, and supports personal computers, servers, data storage devices, network switches, software, computer peripherals including printers and webcams among other products and services. </p>
                                <br>
                                <p><strong>HQ:</strong> Noida, India</p>
                                <hr>
                                <p><strong>Specializations:</strong> 20+</p>
                                <p><strong>Certifications:</strong> 500+</p>
                                <p><strong>Customer Deployments:</strong> 100+</p>
                                <p><strong>Partner Solutions:</strong> 5</p>
                            </div>
                        </div>
                    </div>

                    <!-- Partner Card 6 -->
                    <div class="col-md-3 partner-card" data-name="Logitech">
                        <div class="card card-hover h-100">
                            <div class="card-body">
                                <img src="../assets/media/img/Logitech-Logo.jpg" class="partner-logo mb-3" alt="Logitech">
                                <h6 class="text-muted">Platinum Partner</h6>
                                <h5>Logitech</h5>
                                <p class="small">Logitech is a multi-brand company designing products that bring people together through music, gaming, video and computing.</p>
                                    <br>
                                <p><strong>HQ:</strong> New Delhi, India</p>
                                <hr>
                                <p><strong>Specializations:</strong> 19</p>
                                <p><strong>Certifications:</strong> 500+</p>
                                <p><strong>Customer Deployments:</strong> 50+</p>
                                <p><strong>Partner Solutions:</strong> 4</p>
                            </div>
                        </div>
                    </div>

                    <!-- Partner Card 7 -->
                    <div class="col-md-3 partner-card" data-name="SOPHOS">
                        <div class="card card-hover h-100">
                            <div class="card-body">
                                <img src="../assets/media/img/SOPHOS-Logo.jpg" class="partner-logo mb-3" alt="SOPHOS">
                                <h6 class="text-muted">Platinum Partner</h6>
                                <h5>SOPHOS</h5>
                                <p class="small">Sophos is a leading cybersecurity company providing various solutions for businesses and individuals to protect against cyber threats.</p>
                                    <br>
                                <p><strong>HQ:</strong> Ahmedabad, India</p>
                                <hr>
                                <p><strong>Specializations:</strong> 11</p>
                                <p><strong>Certifications:</strong> 500+</p>
                                <p><strong>Customer Deployments:</strong> 20+</p>
                                <p><strong>Partner Solutions:</strong> 8</p>
                            </div>
                        </div>
                    </div>

                    <!-- Partner Card 8 -->
                    <div class="col-md-3 partner-card" data-name="FORTINET">
                        <div class="card card-hover h-100">
                            <div class="card-body">
                                <img src="../assets/media/img/FORTINET-Logo.jpg" class="partner-logo mb-3" alt="FORTINET">
                                <h6 class="text-muted">Platinum Partner</h6>
                                <h5>FORTINET</h5>
                                <p class="small"> Fortinet is a cybersecurity company that offers a wide range of security solutions, including firewalls, endpoint security, and network security. </p>
                                    <br>
                                <p><strong>HQ:</strong> Bangalore, India</p>
                                <hr>
                                <p><strong>Specializations:</strong> 11</p>
                                <p><strong>Certifications:</strong> 500+</p>
                                <p><strong>Customer Deployments:</strong> 20+</p>
                                <p><strong>Partner Solutions:</strong> 8</p>
                            </div>
                        </div>
                    </div>
                </div>
                <img id="notFoundImage" src="../assets/media/img/no-found.png" alt="No results found" style="display: none;  width: auto; margin: 10px auto;" />
            </div>

            <!--begin::Footer-->
            <div class="footer pb-4 d-flex flex-lg-column" id="kt_footer">
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
    </div>
</div>


<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->

<?php include('./includes/footer.php') ?>
<script>
const searchInput = document.getElementById('searchInput');
const clearBtn = document.getElementById('clearSearch');
const cards = document.querySelectorAll('.partner-card');
const notFoundImage = document.getElementById('notFoundImage'); // Add this line

searchInput.addEventListener('input', function () {
    const keyword = this.value.toLowerCase();
    clearBtn.style.display = keyword ? 'block' : 'none';

    let anyVisible = false;

    cards.forEach(card => {
        const name = card.getAttribute('data-name')?.toLowerCase() || '';
        if (name.includes(keyword)) {
            card.classList.remove('hide');
            card.classList.add('show');
            anyVisible = true;
        } else {
            card.classList.remove('show');
            card.classList.add('hide');
        }
    });

    // Show or hide the not-found image
    notFoundImage.style.display = anyVisible ? 'none' : 'block';
});

clearBtn.addEventListener('click', () => {
    searchInput.value = '';
    clearBtn.style.display = 'none';

    cards.forEach(card => {
        card.classList.remove('hide');
        card.classList.add('show');
    });

    searchInput.focus();
});
</script>