<!-- <div style="background-color: red;"> -->
 
 <!-- Modal -->
<div class="modal fade" id="supportModal" tabindex="-1" aria-labelledby="supportModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact Support</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       If you need any assistance or encounter an issue with your account, please don't hesitate to contact us here:
       <br><br>
       <b>Email:</b> shirin@bookmyyacht.us / team@bookmyyacht.us
       <br>
       <b>WhatsApp:</b> <a href="https://wa.me/17862977769">+1 (786) 297-7769</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>  
    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.svg" alt="" height="30">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Book My Yacht</span>
                        </span>
                    </a>

                    <a href="" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.svg" alt="" height="30">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Book My Yacht</span>
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

            </div>

            <div class="d-flex">

            <div class="dropdown d-none d-sm-inline-block">
<button type="button" class="btn header-item" data-bs-toggle="modal" data-bs-target="#supportModal" >
                                <i class="fas fa-headset" style="color: white;"></i>
                                
                            </button>
</div>


  

        <div class="dropdown d-none d-sm-inline-block">
            <button type="button" class="btn header-item" id="mode-setting-btn">
                <i data-feather="moon" class="icon-lg  far fa-moon"></i>
                <i data-feather="sun" class="icon-lg layout-mode-light"></i>
            </button>
        </div>


        <!-- notification icon-->
        <!--  setting icon -->

        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 
                 <div  class="dropdown d-none d-sm-inline-block">
                        <i class="rounded-circle header-profile-user" data-feather="user"></i><span></span>
                </div>
                
            <!--<img  src="<?php echo site_url('public/');?>assets/images/users/avatar-1.jpg"-->
            <!--alt="Header Avatar">-->
            <!-- <span class="d-none d-xl-inline-block ms-1 fw-medium">Paul K.</span> -->
            <span class="d-none d-xl-inline-block ms-1 fw-medium"><?= session('name') ?></span>
            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
<!--             <a class="dropdown-item" href="apps-contacts-profile.html"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
            <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock screen</a>
            <div class="dropdown-divider"></div> -->
            <a class="dropdown-item" href="<?php echo base_url('logout'); ?>"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>

        </div>
    </div>

</div>
</div>
</header>
</div>


