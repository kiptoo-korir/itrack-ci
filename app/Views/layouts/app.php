<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="{csrf_header}" content="{csrf_hash}">

    <title><?php env('CI_APP_NAME', 'iTrack'); ?>
    </title>

    <!-- Scripts -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

    <!-- favicon  -->
    <link rel="shortcut icon" href="img/itrack_icon_2.png" type="image/x-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <!-- Styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/spinner.css">
    <link rel="stylesheet" href="css/simple_toast.min.css">

    <style>
        .avatar-text {
            height: 40px;
            width: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #e9ecef;
            background-color: #075db8;
            font-size: 20px;
        }

        .avatar {
            height: 40px;
            width: 40px;
        }

        #app {
            min-height: 100vh;
        }
    </style>
    <?php echo $this->renderSection('css_scripts'); ?>
</head>

<body>
    <div id="app" class="bg-light">
        <?php echo $this->include('components/navbar-authenticated'); ?>
        <!-- TODO: Include no token cta later -->
        <main class="py-4">
            <?php echo $this->include('components/spinner'); ?>
            <?php echo $this->renderSection('content'); ?>
            <?php echo $this->renderSection('modals'); ?>
        </main>
    </div>
</body>
<script src="js/jquery-3.6.0.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/simple_toast.min.js"></script>
<script src="js/custom.js"></script>
<script>
    const simpleToast = new SimpleToast({
        duration: 6000,
        position: "top-right"
    });
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('notification-dropdown').addEventListener('click', function(e) {
            e.stopPropagation();
        });
    });
</script>
<?php echo $this->renderSection('js_scripts'); ?>

</html>