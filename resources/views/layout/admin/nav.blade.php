<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion navbar-sidenav" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin') }}">
        <div class="sidebar-brand-icon ">
        <i class="fas fa-id-card-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Arthoku Admin </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= URL::to('/admin'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>


        <!-- Nav Item - Akun -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= URL::to('/'); ?>/admin/client">
            <i class="fas fa-user"></i>
            <span>Data User Account</span></a>
    </li>

    
        <!-- Nav Item - Income-->
        <li class="nav-item active">
        <a class="nav-link" href="<?= URL::to('/'); ?>/admin/categoryIncome">
            <i class="fas fa-wallet"></i>
            <span>Data Category Income</span></a>
    </li>

    <!-- Nav Item - Expense -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= URL::to('/'); ?>/admin/categoryExpense">
            <i class="fas fa-file-invoice-dollar"></i>
            <span>Data Category Expense</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    
</ul>