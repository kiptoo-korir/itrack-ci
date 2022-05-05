<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title><?php env('CI_APP_NAME', 'iTrack'); ?></title>

    <!-- Scripts -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

    <!-- favicon  -->
    <link rel="shortcut icon" href="/img/itrack_icon_2.png" type="image/x-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <!-- Styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/toast_spinner.css">

    <?php echo $this->renderSection('css_scripts'); ?>

    <style>
        #app {
            min-height: 100vh;
        }

        .text-black {
            color: black !important;
        }

        .btn-navy {
            background: #075db8;
            color: #f8f9fa !important;
            border-color: #075db8;
        }

        .btn-navy:hover {
            background: #f8f9fa;
            color: #075db8 !important;
            border-color: #075db8;
        }
    </style>
</head>

<body>
    <div id="app" class="bg-light">
    <header id="header" class="shadow-sm">
            <div class="container">
                <nav id="navbar-landing" class="navbar navbar-light bg-light px-3 row">
                    <a class="navbar-brand" href="<?php echo routePath('home'); ?>">
                        <img src="img/2.png" height="25px"
                            style="border-radius: 4px; box-shadow: 2px 2px 2px black;" alt="">
                    </a>
                    <!-- Right Side Of Collapse -->
                    <ul class="ml-auto list-unstyled d-flex flex-row my-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link text-black" href="<?php echo routePath('signup-view'); ?>">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="<?php echo routePath('signup-view'); ?>">Sign Up</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <main class="py-4">
            
            <?php echo $this->renderSection('content'); ?>
            
            <?php echo $this->renderSection('modals'); ?>
        </main>
    </div>
</body>
<script src="js/jquery-3.6.0.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/toast.js"></script>
<?php echo $this->renderSection('js_scripts'); ?>

</html>
