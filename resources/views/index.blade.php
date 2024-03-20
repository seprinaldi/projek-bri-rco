@extends('main.main')

@section('title')
    MINI PROJECT BRI | Dashboard
@endsection

@section('content')
@auth

<div class="row overflow-hidden p-md-5 m-md-3 bg-light">
    <div class="col-lg-8 col-md-12">
    <div class="col-lg-8 p-lg-5">
      <h1 class="fw-normal">Selamat Datang, <br> <span class="fw-bold">{{ $user->nama }}</span>!</h1>
      @if(auth()->user()->role == 'Admin' || auth()->user()->role == 'Staff' || auth()->user()->role == 'PJ')
      <p class="lead fw-normal">Buat Kode Absen</p>
      <form class="kode-absen" action="{{ url('/code-generator/create') }}" method="post">
                @csrf
                <button class="btn btn-outline-dark btn-warning"
                                type="submit">Generate Code Absen</button>
              </form>
        @endif
        <a class="btn btn-outline-dark mt-2" href="/code-generator">Lihat Kode Tersedia</a>
    </div>
    </div>
    <div class="col-lg-4 col-md-12 p-lg-5 text-center">
        <h1 class="fw-bold" id="clock"></h1>
        <h3><span id="day"></span>, <span id="date"></span></h3>
    </div>
</div>

<div class="row mb-5">
    <div class="col">
        <div class="col-md-6 offset-md-3 card shadow border-0 p-4">
        @if($cek_asisten == null)
            <div class="container">
            <form action="{{ url('/absen/create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="mb-2 field">
                        <label class="form-label mb-2">ID Asisten<span class="text-danger">*</span></label>
                        <input type="number" name="id_asisten" class="form-control bg-light @error('id_asisten') is-invalid @enderror" value="{{ old('id_asisten', $user->id_asisten) }}" required readonly>
                            @error('id_asisten')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                    </div>
                    <div class="mb-2 field">
                        <label for="id_kelas" class="form-label mb-2">Kelas<span class="text-danger">*</span></label>
                        <select name="id_kelas" id="id_kelas" class="form-select @error('id_kelas') is-invalid @enderror" required>
                            <option value="">- Pilih Kelas -</option>
                            @foreach($kelas as $kls)
                            <option value="{{$kls->id}}" {{old('nama_kelas') == $kls->id ? 'selected' : null}}>{{$kls->nama_kelas}}</option>
                            @endforeach
                           
                        </select>
                    </div>
                    <div class="mb-2 field">
                        <label class="form-label mb-2">Materi<span class="text-danger">*</span></label>
                        <select name="id_materi" id="id_materi" class="form-select @error('id_materi') is-invalid @enderror" required>
                            <option value="">- Pilih Materi -</option>
                            @foreach($materi as $mtr)
                            <option value="{{$mtr->id}}" {{old('materi') == $mtr->id ? 'selected' : null}}>{{$mtr->materi}}</option>
                            @endforeach
                        </select>
                            @error('id_materi')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                    </div>
                    <div class="mb-2 field">
                        <label class="form-label mb-2">Peran Jaga<span class="text-danger">*</span></label>
                            <select name="teaching_role" id="teaching_role" class="form-select @error('teaching_role') is-invalid @enderror" required>
                            <option value="">- Pilih Peran Jaga -</option>
                                <option value="Ketua">Ketua</option>
                                <option value="Tutor">Tutor</option>
                                <option value="Asisten">Asisten</option>
                            </select>
                    </div>
                    <div class="mb-2 field">
                        <label class="form-label mb-2">Kode Absen<span class="text-danger">*</span></label>
                        <input type="text" name="id_code"class="form-control @error('$id_code') is-invalid @enderror" value="{{ old('$id_code') }}" placeholder="Contoh : 0KT3j2uUcV" required>
                            @error('$id_code')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                    </div>
                    <button type="submit" class="btn btn-outline-dark py-2 btn-warning mt-4 w-100">Absen</button>
                   </form>
        </div>
        @else
        <div class="container"><form class="check-out" action="/absen/update" method="post">
                @csrf
                <button class="btn btn-outline-dark btn-warning w-100" type="submit">Check Out</button>
              </form>
        </div>
        @endif
    </div>
    
</div>
</div>
  @else
<div class="overflow-hidden p-md-5 m-md-3 bg-light">
    <div class="col-md-5 p-lg-5">
      <h1 class="fw-bold">Haloo!</h1>
      <p class="lead fw-normal">Silahkan Login</p>
      <a  class="btn btn-outline-dark px-5 py-2 btn-warning shadow" href="/login">Masuk</a>
    </div>
  </div>
  @endauth
@endsection

@push('scripts')
<script>
$('.kode-absen').submit(function(event) {
    event.preventDefault();
    Swal.fire({
       title: 'Buat kode baru?',
        text: "Apakah anda yakin?",
        icon: 'question',
        showCancelButton: true,
        cancelButtonText: 'Batal',
        confirmButtonColor: '#FFC107',
        cancelButtonColor: 'grey',
        confirmButtonText: 'Buat'
    }).then((result) => {
        if (result.isConfirmed) {
            event.currentTarget.submit();
        }
    })
});

$('.check-out').submit(function(event) {
    event.preventDefault();
    Swal.fire({
       title: 'Check out Absen?',
        text: "Apakah anda yakin?",
        icon: 'question',
        showCancelButton: true,
        cancelButtonText: 'Batal',
        confirmButtonColor: '#FFC107',
        cancelButtonColor: 'grey',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.isConfirmed) {
            event.currentTarget.submit();
        }
    })
});

function updateClock() {
  var now = new Date();
  var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
  var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
  
  var dayOfWeek = days[now.getDay()];
  var dayOfMonth = now.getDate();
  var month = months[now.getMonth()];
  var year = now.getFullYear();
  var hours = now.getHours();
  var minutes = now.getMinutes();
  var seconds = now.getSeconds();
  
  // Menambahkan angka 0 di depan jam, menit, dan detik jika nilainya kurang dari 10
  hours = (hours < 10 ? "0" : "") + hours;
  minutes = (minutes < 10 ? "0" : "") + minutes;
  seconds = (seconds < 10 ? "0" : "") + seconds;
  
  var timeString = hours + ":" + minutes + ":" + seconds;
  var dateString = dayOfMonth + ' ' + month + ' ' + year;
  
  document.getElementById("clock").innerText = timeString;
  document.getElementById("day").innerText = dayOfWeek;
  document.getElementById("date").innerText = dateString;
}

// Panggil fungsi updateClock setiap 1 detik
setInterval(updateClock, 1000);

// Panggil fungsi updateClock pada saat halaman dimuat untuk pertama kali
updateClock();

</script>

@endpush

@push('scripts')
<script>
 document.addEventListener('DOMContentLoaded', function () {
        // Membuat event listener untuk tombol "Salin Kode"
        document.querySelector('.swal2-confirm').addEventListener('click', function() {
            // Memilih teks dari elemen <pre>
            var preElement = document.querySelector('pre');
            var range = document.createRange();
            range.selectNode(preElement);
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);

            try {
                var successful = document.execCommand('copy');
                var msg = successful ? 'Kode berhasil disalin!' : 'Gagal menyalin kode!';
                console.log(msg);
            } catch (err) {
                console.log('Oops, tidak dapat menyalin kode: ', err);
            }

            window.getSelection().removeAllRanges();
        });
    });

</script>
@endpush