<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $apps = $_POST['apps'] ?? [];

    $softwareList = [];
//========Web Browsers========

    // Chrome
    if (in_array('chrome', $apps)) {
        $softwareList['chrome'] = [
            'name' => 'Google Chrome',
            'url' => 'https://dl.google.com/chrome/install/ChromeSetup.exe',
            'silent' => '/silent'
        ];
    }
    if (in_array('opera', $apps)) {
        $softwareList['opera'] = [
            'name' => 'Opera',
            'url' => 'https://download5.operacdn.com/pub/opera/desktop/119.0.5497.141/win/Opera_119.0.5497.141_Setup_x64.exe',
            'silent' => '/silent'
        ];
    }
    if (in_array('edge', $apps)) {
        $softwareList['edge'] = [
            'name' => 'edge',
            'url' => 'https://go.microsoft.com/fwlink/?linkid=2109047',
            'silent' => '/silent'
        ];
    }
    if (in_array('brave', $apps)) {
        $softwareList['brave'] = [
            'name' => 'Brave',
            'url' => 'https://github.com/brave/brave-browser/releases/latest/download/BraveBrowserSetup.exe',
            'silent' => '/S'
        ];
    }

//========Media Player========

    // VLC 64-bit
    if (in_array('vlc_64', $apps)) {
        $softwareList['vlc_64'] = [
            'name' => 'VLC Media Player 64-bit',
            'url' => 'https://get.videolan.org/vlc/3.0.21/win64/vlc-3.0.21-win64.exe',
            'silent' => '/S'
        ];
    }

    // VLC 32-bit
    if (in_array('vlc_32', $apps)) {
        $softwareList['vlc_32'] = [
            'name' => 'VLC Media Player 32-bit',
            'url' => 'https://get.videolan.org/vlc/3.0.21/win32/vlc-3.0.21-win32.exe',
            'silent' => '/S'
        ];
    }
    if (in_array('spotify', $apps)) {
        $softwareList['spotify'] = [
            'name' => 'Spotify',
            'url' => 'https://download.scdn.co/SpotifySetup.exe',
            'silent' => '/S'
        ];
    }
    if (in_array('itunes', $apps)) {
        $softwareList['itunes'] = [
            'name' => 'iTunes',
            'url' => 'https://secure-appldnld.apple.com/itunes12/031-69284-20160802-7E7B2D20-552B-11E6-B2B9-696CECD541CE/iTunes64Setup.exe',
            'silent' => '/S'
        ];
    }
    if (in_array('winamp', $apps)) {
        $softwareList['winamp'] = [
            'name' => 'Winamp',
            'url' => 'https://download.nullsoft.com/winamp/client/winamp592_10042_full_en-us.exe
',
            'silent' => '/S'
        ];
    }

