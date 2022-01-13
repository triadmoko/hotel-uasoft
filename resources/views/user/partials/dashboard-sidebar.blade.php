<div class="sidebar-nav sidebar--nav">
    <div class="sidebar-nav-body">
        <div class="side-menu-close">
            <i class="la la-times"></i>
        </div><!-- end menu-toggler -->
        <div class="author-content">
            <div class="d-flex align-items-center">
                <div class="author-img avatar-sm">
                    <img src="/user-asset/images/team9.jpg" alt="testimonial image">
                </div>
                <div class="author-bio">
                    <h4 class="author__title">{{ auth()->user()->name }}</h4>
                    <span class="author__meta">Member Since May 2017</span>
                </div>
            </div>
        </div>
        <div class="sidebar-menu-wrap">
            <ul class="sidebar-menu toggle-menu list-items">
                <li class="{{ Request::is('user-dashboard')? 'page-active' : '' }}"><a href="/user-dashboard"><i
                            class="la la-dashboard mr-2"></i>Dashboard</a></li>
                <li class="{{ Request::is('user-dashboard/hotel')? 'page-active' : '' }}"><a
                        href="/user-dashboard/hotel"><i class="la la-shopping-cart mr-2 text-color-4"></i>My Booking</a>
                <li>
                </li>
                <li class="{{ Request::is('user-dashboard/hotel/create')? 'page-active' : '' }}">
                    <span class="side-menu-icon toggle-menu-icon">
                        <i class="la la-angle-down"></i>
                    </span>
                    <a href="#"><i class="la la-list mr-2 text-color-3"></i>Hotel</a>
                    <ul class="toggle-drop-menu active">
                        <li>
                            <a href="/user-dashboard/hotel/create"><i class="la la-hotel mr-2 text-color-2"></i>
                                List Hotel
                            </a>
                        </li>
                        <li>
                            <a href="/user-dashboard/hotel/create"><i class="la la-hotel mr-2 text-color-2"></i>
                                Insert Hotel
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <span class="side-menu-icon toggle-menu-icon">
                        <i class="la la-angle-down"></i>
                    </span>
                    <a href="#"><i class="la la-area-chart mr-2 text-color-9"></i>Finance</a>
                    <ul class="toggle-drop-menu">
                        <li><a href="admin-invoice.html">Invoice</a></li>
                        <li><a href="admin-payments.html">Payments</a></li>
                        <li><a href="admin-currency-list.html">Currency List</a></li>
                        <li><a href="admin-dashboard-subscribers.html">Subscribers</a></li>
                    </ul>
                </li>

                <li><a href="admin-dashboard-settings.html">
                        <i class="la la-cog mr-2"></i>Settings</a>
                </li>
            </ul>
        </div><!-- end sidebar-menu-wrap -->
    </div>
</div><!-- end sidebar-nav -->
<!-- ================================
       END DASHBOARD NAV
================================= -->
