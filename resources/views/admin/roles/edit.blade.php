@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('roles.index') }}">Roles</a>
                        </li>
                        <li class="breadcrumb-item active">Editar</li>
                    </ol>
                </div>
                <h4 class="page-title">Roles</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <h4 class="mb-3 header-title">Editar registro</h4>

                <form class="form-horizontal" action="{{ url('admin/roles/' . $rol->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group row mb-3">
                        <label for="name" class="col-3 col-form-label">Nombre</label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Ingrese el nombre" value="{{ $rol->name }}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="description" class="col-3 col-form-label">Descripción</label>
                        <div class="col-9">
                            <textarea class="form-control" id="description" name="description"
                                placeholder="Ingrese la descripción">{{ $rol->description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group mb-0 justify-content-end row">
                        <div class="col-9">
                            <button type="submit" class="btn btn-info">Guardar</button>
                        </div>
                    </div>
                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div>
</div>
@endsection
