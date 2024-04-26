<div class="list-group" id="list-tab" role="tablist">
    <div class="d-flex flex-column justify-content-between overflow-hidden" style="min-height: 100svh;">
        <!-- Sidebar Navigation -->
        <ul class="sidebar-nav">
            <li class="sidebar-item" data-bs-dismiss="offcanvas">
                <a class="active list-group-item list-group-item-action bs-light session-active tabShow" id="home-tab" href="?tb=1" data-bs-target="#list-home" role="tab" aria-controls="list-home" data-bs-toggle="tab">
                    <i class="fas fa-home pe-2"></i> Home
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#recordsSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bs-light drop dropdown-toggle">
                    <i class="fas fa-clipboard-user pe-2"></i> Records
                </a>
                <div class="collapse" id="recordsSubmenu" data-bs-dismiss="offcanvas">
                    <a href="?tb=2" data-bs-target="#agenda" class="list-group-item list-group-item-action bs-light session-active tabShow" aria-expanded="false" role="tab" data-bs-toggle="tab" aria-controls="subitem1">E-Agenda</a>
                    <a href="?tb=3" data-bs-target="#incoming" class="list-group-item list-group-item-action bs-light session-active tabShow" aria-expanded="false" role="tab" data-bs-toggle="tab" aria-controls="subitem1">Incoming</a>
                </div>
            </li>
            <li class="sidebar-item">
                <a href="#adminSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bs-light dropdown-toggle">
                    <i class="fas fa-user-alt pe-2"></i> Admin
                </a>
                <div class="collapse" id="adminSubmenu" data-bs-dismiss="offcanvas">
                    <a href="?tb=4" data-bs-target="#outgoing" class="list-group-item list-group-item-action bs-light session-active tabShow" aria-expanded="false" role="tab" data-bs-toggle="tab" aria-controls="subitem1">Outgoing</a>
                    <a href="?tb=5" data-bs-target="#publication" class="list-group-item list-group-item-action bs-light session-active tabShow" aria-expanded="false" role="tab" data-bs-toggle="tab" aria-controls="subitem2">Publication</a>
                    <a href="?tb=6" data-bs-target="#certification" class="list-group-item list-group-item-action bs-light session-active tabShow" aria-expanded="false" role="tab" data-bs-toggle="tab" aria-controls="subitem3">Certification</a>
                </div>
            </li>
            <li class="sidebar-item">
                <a href="#journalSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bs-light dropdown-toggle">
                    <i class="fas fa-journal-whills pe-2"></i> Minutes and Journals
                </a>
                <div class="collapse" id="journalSubmenu" data-bs-dismiss="offcanvas">
                    <a href="?tb=7" data-bs-target="#transcript" class="list-group-item list-group-item-action bs-light tabShow" aria-expanded="false" role="tab" data-bs-toggle="tab" aria-controls="subitem1">Transcript</a>
                    <a href="?tb=8" data-bs-target="#minutes" class="list-group-item list-group-item-action bs-light tabShow" aria-expanded="false" role="tab" data-bs-toggle="tab" aria-controls="subitem1">Minutes</a>
                    <a href="?tb=9" data-bs-target="#committeeHearing" class="list-group-item list-group-item-action bs-light tabShow" aria-expanded="false" role="tab" data-bs-toggle="tab" aria-controls="subitem1">Committee Hearing</a>
                    <a href="?tb=10" data-bs-target="#attendance" class="list-group-item list-group-item-action bs-light tabShow" aria-expanded="false" role="tab" data-bs-toggle="tab" aria-controls="subitem1">Attendance</a>
                </div>
            </li>
            <li class="sidebar-item" data-bs-dismiss="offcanvas">
                <a class="list-group-item list-group-item-action bs-light tabShow" id="settings-tab"  href="#list-settings" role="tab" aria-controls="list-settings" data-bs-toggle="tab">
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