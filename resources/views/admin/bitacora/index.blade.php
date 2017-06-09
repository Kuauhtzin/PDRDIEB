@extends('layouts.app')

@section('refresh')
  <meta http-equiv="refresh" content="300">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        BITÁCORA
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> ADMIN</a></li>
        <li class="active">BITÁCORA</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
                    <!-- Horizontal Form -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">LOG</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="col-xs-12 ">
                  <table class="table table-striped table-condensed" id="table">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>USUARIO</th>
                      <th>IP</th>
                      <th>NOMCÍA</th>
                      <th>MODULO</th>
                      <th>FECHA</th>
                      <th>HORA</th>
                    </tr>
                    </thead>
                    <tbody>
                  @foreach($bitacora as $key => $value)
                    <tr>
                      <td>{{$value->id}}</td>
                      <td>{{$value->nomusr}}</td>
                      <td>{{$value->ipusr}}</td>
                      <td>{{$value->nomcia}}</td>
                      <td>{{$value->modulo}}</td>
                      <td>{{$value->fecusr}}</td>
                      <td>{{$value->horusr}}</td>
                    </tr>
                  @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.box-body -->
              <!-- Loading (remove the following to stop the loading)-->
              <div class="overlay2">
                <i class="fa fa-spin"><img src="{{asset('abrasivos-austromex.png')}}" ></i>
                <span class="sr-only">Cargando...</span>
              </div>
              <!-- end loading -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>

@endsection

@push('styles')
@endpush

@push('scripts')
<!-- DataTables -->
<script src="{{asset('plugins/datatables-1.10.12/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-1.10.12/media/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/datatables-1.10.12/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-1.10.12/extensions/Buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-1.10.12/extensions/Buttons/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/jszip-2.5.0/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake-0.1.18/build/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake-0.1.18/build/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-1.10.12/extensions/Buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-1.10.12/extensions/Buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-1.10.12/extensions/Buttons/js/buttons.colVis.min.js')}}"></script>

<script type="text/javascript">
  $(function () {
    $('#table').DataTable({
      "paging": true,
      "pageLength": 25,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "oLanguage":{
        "sInfo": "Se muestran _START_ de _END_ de _TOTAL_",
        "sInfoFiltered": "(Filtrado de _MAX_)",
        "sInfoEmpty": "Se muestran 0 de _TOTAL_",
        "sZeroRecords": "No existen coincidencias.",
        "oPaginate":{
          "sNext": "Siguiente",
          "sPrevious": "Anterior"
        },
        "sSearch":"Buscar:"
      },
      "order": [[ 0, "desc" ]],
      "scrollX": true
    });
    $("div.overlay2").text("");
    $("div.overlay2").removeClass("overlay2");
  });

</script>
@endpush
