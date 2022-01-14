<!-- ================================
    START DASHBOARD AREA
================================= -->
@extends('user.layouts.dashboard')
@section('container')
<div class="dashboard-content-wrap">
    <div class="dashboard-bread dashboard--bread">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title font-size-30 text-white">My Hotels</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="index-2.html" class="text-white">Home</a></li>
                            <li>Dashboard</li>
                            <li>My Hotels</li>
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
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h3 class="title">Hotels</h3>
                                    {{-- <p class="font-size-14">Showing 1 to 7 of 17 entries</p> --}}
                                </div>
                                <span>Total Hotels <strong class="color-text">({{ $hotels->count() }})</strong></span>
                            </div>
                        </div>
                        <div class="form-content">
                            <div class="table-form table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name Hotel</th>
                                            <th scope="col">Address Hotel</th>
                                            <th scope="col">Total Rooms</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($hotels as $hotel)
                                        <tr>
                                            <td>
                                                <div class="table-content">
                                                    <h3 class="title">{{ $hotel->title }}</h3>
                                                </div>
                                            </td>
                                            <td> {{ $hotel->address }} </td>
                                            <td> {{ $hotel->total_rooms }} </td>
                                            <td>
                                                <div class="table-content">
                                                    <a href="/user-dashboard/hotel/{{ $hotel->id }}" class="theme-btn theme-btn-small">Detail</a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- end form-box -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link page-link-nav" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="la la-angle-left"></i></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link page-link-nav" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link page-link-nav" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link page-link-nav" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link page-link-nav" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="la la-angle-right"></i></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
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
