<!-- Small header -->

    <!--  header-->
    <!-- navbar  -->
    <header class="designwalaHeader d-lg-none d-sm-block" id="designwalaHeader">
      <nav class="navbar navbar-expand-lg navbar-dark designwalaNavbarColor">
          <div class="container">
            <a class="navbar-brand text-white font-weight-bold" href="{{ route('client.dashboard') }}">
              <img class="img-fluid img-2" src="{{ asset('_assets/_client/images/mobile-logo.svg') }}" alt="designwala">
            </a>
            <button data-trigger="#navbar_main" class="d-lg-none btn bg-whit2" type="button">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-ui-radios-grid" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3.5 15a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm9-9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zM16 3.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0zm-9 9a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0zm5.5 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zm-9-11a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 2a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
              </svg>
            </button>
            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div> -->
          </div>
      </nav>
    </header>
      <!--nav for offcanvas -->
    <div class="offcanvasnav" id="offcanvasnav">
          <div class="container">
              <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg navbar-dark bg-white  d-lg-none d-sm-block shadow">
                  <div class="offcanvas-header">
                    <h2>Designwala</h2>
                    <button class="btn  btn-close "></button>
                  </div>
                  <ul class="nav bd-links flex-column ">
                    <li class="nav-item clearfix">
                      <a class="nav-link collapsed " data-bs-toggle="collapse" href="#services" role="button" aria-expanded="false">
                        <img src="{{ asset('_assets/_client/images/profile.svg') }}" alt="dashboard">
                        <span>Monica Farnandez</span>
                      </a>
                    </li>
                      <li>
                          <div class="dropdown-divider"></div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{ route('client.dashboard') }}"> Dashboard </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{ route('client.order.index') }}"> Orders </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="#"> Services </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{ route('client.settings.index') }}"> Setting </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{ route('client.notifications.index') }}"> Notifications </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="#"> Blog </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="#"> Logout </a>
                      </li>
                  </ul>
              </nav>
          </div>
    </div>

  <!--Small Header End-->
