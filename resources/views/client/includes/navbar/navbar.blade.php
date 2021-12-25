 <!--Header Section Start-->

 <header class="header d-none d-lg-block">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand logo" href="{{ route('client.dashboard') }}">
                <img src="{{ asset('_assets/_client/images/logo.svg') }}" alt="dashboard" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class=" menu navbar-nav ms-auto mb-lg-0 align-items-md-center">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Service</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('client.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('client.order.index') }}">Orders</a>
                    </li>
                    <li class="nav-item dropdown dropdown-notification">
                    <a class="nav-link dropdown-toggle dropdown-toggle-icon" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('_assets/_client/images/notification.svg') }}" alt="dashboard" class="img-fluid">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                        <div class="notification-menu">
                            <p>Notifications</p>
                            <button class="btn mark-btn">Mark all read</button>
                        </div>
                        </li>
                        <li>
                        <a href="#">Congrats! Your order DWXYZ12345 has been delivered.</a>
                        </li>
                        <li>
                        <a href="#">Your revision request is accepted.</a>
                        </li>
                        <li>
                        <a href="#">Your profile picture has been changed</a>
                        </li>
                        <li>
                        <a href="#">Congrats! Your order has been delivered.</a>
                        </li>
                        <li>
                        <a href="#">New message - Order DWXYZ1234</a>
                        </li>
                        <li>
                        <a href="{{ route('client.notifications.index') }}">Read all notifications</a>
                        </li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown dropdown-profile">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('_assets/_client/images/profile.svg') }}" alt="dashboard">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item active" href="{{ route('client.dashboard') }}">Dashboard</a></li>
                        <li><a class="dropdown-item" href="{{ route('client.order.index') }}">Orders</a></li>
                        <li><a class="dropdown-item" href="{{ route('client.settings.index') }}">Setting</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                    </li>
                </ul>
                </div>
            </nav>
    </div>
</header>

    <!--Header Section End-->
