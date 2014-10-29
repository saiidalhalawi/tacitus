@extends('ancestors.base')

@section('meta')
<script src="/js/timeline/scale.js"></script>
<script src="/js/bar/controller.js"></script>
<script src="/js/timeline/manipulator.js"></script>
@stop

<title>@section('title')Chronicler</title>

@section('body')

    <header class="header-content">
        <div class="search-area on-top">
            <input type="text" class="searchBox thin fl" placeholder="Find Stuff">
            <a href="#" class="btn thin fl mlrem">Search</a>
        </div>
        <a class="switch-navigation" href="#">
            <span class="menu-marker"></span>
        </a>
    </header>

    <main id="main-content">
    	<section>
	        <section id="timebox">
	        	<span class="vector prev">&lt;</span>
	            <div class="inner-arrow">&nbsp;
	                  <span class="y-index start"></span>
	                  <span class="y-index end"></span>
	            </div>
	            <span class="vector next">&gt;</span>
	        </section>
        </section>
    </main>
@stop
