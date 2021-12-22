<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="logo" src="{{ asset('assets/image/logo-full.png') }}" alt="logo" style="max-width: 100px";></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#home">Home</a>
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
                <div class="signIn btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#signIn">Sign in</div>
                <!-- Register with pop up (Modal) -->
                <div class="signUp btn btn-primary" data-bs-toggle="modal" data-bs-target="#signUp">Sign Up</div>
            </div>
            <!-- Modal Sign In-->
            <div class="modal fade" id="signIn" tabindex="-1" aria-labelledby="signInLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content modal-card">
                        <div class="modal-header d-flex justify-content-center">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-white">
                            <h5 class="modal-title text-white text-center" id="exampleModalLabel">Sign In</h5>
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" class="form-control" placeholder="Email Address ..." required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" placeholder="Password ..." required>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <div class="buttonSignIn d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-signIn">Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Sign Up-->
            <div class="modal fade" id="signUp" tabindex="-1" aria-labelledby="signUpLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content modal-card">
                        <div class="modal-header d-flex justify-content-center">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-white">
                            <h5 class="modal-title text-white text-center" id="exampleModalLabel">Sign Up</h5>
                            <form action="/client/insert" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input name="name" type="text" class="form-control" placeholder="Full Name ..." required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input name="email" type="email" class="form-control" placeholder="Email Address ..." required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input name="password" type="password" class="form-control" placeholder="Password ..." required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Confirm Password ..." required>
                                </div>
                                <div class="buttonSignIn d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-signIn">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>