<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <!-- ========== Admin Section Start ========== -->
                <?php if (session()->get('role') == 'admin') : ?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="user-check"></i>
                        <span data-key="t-admin">Booking</span>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('calendar'); ?>" class="nav-link"
                            data-key="t-data-tables">Your Yacht Calendar</a>
                        </li>
                        <li><a href="<?= base_url('admin-yacht-booking'); ?>" class="nav-link"
                            data-key="t-data-tables">Yacht Booking</a>
                        </li>
                        <li><a href="<?= base_url('booking-details'); ?>" class="nav-link"
                            data-key="t-data-tables">Booking Details</a>
                        </li>
                        <li><a href="<?= base_url('user-details'); ?>" class="nav-link"
                            data-key="t-data-tables">User Details</a>
                        </li>
                        <li><a href="<?= base_url('yachtNA'); ?>" class="nav-link"
                            data-key="t-data-tables">Yacht Availability</a>
                        </li>
                        <li><a href="<?= base_url('enquiry-form'); ?>" class="nav-link"
                            data-key="t-data-tables">Enquiry Form</a>
                        </li>
                        <li><a href="<?= base_url('contact-form'); ?>" class="nav-link"
                            data-key="t-data-tables">Contact Form</a>
                        </li>
                        <li><a href="<?= base_url('contact-subscribe'); ?>" class="nav-link"
                            data-key="t-data-tables">Contact Subscribe</a>
                        </li>
                        <li><a href="<?= base_url('about-subscribe'); ?>" class="nav-link"
                            data-key="t-data-tables">About Subscribe</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="anchor"></i>
                        <span data-key="t-yachts">Yacht</span>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('yacht-record');?>" data-key="t-data-tables">Yacht List</a></li>
                    </ul>
                </li>

                <!-- manager payment -->
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="javascript: void(0);" class="has-arrow link" id="usersDropdownLink3"
                        style="color: #545a6d;">
                        <i data-feather="credit-card"></i>
                        <span data-key="t-yachts">Payment</span>
                        <!-- <i class="fas fa-angle-down" style="margin-left: 95px;"></i> -->
                    </a>

                    <ul class="sub-menu collapse" id="usersDropdown3">
                        <li><a href="<?= base_url('payment-detail'); ?>" class="nav-link"
                            data-key="t-data-tables">Bank Account</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- manager payment end -->

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span data-key="t-users">Users</span>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('register'); ?>" class="nav-link"
                            data-key="t-data-tables">User Register</a>
                        </li>
                        <li><a href="<?= base_url('admin'); ?>" class="nav-link"
                            data-key="t-data-tables">User Login</a>
                        </li>
                        <li><a href="<?= base_url('user-records'); ?>" class="nav-link"
                            data-key="t-data-tables">User Records</a>
                        </li>
                        <li><a href="<?= base_url('user-history'); ?>" class="nav-link"
                            data-key="t-data-tables">Logs History</a>
                        </li>
                    </ul>
                </li>
                <!-- ========== Admin Section End ========== -->

                <!-- ========== YACHT Section Start ========== -->
            <?php elseif (session()->get('role') == 'manager') : ?>
            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="user-check"></i>
                    <span data-key="t-admin">Booking</span>
                    <!-- <i class="fas fa-angle-down" style="margin-left: 120px;"></i> -->
                </a>

                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="<?= base_url('calendar');?>" data-key="t-data-tables">Yacht Calendar</a></li>
                    <li><a href="<?= base_url('admin-yacht-booking');?>" data-key="t-data-tables">Yacht Booking</a></li>
                    <li><a href="<?= base_url('yachtNA');?>" data-key="t-data-tables">Yacht Availability</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="anchor"></i>
                    <span data-key="t-yachts">Yacht</span>
                    <!-- <i class="fas fa-angle-down" style="margin-left: 120px;"></i> -->
                </a>

                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="<?= base_url('yacht-record');?>" data-key="t-data-tables">Yacht List</a></li>
                </ul>
            </li>

            <!-- manager payment -->
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="javascript: void(0);" class="has-arrow link" id="usersDropdownLink3"
                    style="color: #545a6d;">
                    <i data-feather="credit-card"></i>
                    <span data-key="t-yachts">Payment</span>
                    <!-- <i class="fas fa-angle-down" style="margin-left: 95px;"></i> -->
                </a>

                <ul class="sub-menu collapse" id="usersDropdown3">
                    <li><a href="<?= base_url('payment-detail'); ?>" class="nav-link"
                        data-key="t-data-tables">Bank Account</a></li>
                    </ul>
                </li>
            </ul>
            <!-- manager payment end -->
            <!-- ========== YACHT Section End ========== -->

            <!-- ========== Users Section Start ========== -->
        <?php elseif (session()->get('role') == 'user') : ?>
        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i data-feather="users"></i>
                <span data-key="t-users">Users</span>
                <i class="fas fa-angle-down" style="margin-left: 120px;"></i>
            </a>

            <ul class="sub-menu" aria-expanded="false">
                <li><a href="<?= base_url('admin-yacht-booking'); ?>" class="nav-link"
                    data-key="t-data-tables">Yacht Booking</a>
                </li>
            </ul>
        </li>
    <?php endif; ?>

    <!-- ========== Users Section End ========== -->

    <!-- ========== DASHBOARD Section Start ========== -->
                <!-- <li>
                    <a href="<?= base_url('dashboard');?>">
                        <i data-feather="home"></i>
                        <span class="badge rounded-pill bg-soft-success text-success float-end">9+</span>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li> -->
                <!-- ========== DASHBOARD Section End ========== -->

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>