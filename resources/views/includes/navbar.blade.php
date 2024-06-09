<nav class="navbar navbar-expand-lg navbar-custom bg-custom">
    <div class="container my-2">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/LOGO.png') }}" height="50" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">Menu</span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                @if (Request::is('dashboard-admin'))
                    <li class="nav-item">
                        <span class="nav-link text-white">Hai, <i>USER</i></span>
                    </li>
                    <li class="nav-item home-button">
                        <a class="nav-link home-text" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <button class="tombol btn-cryon my-2 my-sm-0" type="button">Manage Education</button>
                    </li>
                @endif
                @if (Request::is('dashboard'))
                    <li class="nav-item">
                        <span class="nav-link text-white">Hai, <i>USER</i></span>
                    </li>
                    <li class="nav-item home-button">
                        <a class="nav-link home-text" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <button class="tombol btn-cryon my-2 my-sm-0" type="button">Education</button>
                    </li>
                @endif
                @if (Request::is('/'))
                    <li class="nav-item home-button">
                        <a class="nav-link home-text" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <button class="tombol btn-cryon my-2 my-sm-0" type="button">Login</button>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
