<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/rowgroup/1.4.0/css/rowGroup.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"> -->

    <script src="https://kit.fontawesome.com/9c94b38548.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
    .atas{
      margin-top: 100px;
    }
  </style>

</head>

<body>
  @include('sweetalert::alert')
   <header class="p-3 text-bg-dark shadow fixed-top mb-5">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white px-5 fs-4 fw-bold text-decoration-none">
          Projek <span class="text-warning">Absensi</span>
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
    <li><a href="/" class="nav-link px-2 {{ Request::is('/') ? 'text-warning fw-bold' : 'text-light' }} ">Dashboard</a></li>
    @auth
    @if(auth()->user()->role == 'Admin' || auth()->user()->role == 'Staff')
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ Request::is('data*') ? 'text-warning fw-bold' : 'text-light' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Data
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item {{ Request::is('data-asisten*') ? 'text-warning bg-light fw-bold' : '' }}" href="/data-asisten">Data Asisten</a></li>
            <li><a class="dropdown-item {{ Request::is('data-kelas*') ? 'text-warning bg-light fw-bold' : '' }}" href="/data-kelas">Data Kelas</a></li>
            <li><a class="dropdown-item {{ Request::is('data-materi*') ? 'text-warning bg-light fw-bold' : '' }}" href="/data-materi">Data Materi</a></li>
          </ul>
        </li>
    @endif
    @if(auth()->user()->role == 'Admin' || auth()->user()->role == 'Staff' || auth()->user()->role == 'PJ')
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle  {{ Request::is('code*') ? 'text-warning fw-bold' : 'text-light' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Generator
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item {{ Request::is('code-generator*') ? 'text-warning bg-light fw-bold' : '' }}" href="/code-generator">Kode Absen</a></li>
          </ul>
        </li>
      @endif
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ Request::is('absen*') ? 'text-warning fw-bold' : 'text-light' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Report
          </a>
          <ul class="dropdown-menu">
            @if(auth()->user()->role == 'Admin' || auth()->user()->role == 'Staff')
            <li><a class="dropdown-item {{ Request::is('absen-report*') ? 'text-warning bg-light fw-bold' : '' }}" href="/absen-report">Report Absen</a></li>
            @endif
            <li><a class="dropdown-item {{ Request::is('absen-riwayat*') ? 'text-warning bg-light fw-bold' : '' }}" href="/absen-riwayat">Riwayat Absen</a></li>
          </ul>
        </li>
        @endauth
</ul>

        <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form> -->

        @auth
        <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item container dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ auth()->user()->nama}}
          </a>
          <ul class="dropdown-menu">
            <li class="text-center">
              <form action="/logout" method="post">
                @csrf
                <button class="w-100 px-2 py-1 btn btn-outline-light text-danger rounded-1"
                                type="submit">Logout</button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
        
        @else
        <div class="text-end">
            <a href="/login" class="btn btn-outline-warning me-2">Masuk</a>
            <!-- <a href="/register" class="btn btn-warning">Buat Akun</a> -->
        </div>
        @endauth
        
      </div>
    </div>
  </header>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div>
                        <div class="anak-judul">
                            <h4>@yield('sub-title')</h4>
                            
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    @yield('content')
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->


        <!-- <div class="footer bg-dark mt-5">
        <div class="container footer">
          <p class="text-light py-3 mt-5 mb-0">Dikembangkan oleh M. Seprinaldi</p>
        </div>
      </div> -->


        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/rowgroup/1.4.0/js/dataTables.rowGroup.min.js"></script>
        

        @yield('js')
        @stack('scripts')

<script type="text/javascript">
$(document).ready(function() {
    var table = $('#datatables').DataTable( {
        "lengthMenu": [ 10, 20, 50, 100, 150 ],
        buttons: [ 'excel','print', 'pdf' ],
        dom:
        "<'row'<'col-md-2'l><'col-md-5'B><'col-md-4'f>>" +
        "<'row'<'col-md-12'tr>>" +
        "<'row'<'col-md-5'i><'col-md-7'p>>"
        
    } );
 
    table.buttons().container()
        .appendTo( '#datatables_wrapper .col-md-5:eq(0)' );
} );
</script>

</body>

</html>
