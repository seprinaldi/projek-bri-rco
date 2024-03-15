<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>MINI PROJECT BRI | Login</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body class="bg-dark">

<section class="container p-5">
    <div class="row">
        <div class="col"></div>
        <div class="col card p-4 pt-3 border border-0 shadow pb-5">
            <div class="d-flex bungkus justify-content-center">
                                <div class="mt-4">
                                    <h3 class="text-center fw-bold">Projek<span class="text-warning">Absensi</span></h3>
                                </div>
                            </div>
            <div class="container mb-3">
            <form action="/login" method="POST" class="text-center mt-5">
                            @csrf
                            
                             @if (session()->has('loginError'))
                                <div class="text-center alert alert-danger p-1">
                            <span class="text-danger">Login Gagal!</span> 
                                </div>
                            @endif
                                <div class="form-floating mt-5">
                                <input type="email"
                                    class="form-control rounded-1 @error('email') is-invalid @enderror"
                                    name="email" id="email" value="{{ old('email') }}" placeholder="contoh@gmail.com"
                                    autofocus required>
                                    <label class="label-nim" for="email">Email </label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                                
                            <div class="form-floating mt-3 position-relative">
                                <input type="password" class="form-control rounded-1" name="password" id="password"
                                    placeholder="Password" required>
                                <label for="password">Password</label>
                                <div class="position-absolute end-0 top-50 translate-middle-y">
                                    <span class="px-3">
                                        <i class="fas fa-eye-slash pointer" id="togglePassword"></i>
                                    </span>
                                </div>
                            </div>

                            <button class="w-100 btn btn-lg btn-warning btn-outline-dark mt-4 rounded-1"
                                type="submit">Masuk</button>
                        </form>
                        </div>
                        <!-- <hr>
                <div class="container text-center">
                    <p>Belum punya akun?</p> <a class="btn btn-outline-dark me-2" href="/register">Buat akun</a>
                </div> -->
        </div>
        <div class="col"></div>
    </div>
</section>

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>

</html>
