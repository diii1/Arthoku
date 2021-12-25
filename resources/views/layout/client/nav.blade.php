<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= URL::to('/'); ?>"><img class="logo" src="{{ asset('assets/image/logo-full.png') }}" alt="logo" style="max-width: 100px";></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @guest
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @if (Route::has('login'))
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
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('clientDashboard') }}">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Dashboard</a>
                            </li>
                        @endauth
                    @endif
                </ul>
                <div class="d-flex">
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="signIn btn btn-primary me-3">Sign in</a>
                    @endif
    
                    @if (Route::has('register'))
                        <div class="signUp btn btn-primary" data-bs-toggle="modal" data-bs-target="#signUp">Sign Up</div>
                    @endif
                </div>
            @else
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @if (Route::has('login'))
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
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="<?= URL::to('/'); ?>/dashboard">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="<?= URL::to('/login'); ?>">Dashboard</a>
                            </li>
                        @endauth
                    @endif
                </ul>
                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
            
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
            
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>        
                </div>
            @endif

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