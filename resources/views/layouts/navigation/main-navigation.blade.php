<header class="header trans_300">

    <!-- Main Navigation -->

    <div class="main_nav_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-right">
                    <div class="logo_container">
                        <a href="/">DAM<span>shop</span></a>
                    </div>
                    <nav class="navbar">
                        <ul class="navbar_menu">
                            <li><a href="/commande">Mes commande</a></li>
                            <li><a href="/contact">contact</a></li>
                        </ul>
                        <ul class="navbar_user">
                            <li> <form action="search" method="get" class="form-inline">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Je cherche...">
                                    <span class="input-group-btn">
        <button type="submit" class="btn btn-secondary"><span class="fa fa-search"></span> Chercher</button>
      </span>
                                </div>
                            </form>                            </li>

                            {{--<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>--}}
                            <li class="checkout">
                                <a href="/cart">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span id="checkout_items" class="checkout_items">
                                        @if(cart())
                                        {{ array_sum(array_column(cart()->items(), 'quantity')) }}
                                        @endif
                                    </span>
                                </a>
                            </li>

                        </ul>
                        <ul class="navbar_menu">
                            @if (Route::has('login'))

                                @auth
                                    <li class="register">
                                        <form action="{{route('logout')}}" method="post">
                                            @csrf
                                            <button class="btn btn-danger" type="submit">
                                                Se deconnecter
                                            </button>
                                        </form>
                                    </li>
                                @else
                                    <li class="register">
                                        <a href="{{route('register')}}">
                                            S'inscrire
                                        </a>
                                    </li>
                                    <li class="connect">
                                        <a href="{{route('login')}}">Se connecter</a>
                                    </li>
                                @endauth
                            @endif

                        </ul>
                        <div class="hamburger_container">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>

<div class="hamburger_menu">
    <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
    <div class="hamburger_menu_content text-right">
        <ul class="menu_top_nav">
            <li class="menu_item has-children">
                <a href="#">
                    usd
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="menu_selection">
                    <li><a href="#">cad</a></li>
                    <li><a href="#">aud</a></li>
                    <li><a href="#">eur</a></li>
                    <li><a href="#">gbp</a></li>
                </ul>
            </li>
            <li class="menu_item has-children">
                <a href="#">
                    English
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="menu_selection">
                    <li><a href="#">French</a></li>
                    <li><a href="#">Italian</a></li>
                    <li><a href="#">German</a></li>
                    <li><a href="#">Spanish</a></li>
                </ul>
            </li>
            <li class="menu_item has-children">
                <a href="#">
                    My Account
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="menu_selection">
                    <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
                    <li><a href="/register"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
                </ul>
            </li>
            {{--<li class="menu_item"><a href="#">home</a></li>--}}
            <li class="menu_item"><a href="/magasin">magasin</a></li>
            <li class="menu_item"><a href="/promotion">promotion</a></li>
            {{--<li class="menu_item"><a href="#">blog</a></li>--}}
            <li class="menu_item"><a href="/contact">contact</a></li>
        </ul>
    </div>
</div>

<style>
    .navbar_menu {
    }
</style>