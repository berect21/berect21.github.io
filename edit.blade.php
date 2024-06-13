@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar pedido</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('pedidos.update',$pedido->id_pedido) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="row justify-content-center">
            <div class="col-7">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Fecha_pedido:</strong>
                            <input type="date" name="fecha_pedido" class="form-control" placeholder="Fecha_pedido" value="{{$pedido->fecha_pedido}}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Total:</strong>
                            <input type="text" name="total" class="form-control" placeholder="Total" value="{{$pedido->total}}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Id_cliente:</strong>
                            <input type="text" name="id_cliente" class="form-control" placeholder="Id_cliente" value="{{$pedido->id_cliente}}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Id_empleado:</strong>
                            <input type="text" name="id_empleado" class="form-control" placeholder="Id_empleado" value="{{$pedido->id_empleado}}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>

    </form>

@endsection