<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login :: Admin</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #1e1e30;
            color: white;
        }
        .card {
            background-color: transparent;
            border: none;
        }
        .form-control {
            background-color: transparent;
            color: white;
            border: 1px solid #00bfff;
        }
        .form-control::placeholder {
            color: #a9a9a9;
        }
        .form-control:focus {
            background-color: transparent;
            color: white;
            border-color: #00bfff;
            box-shadow: none;
        }
        .btn-primary {
            background-color: #00bfff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #00a3cc;
        }
        .link-secondary {
            color: #00bfff;
        }
        .link-secondary:hover {
            color: #00a3cc;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <section class="d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                    <div class="card">
                        @if (Session::has('success'))
                            <div class="alert alert-success"> {{ Session::get('success') }} </div>
                        @endif

                        @if (Session::has('error'))
                            <div class="alert alert-danger"> {{ Session::get('error') }} </div>
                        @endif
                        <div class="card-body p-4">
                            <h4 class="text-center mb-4" style="color: #00bfff;">Login</h4>
                            <form action=" {{ route('admin.authenticate') }} " method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" value=" {{ old('email') }} " class="form-label" style="color: #FFF">Email</label>
                                    <input type="email" class="form-control" @error('email') is-invalid @enderror name="email" id="email" placeholder="name@example.com">
                                    @error('email')
                                        <p class="invalid-feedback"> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label" style="color: #FFF">Password</label>
                                    <input type="password" class="form-control" @error('password') is-invalid @enderror name="password" id="password" placeholder="Password">
                                    @error('password')
                                        <p class="invalid-feedback"> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary py-2" type="submit">Log in</button>
                                </div>
                                {{ session('error') }}
                            </form>
                            <div class="text-center mt-4">
                                <div class="credit">User? <span style="color: #FF0000"></span><a href=" {{ route('account.login') }} " class="link-secondary text-decoration-none">Login Disini!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
