@extends('ancestors.base')

@section('meta')
<script src="/js/common/ajaxHandler.js"></script>
<script src="/js/timeline/scale.js"></script>
<script src="/js/bar/controller.js"></script>
<script src="/js/timeline/manipulator.js"></script>
@stop

<title>@section('title')Chronicler</title>

<script>
    @if(!empty($keywords))
        var keywords = '{{{ $keywords }}}', 
            from = {{{ $from or 0}}}, 
            to = {{{ $to or 0}}}, 
            words = '{{{ $words or null}}}';
    @else
        var from = to = 0, 
            words = '';
    @endif
</script>

@section('body')

    <header class="header-content">
        <div class="search-area on-top">
            <form name="searchOnTop" action="/timeline" method="GET">
                <input type="text" name="k" class="searchBox thin fl" value="{{{ $keywords or null}}}" placeholder="Find Stuff">
                <a onclick="document.forms.searchOnTop.submit();" href="#" class="btn thin fl mlrem">Search</a>
            </form>
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
