<aside class="sidebar">
    <h4 style="color: white">Menu</h4>
    <hr class="menu-divider">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="{{ route('leader.home') }}" class="nav-link"><i class="bi bi-house-fill"></i> Início</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('music.index') }}" class="nav-link">
                <i class="bi bi-music-player"></i> Músicas
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="bi bi-list-ol"></i> Escala
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="bi bi-chat-left-text"></i> Sugestões
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="bi bi-images"></i> Imagens
            </a>
        </li>
    </ul>
    <hr class="menu-divider">
    <div class="bottom-menu">
        <div class="notification-bell">
            <a class="nav-link" href="#"><i class="bi bi-bell" style="font-size: 1.5rem;"></i>
                <span class="badge rounded-pill bg-danger">3
                    <span class="visually-hidden">mensagens não lidas</span>
                </span>
            </a>
        </div>
        <a href="#" class="nav-link"><i class="bi bi-person-vcard"></i> Perfil</a>
        <a href="#" class="nav-link"><i class="bi bi-box-arrow-left"></i> Sair</a>
    </div>
</aside>

<!-- Offcanvas sidebar (só em telas pequenas, aberto pelo botão acima) -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarOffcanvas" aria-labelledby="sidebarOffcanvasLabel">
    <div class="offcanvas-header">
        <h4 id="sidebarOffcanvasLabel">Menu</h4>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{ route('leader.home') }}" class="nav-link">
                    <i class="bi bi-house-fill"></i> Início
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('music.index') }}" class="nav-link">
                    <i class="bi bi-music-player"></i> Músicas
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-list-ol"></i> Escala
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-chat-left-text"></i> Sugestões
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-images"></i> Imagens
                </a>
            </li>
        </ul>

        <hr class="offcanvas-divider">

        <div class="offcanvas-menu">
            <div class="notification-bell">
                <a class="nav-link" href="#">
                    <i class="bi bi-bell" style="font-size: 1.5rem;"></i>
                    <span class="badge rounded-pill bg-danger">
                        3
                        <span class="visually-hidden">mensagens não lidas</span>
                    </span>
                </a>
            </div>
            <a href="#" class="nav-link">
                <i class="bi bi-person-vcard"></i> Perfil
            </a>
            <a href="#" class="nav-link">
                <i class="bi bi-box-arrow-left"></i> Sair
            </a>
        </div>
    </div>
</div>

<!-- Botão para abrir o menu lateral (só em telas pequenas) -->
<button id="sidebarToggleBtn" class="btn btn-primary d-lg-none" type="button" data-bs-toggle="offcanvas"
    data-bs-target="#sidebarOffcanvas" aria-controls="sidebarOffcanvas"
    style="position: fixed; top: 100px; left: 10px; z-index: 1050;">
    <i class="bi bi-list" style="font-size: 2rem;"></i>
</button>
