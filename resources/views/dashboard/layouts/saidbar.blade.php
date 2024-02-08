<div class="d-flex" id="wrapper">

    <!-- Sidebar-->

    <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom bg-light">Start Your, Post</div>

        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group-item-light p-3 nav-link  {{ Request::is('dashboard') ? 'active' : '' }}"
                href="/dashboard">Dashboard</a>
            <a class=" nav-link {{ Request::is('dashboard/posts') ? 'active' : '' }} list-group-item list-group-item-action list-group-item-light p-3 "
                href="/dashboard/posts">Post</a>
        </div>



        <hr>
        @can('admin')
            <ul class="nav flex-column">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted ">
                    <span> Administrator </span>
                </h6>

                <li class="nav-item">
                    <a class=" nav-link {{ Request::is('dashboard/categories') ? 'active' : '' }} list-group-item list-group-item-action list-group-item-light p-3 "
                        href="/dashboard/categories">categories</a>
                </li>
            </ul>
        @endcan

    </div>




    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
        <!-- Top navigation-->
