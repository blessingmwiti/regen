<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index" class="app-brand-link">
            <img src="../favicon/favicon-32x32.png" alt="favicon">
            <span class="app-brand-text text-capitalize demo menu-text fw-bold ms-2">Regen</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item active open">
            <a href="index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">Dashboard</div>
            </a>

        </li>

        <!-- Layouts -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Pages</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="milestones" class="menu-link">
                        <div data-i18n="Without menu">Milestones</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="badges" class="menu-link">
                        <div data-i18n="Without navbar">Badges</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="rewards" class="menu-link">
                        <div data-i18n="Container">Rewards</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ai-chat.php" class="menu-link">
                        <div data-i18n="Fluid">AI Chat</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Front Pages -->

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>
        <!-- Pages -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Account Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="account" class="menu-link">
                        <div data-i18n="Account">Account</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="notifications" class="menu-link">
                        <div data-i18n="Notifications">Notifications</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="connections" class="menu-link">
                        <div data-i18n="Connections">Connections</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Misc -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
        <li class="menu-item">
            <a href="github/issues" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="github/documentation" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Documentation</div>
            </a>
        </li>
    </ul>
</aside>
