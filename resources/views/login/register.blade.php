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

<body class="bg-light">

<section class="container p-5">
    <div class="row">
        <div class="col"></div>
        <div class="col card p-4 pt-3 border border-0 shadow pb-5">
            <div class="d-flex bungkus justify-content-center">
                <div class="mt-4">
                <h3 class="text-center"> Daftar Akun </h3>
                </div>
            </div>
                            @if (session()->has('loginError'))
                            <div class="text-center alert alert-danger p-1">
                            <span class="text-danger">Login Gagal!</span>
                            </div>
                            @endif            
            <div class="container mb-3 mt-4">
            <form class="form-register" action="/" method="POST" class="text-center">
                            @csrf
                            <div class="form-floating">
                            <input type="text"
                                    class="form-control rounded-1 @error('email') is-invalid @enderror"
                                    name="email" id="email" value="{{ old('email') }}" placeholder="email"
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

                            <button class="w-100 btn btn-lg btn-success btn-login mt-4 rounded-1"
                                type="submit">Daftar</button>
                        </form>
                        </div>
                        <hr>
                <div class="container text-center">
                    <p>Sudah punya akun?</p> <a class="btn btn-primary" href="/login">Login</a>
                </div>
        </div>
        <div class="col"></div>
    </div>
</section>


      @push('scripts')
      <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
      @endpush()
      @push('scripts')
     <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
      @endpush()
      @push('scripts')
      <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
      @endpush()
      @push('scripts')
      <script src="{{ asset('assets/dist/js/sweetalert2.all.min.js') }}"></script>
      @endpush()
      @push('scripts')
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      @endpush()
        
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script>
        document.getElementById("togglePassword").addEventListener("click", function() {
            var passwordInput = document.getElementById("password");
            var type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
            passwordInput.setAttribute("type", type);
            this.className = type === "password" ? "fas fa-eye-slash pointer" : "fas fa-eye pointer";
        });
    </script>
    
</body>

</html>
