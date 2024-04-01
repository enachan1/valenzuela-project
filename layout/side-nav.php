<div class="list-group" id="list-tab" role="tablist">
    <div class="d-flex flex-column justify-content-between overflow-hidden" style="min-height: 89.5svh;">
        <!-- Sidebar Navigation -->
        <ul class="sidebar-nav">
            <li class="sidebar-item" data-bs-dismiss="offcanvas">
                <a class="active list-group-item list-group-item-action bs-light tabShow" id="home-tab" href="#list-home" role="tab" aria-controls="list-home" data-bs-toggle="tab">
                    <i class="fas fa-home pe-2"></i> Home
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#recordsSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bs-light dropdown-toggle">
                    <i class="fas fa-clipboard-user pe-2"></i> Records
                </a>
                <div class="collapse" id="recordsSubmenu" data-bs-dismiss="offcanvas">
                    <a href="#subitem1" class="list-group-item list-group-item-action bs-light tabShow" id="subitem1-tab" aria-expanded="false" role="tab" data-bs-toggle="tab" aria-controls="subitem1">E-Agenda</a>
                    <a href="#subitem2" class="list-group-item list-group-item-action bs-light tabShow" id="subitem2-tab" aria-expanded="false" role="tab" data-bs-toggle="tab" aria-controls="subitem1">Incoming</a>
                </div>
            </li>
            <li class="sidebar-item">
                <a href="#adminSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bs-light dropdown-toggle">
                    <i class="fas fa-user-alt pe-2"></i> Admin
                </a>
                <div class="collapse" id="adminSubmenu" data-bs-dismiss="offcanvas">
                    <a href="#subitem1" class="list-group-item list-group-item-action bs-light tabShow" id="subitem1-tab" aria-expanded="false" role="tab" data-bs-toggle="tab" aria-controls="subitem1">Outgoing</a>
                    <a href="#subitem2" class="list-group-item list-group-item-action bs-light tabShow" id="subitem2-tab" aria-expanded="false" role="tab" data-bs-toggle="tab" aria-controls="subitem2">Publication</a>
                    <a href="#subitem3" class="list-group-item list-group-item-action bs-light tabShow" id="subitem2-tab" aria-expanded="false" role="tab" data-bs-toggle="tab" aria-controls="subitem3">Certification</a>
                </div>
            </li>
            <li class="sidebar-item">
                <a href="#journalSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bs-light dropdown-toggle" data-bs-toggle="collapse">
                    <i class="fas fa-journal-whills pe-2"></i> Minutes and Journals
                </a>
                <div class="collapse" id="journalSubmenu">
                    <a href="#journalSubSubmenu1" data-bs-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bs-light dropdown-toggle" data-bs-toggle="collapse">Sub Journal 1</a>
                    <div class="collapse" id="journalSubSubmenu1" data-bs-dismiss="offcanvas">
                        <a href="#subitem1" class="list-group-item list-group-item-action bs-light tabShow" id="subitem1-tab" aria-expanded="false" role="tab" data-bs-toggle="tab" aria-controls="subitem1">Subitem 1</a>
                        <a href="#subitem2" class="list-group-item list-group-item-action bs-light tabShow" id="subitem2-tab" aria-expanded="false" role="tab" data-bs-toggle="tab" aria-controls="subitem1">Subitem 2</a>
                    </div>
                </div>
                <div class="collapse" id="journalSubmenu">
                    <a href="#journalSubSubmenu2" data-bs-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bs-light dropdown-toggle" data-bs-toggle="collapse">Sub Journal 2</a>
                    <div class="collapse" id="journalSubSubmenu2">
                        <a href="#1" class="list-group-item list-group-item-action bs-light tabShow">Subitem 1</a>
                        <a href="#2" class="list-group-item list-group-item-action bs-light tabShow">Subitem 2</a>
                    </div>
                </div>
            </li>
            <li class="sidebar-item">
                <a class="list-group-item list-group-item-action bs-light tabShow" id="settings-tab" href="#list-settings" role="tab" aria-controls="list-settings" data-bs-toggle="tab">
                    <i class="fas fa-cog pe-2"></i> Setting
                </a>
            </li>
        </ul>

        <div class="sidebar-logo d-flex justify-content-between">
            <a class="d-flex justify-content-center align-items-center"><?= $user ?></a>
            <span>
                <a class="btn" href="../logout.php">
                    <svg style="display: inline-block;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20" height="20">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                    </svg>
                </a>
            </span>
        </div>

    </div>
</div>