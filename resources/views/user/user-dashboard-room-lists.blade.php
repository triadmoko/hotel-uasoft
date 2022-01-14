    @extends('user.layouts.dashboard')
    @section('container')
    <div class="dashboard-content-wrap">
        <div class="dashboard-bread dashboard--bread">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">List Rooms</h2>
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
                                <h3 class="title">Insert New Room</h3>
                            </div>
                            <div class="form-content">
                                <div class="contact-form-action">
                                    <form action="/room" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" name="hotel_id" value="{{ $hotel_id }}" hidden>
                                        <div class="row">
                                            <div class="col-lg-6 responsive-column">
                                                <div class="input-box">
                                                    <label for="title" class="label-text">Room Name</label>
                                                    <div class="form-group">
                                                        <input class="form-control" name="title" type="text">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6 responsive-column">
                                                <div class="input-box">
                                                    <label for="price" class="label-text">Price</label>
                                                    <div class="form-group">
                                                        <input class="form-control" name="price" type="number">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6 responsive-column">
                                                <div class="input-box">
                                                    <label for="image" class="label-text">Image</label>
                                                    <div class="form-group">
                                                        <input class="form-control" type="file" name="image">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-12">
                                                <div class="btn-box">
                                                    <button class="theme-btn" type="submit">Insert Room</button>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                        </div><!-- end row -->
                                    </form>
                                </div>
                            </div>
                        </div><!-- end form-box -->
                        <div class="form-box">
                            <div class="form-title-wrap">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="title">Rooms</h3>

                                    </div>
                                    <span>Total Rooms <strong class="color-text">({{ $rooms->count() }})</strong></span>
                                </div>
                            </div>
                            <div class="form-content">
                                <div class="table-form table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Hotel Name</th>
                                                <th scope="col">Room</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($rooms as $room)
                                            <tr>
                                                <td>
                                                    <div class="table-content">
                                                        <h3 class="title">{{ $room->title }}</h3>
                                                    </div>
                                                </td> <td>
                                                    <div class="table-content">
                                                        <h3 class="title">{{ $room->hotel->title }}</h3>
                                                    </div>
                                                </td>
                                                <td>Rp. {{ $room->price }}</td>
                                                <td>
                                                    <div class="table-content">
                                                        <a href="/user-dashboard/room/details/{{ $room->id }}"
                                                            class="theme-btn theme-btn-small">Detail</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end form-box -->
                    </div>
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
