@extends('main.main')

@section('title')
    MINI PROJECT BRI | Data Asisten
@endsection

@section('content')

<div class="container atas ">
<div class="container-fluid">
        <a href="/data-asisten" class="btn btn-outline-secondary py-1 px-2 mb-3"> <i
                class="fas fa-arrow-left fa-xs"></i> Kembali<a>
    </div>
    <div class="row container  justify-content-center">
        <form action="/data-asisten/edit/{{$asisten->id}}" method="POST" enctype="multipart/form-data">
                @csrf
        <div class="col-md-6 offset-md-3 card p-4">
            <div class="container">
                    <div class="mb-2 field">
                        <label class="form-label mb-2">ID Asisten<span class="text-danger">*</span></label>
                        <input type="number" name="id_asisten"
                            class="form-control @error('id_asisten') is-invalid @enderror"
                            value="{{ old('id_asisten' , $asisten->id_asisten ?? '') }}" minlength="8" required autofocus>
                        @error('id_asisten')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-2 field">
                        <label class="form-label mb-2">Nama<span class="text-danger">*</span></label>
                        <input type="text" name="nama"
                            class="form-control @error('nama') is-invalid @enderror"
                            value="{{ old('nama', $asisten->nama ?? '') }}" required>
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2 field">
                        <label class="form-label mb-2">Join Date<span class="text-danger">*</span></label>
                        <input type="date" name="join_date"
                            class="form-control @error('join_date') is-invalid @enderror"
                            value="{{ old('join_date', $asisten->join_date ?? '') }}" required>
                        @error('join_date')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-2 field">
                        <label for="role" class="form-label mb-2">Jabatan<span
                                class="text-danger">*</span></label>
                        <select name="role" id="role"
                            class="form-select @error('role') is-invalid @enderror" required>
                            <option value="">- Pilih Jabatan -</option>
                                <option value="{{ $asisten->role }}" {{ old('role', $asisten->role) == $asisten->role ? 'selected' : null }}> {{ $asisten->role }}</option>
                        </select>
                        @error('role')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        
                        <label for="formFile" class="form-label mb-2 float-start">Foto<span
                                class="text-danger">*</span> </label> <br>
                        <img src="{{asset('storage/' .$asisten->foto )}}" alt="{{ $asisten->nama }}"
                          class="my-2" width="100">
                        <input name="foto" class="form-control @error('foto') is-invalid @enderror"
                            value="{{ old('foto', $asisten->foto ?? '') }}" type="file" id="formFile">
                        @error('foto')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                <div class="mb-2 field">
                        <label class="form-label mb-2">Email<span class="text-danger">*</span></label>
                        <input type="email" name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email', $asisten->email ?? '') }}" required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!-- <div class="mb-2 field">
                        <label class="form-label mb-2">Password<span class="text-danger">*</span></label>
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror"
                            value="{{ old('password') }}" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> -->
                    <button type="submit" class="btn mt-4 btn-warning float-end">Simpan</button>
                    
                   </form>
                   <form action="">
                    <button type="submit" class="btn mt-4 btn-secondary mx-2 float-end">Reset Password</button>
                   </form>
        </div>
    </div>
            
    </div>
   

@endsection

 @push('scripts')
    <script>
        $(document).ready(function() {
            $('#jabatan').select2();
        });
    </script>
@endpush