@extends('ancestors.base')


<title>@section('title')Chronicler</title>

@section('body')

    <header class="header-content">
        <a class="switch-navigation" href="#">
            <span class="menu-marker"></span>
        </a>
    </header>

	<section id="pageTitle">
		<h1>Chronicler</h1>
		<p>Find comtemporaries at the pointed era.<br>Who existed then?</p>
		<div class="search-area">
			<form name="searchOnTop" action="/timeline" method="GET">
			    <input type="text" name="k" class="searchBox fl" placeholder="Find Stuff">
			    <a onclick="document.forms.searchOnTop.submit();" href="#" class="btn fl mlrem">Search</a>
		    </form>
		</div>
	</section>
@stop
