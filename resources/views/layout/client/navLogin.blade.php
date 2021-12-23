<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= URL::to('/'); ?>"><img class="logo" src="{{ asset('assets/image/logo-full.png') }}" alt="logo" style="max-width: 100px";></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
            <div>
                @if (Route::has('register'))
                    <div class="signUp btn btn-primary" data-bs-toggle="modal" data-bs-target="#signUp">Sign Up</div>
                @endif
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
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name ..." value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address ..." value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password ..." required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password-confirm" class="form-label">Confirm Password</label>
                                    <input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password ..." required autocomplete="new-password">
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