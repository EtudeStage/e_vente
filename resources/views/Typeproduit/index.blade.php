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

        <div class="col-lg-12 margin-tb">
            <div class="pull-right"> <a class="btn btn-success btn-sm" href="{{ route('typeproduit.create') }}"><i class="glyphicon glyphicon-plus"></i>Creé un catégorie</a>
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

            <th class="th-sm">date</th>

            <th class="th-sm">Action</th>

        </tr>

        @foreach ($types as $type)

            <tr>

                <td>{{$type->id }}</td>

                <td>{{ $type->nom }}</td>

                <td>{{ $type->created_at}}</td>


                <td>

                    <a class="btn btn-info btn-sm" href="{{ route('typeproduit.show',$type->id) }}"><il class="glyphicon glyphicon-th-large"></il>Afficher</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('typeproduit.edit',$type->id) }}"><il class="glyphicon glyphicon-pencil"></il>Modifier</a>

                    {!! Form::open(['method' => 'DELETE','route' => ['typeproduit.destroy', $type->id],'style'=>'display:inline']) !!}

                    <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><il class="glyphicon glyphicon-trash">Supprimer</il></button>

                    {!! Form::close() !!}


                </td>




        @endforeach

    </table>

    {{--{!! $produit->render() !!}--}}

@endsection