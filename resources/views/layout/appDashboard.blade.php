<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arthoku | Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</head>
<body class="body-app">
    <div class="container mt-5 bg-container">
        <div class="row">
            <div class="col-3 col-sidenav">
                <div class="container px-5">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL::to('/'); ?>"><img class="logo" src="{{ asset('assets/image/logo-full.png') }}" alt="logo"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= URL::to('/'); ?>/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL::to('/'); ?>/addData">Add Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL::to('/'); ?>/history">History</a>
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
            @yield('content')
        </div>
    </div>
</body>
</html>