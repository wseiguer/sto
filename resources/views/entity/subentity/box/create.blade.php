@extends('layout.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Nuevo Box</h3>
        </div>
        <form action="{!! route('entity.subentity.box.store', ['idSubEntity', $subEntity->id]) !!}" method="post"
              role="form">
            {!! csrf_field() !!}
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="idSubEntity">Nro Sub Entidad</label>
                            <input type="text" class="form-control" id="idEntity" name="idEntity"
                                   value="{!! $subEntity->id !!}" readonly>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="entityName">Sub Entidad</label>
                            <input type="text" class="form-control" id="entityName" name="entityName"
                                   value="{!! $subEntity->name !!}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label for="boxName">Nombre</label>
                            <input type="text" class="form-control" name="boxName" id="boxName" autofocus
                                   maxlength="50" required>
                        </div>
                        <div class="form-group">
                            <label for="boxDescription">Descripción</label>
                            <input type="text" class="form-control" name="boxDescription"
                                   id="boxDescription">
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button type="reset" class="btn btn-info">Limpiar</button>
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
        </form>
    </div>
@endsection
