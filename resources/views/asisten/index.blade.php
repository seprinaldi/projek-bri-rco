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
    <a class="btn btn-warning border-dark" href="/data-asisten/create"><i class="fas fa-plus"></i> Tambah Asisten</a>
</div>
    <div class="card p-4">
        <h3 class="mb-0">Data Asisten</h3>
        <hr>
        <table id="datatables" class="table table-responsive-lg table-bordered table-striped">
        <thead class="bg-dark text-light">
            <tr>
                <th class="text-center">ID Asisten</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Email</th>
                <th class="text-center">Jabatan</th>
                <th class="text-center">Join Date</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($asisten as $as)
            <tr>
                <td>{{ $as->id_asisten }}</td>
                <td>{{ $as->nama }}</td>
                <td>{{ $as->email }}</td>
                <td>{{ $as->role }}</td>
                <td>{{ $as->join_date }}</td>
                <td class="text-center">
                    <a href="/data-asisten/edit/{{$as->id}}" class="btn btn-warning px-2 py-1"> 
                        <i class="fas fa-pen"></i>
                    </a>
                    <form action="/data-asisten/delete/{{ $as->id }}" class="d-inline delete">
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
 