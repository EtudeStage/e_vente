@extends('layouts.index')

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
           <div class="pull-right"> <a class="btn btn-success btn-sm" href="{{ route('commandecli.create') }}"><i class="glyphicon glyphicon-plus"></i>Creé un produit</a>
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

            <th class="th-sm">Prix total</th>

        </tr>

        @foreach ($commande as $commande)

            <tr>

                <td>{{$produit-> id }}</td>

                <td>{{ $produit->prixtotal}}</td>

                <td>

                    <a class="btn btn-info btn-sm" href="{{ route('commandecli.show',$commande->id) }}"><i class="glyphicon glyphicon-th-large"></i>Afficher</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('commandecli.edit',$commandecli->id) }}"><i class="glyphicon glyphicon-pencil"></i>Modifier</a>

                    {!! Form::open(['method' => 'DELETE','route' => ['commandecli.destroy', $commandecli->id],'style'=>'display:inline']) !!}

                    <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash">Supprimer</i></button>

                    {!! Form::close() !!}


                </td>

            </tr>

        @endforeach

    </table>

    {{--{!! $produit->render() !!}--}}

@endsection