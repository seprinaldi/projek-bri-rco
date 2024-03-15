@extends('main.main')

@section('title')
    MINI PROJECT BRI | Data Asisten
@endsection

@section('content')

<div class="container atas ">
<div class="container-fluid">
        <a href="/data-kelas" class="btn btn-outline-secondary py-1 px-2 mb-3"> <i
                class="fas fa-arrow-left fa-xs"></i> Kembali<a>
    </div>
    <div class="row container  justify-content-center">
        <form action="/data-kelas/edit/{{$kelas->id}}" method="POST" enctype="multipart/form-data">
                @csrf
        <div class="col-md-6 offset-md-3 card p-4">
            <div class="container">

                    <div class="mb-2 field">
                        <label class="form-label mb-2">Jurusan<span class="text-danger">*</span></label>
                        <input type="text" name="jurusan"
                            class="form-control @error('jurusan') is-invalid @enderror"
                            value="{{ old('jurusan', $kelas->jurusan ?? '') }}" required>
                        @error('jurusan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-2 field">
                        <label class="form-label mb-2">Fakultas<span class="text-danger">*</span></label>
                        <input type="text" name="fakultas"
                            class="form-control @error('fakultas') is-invalid @enderror"
                            value="{{ old('fakultas', $kelas->fakultas ?? '') }}" required>
                        @error('fakultas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2 field">
                        <label class="form-label mb-2">Nama Kelas<span class="text-danger">*</span></label>
                        <input type="text" name="nama_kelas"
                            class="form-control @error('nama_kelas') is-invalid @enderror"
                            value="{{ old('nama_kelas', $kelas->nama_kelas ?? '') }}" required>
                        @error('nama_kelas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2 field">
                        <label class="form-label mb-2">Tingkat<span class="text-danger">*</span></label>
                        <input type="number" name="tingkat"
                            class="form-control @error('tingkat') is-invalid @enderror"
                            value="{{ old('tingkat', $kelas->tingkat ?? '') }}" required>
                        @error('tingkat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn mt-4 btn-warning float-end">Simpan</button>
                    
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