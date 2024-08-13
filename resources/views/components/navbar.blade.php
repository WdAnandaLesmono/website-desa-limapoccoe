<nav class="navbar navbar-expand-lg" style="background-color: #365E32">
    <div class="container-fluid">
        <a class="navbar-brand ms-4" href="/">
            <img src="/img/logo.png" alt="logo" style="width:60px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: #E7D37F">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'text-decoration-underline fw-700' : '' }}" href="/" style="color: #E7D37F">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('tentang-kami*') ? 'text-decoration-underline fw-700' : '' }}" href="#" role="button" data-bs-toggle="dropdown" style="color: #E7D37F">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/tentang-kami/visi-misi" style="color: #365E32">Visi Misi</a></li>
                        <li><a class="dropdown-item" href="/tentang-kami/sejarah" style="color: #365E32">Sejarah</a></li>
                        <li><a class="dropdown-item" href="/tentang-kami/geografis-desa" style="color: #365E32">Geografis Desa</a></li>
                        <li><a class="dropdown-item" href="/tentang-kami/demografi-desa" style="color: #365E32">Demografi Desa</a></li>
                        <li><a class="dropdown-item" href="/tentang-kami/potensi-desa" style="color: #365E32">Potensi Desa</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('pemerintahan*') ? 'text-decoration-underline fw-700' : '' }}" href="#" role="button" data-bs-toggle="dropdown" style="color: #E7D37F">
                        Pemerintahan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/pemerintahan/struktur-organisasi" style="color: #365E32">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item" href="/pemerintahan/aparat-desa" style="color: #365E32">Aparat Desa</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('berita') ? 'text-decoration-underline fw-700' : '' }}" href="/berita" style="color: #E7D37F">Berita</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
