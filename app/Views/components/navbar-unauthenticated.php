<header id="header" class="container-fluid">
    <nav class="navbar navbar-light bg-white navbar-expand-md px-3 row shadow-sm">
        <a class="navbar-brand d-none d-sm-block" href="<?php echo routePath('home'); ?>">
            <img src="img/2.png" height="25px"
                style="border-radius: 4px; box-shadow: 2px 2px 2px black;" alt="">
        </a>
        <button class="navbar-toggler mr-auto ml-2" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse and left most -->
        <div class="collapse navbar-collapse justify-content-center order-last" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">

            </ul>
            <!-- Right Side Of Collapse -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <li class="nav-item">
                    <a class="nav-link text-black" href="<?php echo routePath('login-view'); ?>">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="<?php echo routePath('signup-view'); ?>">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="<?php echo routePath('about'); ?>">About</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
