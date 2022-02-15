<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #29c5f6;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Amazing E-book</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
            </ul>
            <a class="nav-link dropdown-toggle d-none d-md-inline text-gray-500" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #f9d71c;">
                            <span class="mr-2 d-none d-md-inline text-gray-500 small">
                                role
                            </span>
                        </a>
                            <li>
                                <form action="/login" method="POST">
                                    @csrf
                                    <button class="btn btn-primary dropdown-item" type="submit">Login</button>
                                </form>
                            </li>
        </div>
    </div>
</nav>