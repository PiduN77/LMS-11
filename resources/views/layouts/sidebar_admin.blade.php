<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo"></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg"
                alt="logo"></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">Mimin</h5>
                        <span>admin</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                    aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link text-white" href="">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Data</span>
        </li>
        <li class="nav-item menu-items">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item bg-transparent border-0">
                    <h2 class="accordion-header nav-link ps-0">
                        <button class="accordion-button text-white bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <span class="menu-icon">
                                <i class="mdi mdi-speedometer"></i>
                            </span>
                            <span class="menu-title">Tabel Data</span>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body text-white">
                            <a href="{{ route('AdminTable', "User") }}" class="nav-link">
                                <span> - User </span>
                            </a>
                            <a href="{{ route('AdminTable', "") }}" class="nav-link">
                                <span> - Subject </span>
                            </a>
                            <a href="{{ route('AdminTable', "") }}" class="nav-link">
                                <span> - Teacher Subject </span>
                            </a>
                            <a href="{{ route('AdminTable', "") }}" class="nav-link">
                                <span> - Major </span>
                            </a>
                            <a href="{{ route('AdminTable', "") }}" class="nav-link">
                                <span> - Learning Group </span>
                            </a>
                            <a href="{{ route('AdminTable', "") }}" class="nav-link">
                                <span> - User Learning Group </span>
                            </a>
                            <a href="{{ route('AdminTable', "") }}" class="nav-link">
                                <span> - Learning Group Subject </span>
                            </a>
                            <a href="{{ route('AdminTable', "") }}" class="nav-link">
                                <span> - Post </span>
                            </a>
                            <a href="{{ route('AdminTable', "") }}" class="nav-link">
                                <span> - Question </span>
                            </a>
                            <a href="{{ route('AdminTable', "") }}" class="nav-link">
                                <span> - Answer </span>
                            </a>
                            <a href="{{ route('AdminTable', "") }}" class="nav-link">
                                <span> - File </span>
                            </a>
                            <a href="{{ route('AdminTable', "") }}" class="nav-link">
                                <span> - Mark </span>
                            </a>
                            <a href="{{ route('AdminTable', "") }}" class="nav-link">
                                <span> - Year </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>
