@extends('ancestors.base')

@section('meta')
<link rel="stylesheet" href="/css/common/states.css">
<script src="/js/common/ajaxHandler.js"></script>
<script src="/js/timeline/scale.js"></script>
<script src="/js/timeline/panel.js"></script>
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

    var stateNames = {
    @foreach($stateNames as $statename)
        {{{ $statename->id }}} : "{{{ $statename->name_en }}}",
    @endforeach
    }, 
        lang = '{{{ $lang }}}';
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

        <div id="person-detail-panel" class="person-detail">
            <div class="detail-main">
                <div class="close-button"><b></b><b></b><b></b><b></b></div>
                <ul>
                    <li>Elizabeth I of England</li>
                    <li>Queen of England</li>
                    <li>1533/09/07 - 1603/03/24</li>
                    <li>Kingdom of England</li>
                    <li>
                        <p>
                             Queen of England and Ireland, and the daughter of Henry VIII. The childless Elizabeth was the fifth and last monarch of the Tudor dynasty. Elizabeth was the daughter of Henry VIII by second wife, Anne Boleyn, who was executed two and a half years after Elizabeth's birth. Anne's marriage to Henry VIII was annulled, and Elizabeth was declared illegitimate. Her half-brother, Edward VI, ruled until his death in 1553, bequeathing the crown to Lady Jane Grey and ignoring the claims of his two half-sisters, Elizabeth and the Roman Catholic Mary, in spite of statute law to the contrary. However, Edward's will was set aside and Mary became queen, deposing Lady Jane Grey. During Mary's reign, Elizabeth was imprisoned for nearly a year on suspicion of supporting Protestant rebels.        
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </main>
@stop
