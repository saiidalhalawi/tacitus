@extends('ancestors.base')

@section('meta')
    @if($lang == 'ja')
        <meta name="keywords" content="{{{ $from or 0}}}年,世界史,歴史,年表,タイムライン,{{{ $words or null}}}">
        <meta name="description" content="世界の歴史をタイムラインで視覚化。">
    @else
        <meta name="keywords" content="{{{ $from or 0}}}, A.D, B.C,world history,history,biography,timeline,{{{ $words or null}}}">
        <meta name="description" content="Overlook the World History. We can view that via timeline.">
    @endif

    <link rel="stylesheet" href="/css/common/states.css">
    <script src="/js/common/ajaxHandler.js"></script>
    <script src="/js/timeline/scale.js"></script>
    <script src="/js/timeline/panel.js"></script>
    <script src="/js/bar/controller.js"></script>
    <script src="/js/timeline/manipulator.js"></script>

    <script>
        @if(!empty($keywords))
            var keywords = '{{{ $keywords }}}', 
                baseYear = {{{ $baseYear }}}
                from = {{{ $from or 0}}}, 
                to = {{{ $to or 0}}}, 
                words = '{{{ $words or null}}}';
        @else
            var from = to = 0, 
                words = '';
        @endif

        var stateNames = {
        @if($lang == 'ja')
            @foreach($stateNames as $statename)
                {{{ $statename->id }}} : "{{{ $statename->name_jp }}}",
            @endforeach
        @else
            @foreach($stateNames as $statename)
                {{{ $statename->id }}} : "{{{ $statename->name_en }}}",
            @endforeach
        @endif
        }, 
            lang = '{{{ $lang }}}';
    </script>
@stop

<title>@section('title')Chronicler</title>

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
                <div>
    	        	<span class="vector prev">&lt;</span>
    	            <div class="inner-arrow">&nbsp;
    	                  <span class="y-index start"></span>
    	                  <span class="y-index end"></span>
    	            </div>
	               <span class="vector next">&gt;</span>
                </div>
	        </section>
        </section>

        <div id="person-detail-panel" class="person-detail">
            <div class="detail-main">
                <div class="close-button"><b></b><b></b><b></b><b></b></div>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li><p></p></li>
                </ul>
            </div>
        </div>
    </main>
@stop
