<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Standardbank</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        >

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/custom.css') }}" rel="stylesheet"> -->

    <link href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">

    <link href="{{ asset('vendor/toastr/toastr.min.css') }}" rel="stylesheet">

    <!-- <link href="{{ asset('vendor/survey/formio.full.min.css') }}" rel='stylesheet'> -->


<!-- <link href="{{ asset('vendor/simplePagination/simplePagination.css') }}" rel='stylesheet'> -->

@yield('stylesheet')
@yield('style')
<style>
    .preload {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #343734;
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* animation rotation */
        .circle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 3px solid #343734;
            border-bottom: 3px #d9c589 solid;
            border-top: #d9c589 3px solid;
            animation: rotation 1s infinite linear;
        }


            
        @keyframes rotation {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
</style>

</head>

<body id="page-top">
    <div class="preload">
        <!-- <img style="width: 86px;" src="{{ asset('img/preload.svg') }}"> -->
        <div class="circle">

        </div>
    </div>
    <!-- Page Wrapper -->
    <div id="wrapper">



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('inc.nav')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <!-- <span>Copyright &copy; FAMS {{date('Y')}}</span> -->
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tem certeza?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecione "Sair" abaixo se você estiver pronto para encerrar sua sessão atual.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    </a>

                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    @yield('modal')
    <!-- Bootstrap core JavaScript-->


    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <script src="{{ asset('vendor/jquery.validate/jquery.validate.min.js') }}"></script>

    <script src="{{ asset('vendor/jquery.validate/messages_pt_BR.min.js') }}"></script>

    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <script src="{{ asset('vendor/toastr/toastr.min.js') }}"></script>

    <!-- <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script> -->

    <script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <script src="{{ asset('js/argon.js') }}"></script>


    <!-- <script src="{{ asset('vendor/survey/formio.full.min.js') }}"></script> -->

    <!-- <script src="{{ asset('vendor/simplePagination/jquery.simplePagination.js') }}"></script> -->

    <!--Set vialges-->
    <!-- <script src="{{ asset('js/colonias.js') }}"></script> -->
    <script src="{{ asset('js/chosen.jquery.js') }}"></script>
    <script>

            setTimeout(function(){
                $('.preload').fadeOut('slow');
            }, 750);

    </script>
    <!--Fim combo-->
    @yield('script')
</body>

</html>
