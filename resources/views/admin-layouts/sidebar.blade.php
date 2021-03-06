<nav
    id="sidebarMenu"
    class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse mt-5"
>
    <div class="sidebar-sticky pt-3">
    <ul class="nav flex-column">
        <li class="nav-item">
        <a class="nav-link {{ (request()->is('admin/dashboard*')) ? 'active' : '' }}" href="/admin/dashboard">
            <span data-feather="home"></span>
            Dashboard <span class="sr-only"></span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ (request()->is('admin/purchasing*')) ? 'active' : '' }}" href="/admin/purchasing">
            <span data-feather="file"></span>
            Purchase Order
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ (request()->is('admin/transaction*')) ? 'active' : '' }}" href="/admin/transaction">
            <span data-feather="list"></span>
            Sales Transaction
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ (request()->is('admin/products*')) ? 'active' : '' }}" href="/admin/products">
            <span data-feather="shopping-cart"></span>
            Products
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ (request()->is('admin/customers*')) ? 'active' : '' }}" href="/admin/customers">
            <span data-feather="users"></span>
            Customers
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ (request()->is('admin/reports*')) ? 'active' : '' }}" href="/admin/reports">
            <span data-feather="bar-chart-2"></span>
            Reports
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ (request()->is('admin/settings*')) ? 'active' : '' }}" href="/admin/settings">
            <span data-feather="settings"></span>
            Settings
        </a>
        </li>
    </ul>

    <h6
        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted"
    >
        <span>Saved reports</span>
        <a
        class="d-flex align-items-center text-muted"
        href="#"
        aria-label="Add a new report"
        >
        <span data-feather="plus-circle"></span>
        </a>
    </h6>
    <ul class="nav flex-column mb-2">
        <li class="nav-item">
        <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Current month
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Last quarter
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Social engagement
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Year-end sale
        </a>
        </li>
    </ul>
    </div>
</nav>