<!--- HEADER --->
<?php include('./includes/header.php');
if($_COOKIE['uid']){
	$_SESSION['uid'] = $_COOKIE['uid'];
	$_SESSION['firstname'] = $_COOKIE['firstname'];
	$_SESSION['email'] = $_COOKIE['email'];
	$_SESSION['user_type'] = $_COOKIE['user_type'];
}
?>

<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">

        <!--- SIDEBAR --->
        <?php include('./includes/sidebar.php') ?>

        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <?php include('./includes/topnavbar.php');?>

            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-fluid">
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">
                    <div class="row my-4">
                        <div class="col-xl-12 col-lg-7">
                            <p class="fs-5">Empower yourself and your team with access to the <b>InfoTroop
                                    Knowledgebase</b> – a centralized library of technical guides, how-to,
                                troubleshooting steps, and best practices.</p>
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between">
                                    <h1 class="m-0 font-weight-bold mb-3 mb-md-0">Resolution Overview</h1>

                                    <div class="d-flex flex-column flex-md-row gap-2">
                                        <input class="form-control" type="search" name="search" id="search"
                                            placeholder="Search...">
                                        <select class="form-select" aria-label="Select category">
                                            <option hidden selected>Choose filter..</option>
                                            <option value="1">Hardware</option>
                                            <option value="2">Software</option>
                                            <option value="3">Network</option>
                                            <option value="4">Warranty</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Popular Articles -->
                                        <h2 class="mb-3">Popular Articles</h2>
                                        <div class="accordion col-md-6 col-xl-6 mb-4" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        How to Check OEM Warranty Status?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the first item's accordion body.</strong> It is
                                                        shown by default, until the collapse plugin adds the appropriate
                                                        classes that we use to style each element. These classes control
                                                        the
                                                        overall appearance, as well as the showing and hiding via CSS
                                                        transitions. You can modify any of this with custom CSS or
                                                        overriding our default variables. It's also worth noting that
                                                        just
                                                        about any HTML can go within the <code>.accordion-body</code>,
                                                        though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        AMC vs ATS – What’s the Difference?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the second item's accordion body.</strong> It is
                                                        hidden by default, until the collapse plugin adds the
                                                        appropriate
                                                        classes that we use to style each element. These classes control
                                                        the
                                                        overall appearance, as well as the showing and hiding via CSS
                                                        transitions. You can modify any of this with custom CSS or
                                                        overriding our default variables. It's also worth noting that
                                                        just
                                                        about any HTML can go within the <code>.accordion-body</code>,
                                                        though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        Common Printer Issues & Fixes
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the third item's accordion body.</strong> It is
                                                        hidden by default, until the collapse plugin adds the
                                                        appropriate
                                                        classes that we use to style each element. These classes control
                                                        the
                                                        overall appearance, as well as the showing and hiding via CSS
                                                        transitions. You can modify any of this with custom CSS or
                                                        overriding our default variables. It's also worth noting that
                                                        just
                                                        about any HTML can go within the <code>.accordion-body</code>,
                                                        though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFour">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">
                                                        Step-by-Step: RAM Upgrade for Laptops
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the fourth item's accordion body.</strong> It is
                                                        hidden by default, until the collapse plugin adds the
                                                        appropriate
                                                        classes that we use to style each element. These classes control
                                                        the
                                                        overall appearance, as well as the showing and hiding via CSS
                                                        transitions. You can modify any of this with custom CSS or
                                                        overriding our default variables. It's also worth noting that
                                                        just
                                                        about any HTML can go within the <code>.accordion-body</code>,
                                                        though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-xl-6">
                                            <div
                                                class="card card-body justify-content-center align-items-center shadow">
                                                <h3>Contribute an Article</h3>
                                                <p class="text-muted fs-5">Have a trick or solution that works?</p>
                                                <form class="form-control" id="article"
                                                    onSubmit="alert('Thank you for the valuable contribution')">
                                                    <input class="form-control mb-4" type="text" name="articleTitle"
                                                        id="articleTitle" placeholder="Article Title" required>
                                                    <textarea class="form-control mb-4  " type="textarea" rows="3"
                                                        name="solution" id="solution" placeholder="Enter solution"
                                                        required></textarea>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-text">
                                                            <input id="article-checkbox" class="form-check-input mt-0"
                                                                type="checkbox" value="" data-bs-toggle="tooltip"
                                                                title="Check to suggest edits in existing articles">
                                                        </div>
                                                        <select class="form-select" id="extraInput" disabled>
                                                            <option hidden selected>Choose...</option>
                                                            <option value="1">Article 1</option>
                                                            <option value="2">Article 2</option>
                                                            <option value="3">Article 3</option>
                                                        </select>
                                                    </div>
                                                    <button class="btn btn-success w-50" type="sumbit">Submit
                                                        review</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
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
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
<!--end::Main-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->
<?php include('./includes/footer.php') ?>


<script>
const checkbox = document.querySelector("#article-checkbox");
const extraInput = document.querySelector("#extraInput");

checkbox.addEventListener("change", () => {
    extraInput.disabled = !checkbox.checked;
});
</script>