//========Developer Tools========

    // Notepad++
    if (in_array('notepadpp', $apps)) {
        $softwareList['notepadpp'] = [
            'name' => 'Notepad++',
            'url' => 'https://github.com/notepad-plus-plus/npp/releases/latest/download/npp.exe',
            'silent' => '/S'
        ];
    }
    // Eclipse IDE
    if (in_array('eclipse', $apps)) {
        $softwareList['eclipse'] = [
            'name' => 'Eclipse Edition',
            'url' => 'https://www.eclipse.org/downloads/download.php?file=/technology/epp/downloads/release/2025-06/R/eclipse-committers-2025-06-R-win32-x86_64.zip',
            'silent' => '/S'
        ];
    }
    // Git IDE
    if (in_array('git', $apps)) {
        $softwareList['git'] = [
            'name' => 'Git',
            'url' => 'https://github.com/git-for-windows/git/releases/download/v2.50.0.windows.2/Git-2.50.0.2-64-bit.exe',
            'silent' => '/S'
        ];
    }
    // VS Code IDE
    if (in_array('vscode', $apps)) {
        $softwareList['vscode'] = [
            'name' => 'VS Code',
            'url' => 'https://update.code.visualstudio.com/latest/win32-x64-user/stable',
            'silent' => '/S'
        ];
    }
    if (in_array('cursor', $apps)) {
        $softwareList['cursor'] = [
            'name' => 'Cursor',
            'url' => 'https://downloads.cursor.com/production/3c325775412a19b2f2147eed6b33f36371f025b0/win32/x64/system-setup/CursorSetup-x64-1.2.0.exe',
            'silent' => '/S'
        ];
    }
    if (in_array('python', $apps)) {
        $softwareList['python'] = [
            'name' => 'Python',
            'url' => 'https://www.python.org/ftp/python/3.13.5/python-3.13.5-amd64.exe',
            'silent' => '/S'
        ];
    }


    //========Messaging========

    // Chrome
    if (in_array('zoom', $apps)) {
        $softwareList['zoom'] = [
            'name' => 'Zoom',
            'url' => 'https://zoom.us/client/6.5.3.7509/ZoomInstallerFull.exe',
            'silent' => '/silent'
        ];
    }
    if (in_array('discord', $apps)) {
        $softwareList['discord'] = [
            'name' => 'Discord',
            'url' => 'https://discord.com/api/downloads/distributions/app/installers/latest?channel=stable&platform=win&arch=x64',
            'silent' => '/silent'
        ];
    }
    if (in_array('teams', $apps)) {
        $softwareList['teams'] = [
            'name' => 'Teams',
            'url' => 'https://statics.teams.cdn.office.net/evergreen-assets/DesktopClient/MSTeamsSetup.exe',
            'silent' => '/silent'
        ];
    }
    if (in_array('webex', $apps)) {
        $softwareList['webex'] = [
            'name' => 'Webex',
            'url' => 'https://binaries.webex.com/WebexTeamsDesktop-Windows-Web-Installer/Webex.exe',
            'silent' => '/S'
        ];
    }


    //========Compression========

    // Chrome
    if (in_array('7zip', $apps)) {
        $softwareList['7zip'] = [
            'name' => '7-zip',
            'url' => 'https://github.com/ip7z/7zip/releases/download/24.09/7z2409.exe',
            'silent' => '/silent'
        ];
    }
    if (in_array('WinRAR', $apps)) {
        $softwareList['WinRAR'] = [
            'name' => 'WinRAR',
            'url' => 'https://www.win-rar.com/fileadmin/winrar-versions/winrar/winrar-x64-712.exe',
            'silent' => '/silent'
        ];
    }
    if (in_array('winzip', $apps)) {
        $softwareList['winzip'] = [
            'name' => 'Winzip',
            'url' => 'https://download.winzip.com/gl/gad/winzip76.exe',
            'silent' => '/silent'
        ];
    }


    //========Online Storage========

    // Chrome
    if (in_array('dropbox', $apps)) {
        $softwareList['dropbox'] = [
            'name' => 'Dropbox',
            'url' => 'http://www.dropbox.com/download?os=win&plat=win',
            'silent' => '/silent'
        ];
    }
    if (in_array('oneDrive', $apps)) {
        $softwareList['oneDrive'] = [
            'name' => 'OneDrive',
            'url' => 'https://www.techspot.com/downloads/downloadnowfile/5356/?evp=cf12c42d2092e7d6e84ee43e122c685b&file=5929',
            'silent' => '/silent'
        ];
    }
    if (in_array('google-drive', $apps)) {
        $softwareList['google-drive'] = [
            'name' => 'Google Drive',
            'url' => 'https://www.lo4d.com/get-file/google-drive/39ed0f8fcefb1fb973d327dc04e73a64/',
            'silent' => '/silent'
        ];
    }
    if (in_array('sugarSync', $apps)) {
        $softwareList['sugarSync'] = [
            'name' => 'Sugar Sync',
            'url' => 'https://sugarsync.com/downloads/p/SugarSyncSetup.exe',
            'silent' => '/silent'
        ];
    }


    //========Online Storage========

    // Chrome
    if (in_array('anydesk', $apps)) {
        $softwareList['anydesk'] = [
            'name' => 'Anydesk',
            'url' => 'https://d2u89cz5bp4jq1.cloudfront.net/FgeETzdS5SFf.exe',
            'silent' => '/silent'
        ];
    }
    if (in_array('teamviewer', $apps)) {
        $softwareList['teamviewer'] = [
            'name' => 'Team Viewer',
            'url' => 'https://download.teamviewer.com/download/TeamViewer_Setup_x64.exe',
            'silent' => '/silent'
        ];
    }
    if (in_array('realVNCViewer', $apps)) {
        $softwareList['realVNCViewer'] = [
            'name' => 'RealVNC Viewer',
            'url' => 'https://downloads.realvnc.com/download/file/viewer.files/VNC-Viewer-7.13.1-Windows.exe',
            'silent' => '/silent'
        ];
    }
    if (in_array('RealVNCServer', $apps)) {
        $softwareList['RealVNCServer'] = [
            'name' => 'RealVNC Server',
            'url' => 'https://downloads.realvnc.com/download/file/vnc.files/VNC-Server-7.13.1-Windows.exe',
            'silent' => '/silent'
        ];
    }



    //======== .NET========

    // Chrome
    if (in_array('dotNet8', $apps)) {
        $softwareList['dotNet8'] = [
            'name' => 'DotNet v8.0.411',
            'url' => 'https://builds.dotnet.microsoft.com/dotnet/Sdk/8.0.411/dotnet-sdk-8.0.411-win-x64.exe',
            'silent' => '/silent'
        ];
    }
    if (in_array('dotNet9', $apps)) {
        $softwareList['dotNet9'] = [
            'name' => 'Dot Net 9.0.200',
            'url' => 'https://builds.dotnet.microsoft.com/dotnet/Sdk/9.0.200/dotnet-sdk-9.0.200-win-x64.exe',
            'silent' => '/silent'
        ];
    }

    //======== .NET========

    // Chrome
    if (in_array('jdk24', $apps)) {
        $softwareList['jdk24'] = [
            'name' => 'JDK 24',
            'url' => 'https://download.oracle.com/java/24/latest/jdk-24_windows-x64_bin.exe ',
            'silent' => '/silent'
        ];
    }
    if (in_array('jdk17', $apps)) {
        $softwareList['jdk17'] = [
            'name' => 'JDK 17.0.14',
            'url' => 'https://download.oracle.com/otn/java/jdk/17.0.14%2B8/be06627d646e48edb99d94ff6c4c9841/jdk-17.0.14_windows-x64_bin.exe',
            'silent' => '/silent'
        ];
    }



    // Generate .bat content
    $batContent = "@echo off\n";
    $batContent .= "cd /d %~dp0\n";
    $batContent .= "echo Downloading selected software...\n";

    foreach ($softwareList as $data) {
        $filename = basename($data['url']);
        $batContent .= "curl -L -o \"$filename\" \"{$data['url']}\" || echo CURL failed for $filename >> errors.txt\n";
    }

    $batContent .= "echo Downloading complete.\npause\n";

    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="install_apps.bat"');
    echo $batContent;
    exit;
}
?>
