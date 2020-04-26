<!DOCTYPE html>
<html class="hide-sidebar ls-bottom-footer" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <!-- Compressed Vendor BUNDLE
    Includes vendor (3rd party) styling such as the customized Bootstrap and other 3rd party libraries used for the current theme/module -->
    <link href="assets/css/vendor.min.css" rel="stylesheet">
    <!-- Compressed Theme BUNDLE
Note: The bundle includes all the custom styling required for the current theme, however
it was tweaked for the current theme/module and does NOT include ALL of the standalone modules;
The bundle was generated using modern frontend development tools that are provided with the package
To learn more about the development process, please refer to the documentation. -->
    <!-- <link href="assets/css/theme.bundle.min.css" rel="stylesheet"> -->
    <!-- Compressed Theme CORE
This variant is to be used when loading the separate styling modules -->
    <link href="assets/css/theme-core.min.css" rel="stylesheet">
    <!-- Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL modules are 100% compatible -->
    <link href="assets/css/module-essentials.min.css" rel="stylesheet" />
    <link href="assets/css/module-material.min.css" rel="stylesheet" />
    <link href="assets/css/module-layout.min.css" rel="stylesheet" />
    <link href="assets/css/module-sidebar.min.css" rel="stylesheet" />
    <link href="assets/css/module-sidebar-skins.min.css" rel="stylesheet" />
    <link href="assets/css/module-navbar.min.css" rel="stylesheet" />
    <link href="assets/css/module-messages.min.css" rel="stylesheet" />
    <link href="assets/css/module-carousel-slick.min.css" rel="stylesheet" />
    <link href="assets/css/module-charts.min.css" rel="stylesheet" />
    <link href="assets/css/module-maps.min.css" rel="stylesheet" />
    <link href="assets/css/module-colors-alerts.min.css" rel="stylesheet" />
    <link href="assets/css/module-colors-background.min.css" rel="stylesheet" />
    <link href="assets/css/module-colors-buttons.min.css" rel="stylesheet" />
    <link href="assets/css/module-colors-text.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- If you don't need support for Internet Explorer <= 8 you can safely remove these -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="login">
    <div id="content">
        <div class="container-fluid">
            <div class="lock-container">
                <div class="panel panel-default text-center paper-shadow" data-z="0.5">
                    <h1 class="text-display-1 text-center margin-bottom-none">Log In</h1>
                     <img width='75%;' src='assets/images/imglogo.png' >
                    <div class="panel-body">
                    <form action="cek-login.php" enctype="multipard/form-data" method="POST">
                        <div class="form-group">
                            <div class="form-control-material">
                                <input class="form-control" id="username" name="txtUsername" type="text" placeholder="Enter Username"  required>
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-control-material">
                                <input class="form-control" id="password" name="txtPassword" type="password" placeholder="Enter Password" required>
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <a href="index.php" class="btn btn-danger">Batal</a>
                        <button type="submit" class="btn btn-primary">Login <i class="fa fa-fw fa-unlock-alt"></i></button> <br><br>
                        <div>
                            <a href="https://api.whatsapp.com/send?phone=6282213375776&text=Halo%20Admin!%20saya%20ingin%20mengatur%20ulang%20password.%20Username%20saya:%20">Lupa Password? Klik disini</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <strong></strong> 
    </footer>
    <!-- // Footer -->
    <!-- Inline Script for colors and config objects; used by various external scripts; -->
    <script>
    var colors = {
        "danger-color": "#e74c3c",
        "success-color": "#81b53e",
        "warning-color": "#f0ad4e",
        "inverse-color": "#2c3e50",
        "info-color": "#2d7cb5",
        "default-color": "#6e7882",
        "default-light-color": "#cfd9db",
        "purple-color": "#9D8AC7",
        "mustard-color": "#d4d171",
        "lightred-color": "#e15258",
        "body-bg": "#f6f6f6"
    };
    var config = {
        theme: "html",
        skins: {
            "default": {
                "primary-color": "#42a5f5"
            }
        }
    };
    </script>
    <!-- Separate Vendor Script Bundles -->
    <script src="assets/js/vendor-core.min.js"></script>
    <script src="assets/js/vendor-countdown.min.js"></script>
    <script src="assets/js/vendor-tables.min.js"></script>
    <script src="assets/js/vendor-forms.min.js"></script>
    <script src="assets/js/vendor-carousel-slick.min.js"></script>
    <script src="assets/js/vendor-player.min.js"></script>
    <script src="assets/js/vendor-charts-flot.min.js"></script>
    <script src="assets/js/vendor-nestable.min.js"></script>
    <!-- <script src="js/vendor-angular.min.js"></script> -->
    <!-- Compressed Vendor Scripts Bundle
    Includes all of the 3rd party JavaScript libraries above.
    The bundle was generated using modern frontend development tools that are provided with the package
    To learn more about the development process, please refer to the documentation.
    Do not use it simultaneously with the separate bundles above. -->
    <!-- <script src="js/vendor-bundle-all.min.js"></script> -->
    <!-- Compressed App Scripts Bundle
    Includes Custom Application JavaScript used for the current theme/module;
    Do not use it simultaneously with the standalone modules below. -->
    <!-- <script src="js/module-bundle-main.min.js"></script> -->
    <!-- Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL the modules are 100% compatible -->
    <script src="assets/js/module-essentials.min.js"></script>
    <script src="assets/js/module-material.min.js"></script>
    <script src="assets/js/module-layout.min.js"></script>
    <script src="assets/js/module-sidebar.min.js"></script>
    <script src="assets/js/module-carousel-slick.min.js"></script>
    <script src="assets/js/module-player.min.js"></script>
    <script src="assets/js/module-messages.min.js"></script>
    <script src="assets/js/module-maps-google.min.js"></script>
    <script src="assets/js/module-charts-flot.min.js"></script>
    <!-- [html] Core Theme Script:
        Includes the custom JavaScript for this theme/module;
        The file has to be loaded in addition to the UI modules above;
        module-bundle-main.js already includes theme-core.js so this should be loaded
        ONLY when using the standalone modules; -->
    <script src="assets/js/theme-core.min.js"></script>
</body>
</html>