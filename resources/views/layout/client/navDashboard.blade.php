<div class="col-3 col-sidenav">
    <div class="container px-5">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('clientHome') }}"><img class="logo" src="{{ asset('assets/image/logo-full.png') }}" alt="logo"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('clientDashboard') ? 'active' : ''}}" href="{{ route('clientDashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('clientAddData') ? 'active' : ''}}" href="{{ route('clientAddData') }}">Add Data</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('clientHistoryIncome') ? 'active' : ''}}" href="{{ route('clientHistoryIncome') }}">History Income</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('clientHistoryExpense') ? 'active' : ''}}" href="{{ route('clientHistoryExpense') }}">History Expense</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('clientRecommendation') ? 'active' : ''}}" href="{{ route('clientRecommendation') }}">Recommendation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('clientSetting') ? 'active' : ''}}" href="{{ route('clientSetting') }}">Setting</a>
            </li>
        </ul>
    </div>
</div>