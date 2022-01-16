    @extends('user.layouts.dashboard')
    @section('container')
    <div class="dashboard-content-wrap">
        <div class="dashboard-bread dashboard--bread">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">Hotel Details</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="/user-dashboard/hotel" class="text-white">Back</a></li>
                            </ul>
                        </div><!-- end breadcrumb-list -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div>
        </div><!-- end dashboard-bread -->
        <div class="dashboard-main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-box">
                            <div class="form-title-wrap">
                                <h3 class="title">Hotel Detail</h3>
                            </div>
                            <div class="form-content">
                                <ul class="list-items list-items-2 list-items-flush">
                                    <li><span>Hotel ID#</span>{{ $hotel->id }}</li>
                                    <li><span>Hotel Name:</span> {{ $hotel->title }}</li>
                                    <li><span>Create at Name:</span> {{ $hotel->user->name }}</li>
                                    <li><span>Hotel Address:</span> {{ $hotel->address }}</li>
                                    <li><span>Total Room:</span> {{ $hotel->total_rooms }}</li>
                                </ul>
                                <div class="btn-box mt-4" style="display: flex;">
                                    <form action="/delete-hotel/{{ $hotel->id }}" method="post">
                                        @csrf
                                        <button type="submit" class="theme-btn theme-btn-small mr-2" onclick="confirm('Are Your sure')">Delete</button>
                                    </form>
                                    <a href="/dashboard-hotel/{{ $hotel->id }}/edit" class="theme-btn theme-btn-small mr-2">Update</a>
                                    <a href="/user-dashboard/room/{{ $hotel->id }}" class="theme-btn theme-btn-small">
                                        Rooms</a>
                                </div>
                            </div>
                        </div><!-- end form-box -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="border-top mt-5"></div>
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="copy-right padding-top-30px">
                            <p class="copy__desc">
                                &copy; Copyright Trizen 2020. Made with
                                <span class="la la-heart"></span> by <a
                                    href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                            </p>
                        </div><!-- end copy-right -->
                    </div><!-- end col-lg-7 -->
                    <div class="col-lg-5">
                        <div class="copy-right-content text-right padding-top-30px">
                            <ul class="social-profile">
                                <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                            </ul>
                        </div><!-- end copy-right-content -->
                    </div><!-- end col-lg-5 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end dashboard-main-content -->
    </div><!-- end dashboard-content-wrap -->
    @endsection
