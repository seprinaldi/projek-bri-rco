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
    <div class="card p-4">
        <h3 class="mb-0">Report Absen</h3>
        <hr>
        <table id="datatables" class="table table-responsive-lg table-bordered table-striped">
        <thead class="bg-dark text-light">
            <tr>
                <th class="text-center">ID Asisten</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Kelas</th>
                <th class="text-center">Materi</th>
                <th class="text-center">Peran Jaga</th>
                <th class="text-center">Tanggal</th>
                <th class="text-center">Waktu Mulai</th>
                <th class="text-center">Waktu Akhir</th>
                <th class="text-center">Durasi</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($absen as $abs)
            <tr>
                <td>{{ $abs->id_asisten }}</td>
                <td>{{ $abs->asisten->nama }}</td>
                <td>{{ $abs->kelas->nama_kelas }}</td>
                <td>{{ $abs->materi->materi }}</td>
                @if($abs->teaching_role == 'Ketua')
                <td><span class="bg-danger text-light px-2 py-1 rounded">{{ $abs->teaching_role }}</span></td>
                @elseif($abs->teaching_role == 'Tutor')
                <td><span class="bg-success text-light px-2 py-1 rounded">{{ $abs->teaching_role }}</span></td>
                @else
                <td><span class="bg-warning text-light px-2 py-1 rounded">{{ $abs->teaching_role }}</span></td>
                @endif
                <td>{{ $abs->date }}</td>
                <td>{{ $abs->mulai }}</td>
                <td>{{ $abs->berakhir ?? '' }}</td>
                <td>{{ $abs->durasi ?? '' }}</td>
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
 