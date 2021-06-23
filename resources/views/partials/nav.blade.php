<nav class="fixed-top navbar navbar-expand-lg navbar-light col-12 d-flex justify-content-between" style="background-color: rgba(252, 180, 0, 0.8); )">
    <a class="navbar-brand col-2" href="#">Imkervereniging Oegstgeest</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
<div class="col-10">
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Imkervereniging</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Artikelen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Nieuws Archief</a>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Cursussen
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Bijscholing</a>
                                        <a class="dropdown-item" href="#">Basiscursus</a>
                                        <a class="dropdown-item" href="#">Cursusblog</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Voor Imkers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
            @if(Auth::check())
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url("uitloggen")}}">Uitloggen</a>
                        @csrf
                    </div>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif
                        </ul>
    </div>
</div>
</nav>
