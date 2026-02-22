<nav class="navbar navbar-expand-lg bg-color-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">SelfWork 11</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                @guest

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                @endguest

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Sezione Ricette
                    </a>
                    <ul class="dropdown-menu bg-color-3">
                        <li><a class="dropdown-item" href="{{ route('receipt.index') }}">Tutte le Ricette</a></li>
                        @auth    
                        <li><a class="dropdown-item" href="{{ route('receipt.create') }}">Inserisci Ricetta</a></li>
                        @endauth
                    </ul>
                </li>

                @auth

                    <li class="nav-item">
                        <span class="nav-link nav-link-user" aria-disabled="true">Benvenuto {{ Auth::user()->name }}</span>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="nav-link">Logout</button>
                        </form>
                    </li>



                @endauth

            </ul>
        </div>
    </div>
</nav>
