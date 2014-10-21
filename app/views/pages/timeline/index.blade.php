@extends('ancestors.base')


<title>@section('title')Froissart</title>

@section('body')

    <header class="header-content">
        <div class="search-on-top">
            <input type="text" class="searchBox thin fl" placeholder="Find Stuff">
            <a href="#" class="btn thin fl mlrem">Search</a>
        </div>
        <a class="switch-navigation" href="#">
            <span class="menu-marker"></span>
        </a>
    </header>

    <main id="main-content">
    <div class="inner-arrow"></div>
    </main>

    <nav>
        <ul class="navigation-menu">
            <li><a href="#0">About</a></li>
            <li><a href="#0">Contact us</a></li>
            <li><a href="#0">API documentation</a></li>
        </ul>
    </nav>
@stop
