<div class="col-3 col-sidenav">
    <div class="container px-5">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('clientHome') }}"><img class="logo" src="{{ asset('assets/image/logo-full.png') }}" alt="logo"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?= URL::to('/'); ?>/dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URL::to('/'); ?>/addData">Add Data</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('clientHistory') }}">History</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URL::to('/'); ?>/recommendation">Recommendation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URL::to('/'); ?>/setting">Setting</a>
            </li>
        </ul>
    </div>
</div>