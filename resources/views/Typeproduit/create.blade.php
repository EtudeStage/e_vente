@extends('admin.admin')

@section('CSS')
    <style>
        .page-content {
            margin-top: 9rem;
        }
    </style>

@endsection

@section('content')
    <div class="row">
        <div class="pull-left">
            <h3>Ajouter un nouveau catégorie </h3>
        </div>
    </div>
    <div class="reow">
        <div class="pull-right">
            <a class="btn-btn-primary" href="
{{route('typeproduit.index')}}">Retour</a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-9 col-md_8">
            {!! form($form)!!}
        </div>
    </div>

@endsection