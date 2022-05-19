<header id="header" class="container-fluid">
    <nav class="navbar navbar-light bg-white navbar-expand-md px-3 row shadow-sm">
        <a class="navbar-brand d-none d-sm-block"
            href="<?php echo routePath('home'); ?>">
            <img src="img/2.png" height="25px" style="border-radius: 4px; box-shadow: 2px 2px 2px black;" alt="">
        </a>
        <button class="navbar-toggler mr-auto ml-2" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!--  Collapse and left most  -->
        <div class="collapse navbar-collapse justify-content-center order-last" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <?php if (checkIfAuth()) { ?>
                <!-- <li class="nav-item">
                    <a class="nav-link text-dark {{ request()->is('/') || request()->is('project*') ? 'active-link' : '' }}"
                        href="{{ route('home') }}">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ request()->is('repositor*') ? 'active-link' : '' }}"
                        href="{{ route('repositories') }}">Repositories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ request()->is('reminders') ? 'active-link' : '' }}"
                        href="{{ route('reminders_view') }}">Reminders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ request()->is('notes') ? 'active-link' : '' }}"
                        href="{{ route('notes_view') }}">Notes</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link text-dark"
                        href="<?php echo routePath('task'); ?>">Task
                        Lists</a>
                </li>
                <?php } ?>
            </ul>
            <!-- Right Side Of Collapse -->
        </div>

        <?php if (checkIfAuth()) { ?>
        <div id="notifications" class="d-flex order-0 order-md-last">
            <div class="dropdown nav-item">
                <a class="nav-link notification-bell" href="#" id="bell" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <div class="media-body">
                            <i class="bi bi-bell-fill"></i>
                            <span class="___class_+?28___" id="notification_count">0</span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right py-0 overflow-hidden not-dropdown"
                    id="notification-dropdown">
                    <!-- List group -->
                    <div id="notification_list">

                    </div>
                    <div id="no_notifications" aria-hidden="true" class="dropdown-item text-center py-1">No new
                        notifications</div>
                    <!-- <a id="view_all" href="{{ route('notifications-view') }}" class="dropdown-item text-center py-1"
                        style="color: #075db8; font-size: 0.875rem">View
                        all</a> -->
                </div>
            </div>
        </div>
        <div id="right_dropdown" class="d-flex order-1 order-md-last">
            <div class="dropdown nav-item">
                <div class="media align-items-center dropdown-toggle" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    <!-- @isset($user_data->photo)
                    <img class="rounded-circle avatar" alt="user" src="{{ url('storage/images/' . $user_data->photo) }}"
                        data-holder-rendered="true">
                    @else
                    <div class="avatar-text rounded-circle mx-auto">
                        <span style="color: #e9ecef;" class="text-center text-uppercase font-weight-bolder">{{
                            $user_data->first_letter }}</span>
                    </div>
                    @endisset
                    <div class="media-body d-none d-md-block ml-1">
                        <span class="nav-link px-0 pl-1">{{ $user_data->name }}</span>
                    </div> -->
                </div>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0 overflow-hidden">
                    <!-- <a class="dropdown-item" href="{{ route('profile') }}">My Profile</a>
                    <a class="dropdown-item" href="{{ route('reports') }}">Reports</a> -->
                    <a class="dropdown-item"
                        href="<?php echo routePath('logout'); ?>"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Sign Out
                    </a>

                    <form id="logout-form"
                        action="<?php echo routePath('home'); ?>"
                        method="POST" class="d-none">
                        <?php csrf_field(); ?>
                    </form>
                </div>
            </div>
        </div>
        <?php } ?>
    </nav>
</header>