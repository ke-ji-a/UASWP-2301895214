<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #805A46;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Amazing</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-3 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
            </ul>
            <li class="nav-item dropdown d-none d-lg-inline text-gray-600">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #964B00;">
                            {{ Auth::user()->username }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href=" {{ route('dashboard') }} ">Dashboard Admin</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="{{ url('logout') }}" method="POST">
                                    @csrf
                                    <button class="btn btn-primary dropdown-item" type="submit">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
        </div>
    </div>
</nav>