<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/dist/commandList.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <img src="../../img/open-menu.svg" alt="burger menu" onclick="menu()">
            @if($auth == null)
            <a class="connectLink" href="{{ route('register') }}">Connexion / Inscription</a>
            @endif
            @if($auth == !null)
            <a class="connectLink" href="{{ route('auth.show') }}">{{ $auth->name }}</a>
            @endif
            <div class="burgerMenu">
            <ul class="menuList">
                    @can('restau-users')
                    <li><a class="linkList" href="{{ route('auth.show') }}">Profil</a></li>
                    <li><a class="linkList" href="{{ route('restau.dashbord') }}">Tableau de bord</a></li>
                    @endcan
                    @can('membre-users')
                    <li><a class="linkList" href="{{ route('auth.show') }}">Profil</a></li>
                    <li><a class="linkList" href="{{ route('restaurateurs.index') }}">Restaurants</a></li>
                    <li><a class="linkList" href="{{ route('commandes.index') }}">Mes commandes</a></li>
                    @endcan
                    @can('admin-users')
                    <li><a class="linkList" href="{{ route('admin.users.index') }}">Utilisateurs</a></li>
                    @endcan
                </ul>
            </div>
        </nav>
        <div class="couverture">
            <div class="img">
                <img src="../../img/logo.png" alt="logoCouverture">
            </div>
        </div>
    </header>

    <h1>Mes commandes</h1>
    
    <ul class="commandList">
    @foreach($commandes as $commande)
        @foreach($lignes as $ligne)
        @if($ligne->num_commande == $commande->num_commande)
            @foreach($plats as $plat)
            @if($ligne->id_plat == $plat->id_plat)
                @foreach($restaus as $restau)
                @if($plat->id_restaurateur == $restau->id_restaurateur)
                    <table class="commande">
                        <thead class="title">
                            <tr>
                                <th scope="col">{{ $restau->nom }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="info">
                                <th class="date" scope="row">{{ $commande->date_commande }}</th>
                                <td class="nom">{{ $plat->nom }}</td>
                                <td class="prix">{{ $plat->prix }} €</td>
                            </tr>
                        </tbody>
                    </table>
                @endif
                @endforeach
            @endif
            @endforeach
        @endif
        @endforeach
    @endforeach
    </ul>

    <script src="js/index.js"></script>
</body>
</html>