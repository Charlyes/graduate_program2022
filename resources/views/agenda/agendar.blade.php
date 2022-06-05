@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col">
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Agendamento </h1>
</div>

<div class="card-body">
    <div class="table-responsive">
        <div id='calendar'></div>
    </div>
</div>
</div>
</div>
{{-- </div> --}}
@include('agenda.form')
@endsection


@section('stylesheet')
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/fullcalendar/main.css') }}" rel="stylesheet">
<!-- <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/select2/select2.css') }}" rel="stylesheet"> -->
@endsection



@section('style')
<style>

.required:after {
  content:" *";
  color: red;
}
    tr {
        color: #343734;
    }

    tr.odd {
        background: white;
    }

    tr.even {
        background: #CAC3B8;
    }

    td:nth-child(4) {
        text-align: center;
    }

    td button.btn {
        border-radius: 50%;
        padding: 3px 12px 0px;
        font-size: 17px;
    }

    .active {
        color: limegreen;
    }

    .inactive {
        color: red;
    }

</style>




@endsection



@section('script')
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/ajax/agendamento.js') }}"></script>
    <script src="{{ asset('vendor/fullcalendar/main.js') }}"></script>
    <script src="{{ asset('vendor/fullcalendar/locales/pt-br.js') }}"></script>
    <!-- <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2.full.js') }}"></script> -->
    <!-- <script src="{{ asset('plugins/handlebarsjs/handlebars.js') }}"></script> -->
    <script src="{{ asset('vendor/moment-develop/min/moment.min.js') }}"></script>
    <script src="{{asset('vendor/fullcalendar/main.min.js') }}"></script>
    <!-- <script src="{{ 'https://cdn.jsdelivr.net/npm/@fullcalendar/moment@5.5.0/main.global.min.js' }}"></script> -->
@endsection