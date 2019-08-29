@extends('admin.admin')
@section('page')

    Categorie
@endsection
@section('description')

   Voire les categories
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
            <div class="pull-right mb-3"> <a class="btn btn-success btn-sm" href="{{ route('categorie.create') }}"><i class="glyphicon glyphicon-plus"></i>Creé un catégorie</a>
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

            {{--<th class="th-sm">Prix</th>--}}

            <th class="th-sm">Action</th>

        </tr>

        @foreach ($categorie as $categorie)

            <tr>

                <td>{{$categorie-> id }}</td>

                <td>{{ $categorie->name }}</td>

                <td>

                    <a class="btn btn-info btn-sm" href="{{ route('categorie.show',$categorie->id) }}"><i class="glyphicon glyphicon-th-large"></i>Afficher</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('categorie.edit',$categorie->id) }}"><i class="glyphicon glyphicon-pencil"></i>Modifier</a>

                    {!! Form::open(['method' => 'DELETE','route' => ['categorie.destroy', $categorie->id],'style'=>'display:inline']) !!}

                    <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash">Supprimer</i></button>

                    {!! Form::close() !!}


                </td>

            </tr>

        @endforeach

    </table>



@endsection