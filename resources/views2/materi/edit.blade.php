@extends('main.main')

@section('title')
    MINI PROJECT BRI | Data Asisten
@endsection

@section('content')

<div class="container atas ">
<div class="container-fluid">
        <a href="/data-materi" class="btn btn-outline-secondary py-1 px-2 mb-3"> <i
                class="fas fa-arrow-left fa-xs"></i> Kembali<a>
    </div>
    <div class="row container  justify-content-center">
        <form action="/data-materi/edit/{{$materi->id}}" method="POST" enctype="multipart/form-data">
                @csrf
        <div class="col-md-6 offset-md-3 card p-4">
            <div class="container">
                    <div class="mb-2 field">
                        <label class="form-label mb-2">Materi<span class="text-danger">*</span></label>
                        <input type="text" name="materi"
                            class="form-control @error('materi') is-invalid @enderror"
                            value="{{ old('materi', $materi->materi ?? '') }}" required>
                        @error('materi')
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