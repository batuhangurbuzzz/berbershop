<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper">
            <a class="logo" href="{{route('index')}}"> <img src="img/logo.png" class="logo-img" alt=""> </a>
            <!-- <a class="logo" href="index.html"> <h2>Perukar <span>Barber Shop</span></h2> </a> -->
        </div>
        <!-- Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="{{route('index')}}">Anasayfa</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('about')}}">Hakkımızda</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                                                 data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                 aria-expanded="false">Hizmetlerimiz <i class="ti-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        @if(isset($services) && !empty($services))
                            @foreach($services as $service)
                                <li><a href="{{route('service', $service->slug)}}"
                                       class="dropdown-item"><span>{{$service->name}}</span></a></li>
                            @endforeach
                        @endif
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">İletişim</a></li>
            </ul>
        </div>
    </div>
</nav>
