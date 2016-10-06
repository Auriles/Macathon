<!DOCTYPE html>
<html>
<head>
    <style>.li-top {
            color: #000 !important;
        }
        #nav-bloc{
            background-color: whitesmoke;
        }
    </style>
</head>
<body>
<div class="bloc bg-l-edge bgc-pastel-blue l-bloc" id="nav-bloc">
    <div class="container">
        <nav class="navbar row">
            <div class="navbar-header">

                <a class="navbar-brand" href="{{'/home'}}"><img src="{{asset('/img/LogoExtraSmall%203.png')}}"
                                                                alt="logo"/></a>
                <button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-1">
                    <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-1">
                <ul class="site-navigation nav navbar-nav">

                    <li>
                    @if (Auth::guest())
                        <li><a class="ltc-white li-top" href="{{ url('/login') }}">Login</a></li>
                        <li><a class="ltc-white li-top" href="{{ url('/register') }}">Register</a></li>
                        <li><a class="ltc-white li-top" href="{{url('/registercontributor')}}">Apporter une aide</a>
                        </li>

                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle li-top" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li class="menu-li">
                                    <a href="{{url('/profile')}}">
                                        Mon Profil
                                    </a>
                                </li>
                                <li class="menu-li">
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Se déconnecter
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>

                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</div>
</body>
</html>
<script src="/js/app.js"></script>


