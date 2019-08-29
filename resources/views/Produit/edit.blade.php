@extends('admin.admin')
@section('page')
    Produit
@endsection
@section('description')
    Modiffier un produit
@endsection
@section('CSS')
    <style>
        .page-content {
            margin-top: 9rem;
        }
    </style>

@endsection

@section('content')
    <div calss="row">
        <div class="pull-left">
            {{--<h3>Ajouter un nouveau catégorie </h3>--}}
        </div>
    </div>
    <div class="reow">
        <div class="pull-right">
            <a class="btn-btn-primary" href="{{route('produit.index')}}">Retoure</a>
        </div>
    </div>

    {{--@if ($errors->any())--}}
        {{--<div class="alert alert-danger">--}}
            {{--<ul>--}}
                {{--@foreach($errors-> all()as $error)--}}
                    {{--<li> {{$error}} </li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--</div>--}}
     {{--@endif--}}

    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-9 col-md_8">
            {!! form($form)!!}
        </div>
    </div>



@endsection