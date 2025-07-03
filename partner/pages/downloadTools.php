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
.form-check-input:checked+.form-check-label {
    color: black !important;
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

            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-fluid">
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                            data-bs-target="#kt_account_profile_details" aria-expanded="true"
                            aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Download Free Tools <i class="fas fa-download fs-2"></i></h3>

                            </div>
                            <!--end::Card title-->
                        </div>
                        <div class="card-body">
                            <!--begin::Content-->
                            <div id="kt_account_settings_profile_details" class="collapse show">
                                <!--begin::Form-->
                                <div id="kt_account_profile_details_form">
                                    <!--begin::Card body-->
                                    <div class="container py-5">
                                        <h1 class="mb-4 text-center">Select Software to Download </h1>
                                        <form method="post" action="../assets/js/generate_script.php" id="softwareForm">
                                            <div class="row row-cols-1 row-cols-md-3 g-4">

                                                <!-- Web Browsers -->
                                                <div class="col">
                                                    <div class="card h-100">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Web Browsers</h5>
                                                            <p class="card-text">Fast, secure browser.</p>
                                                            <div class="row">
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="chrome"
                                                                        id="chrome">
                                                                    <label class="form-check-label" for="chrome">
                                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e1/Google_Chrome_icon_%28February_2022%29.svg"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="Chrome logo">
                                                                        Google Chrome</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="opera"
                                                                        id="opera">
                                                                    <label class="form-check-label" for="opera">
                                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/49/Opera_2015_icon.svg"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="Opera logo">
                                                                        Opera 64-bit</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="brave"
                                                                        id="brave">
                                                                    <label class="form-check-label" for="brave">
                                                                        <img src="https://images.icon-icons.com/2699/PNG/512/brave_logo_icon_167780.png"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="Brave logo">
                                                                        Brave 64-bit</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="edge"
                                                                        id="edge">
                                                                    <label class="form-check-label" for="edge">
                                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/98/Microsoft_Edge_logo_%282019%29.svg"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="Edge logo">
                                                                        Microsoft Edge 64-bit</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Media Player -->
                                                <div class="col">
                                                    <div class="card h-100">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Media Player</h5>
                                                            <p class="card-text">Play any video or audio format.</p>
                                                            <div class="row">
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="vlc_64"
                                                                        id="vlc_64">
                                                                    <label class="form-check-label" for="vlc_64">
                                                                        <img src="http://upload.wikimedia.org/wikipedia/commons/3/38/VLC_icon.png"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="vlc logo">
                                                                        VLC 64-bit</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="vlc_32"
                                                                        id="vlc_32">
                                                                    <label class="form-check-label" for="vlc_32">
                                                                        <img src="http://upload.wikimedia.org/wikipedia/commons/3/38/VLC_icon.png"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="vlc logo">
                                                                        VLC 32-bit</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="spotify"
                                                                        id="spotify">
                                                                    <label class="form-check-label" for="spotify">
                                                                        <img src="https://ninite.com/static/app_icons2/X4XEFHP4PS5JTTFLD5GZ736MSE.png"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="vlc logo">
                                                                        Spotify</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="itunes"
                                                                        id="itunes">
                                                                    <label class="form-check-label" for="itunes">
                                                                        <img src="https://ninite.com/static/app_icons2/XVHE53C2TRG4WZZWHTIG26ZQOM.png"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="vlc logo">
                                                                        iTunes</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="winamp"
                                                                        id="winamp">
                                                                    <label class="form-check-label" for="winamp">
                                                                        <img src="https://ninite.com/static/app_icons/winamp2-cda3f4d6e7939016035bd4bff51c04f8.png"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="vlc logo">
                                                                        Winamp</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Developer Tools -->
                                                <div class="col">
                                                    <div class="card h-100">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Developer Tools</h5>
                                                            <p class="card-text">Source code and text editor.</p>
                                                            <div class="row">
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="notepadpp"
                                                                        id="notepadpp">
                                                                    <label class="form-check-label" for="notepadpp">
                                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/69/Notepad%2B%2B_Logo.svg"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="vlc logo">
                                                                        Notepad++</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="git"
                                                                        id="git">
                                                                    <label class="form-check-label" for="git">
                                                                        <img src="https://cdn.worldvectorlogo.com/logos/git-bash.svg"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="git logo">
                                                                        Git</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="eclipse"
                                                                        id="eclipse">
                                                                    <label class="form-check-label" for="eclipse">
                                                                        <img src="https://cdn.worldvectorlogo.com/logos/eclipse-11.svg"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="eclipse logo">
                                                                        Eclipse IDE</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="vscode"
                                                                        id="vscode">
                                                                    <label class="form-check-label" for="vscode">
                                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Visual_Studio_Code_1.35_icon.svg"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="vscode logo">
                                                                        VS Code</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="cursor"
                                                                        id="cursor">
                                                                    <label class="form-check-label" for="cursor">
                                                                        <img src="https://cdn.brandfetch.io/ideKwS9dxx/w/400/h/400/theme/dark/icon.jpeg?c=1dxbfHSJFAPEGdCLU4o5B"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="vscode logo">
                                                                        Cursor</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="python"
                                                                        id="python">
                                                                    <label class="form-check-label" for="python">
                                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="vscode logo">
                                                                        Python 3.13.5</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Messaging -->
                                                <div class="col">
                                                    <div class="card h-100">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Messaging</h5>
                                                            <p class="card-text">Calls and messaging</p>
                                                            <div class="row">
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="zoom"
                                                                        id="zoom">
                                                                    <label class="form-check-label" for="zoom">
                                                                        <img src="https://ninite.com/static/app_icons2/PJTYHUUK2NBMDWBSTCHT3ZHCEA.png"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="Zoom logo">
                                                                        Zoom</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="discord"
                                                                        id="discord">
                                                                    <label class="form-check-label" for="discord">
                                                                        <img src="https://ninite.com/static/app_icons2/5BU6KXYGWSLK4XSZLZIF5MQKUQ.png"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="Discord logo">
                                                                        Discord</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="teams"
                                                                        id="teams">
                                                                    <label class="form-check-label" for="teams">
                                                                        <img src="https://ninite.com/static/app_icons2/LQBAFT2ME2CCBL2QNTAKH3AM5M.png"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="Teams logo">
                                                                        Teams</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="webex"
                                                                        id="webex">
                                                                    <label class="form-check-label" for="webex">
                                                                        <img src="https://avatars.slack-edge.com/2021-06-24/2233642559168_0ece5626019f23253940_512.png"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="Webex logo">
                                                                        Webex</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- Compression -->
                                                <div class="col">
                                                    <div class="card h-100">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Compression</h5>
                                                            <p class="card-text">Compress Files and Folders</p>
                                                            <div class="row">
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="7zip"
                                                                        id="7zip">
                                                                    <label class="form-check-label" for="7zip">
                                                                        <img src="https://ninite.com/static/app_icons/7-Zip-a85fd30a99bbe737bac2408a7f7f281f.png"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="7-Zip logo">
                                                                        7-Zip</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="WinRAR"
                                                                        id="WinRAR">
                                                                    <label class="form-check-label" for="WinRAR">
                                                                        <img src="https://ninite.com/static/app_icons2/NRI2CC4JKEOQVLNYMCPEFOQK7M.png"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="WinRAR logo">
                                                                        WinRAR</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="winzip"
                                                                        id="winzip">
                                                                    <label class="form-check-label" for="winzip">
                                                                        <img src="https://upload.wikimedia.org/wikipedia/de/9/9a/Winzip-logo.svg"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="WinZip logo">
                                                                        WinZip</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Online Storage -->
                                                <div class="col">
                                                    <div class="card h-100">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Online Storage</h5>
                                                            <p class="card-text">Store and fetch data Online</p>
                                                            <div class="row">
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="dropbox"
                                                                        id="dropbox">
                                                                    <label class="form-check-label" for="dropbox">
                                                                        <img src="https://ninite.com/static/app_icons2/K4S33DWJMHIJLGM4ZP6LNH2EV4.png"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="Dropbox logo">
                                                                        Dropbox</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="oneDrive"
                                                                        id="oneDrive">
                                                                    <label class="form-check-label" for="oneDrive">
                                                                        <img src="https://ninite.com/static/app_icons2/TDPZSKLLNQHD76P7GMWUYBSYUU.png"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover"
                                                                            alt="OneDrive logo">
                                                                        OneDrive</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]"
                                                                        value="google-drive" id="google-drive">
                                                                    <label class="form-check-label" for="google-drive">
                                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/d/da/Google_Drive_logo.png"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover"
                                                                            alt="Google Drive logo">
                                                                        Google Drive</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="sugarSync"
                                                                        id="sugarSync">
                                                                    <label class="form-check-label" for="sugarSync">
                                                                        <img src="https://ninite.com/static/app_icons/sugarsync-e54f075bb9bca7c2329f4b7ad283d724.png"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover"
                                                                            alt="Sugar Sync logo">
                                                                        Sugar Sync</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Utilities -->
                                                <div class="col">
                                                    <div class="card h-100">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Utilities</h5>
                                                            <p class="card-text">Tools and services Online</p>
                                                            <div class="row">
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="anyDesk"
                                                                        id="anyDesk">
                                                                    <label class="form-check-label" for="anyDesk">
                                                                        <img src="https://ninite.com/static/app_icons2/5Z7TFQBFUQREUBBJFOC3YBPVWY.png"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="AnyDesk logo">
                                                                        AnyDesk</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="teamviewer"
                                                                        id="teamviewer">
                                                                    <label class="form-check-label" for="teamviewer">
                                                                        <img src="https://ninite.com/static/app_icons2/NQ7A6XLSO6MEWKKVSYP5PVAOWM.png"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover"
                                                                            alt="Team Viewer logo">
                                                                        Team Viewer</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]"
                                                                        value="realVNCViewer" id="realVNCViewer">
                                                                    <label class="form-check-label" for="realVNCViewer">
                                                                        <img src="https://ninite.com/static/app_icons/RealVNC-668fdddfced0f30d6c7f76b754907a7f.png"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover"
                                                                            alt="RealVNC Viewer logo">
                                                                        RealVNC Viewer</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]"
                                                                        value="RealVNCServer" id="RealVNCServer">
                                                                    <label class="form-check-label" for="RealVNCServer">
                                                                        <img src="https://ninite.com/static/app_icons/RealVNCServer-2a10b6ad9d780b92bbe5dd487497b706.png"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover"
                                                                            alt="RealVNC Server logo">
                                                                        RealVNC Server</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- .Net -->
                                                <div class="col">
                                                    <div class="card h-100">
                                                        <div class="card-body">
                                                            <h5 class="card-title">.Net</h5>
                                                            <p class="card-text">Platform for building Applications</p>
                                                            <div class="row">
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="dotNet8"
                                                                        id="dotNet8">
                                                                    <label class="form-check-label" for="dotNet8">
                                                                        <img src="https://ninite.com/static/app_icons/dotnet-1863f6ffe9fdc1d4fadfb9b16cf37dfd.png"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt=".Net logo">
                                                                        .Net v8.0.411</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="dotNet9"
                                                                        id="dotNet9">
                                                                    <label class="form-check-label" for="dotNet9">
                                                                        <img src="https://ninite.com/static/app_icons/dotnet-1863f6ffe9fdc1d4fadfb9b16cf37dfd.png"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt=".Net logo">
                                                                        .Net 9.0.200</label>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Java -->
                                                <div class="col">
                                                    <div class="card h-100">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Java</h5>
                                                            <p class="card-text">Programming language and development platform</p>
                                                            <div class="row">
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="jdk24"
                                                                        id="jdk24">
                                                                    <label class="form-check-label" for="jdk24">
                                                                        <img src="https://www.beagleboard.org/app/uploads/2021/03/2081.svg"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="JDK 24 logo">
                                                                        JDK 24</label>
                                                                </div>
                                                                <div class="form-check my-2">
                                                                    <input class="form-check-input app-checkbox"
                                                                        type="checkbox" name="apps[]" value="jdk17"
                                                                        id="jdk17">
                                                                    <label class="form-check-label" for="jdk17">
                                                                        <img src="https://www.beagleboard.org/app/uploads/2021/03/2081.svg"
                                                                            height="15px" width="auto"
                                                                            style="object-fit:cover" alt="JDK 17 logo">
                                                                        JDK 17.0.14 </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center my-5">
                                                <button type="submit" class="btn btn-primary btn-lg" id="downloadBtn"
                                                    disabled>
                                                    Download Selected Apps <i class="fas fa-download fs-4"></i>
                                                </button>
                                            </div>
                                        </form>

                                    </div>



                                    <!--end::Card body-->

                                </div>
                                <!--end::Form-->
                            </div>
                        </div>
                        <!--end::Content-->
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
/*Swal.fire({
                text: "Unfortunately! Your current plan does not have access to this page.",
                icon: "warning",
                buttonsStyling: !1,
                confirmButtonText: "Ok, got it!",
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            }).then((function(e) {
                location.href = "<?php echo BASE_URL;?>pages/dashboard.php";
            }))*/


// disble download button

document.addEventListener("DOMContentLoaded", () => {
    const checkboxes = document.querySelectorAll('.app-checkbox');
    const downloadBtn = document.getElementById('downloadBtn');

    const toggleButton = () => {
        const anyChecked = Array.from(checkboxes).some(cb => cb.checked);
        downloadBtn.disabled = !anyChecked;
    };

    checkboxes.forEach(cb => {
        cb.addEventListener('change', toggleButton);
    });

    toggleButton(); // Initial check on load
});
</script>