<div class="sidebar-nav">
    <div class="sidebar-nav-body">
        <div class="side-menu-close">
            <i class="la la-times"></i>
        </div><!-- end menu-toggler -->
        <div class="author-content">
            <div class="d-flex align-items-center">
                <div class="author-img avatar-sm">
                    <img src="/user-asset/images/team8.jpg" alt="testimonial image">
                </div>
                <div class="author-bio">
                    <h4 class="author__title">{{ auth()->user()->name }}</h4>
                    <span class="author__meta">Member Since May 2017</span>
                </div>
            </div>
        </div>

        <div class="sidebar-menu-wrap">
            <ul class="sidebar-menu list-items">
                <li class="{{ Request::is('user-dashboard')? 'page-active' : '' }}"><a href="/user-dashboard"><i
                            class="la la-dashboard mr-2"></i>Dashboard</a></li>
                <li class="{{ Request::is('user-dashboard/hotel')? 'page-active' : '' }}"><a
                        href="/user-dashboard/hotel"><i class="la la-shopping-cart mr-2 text-color-4"></i>My Booking</a>
                <li class="{{ Request::is('user-dashboard/create')? 'page-active' : '' }}"><a
                        href="/user-dashboard/hotel/create"><i class="la la-hotel mr-2 text-color-2"></i>Insert Hotel</a>
                </li>
                <li><a href="user-dashboard-profile.html"><i class="la la-user mr-2 text-color-2"></i>My Profile</a>
                </li>
                <li><a href="user-dashboard-reviews.html"><i class="la la-star mr-2 text-color-3"></i>My Reviews</a>
                </li>
                <li><a href="user-dashboard-wishlist.html"><i class="la la-heart mr-2 text-color-4"></i>Wishlist</a>
                </li>
                <li><a href="user-dashboard-settings.html"><i class="la la-cog mr-2 text-color-5"></i>Settings</a></li>
        </div><!-- end sidebar-menu-wrap -->

    </div>
</div>
