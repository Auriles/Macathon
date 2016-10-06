<!DOCTYPE html>
<?php require_once('includes/functions.php');?>
<style>.li-top:hover{
        background-color: rgba(255,255,255,0.3);
    }</style>
<html>
    <body>
        <div class="bloc bg-l-edge  l-bloc" id="nav-bloc">
            <div class="container">
                <nav class="navbar row">
                    <div class="collapse navbar-collapse navbar-1">
                        <ul class="site-navigation nav navbar-nav">
                            <li>
                                <a href="{{url('/')}}" class="ltc-white li-top">Accueil</a>
                            </li>
                            <li>
                            @if (Auth::guest())
                                <li><a class="ltc-white li-top" href="{{ url('/login') }}">Se connecter</a></li>
                                <li><a class="ltc-white li-top" href="{{ url('/register') }}">S'inscrire en tant que client</a></li>
                                <li><a class="ltc-white li-top" href="{{url('/registercontributor')}}" >Apporter une aide </a></li>

                            @else
                                @if(isContributor())
                                <li><a class="ltc-white li-top" href="{{ url('/newoperationcontributor') }}">Proposer une aide</a></li>
                                @endif
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle li-top" data-toggle="dropdown" role="button" aria-expanded="false" >
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

                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
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


