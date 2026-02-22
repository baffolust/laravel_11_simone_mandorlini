<nav class="navbar navbar-expand-lg bg-color-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">SelfWork 10</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                @guest

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                @endguest

                @auth

                    <li class="nav-item">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button class="nav-link">Logout</button>
                        </form>
                    </li>

                    <li class="nav-item">
                        <span class="nav-link nav-link-user" aria-disabled="true">Benvenuto {{ Auth::user()->name }}</span>
                    </li>

                @endauth

            </ul>
        </div>
    </div>
</nav>
