
@extends('layouts.index')


@section('page')

    Produit
@endsection
@section('description')

    créé un  nouveau produit
@endsection

@section('CSS')
    <style>
        .page-content {
            margin-top: 9rem;
        }

    </style>
@endsection
@section('content')


    <div class="row justify-content-center">
        <div class="col-8 col-lg-8 col-md-10 col-sm-10">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th class="th-sm">Image</th>

                    <th class="th-sm">Nom</th>

                    <th class="th-sm">Prix</th>

                    <th class="th-sm">Quantite</th>

                    <th class="th-sm">Action</th>
                </tr>
                </thead>

                <tbody>

                @foreach ($items as $item => $value)

                    <tr>
                        <td>
                            <img src="{{'images/produit/'.$value['image'] }}" alt="" width="90" height="90">
                        </td>

                        <td>{{ $value['name'] }}</td>

                        <td>{{  $value['price'] }}</td>

                        <td>{{  $value['quantity'] }}</td>

                        <td>
                            <div class="row justify-content-center" style="text-align:center">
                            <form action="{{ route('cart-inc') }}" method="post">
                                @csrf
                                <input type="hidden" value="{{ $item }}" name="id"/>
                                <button class=" btn btn-primary">
                                    <i class="fa fa-plus"> </i>
                                </button>
                            </form>


                            <form action="{{ route('cart-dec') }}" method="post">
                                @csrf
                                <input type="hidden" value="{{ $item }}" name="id"/>
                                <button class=" btn btn-info">
                                    <i class="fa fa-minus"> </i>
                                </button>
                            </form>

                            <form action="{{ route('cart-remove') }}" method="post">
                                @csrf
                                <input type="hidden" value="{{ $item }}" name="id"/>
                                <button class=" btn btn-danger"><i class="fa fa-times"> </i></button>
                            </form>
                            </div>
                        </td>
                    </tr>

                @endforeach
                <tr>
                    <td colspan="3">Prix total</td>

                    <td colspan="2" class="text-right">{{$totals['Subtotal']}}</td>
                </tr>

                <tr>
                    <td colspan="3">Tax</td>

                    <td colspan="2" class="text-right">{{ $totals['Tax']}}</td>
                </tr>
                <tr>
                    <td colspan="3">Prix total final</td>

                    <td colspan="2" class="text-right"> {{ $totals['Payable']}}</td>
                </tr>
                </tbody>
            </table>


            <div class="row justify-content-center">
                <div class=" row col-8 col-lg-8 col-md-10 col-sm-20">
                    <form action="{{ route('commande.index') }}" method="get">
                        <button class="btn btn-primary">Passer la commande</button>
                    </form>
                </div>
                <div class=" row col-4 col-lg-4 col-md-4 col-sm-4">
                    <form action="{{ route('cart-clear') }}" method="post">
                        @csrf
                        <button class="btn btn-danger">Vider le panier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection()