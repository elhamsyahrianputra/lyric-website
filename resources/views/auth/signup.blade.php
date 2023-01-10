@include('layouts.partials.admin.header')

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="post" action="/signup">
                            @csrf
                            <div class="form-group">
                                <input type="email"
                                    class="form-control form-control-user @error('email') is-invalid @enderror"
                                    id="InputEmail" placeholder="Email Address" name="email"
                                    value="{{ old('email') }}" autocomplete="off" autofocus>
                                @error('email')
                                    <span class="small text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="text"
                                    class="form-control form-control-user @error('name') is-invalid @enderror"
                                    id="Fullname" placeholder="Fullname" name="name" value="{{ old('name') }}"
                                    autocomplete="off">
                                @error('name')
                                    <span class="small text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text"
                                    class="form-control form-control-user @error('username') is-invalid @enderror"
                                    id="Username" placeholder="Username" name="username" value="{{ old('username') }}"
                                    autocomplete="off">
                                @error('username')
                                    <span class="small text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password"
                                    class="form-control form-control-user @error('password') is-invalid @enderror"
                                    id="InputPassword" placeholder="Password" name="password" autocomplete="off">
                                @error('password')
                                    <span class="small text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group row align-items-center px-0 mx-0">
                                <div class="col">
                                    <span class="font-weight-bold">Date of Birth</span>
                                </div>
                                <div class="col-9">
                                    <input type="date"
                                        class="form-control form-control-user @error('birthday') is-invalid @enderror"
                                        id="InputBirthday" autocomplete="off" name="birthday"
                                        value="{{ old('birthday') }}">
                                </div>
                                @error('birthday')
                                    <span class="small text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="btn btn-primary btn-user btn-block">
                                Sign Up
                            </button>
                            <hr>
                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Sign Up with Google
                            </a>
                        </form>
                        <hr>
                        <div class="text-center">
                            <span class="small">Have an account? </span>
                            <a href="/" class="small">Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@include('layouts.partials.admin.footer')
