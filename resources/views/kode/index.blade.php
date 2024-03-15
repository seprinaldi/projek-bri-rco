@extends('main.main')

@section('title')
    MINI PROJECT BRI | Data Asisten
@endsection
<style>
    .footer{
        margin-top: 250px;
    }
</style>

@section('content')
<div class="atas">
<div class="container p-2">

    <form class="kode-absen" action="{{ url('/code-generator/create') }}" method="post">
                @csrf
                <button class="btn btn-warning shadow-sm border-dark" type="submit">Buat Kode Baru</button>
              </form>
</div>
    <div class="card p-4">
        <h3 class="mb-0">Kode Absen</h3>
        <hr>
        <table id="datatables" class="table table-responsive-lg table-bordered table-striped">
        <thead class="bg-dark text-light">
            <tr>
                <th class="text-center">Kode</th>
                <th class="text-center">Dibuat oleh</th>
                <th class="text-center">Status</th>
                <!-- <th class="text-center">Aksi</th> -->
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($kode as $kode)
            <tr>
                <td>{{ $kode->code }}</td>
                <td>{{ $kode->dibuatoleh->nama }}</td>
                @if($kode->id_user_get == null)
                <td class="bg-secondary text-light">Belum dipakai</td>
                @else
                <td class="bg-info text-dark">Sudah dipakai</td>
                @endif
                <!-- <td class="text-center">
                    <a href="/data-kelas/edit/{{ $kode->id }}" class="btn btn-warning px-2 py-1"> 
                        <i class="fas fa-pen"></i>
                    </a>
                    <form action="/data-kelas/delete/{{ $kode->id }}" class="d-inline delete">
                        <button class="btn btn-danger px-2 py-1"><i class="fas fa-trash"></i></button>
                    </form>
                </td> -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>    
</div> 

@endsection

@push('scripts')

<script>
$('.delete').submit(function(event) {
    event.preventDefault();
    Swal.fire({
        title: 'Hapus data?',
        text: "Apakah anda yakin?",
        icon: 'question',
        showCancelButton: true,
        cancelButtonText: 'Batal',
        confirmButtonColor: '#dc3545',
        cancelButtonColor: 'grey',
        confirmButtonText: 'Hapus'
    }).then((result) => {
        if (result.isConfirmed) {
            event.currentTarget.submit();
        }
    })
});
</script>
@endpush

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

 document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('.swal2-confirm').addEventListener('click', function() {
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
 