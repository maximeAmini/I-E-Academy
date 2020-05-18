<nav class="navbar navbar-expand-sm navbar-dark bg-dark col-lg-2 col-sm-3 fixed-top" id="menu">
    <div class="flex-column">
        <a class="navbar-brand" href="#" style="font-weight:bold; font-family: cursive;" id="titre">
            <i class="fas fa-book"></i> <span style="color:blue;">I</span>-<span style="color:red;">E</span>-Academy
        </a>

        <hr style="border-color:rgba(255,255,255,.15)" id="tret">

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mt-2 mt-lg-0 flex-column">

                <li class="nav-item active pb-3" style="border-bottom: 1px solid rgba(255,255,255,.15); margin-right:-18%;" >
                    <a class="nav-link" href="tabBord.php"> <i class="fas fa-fw fa-tachometer-alt"></i> Tableau de
                        bord</a>
                </li>

                <!-- gestion des news -->
                <li class="nav-item dropdown mt-3" style="margin-right:-18%;">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="fas fa-newspaper"></i> Gerer les news <i class="fas fa-angle-double-right float-right mt-1"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="cours.php"> Liste des cours</a>
                        <a class="dropdown-item" href="addCours.php"> Ajouter un cours</a>
                    </div>
                </li>

                <!-- gestion des Textes -->
                <li class="nav-item dropdown mt-1" style="margin-right:-18%;">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="fas fa-paragraph"></i> Gerer les textes <i class="fas fa-angle-double-right float-right mt-1"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="cours.php"> Liste des cours</a>
                        <a class="dropdown-item" href="addCours.php"> Ajouter un cours</a>
                    </div>
                </li>

                <!-- gestion des Textes -->
                <li class="nav-item dropdown mt-1 pb-3" style="border-bottom: 1px solid rgba(255,255,255,.15);margin-right:-18%;">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="fas fa-video"></i> Gerer les videos <i class="fas fa-angle-double-right float-right mt-1"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="cours.php"> Liste des cours</a>
                        <a class="dropdown-item" href="addCours.php"> Ajouter un cours</a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- Menu du haut -->

<nav class="navbar navbar-expand-sm navbar-light bg-light offset-lg-2 offset-sm-3 fixed-top">
    <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation" onclick="rep()">
        <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="navbar-nav ml-auto mr-4" id="rechLogo">
        <li class="nav-item ">
            <a class="navbar-toggler float-right" type="button" data-toggle="collapse"
                data-target="#menuRech" aria-controls="menuRech" aria-expanded="true"
                aria-label="Toggle navigation">
                <i class="fas fa-search"></i>
            </a>
        </li>

    </ul>

    <ul class="navbar-nav mr-auto collapse navbar-collapse" id="menuRech">

        <form class="form-inline " method="get" action="#">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="Recherche..." id="recherche" name="rech">
                <div class="input-group-prepend">
                    <button type="submit" class="input-group-text" id="logosearch">
                        <i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>

    </ul>

    <ul class="navbar-nav ">
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-user"></i> Maxime
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="position:absolute">

                <a class="dropdown-item" href="addCours.php"><i class="fas fa-user"></i> Voir profile</a>
                <a class="dropdown-item" href="addCours.php"><i class="fas fa-cogs"></i> Parametre</a>
                <hr>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }} </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </div>
        </li>
    </ul>

</nav>
