@extends('ancestors.base')


<title>@section('title')Khaldun</title>

@section('body')

    <header class="header-content">
        <a class="switch-navigation" href="#">
            <span class="menu-marker"></span>
        </a>
    </header>

	<section id="pageTitle">
		<h1>Khaldun</h1>
		<p>Find comtemporaries at the pointed era.<br>Who existed then?</p>
		<div>
		    <input type="text" class="searchBox fl" placeholder="Find Stuff">
		    <a href="#" class="btn fl mlrem">Search</a>
		</div>
	</section>

    <nav>
        <ul class="navigation-menu">
            <li><a href="#0">About</a></li>
            <li><a href="#0">Contact us</a></li>
            <li><a href="#0">API documentation</a></li>
        </ul>
    </nav>
@stop
