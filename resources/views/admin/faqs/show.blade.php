@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">
                        <a href="{{ url('admin/faqs') }}">FAQ´s</a>
                    </li>
                    <li class="breadcrumb-item active">Preguntas</li>
                </ol>
            </div>
            <h4 class="page-title">
                <a href="{{ url('admin/faqs') }}">FAQ´s</a>
            </h4>
        </div>
    </div>
</div>

<div class="col-lg-6">
    <div class="card">
        <div class="card-body">

            <h4 class="header-title">
                <i class="mdi mdi-eye-outline"></i> Mostrar
            </h4>

            <div class="form-group row mb-3">
                <label for="name" class="col-3 col-form-label">Pregunta</label>
                <label for="name" class="col-9 col-form-label">{{ $faq->topic->title }}</label>

                <label for="name" class="col-3 col-form-label">Pregunta</label>
                <label for="name" class="col-9 col-form-label">{{ $faq->question }}</label>

                <label for="name" class="col-3 col-form-label">Respuesta</label>
                <label for="name" class="col-9 col-form-label">{!! $faq->answer !!}</label>

            </div>
            <div class="form-group mb-0 left-content-end row">
                <a href="{{ url('admin/faqs/' . $faq->id . '/edit') }}">
                    <button type="button" class="btn btn-info">
                        <i class=" mdi mdi-square-edit-outline"></i>
                        <span>Editar</span>
                    </button>
                </a>
            </div>

        </div>  <!-- end card-body -->
    </div>  <!-- end card -->
</div>
@endsection