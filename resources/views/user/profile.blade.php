@extends('layouts.app')

@section('title', 'My Profile')

@section('content')
<div class="container mt-4 mb-5">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <div class="avatar-placeholder mb-3">
                            <span class="display-4 text-primary">{{ substr(Auth::user()->name, 0, 1) }}</span>
                        </div>
                        <h5 class="mb-1">{{ Auth::user()->name }}</h5>
                        <p class="text-muted small mb-0">{{ Auth::user()->email }}</p>
                    </div>

                    <hr>

                    <div class="list-group list-group-flush">
                        <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                        </a>
                        <a href="{{ route('profile') }}" class="list-group-item list-group-item-action active">
                            <i class="fas fa-user-edit me-2"></i> My Profile
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-shopping-bag me-2"></i> My Orders
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-heart me-2"></i> Wishlist
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-address-book me-2"></i> Address Book
                        </a>
                        <a href="{{ route('logout') }}" class="list-group-item list-group-item-action text-danger"
                           onclick="event.preventDefault(); document.getElementById('logout-form-sidebar').submit();">
                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </a>
                        <form id="logout-form-sidebar" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-lg-9">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="card-title mb-4">My Profile</h2>

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <h4 class="mb-3">Change Password</h4>
                        <p class="text-muted mb-4">Leave password fields empty if you don't want to change it.</p>

                        <div class="row mb-4">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="current_password" class="form-label">Current Password</label>
                                    <input type="password" class="form-control @error('current_password') is-invalid @enderror" id="current_password" name="current_password">
                                    @error('current_password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="password" class="form-label">New Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Confirm New Password</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i> Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Account Security -->
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h3 class="card-title mb-4">Account Security</h3>

                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h5 class="mb-0">Two-Factor Authentication</h5>
                            <span class="badge bg-danger">Not Enabled</span>
                        </div>
                        <p class="text-muted">Add an extra layer of security to your account by enabling two-factor authentication.</p>
                        <button class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-shield-alt me-2"></i> Enable 2FA
                        </button>
                    </div>

                    <div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h5 class="mb-0">Recent Login Activity</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>IP Address</th>
                                        <th>Device</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ now()->format('M d, Y H:i') }}</td>
                                        <td>127.0.0.1</td>
                                        <td>Chrome on Windows</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .avatar-placeholder {
        width: 80px;
        height: 80px;
        background-color: #e6f0ff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }

    .list-group-item {
        border: none;
        padding: 0.75rem 1rem;
        border-radius: 5px !important;
        margin-bottom: 0.25rem;
    }

    .list-group-item.active {
        background-color: var(--primary-color);
    }
</style>
@endsection
