<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="images_037.JPG" WIDTH="50%">
        <div>
            <p class="app-sidebar__user-name">DAMshop</p>
        </div>
    </div>
    <ul class="app-menu">

        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-clone"></i><span class="app-menu__label">Categories</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{Route('categorie.index')}}"><i class="icon fa fa-eye-slash"></i>Afficher les categories </a></li>
                <li><a class="treeview-item" href="{{Route('categorie.create')}}"><i class="icon fa fa-plus"></i>Créé un nouveau categorie</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-product-hunt"></i><span class="app-menu__label">Produits </span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{Route('produit.index')}}"><i class="icon fa fa-eye-slash"></i>Afficher les produits</a></li>
                <li><a class="treeview-item" href="{{Route('produit.create')}}"><i class="icon fa fa-plus"></i>Créé un nouveau produit</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Fournisseurs </span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="#"><i class="icon fa fa-eye-slash"></i>Afficher les Fournisseurs </a></li>
            </ul>
        </li>

        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-list"></i><span class="app-menu__label">Commandes </span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="#"><i class="icon fa fa-eye-slash"></i>Afficher les Commandes </a></li>
            </ul>
        </li>


        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Clients</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="#"><i class="icon fa fa-eye-slash"></i>Afficher les clients </a></li>
            </ul>
        </li>

    </ul>
</aside>

