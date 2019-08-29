@extends('admin.admin')

@section('page')

    Categorie
@endsection
@section('description')

    Voire une categorie
@endsection
@section('CSS')
    <style>
        .page-content {
            margin-top: 9rem;
        }
    </style>

@endsection
@section ('content')
    <div class = "row" >
        <div class = "col-lg-12 margin-tb" >
            <div class = "pull-left" >
                {{--<h2> Afficher le Categoeie </h2>--}}
            </div>
            <div class = "pull-right" >
                <a class = "btn btn-primary" href = "{{ route('categorie.index') }}"> Retour </a>
            </div>
        </div>
    </div>

    <div class = "row" >
        <div class = "col-xs-12. col-sm-12. col-md-12" >
            <div class = "form-group" >
                <strong> Nom: </strong>
                {{$categorie->name}}
            </div>
        </div>


@endsection