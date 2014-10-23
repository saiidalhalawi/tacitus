@extends('ancestors.base')


<title>@section('title')Froissart</title>

@section('body')

    <header class="header-content">
        <a class="switch-navigation" href="#">
            <span class="menu-marker"></span>
        </a>
    </header>

	<section id="pageTitle">
		<h1>Froissart</h1>
		<p>Find comtemporaries at the pointed era.<br>Who existed then?</p>
		<div class="search-area">
		    <input type="text" class="searchBox fl" placeholder="Find Stuff">
		    <a href="#" class="btn fl mlrem">Search</a>
		</div>
	</section>
@stop
