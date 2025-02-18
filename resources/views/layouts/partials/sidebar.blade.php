<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-center align-items-center">
                <div class="logo">
                    <a href="#"><img src="/../assets/images/svg/logo.svg" style="height: 30px" alt="Logo" srcset=""></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li
                    class="sidebar-item {{ request()->is('home') ? 'active' : '' }}">
                    <a href="/home" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li
                    class="sidebar-item {{ request()->is('chatbot') ? 'active' : '' }}">
                    <a href="/chatbot" class='sidebar-link'>
                        <i class="bi bi-chat"></i>
                        <span>Chatbot</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
