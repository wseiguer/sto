@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Entidades</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="entitysTable" class="table table-hover">
                            <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Creada el</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($entitys as $entity)
                                <tr>
                                    <td>{{$entity->id }}</td>
                                    <td role="button" data-toggle="collapse"
                                        data-target="#subEntity{{$entity->id}}">{{$entity->name}}</td>
                                    <td role="button" data-toggle="collapse"
                                        data-target="#subEntity{{$entity->id}}">{{$entity->description}}</td>
                                    <td>{{$entity->created_at->toDateString()}}</td>
                                    <td>
                                        <button id="modifyE" type="button" class="btn btn-info">Editar</button>
                                    </td>
                                    <td>
                                        <button id="softDeleteE" type="button" class="btn btn-danger">Baja</button>
                                    </td>
                                    <td>
                                        <button id="newSubEntity" type="button" class="btn btn-success"
                                                onclick="window.location='{!! route('entity.subentity.create', ['idEntity' => $entity->id]) !!}'">
                                            Nueva Sub Entidad
                                        </button>
                                    </td>
                                </tr>
                                <tr class="collapse" id="subEntity{{$entity->id}}">
                                    <td colspan="12">
                                        <table class="table table-hover">
                                            <caption>SUB ENTIDADES</caption>
                                            <thead>
                                            <tr>
                                                <th>Nro</th>
                                                <th>Nombre</th>
                                                <th>Descripción</th>
                                                <th>Creada el</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($entity->subEntitys as $subEntity)
                                                <tr role="button"
                                                    onclick="{!! route('entity.subentity.show', ['idEntity' => $entity->id, 'idSubEntity' => $subEntity->id]) !!}">
                                                    <td>{{$subEntity->id}}</td>
                                                    <td>{{$subEntity->name}}</td>
                                                    <td>{{$subEntity->description}}</td>
                                                    <td>{{$subEntity->created_at->toDateString()}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <button type="button" class="btn btn-success btn-block">Nueva Entidad</button>
        </div>
    </div>
@endsection