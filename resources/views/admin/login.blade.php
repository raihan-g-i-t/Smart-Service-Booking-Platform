<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Login</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin/login.css') }}">
</head>
<body>
    <div class="container-fluid login-container">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-8 col-lg-6">
                <div class="card login-card">
                    <div class="row g-0">
                        <!-- Left Side with Graphic -->
                        <div class="col-md-5 login-left">
                            <h2 class="mb-4">Welcome Back!</h2>
                            <p class="mb-4">Sign in to access your personalized dashboard, settings, and more.</p>
                            <!-- <div class="text-center">
                                <img src="https://via.placeholder.com/250" alt="Login Illustration" class="img-fluid">
                            </div> -->
                        </div>
                        
                        <!-- Right Side with Form -->
                        <div class="col-md-7 login-right">
                            <div class="brand-logo mb-4">YourLogo</div>
                            <h3 class="mb-4">Sign In</h3>
                            
                            <form action="{{ route('login.process') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="password" placeholder="Enter your password">
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                            <i class="far fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember">
                                        <label class="form-check-label" for="remember">Remember me</label>
                                    </div>
                                    <a href="#" class="text-decoration-none">Forgot password?</a>
                                </div>
                                <button type="submit" class="btn btn-login w-100 mb-3">Sign In</button>
                                
                                <div class="divider">
                                    <span>OR CONTINUE WITH</span>
                                </div>
                                
                                <!-- <div class="d-flex justify-content-center mb-4">
                                    <div class="social-btn">
                                        <i class="fab fa-google"></i>
                                    </div>
                                    <div class="social-btn">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>
                                    <div class="social-btn">
                                        <i class="fab fa-apple"></i>
                                    </div>
                                </div> -->
                                
                                <div class="text-center">
                                    Don't have an account? <a href="#" class="text-decoration-none">Sign up</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const password = document.getElementById('password');
            const icon = this.querySelector('i');
            if (password.type === 'password') {
                password.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                password.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    </script>
</body>
</html>