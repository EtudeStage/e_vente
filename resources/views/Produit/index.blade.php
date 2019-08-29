@extends('admin.admin')
@section('page')
    Produit
@endsection
@section('description')
  liste des produits
@endsection

@section('CSS')
    <style>
        .page-content {
            margin-top: 9rem;
        }
    </style>

@endsection

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">
           <div class="pull-right mb-3 " > <a class="btn btn-success btn-sm" href="{{ route('produit.create') }}"><i class="glyphicon glyphicon-plus"></i>Creé un produit</a>
        </div>
            <div class="pull-left">

                {{--<h2>Post CRUD</h2>--}}

            </div>

        </div>

    </div>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

    <table class="table table-bordered">

        <tr>

            <th width="80px">Code</th>

            <th class="th-sm">Nom</th>

            <th class="th-sm">Prix</th>

            <th class="th-sm">Image</th>

            <th class="th-sm">Action</th>

        </tr>

        {{--<img src="{{'images/produit/'.$value['image'] }}" alt="" width="90" height="90">--}}


        @foreach ($produits as $produit)

            <tr>

                <td>{{$produit->id }}</td>

                <td>{{ $produit->nom }}</td>

                <td>{{ $produit->prix}}</td>

                <td> <img src="{{ url('images/produit/'.$produit->image)}}" alt="" width="50" height="50"> </td>

                <td>

                    <a class="btn btn-info btn-sm" href="{{ route('produit.show',$produit->id) }}"><i class="glyphicon glyphicon-th-large"></i>Afficher</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('produit.edit',$produit->id) }}"><i class="glyphicon glyphicon-pencil"></i>Modifier</a>

                    {!! Form::open(['method' => 'DELETE','route' => ['produit.destroy', $produit->id],'style'=>'display:inline']) !!}

                    <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash">Supprimer</i></button>

                    {!! Form::close() !!}


                </td>

            </tr>

        @endforeach

    </table>

    {{--{!! $produit->render() !!}--}}

@endsection