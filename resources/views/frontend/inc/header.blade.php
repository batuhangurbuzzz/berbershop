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
                <li class="nav-item"><a class="nav-link active" href="{{route('index')}}">{{__('Anasayfa')}}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('about')}}">{{__('Hakkımızda')}}</a></li>
                @if(isset($services) && !empty($services))
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                                                     data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                     aria-expanded="false">{{__('Hizmetlerimiz')}} <i
                                class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            @foreach($services as $service)
                                <li><a href="{{route('service', $service->slug)}}"
                                       class="dropdown-item"><span>{{$service->name}}</span></a></li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{route('services')}}">{{__('Hizmetlerimiz')}}</a></li>
                @endif

                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">{{__('İletişim')}}</a></li>
            </ul>
            <div class="language-selector">
                <a href="{{route('language', 'tr')}}">TR</a>
                <a href="{{route('language', 'en')}}">EN</a>
            </div>
        </div>
    </div>
</nav>
