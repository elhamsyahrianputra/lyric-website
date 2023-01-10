@extends('layouts.app')

@section('content')
    <div class="main-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="/home">Home</a>
                <!-- Form -->
                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="{{ asset('storage/' . auth()->user()->avatar) }}">
                                </span>
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                            <a href="../examples/profile.html" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>My profile</span>
                            </a>
                            <a href="../examples/profile.html" class="dropdown-item">
                                <i class="ni ni-settings-gear-65"></i>
                                <span>Settings</span>
                            </a>
                            <a href="../examples/profile.html" class="dropdown-item">
                                <i class="ni ni-calendar-grid-58"></i>
                                <span>Activity</span>
                            </a>
                            <a href="../examples/profile.html" class="dropdown-item">
                                <i class="ni ni-support-16"></i>
                                <span>Support</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#!" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Header -->
        <div class="header d-flex align-items-center"
            style="min-height: 600px; background-image: url({{ asset('storage/' . auth()->user()->cover) }}); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--15">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">My account</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action='/profile/{{ auth()->user()->username }}' method="post">
                                @csrf
                                @method('put')
                                <h6 class="heading-small text-muted mb-4">User information</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-username">Username</label>
                                                <input type="text" id="input-username" name="username"
                                                    class="form-control form-control-alternative" placeholder="Username"
                                                    value="{{ old('username', auth()->user()->username) }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-email">Email address</label>
                                                <input type="email" id="input-email"
                                                    class="form-control form-control-alternative" name="email"
                                                    value="{{ old('email', auth()->user()->email) }}"
                                                    placeholder="emailaddress@example.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-name">Full Name</label>
                                                <input type="text" id="input-name" name="name"
                                                    class="form-control form-control-alternative" placeholder="First name"
                                                    value="{{ old('name', auth()->user()->name) }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-birthday">Date of
                                                    Birth</label>
                                                <input type="date" id="input-birthday" name="birthday"
                                                    class="form-control form-control-alternative"
                                                    value="{{ old('birthday', auth()->user()->birthday) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <!-- Address -->
                                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="for m-group focused">
                                                <label class="form-control-label" for="input-address">Address</label>
                                                <input type="text" id="input-address"
                                                    class="form-control form-control-alternative"
                                                    placeholder="Home Address" name="address"
                                                    value="{{ old('address', auth()->user()->address) }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-city">City</label>
                                                <input type="text" id="input-city"
                                                    class="form-control form-control-alternative" placeholder="City"
                                                    name="city" value="{{ old('city', auth()->user()->city) }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-country">Country</label>
                                                <input type="text" id="input-country"
                                                    class="form-control form-control-alternative" placeholder="Country"
                                                    name="country" value="{{ old('country', auth()->user()->country) }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-country">Postal code</label>
                                                <input type="number" id="input-postal-code"
                                                    class="form-control form-control-alternative"
                                                    placeholder="Postal code" name="postal_code"
                                                    value="{{ old('postal_code', auth()->user()->postal_code) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <!-- Description -->
                                <h6 class="heading-small text-muted mb-4">About me</h6>
                                <div class="pl-lg-4">
                                    <div class="form-group focused">
                                        <label>Bio</label>
                                        <textarea rows="4" name="about_me" class="form-control form-control-alternative"
                                            placeholder="A few words about you ...">{{ old('about_me', auth()->user()->about_me) }}</textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-sm btn-default float-right">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6 m-auto text-center">
                <div class="copyright">
                    <p>Made with <a href="https://www.creative-tim.com/product/argon-dashboard" target="_blank">Argon
                            Dashboard</a> by Creative Tim</p>
                </div>
            </div>
        </div>
    </footer>
@endsection
