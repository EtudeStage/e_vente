@extends('layouts.index')


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
                <h2> Afficher la commande </h2>
            </div>
            <div class = "pull-right" >
                <a class = "btn btn-primary" href = "{{ route('commandecli.index') }}"> Retour </a>
            </div>
        </div>
    </div>

    {{--<div class = "row" >--}}
        {{--<div class = "col-xs-12. col-sm-12. col-md-12" >--}}
            {{--<div class = "form-group" >--}}
                {{--<strong> Nom: </strong>--}}
                {{--{{$commande->nom}}--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class = "col-xs-12. col-sm-12. col-md-12" >
            <div class = "form-group" >
                <strong> prix: </strong>
                {{$commande->prixtotal}}
            </div>
        </div>

@endsection