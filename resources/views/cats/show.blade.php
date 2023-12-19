<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catravel</title>
    {{-- favi --}}
    <link rel="icon" href="/img/favi2.png" type="image/x-icon">
    {{-- icone --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="/style.css">
</head>

<body>


{{-- navbar --}}
<nav class="navbar navbar-expand-lg m-0">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}"><img class="logonav" src="/img/logo.png" alt="logo"></a>
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('home')}}" target="_blank"><i
                            class="bi bi-house-heart-fill"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"href="{{route('seconda')}}" target="_blank">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('terza')}}" target="_blank">Services</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- navbarEnd --}}

    {{-- section --}}
    <h1 class="text-center">Meet {{$cat['name']}}</h1>
    <header class="container sec headview pt-2">
        <div class="row align-items-center justify-content-center" id="link">
            <div class="col-12 col-md-3 d-flex justify-content-center align-items-center mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{$cat['img']}}" class="card-img-top" alt="card img">
                    <div class="card-body">
                        <h5 class="card-title">Cat: {{$cat['id']}}</h5>
                        <p class="card-text">{{$cat['presentation']}}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$cat['name']}}</li>
                        <li class="list-group-item">{{$cat['age']}}</li>
                        <li class="list-group-item">{{$cat['breed']}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
        {{-- sectionEnd --}}

        {{-- footer --}}
        <footer class="pt-3">
            <div class="container">
                <div class="row rowfoot">
                    <div class="col-4 col-md-2 d-flex align-items-end">
                        <p>Cat Lovers</p>
                    </div>
                    <div class="col-6 col-md-2">
                        <ul class="m-0">
                            <li>Contacts</li>
                            <li>Address</li>
                            <li>Privacy</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-2 d-flex align-items-end justify-content-end">
                        <img src="/img/cat3bl.png" alt="logofooter" class="logofoot">
                    </div>
                </div>
            </div>
        </footer>
        {{-- footerEnd --}}


        <!-- bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>