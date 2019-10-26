<header id="header" class="header">
    <div class="container">
        <div class="row no-gutters justify-content-between align-items-center">
            <div class="logo">
                <a href="{{ route('main') }}" title="Головна">
                    <img src="{{ asset("/img/logo.png")}}" alt="logo">
                    <span>Інститут підприємництва та перспективних технологій</span>
                </a>
            </div>

            <button class="navbar-toggle" id="navbar-toggle">
                <span class="nav-line"></span>
                <span class="nav-line"></span>
                <span class="nav-line"></span>
            </button>

            <nav id="navbar">
                <ol class="navbar-collapse" id="navbar-collapse">
                    <li class="nav-item">
                        <a href="{{ route('main') }}">Головна</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('entrant') }}">Вступнику</a>
                    </li>
                    <li class="nav-item">
                        <a href="student.php">Студенту</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('news') }}">Новини</a>
                    </li>
                </ol>
            </nav>

        </div>
    </div>
</header>
