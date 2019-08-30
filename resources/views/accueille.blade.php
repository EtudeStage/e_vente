@extends('layouts.index')
@section('CSS')
<style>
    .page-content {
        margin-top: 5rem;
    }
</style>

@endsection

@section('content')

    {{--<div class="new_arrivals">--}}
        {{--<div class="container">--}}
            {{--<div class="row align-items-center">--}}
                {{--<div class="col text-center">--}}
                    {{--<div class="new_arrivals_sorting">--}}
                        {{--<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">--}}
                            {{--<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">tout</li>--}}
                            {{--<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".women">pagnes</li>--}}
                            {{--<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".accessories">accessores</li>--}}
                            {{--<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">chaussures</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="row">
                <div class="col">
                    <div class="product-grid" data-isotope="{ &quot;itemSelector&quot;: &quot;.product-item&quot;, &quot;layoutMode&quot;: &quot;fitRows&quot; }" style="position: relative; height: 50px;">

                        @foreach($products as $product)
                            <div class="product-item men" style="position: absolute; left: 0; top: 0;">
                                <div class="product discount product_filter" style="border-right: 1px solid rgb(100, 100, 100);">
                                    <div class="product_image">
                                        <img src="{{asset('images/produit/'.$product->image)}}" alt="" width="200" height="100">
                                    </div>
                                    <div class="favorite favorite_left"></div>
                                    {{--<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>--}}
                                    <div class="product_info">
                                        <h6 class="product_name">
                                            <a href="single.html">{{  $product->nom }}</a>
                                        </h6>
                                        <div class="product_price">
                                            {{  $product->prix }}f<span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="red_button add_to_cart_button">
                                    <form action="{{ route('addToCart') }}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{ $product->id }}" name="id"/>
                                        <button class="btn btn-danger" type="submit">Ajouter au panier</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>




        </div>
    </div>

@endsection

<style>
    .product_image img {
        width: 250px !important;
        height:260px !important;
    }
</style>