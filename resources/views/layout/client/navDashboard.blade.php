<div class="col-3 col-sidenav">
    <div class="container px-5">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('clientHome') }}"><img class="logo" src="{{ asset('assets/image/logo-full.png') }}" alt="logo"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('clientDashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('clientAddData') }}">Add Data</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('clientHistoryIncome') }}">History Income</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('clientHistoryExpense') }}">History Expense</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('clientRecommendation') }}">Recommendation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('clientSetting') }}">Setting</a>
            </li>
        </ul>
    </div>
</div>