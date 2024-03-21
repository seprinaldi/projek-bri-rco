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
    <a class="btn btn-warning border-dark" href="/data-kelas/create"><i class="fas fa-plus"></i> Tambah Kelas</a>
</div>
    <div class="card p-4">
        <h3 class="mb-0">Data Kelas</h3>
        <hr>
        <table id="datatables" class="table table-responsive-lg table-bordered table-striped">
        <thead class="bg-dark text-light">
            <tr>
                <th class="text-center">Jurusan</th>
                <th class="text-center">Fakultas</th>
                <th class="text-center">Nama Kelas</th>
                <th class="text-center">Tingkat</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($kelas as $kls)
            <tr>
                <td>{{ $kls->jurusan }}</td>
                <td>{{ $kls->fakultas }}</td>
                <td>{{ $kls->nama_kelas }}</td>
                <td>{{ $kls->tingkat }}</td>
                <td class="text-center">
                    <a href="/data-kelas/edit/{{ $kls->id }}" class="btn btn-warning px-2 py-1"> 
                        <i class="fas fa-pen"></i>
                    </a>
                    <form action="/data-kelas/delete/{{ $kls->id }}" class="d-inline delete">
                        <button class="btn btn-danger px-2 py-1"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
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
 