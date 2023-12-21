<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
    <style>
        @media (max-width: 767px) {
            .hidden-mobile {
                display: none;
            }
        }
    </style>
</head>


<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 text-center">
                <h5 class=" mt-3 font-weight-bold text-center text-secondary">APLIKASI PENGARSIPAN DIGITAL
                    <h5 class="container font-weight-bold text-center text-secondary">SURAT KEPUTUSAN</h5>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img src="<?= base_url(); ?>/img/logo.png" width="80" height="80" class="d-inline-block align-top mr-3 " alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-md-3 ">
                    <li class="nav-item text-center"><a href="<?= base_url(); ?>" style="color:#6c2bab;" class="nav-link">Dashboard</a></li>
                    <li class="nav-item dropdown text-center">
                        <a class="nav-link dropdown-toggle" style="color:#6c2bab;" href="#" id="ftco-nav" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Surat Keputusan</a>
                        <div class="dropdown-menu rounded" aria-labelledby="ftco-nav">
                            <a class="dropdown-item" href="<?= base_url('backend'); ?>" style="color:#6c2bab;">Surat Keputusan Kerja Praktik</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" style="color:#6c2bab;" data-toggle="modal" data-target="#exampleModal1">Surat Keputusan Laporan Akhir</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" style="color:#6c2bab;" data-toggle="modal" data-target="#exampleModal1">Surat Keputusan Mengajar</a>
                        </div>
                    </li>
                    <?php if (!allow('3')) : ?>
                        <li class="nav-item text-center"><a style="background-color:#6c2bab;" href="<?= base_url('auth/index'); ?>" type="submit" class="btn text-white btn-block">Login</a></li>
                    <?php endif; ?>
                    <?php if (allow('3')) : ?>
                        <li class="nav-item text-center"><a style="background-color:#6c2bab;" href="<?= base_url('auth/logout'); ?>" type="submit" class="btn text-white btn-block">Logout</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>

        <hr style="background-color:#6c2bab;" class=" border-3 opacity-75">
        <section class="content-header">
            <?= $this->renderSection('page-content'); ?>
        </section>
        <footer class="fixed-bottom card-footer bg-dark" style="height:50px;">
            <div class="container text-center">
                <a href="https://github.com/rapsign" target="_blank"> <small class="text-white">Copyright &copy; RapSign </small></a>
            </div>
        </footer>

    </div>
    <div class="modal fade " id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Alert!!!!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p class="card-text">This Page Will Be</p>
                    <h1 class="text-center">COMING SOON!!!</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script>
        $(function() {
            //Add text editor
            $('#compose-textarea').summernote()
        })
    </script>
    <script>
        $('#exampleModal').on('shown.bs.modal', function() {
            $('#exampleModal').trigger('focus')
        })
    </script>
</body>

</html>