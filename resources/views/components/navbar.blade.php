<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="fa-solid fa-earth-asia"></i>{{$title}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="fa-solid fa-house"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('map')}}"><i class="fa-solid fa-map"></i>Peta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('table')}}"><i class="fa-solid fa-table"></i>Tabel</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-database"></i>Data
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('api.points')}}"
                        target="_blank">Points</a></li>
                        <li><a class="dropdown-item" href="{{route('api.polygons')}}"
                        target="_blank">Polyline</a></li>
                        <li><a class="dropdown-item" href="{{route('api.polygons')}}"
                        target="_blank">Polygons</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
