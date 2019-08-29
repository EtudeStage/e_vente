@extends('admin.admin')
@section('page')

    Produit
@endsection
@section('description')

    voire un produit
@endsection

@section('CSS')
    <style>
        .page-content {
            margin-top: 9rem;
        }
        body {
            background-image: url("http://localhost:8000/admin/produit/images_037.JPG");
        }

    </style>

@endsection
@section ('content')
    <div class = "row " style="text-align: center" >
        <div class = "col-lg-12 margin-tb" >
            <div class = "pull-left">
                {{--<h2> Afficher le produit </h2>--}}
            </div>
            <div class = "pull-right" >
                <a class = "btn btn-primary" href = "{{ route('produit.index') }}"> Retour </a>
            </div>
        </div>


        <div class = "row" >
            <div class = "col-xs-12. col-sm-12. col-md-12" >
                <div class = "form-group" >
                    <strong> Nom: </strong>
                    {{$produit->nom}}
                </div>
            </div>

            <div class = "col-xs-12. col-sm-12. col-md-12" >
                <div class = "form-group" >
                    <strong> prix: </strong>
                    {{$produit->prix}}
                </div>
            </div>
        </div>

        <div class = "col-xs-12. col-sm-12. col-md-12" >
            <div class = "form-group" >
                <strong> Quantité: </strong>
                {{$produit->qts}}
            </div>
        </div>
    </div>


    <div class = " justify-content-center col-xs-12. col-sm-12. col-md-12 " >
        <div class = "form-group" >
            <strong> </strong>
            <img src="{{ url('images/produit/'.$produit->image)}}" alt="" width="25%" height="25%">
        </div>
    </div>





@endsection