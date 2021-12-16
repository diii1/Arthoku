<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arthoku</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</head>
<body>
    <div class="body pt-3">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img class="logo" src="{{ asset('assets/image/logo-full.png') }}" alt="logo" style="max-width: 100px";></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#feature">Feature</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tips">Tips</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= URL::to('/'); ?>/dashboard">Dashboard</a>
                            </li>
                        </ul>
                        <div class="d-flex">
                            <div class="signIn btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign in</div>
                            <!-- Register with pop up (Modal) -->
                            <div class="signUp btn btn-primary"><a href="/register">Sign Up</a></div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content modal-card">
                                    <div class="modal-header d-flex justify-content-center">
                                        <h5 class="modal-title text-white" id="exampleModalLabel">Sign In</h5>
                                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                    </div>
                                    <div class="modal-body text-white">
                                        <form>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1">
                                            </div>
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-signIn">Sign In</button>
                                            <a href="/register" class="btn btn-secondary ms-3">Register</a>
                                            <button type="button" class="btn btn-danger btnClose" data-bs-dismiss="modal">Close</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            @yield('content')
            <div class="footer">
                <div class="container">
                    <div class="footer border border-2 border-bottom-0 border-start-0 border-end-0">bottom footer </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>