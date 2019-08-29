@extends('layouts.index')

@section('CSS')
    <style>
        .page-content {
            margin-top: 9rem;
        }
    </style>

@endsection

@section('content')

    <div class="row ustify-content-center">

        <div class="col-8 col-lg-8 col-md-10 col-sm-10">

            @if ($message = Session::get('success'))

                <div class="alert alert-success">

                    <p>{{ $message }}</p>

                </div>

            @endif


            <table class="table table-bordered">

                <tr>

                    <th width="80px">Code</th>

                    <th class="th-sm">nombres de produits</th>

                    <th class="th-sm">Prix a payer</th>

                    <th class="th-sm">Libelle</th>

                </tr>

                @foreach ($commandes as $commande)
                    <tr>
                        <td>{{$commande->commande_id }}</td>

                        <td>{{ $commande->nbre}}</td>

                        <td>{{ $commande->taxe + $commande->prix_total}}</td>

                        <td>{{ $commande->libelle}}</td>

                        <td>
                            <form action="{{ route('detaille.index') }}" method="get">

                            <button class="btn btn-primary">Voir les details</button>

                            </form>
                        </td>

                    </tr>

                @endforeach

            </table>


        </div>

    </div>


    {{--{!! $produit->render() !!}--}}

@endsection