@extends('layouts.app')

@section('title', 'My Account - Veridan Roots')

@section('content')
<!-- Font Awesome & Bootstrap are required for this styling -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLMDJ8gT2z8Q/j+6wR9rJ5Ww8G6w2CjF3yB9J8i5q6n2l4M+xKz8T1g9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<section class="account-section sec py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6" style="padding-top:75px;">
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    <div class="card-header bg-success text-white text-center py-3">
                        <h3 class="mb-0 text-white">My Account</h3>
                    </div>

                    <div class="card-body p-4">

                        <!-- Logic to determine active tab based on validation errors -->
                        @php
                            // Check for validation errors specific to the Register form
                            $hasRegisterErrors = $errors->has('first_name') || $errors->has('last_name') || $errors->has('password_confirmation');
                            
                            // If there are register errors, $isRegisterActive is true, otherwise $isLoginActive is true
                            $isRegisterActive = $hasRegisterErrors;
                            $isLoginActive = !$hasRegisterErrors;
                        @endphp
                        
                        <!-- Session Status / Success Messages -->
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <!-- Tabs -->
                        <ul class="nav nav-tabs mb-4 justify-content-center" id="accountTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ $isLoginActive ? 'active' : '' }}" id="login-tab" data-bs-toggle="tab"
                                    data-bs-target="#login" type="button" role="tab" aria-selected="{{ $isLoginActive ? 'true' : 'false' }}">
                                    <i class="fa-solid fa-right-to-bracket me-1"></i> Login
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ $isRegisterActive ? 'active' : '' }}" id="register-tab" data-bs-toggle="tab"
                                    data-bs-target="#register" type="button" role="tab" aria-selected="{{ $isRegisterActive ? 'true' : 'false' }}">
                                    <i class="fa-solid fa-user-plus me-1"></i> Register
                                </button>
                            </li>
                        </ul>

                        <!-- Tab Content -->
                        <div class="tab-content" id="accountTabsContent">
                            
                            {{-- LOGIN TAB START --}}
                            <div class="tab-pane fade {{ $isLoginActive ? 'show active' : '' }}" id="login" role="tabpanel">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                            name="email" value="{{ old('email') }}" placeholder="Enter your email" required autofocus autocomplete="username">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                            name="password" placeholder="Enter your password" required autocomplete="current-password">
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                        
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="text-success small">Forgot Password?</a>
                                        @endif
                                    </div>

                                    <button type="submit" class="btn btn-success w-100">
                                        Login <i class="fa-solid fa-leaf ms-1"></i>
                                    </button>
                                </form>
                            </div>
                            {{-- LOGIN TAB END --}}

                            {{-- REGISTER TAB START --}}
                            <div class="tab-pane fade {{ $isRegisterActive ? 'show active' : '' }}" id="register" role="tabpanel">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                                                name="name" value="{{ old('name') }}" placeholder="John" required autofocus>
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                            
                                    </div>

                                    <div class="mb-3">
                                        <label for="email_register" class="form-label">Email Address</label>
                                        {{-- Note: name='email' is correct for the controller --}}
                                        <input id="email_register" type="email" class="form-control @error('email') is-invalid @enderror" 
                                            name="email" value="{{ old('email') }}" placeholder="you@example.com" required autocomplete="username">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="password_register" class="form-label">Password</label>
                                        {{-- Note: name='password' is correct for the controller --}}
                                        <input id="password_register" type="password" class="form-control @error('password') is-invalid @enderror" 
                                            name="password" placeholder="Enter password" required autocomplete="new-password">
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" 
                                            name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                                        @error('password_confirmation')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-success w-100">
                                        Register <i class="fa-solid fa-leaf ms-1"></i>
                                    </button>
                                </form>
                            </div>
                            {{-- REGISTER TAB END --}}
                        </div>
                    </div>

                    <div class="card-footer text-center bg-white">
                        <small class="text-muted">
                            By continuing, you agree to our <a href="#" class="text-success">Terms</a> and <a href="#" class="text-success">Privacy Policy</a>.
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .account-section {
        /* min-height: 100vh; */
        display: flex;
        align-items: center;
    }

    .card {
        border-radius: 16px !important;
    }

    .nav-tabs .nav-link {
        border: none;
        color: #6c757d;
        font-weight: 500;
        transition: color 0.15s ease-in-out;
    }

    .nav-tabs .nav-link.active {
        color: #198754;
        border-bottom: 3px solid #198754;
        background: none;
    }

    .btn-success {
        background-color: #198754;
        border: none;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-success:hover {
        background-color: #157347;
    }
    
    .invalid-feedback {
        display: block; /* Ensure Laravel errors show correctly with custom CSS */
    }
</style>
@endsection