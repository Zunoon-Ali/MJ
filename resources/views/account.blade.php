@extends('layouts.app')

@section('title', 'My Account - Veridan Roots')

@section('content')
<section class="account-section sec py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6" style="padding-top:75px;">
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    <div class="card-header bg-success text-white text-center py-3">
                        <h3 class="mb-0 text-white">My Account</h3>
                    </div>

                    <div class="card-body p-4">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs mb-4 justify-content-center" id="accountTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="login-tab" data-bs-toggle="tab"
                                    data-bs-target="#login" type="button" role="tab">
                                    <i class="fa-solid fa-right-to-bracket me-1"></i> Login
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="register-tab" data-bs-toggle="tab"
                                    data-bs-target="#register" type="button" role="tab">
                                    <i class="fa-solid fa-user-plus me-1"></i> Register
                                </button>
                            </li>
                        </ul>

                        <!-- Tab Content -->
                        <div class="tab-content" id="accountTabsContent">
                            <!-- Login Tab -->
                            <div class="tab-pane fade show active" id="login" role="tabpanel">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control" placeholder="Enter your email" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" placeholder="Enter your password" required>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                        <a href="#" class="text-success small">Forgot Password?</a>
                                    </div>

                                    <button type="submit" class="btn btn-success w-100">
                                        Login <i class="fa-solid fa-leaf ms-1"></i>
                                    </button>
                                </form>
                            </div>

                            <!-- Register Tab -->
                            <div class="tab-pane fade" id="register" role="tabpanel">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" placeholder="John" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Doe" required>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control" placeholder="you@example.com" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" placeholder="Enter password" required>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" placeholder="Confirm password" required>
                                    </div>

                                    <button type="submit" class="btn btn-success w-100">
                                        Register <i class="fa-solid fa-leaf ms-1"></i>
                                    </button>
                                </form>
                            </div>
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
        min-height: 100vh;
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
</style>
@endsection
