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
                            <p class="fs-4 text-center">Empower yourself and your team with access to the <b>InfoTroop
                                    Knowledgebase</b> – a centralized library of technical guides, how-to,
                                troubleshooting steps, and best practices.</p>
                            <div class="card shadow my-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between">
                                    <h1 class="m-0 font-weight-bold mb-3 mb-md-0">Resolution Overview</h1>

                                    <div class="d-flex flex-column flex-md-row gap-2">
                                        <input class="form-control" type="search" name="search" id="search"
                                            placeholder="Search...">
                                        <select class="form-select" aria-label="Select category">
                                            <option value="All" selected>All</option>
                                            <option value="1">Hardware</option>
                                            <option value="2">Software</option>
                                            <option value="3">Network</option>
                                            <option value="4">Warranty</option>
                                        </select>
                                        <div>
                                    <a class="btn btn-success rounded-circle" title="Call Support"
                                        data-bs-toggle="tooltip" href="tel:+91 1234567890">
                                        <i class="fas fa-phone-alt"></i>
                                    </a>
                                        </div>

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
                                                        1. How to Check OEM Warranty Status?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong> 1. Gather Necessary Information:</strong>
                                                        Product Serial Number/Model Number/VIN:
                                                        This is crucial for identifying your specific product and its
                                                        warranty details.
                                                        Proof of Purchase:
                                                        In some cases, the manufacturer might ask for proof of purchase
                                                        to verify the warranty start date.<br><br>
                                                        <strong>2. Online Check:</strong>
                                                        Visit the Manufacturer's Website:
                                                        Go to the official website of the product's manufacturer (e.g.,
                                                        Samsung, Dell, HP).
                                                        Navigate to Support/Warranty Section:
                                                        Look for a "Support," "Warranty," or "Product Support" section
                                                        on their website.
                                                        Enter Product Information:
                                                        You'll usually find a warranty lookup tool where you can enter
                                                        the serial number, model number, or VIN.
                                                        View Warranty Details:
                                                        The website will display the warranty status, including the
                                                        start date, end date, and any applicable coverage.<br><br>
                                                        <strong>3. Contacting Customer Support:</strong>
                                                        Find Contact Information:
                                                        Locate the manufacturer's customer support contact information
                                                        (phone number, email, or online chat) on their website.
                                                        Provide Information:
                                                        When contacting them, provide the necessary product information
                                                        (serial number, model number, or VIN) and potentially your proof
                                                        of purchase.
                                                        Inquire About Warranty Status:
                                                        Explain that you're looking to check the warranty status of your
                                                        product.
                                                        Document Information:
                                                        Record the information you receive from the customer support
                                                        representative, including the warranty details and any reference
                                                        numbers.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        2. AMC vs ATS – What’s the Difference?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        It is AMC and ATS represent distinct concepts, particularly in
                                                        the
                                                        context of business and technology. An<strong> AMC (Annual
                                                            Maintenance
                                                            Contract)</strong> is a service agreement that ensures
                                                        ongoing support
                                                        and maintenance for IT systems, while an <strong>ATS (Applicant
                                                            Tracking
                                                            System) </strong>is a software application that streamlines
                                                        the
                                                        recruitment process by managing job applications.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        3. Common Printer Issues & Fixes
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong> Common Printer Problems and Solutions:</strong>
                                                        <br><br><strong>Paper Jams:</strong>
                                                        Likely Causes: Overloaded paper tray, misaligned paper, damp or
                                                        crumpled paper.
                                                        <br><strong>Solutions:</strong> Remove jammed paper, ensure
                                                        proper paper loading, fan
                                                        paper to reduce static.
                                                        <br><br><strong>Low Ink or Toner:</strong>
                                                        Likely Causes: Frequent printing, large print jobs, old
                                                        cartridges.
                                                        <br><strong>Solutions:</strong> Check ink levels, replace
                                                        cartridges, clean print
                                                        heads.
                                                        <br><br><strong>Connectivity Problems:</strong>
                                                        Likely Causes: Loose or damaged cables, printer not on the same
                                                        network, weak Wi-Fi.
                                                        <br><strong>Solutions:</strong> Check cables, ensure printer and
                                                        computer are on the
                                                        same network, restart the printer and router.
                                                        <br><br><strong>Print Queue Problems:</strong>
                                                        Likely Causes: Multiple print jobs, corrupted print job,
                                                        malfunctioning print spooler.
                                                        <br><strong>Solutions:</strong> Clear the print queue, restart
                                                        the print spooler
                                                        service, restart the printer and computer.
                                                        <br><br><strong>Print Quality Issues:</strong>
                                                        Likely Causes: Clogged printheads, misaligned printheads,
                                                        incompatible paper.
                                                        <br><strong>Solutions:</strong> Clean printheads, align
                                                        printheads, use compatible
                                                        paper.
                                                        <br><br><strong>Incorrect IP Address:</strong>
                                                        Likely Causes: Printer set to dynamic IP, printer not configured
                                                        with a static IP.
                                                        <br><strong>Solutions:</strong> Configure the printer with a
                                                        static IP.
                                                        <br><br><strong>Wireless Network Instability:</strong>
                                                        Likely Causes: Printer too far from router, network congestion,
                                                        unstable Wi-Fi connection.
                                                        <br><strong>Solutions:</strong> Move the printer closer to the
                                                        router, reduce network
                                                        congestion, use Ethernet connection if possible.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFour">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">
                                                        4. Step-by-Step: RAM Upgrade for Laptops
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>1. Prepare your workspace:</strong>
                                                        Ensure a clean, static-free environment. Consider using an
                                                        anti-static wrist strap to prevent damage to components from
                                                        static electricity.
                                                        <br><br><strong>2. Power down and unplug:</strong>
                                                        Completely shut down the laptop and unplug it from the power
                                                        source. Remove the battery if it is removable.
                                                        <br><br><strong>3. Locate the RAM compartment:</strong>
                                                        Consult your laptop's manual for the exact location of the RAM
                                                        slots. They are typically under a panel on the bottom of the
                                                        laptop.
                                                        <br><br><strong>4. Open the RAM compartment:</strong>
                                                        Remove the screws holding the panel or cover in place and
                                                        carefully detach it.
                                                        <br><br><strong>5. Remove existing RAM (if applicable):</strong>
                                                        Gently push the clips on either side of the RAM module away from
                                                        the module to release it. Slide the old RAM out of the slot.
                                                        <br><br><strong>6. Install the new RAM:</strong>
                                                        Align the notch on the new RAM module with the notch in the
                                                        slot. Press down firmly on both ends of the module until the
                                                        clips click into place.
                                                        <br><br><strong>7. Close the compartment:</strong>
                                                        Replace the RAM compartment cover and secure it with the screws.
                                                        <br><br><strong>8. Reinstall the battery:</strong>
                                                        If removed, carefully reattach the battery.
                                                        <br><br><strong>9. Power on and verify:</strong>
                                                        Plug the laptop back in, power it on, and check the system
                                                        settings to confirm that the new RAM is recognized.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-xl-6">
                                            <div
                                                class="card card-body justify-content-center align-items-center shadow">
                                                <h3>Contribute an Article</h3>
                                                <p class="text-muted fs-5">Have a trick or solution that works?</p>
                                                <form class="form-control" id="article" onsubmit="handleSubmit(event)">
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
                                                            <option hidden selected>Choose article</option>
                                                            <option value="1">Article 1</option>
                                                            <option value="2">Article 2</option>
                                                            <option value="3">Article 3</option>
                                                        </select>
                                                    </div>
                                                    <button class="btn btn-success mt-2" type="sumbit">Submit
                                                        review</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="d-flex justify-content-center align-items-center w-100">
                                <div class="row col-md-12 mt-8 gap-10">
                                    <div class="card col-md-8 shadow">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                User Manuals
                                            </h3>
                                        </div>
                                        <p class="mt-2">A user manual, also known as an instruction manual or user
                                            guide, is a
                                            document that provides instructions and information on how to use a product,
                                            service, or system. It's designed to help users understand the product's
                                            features, functions, and how to operate it effectively, often including
                                            troubleshooting tips and safety information. </p>
                                    </div>
                                    <div class="card col-md-3 shadow">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Download Manual
                                            </h3>
                                        </div>
                                        <div class="text-center my-4">
                                        <a href="<?php echo BASE_URL;?>assets/media/img/Invoice.jpg" download
                                            class="btn btn-success mb-4 ">
                                            Download Manual
                                        </a>
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

function handleSubmit(event) {
    event.preventDefault(); // Prevent form submission

    const jsonObj = {
        message: "Thanks for the Contribution!"
    }; // Example
    Swal.fire({
        text: jsonObj.message ?? jsonObj.msg ?? "Thanks for the Contribution",
        icon: "success",
        buttonsStyling: false,
        confirmButtonText: "Ok!",
        customClass: {
            confirmButton: "btn btn-primary"
        }
    });
}
</script>