@extends('layouts.app')

@section('refresh')
  <meta http-equiv="refresh" content="300">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        GESTIÓN DE USUARIOS
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> ADMIN</a></li>
        <li class="active">USUARIOS</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
                    <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Usuario</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-inline" method="POST" action="{{route('admin.users.store')}}">
              {!! csrf_field() !!}
              <div class="box-body">
                <div class="col-xs-12 text-center">
                  <div class="form-group">
                    <label for="nomusr" class="control-label">Usuario</label>
                    <input type="text" class="form-control" id="nomusr" name="nomusr" placeholder="Usuario" required="required">
                  </div>
                  <div class="form-group">
                    <label for="acceso" class="control-label">Acceso</label>
                    <select class="form-control" id="acceso" name="acceso" required="required">
                      <option value="0">ADMIN</option>
                      <option value="1">SOPORTE</option>
                      <option value="2">JEFE DE DEPTO</option>
                      <option value="3">USUARIO</option>
                      <option value="4">SIN ACCESO</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-info">Agregar</button>
                </div>
              </div>
              <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <div class="col-xs-12">
                    <!-- Horizontal Form -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Listado de Usuarios</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="col-xs-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>USUARIO</th>
                      <th>ACCESO</th>
                      <th>BORRAR</th>
                    </tr>
                    </thead>
                    <tbody>
                  @foreach($users as $key => $value)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{isset($value->nomusr)?$value->nomusr:''}}</td>
                      <td>
                        @if(isset($value->acceso) and $value->acceso==0)
                          ADMIN
                        @elseif(isset($value->acceso) and $value->acceso==1)
                          SOPORTE
                        @elseif(isset($value->acceso) and $value->acceso==2)
                          JEFE DE DEPTO
                        @elseif(isset($value->acceso) and $value->acceso==3)
                          USUARIO
                        @else
                          SIN ACCESO
                        @endif
                      </td>
                      <td>
                        <div class="btn-group btn-group-sm" role="group" aria-label="options">
                          <!--<button class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>-->
                          <a href="{{route('admin.users.remove',['id'=>$value->id])}}" role="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>

@endsection

@push('styles')
@endpush

@push('scripts')
<script type="text/javascript">

</script>
@endpush