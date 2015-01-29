@extends('ancestors.base')

@section('meta')
    @if($lang == 'ja')
        <meta name="keywords" content="世界史,歴史,生没年,年号,年表,世界,世紀,タイムライン">
        <meta name="description" content="世界の歴史をタイムラインで視覚化。">
    @else
        <meta name="keywords" content="A.D, B.C,world history,history,timeline,biography,surviving time">
        <meta name="description" content="Overlook the World History. We can view that via timeline.">
    @endif

	<!--
		////////////////////////////////////////////////
		//    Present For My Dearest Little Brother.  //
		//     Masato                                 //
		//     April 1989  -  January 2015            //
		////////////////////////////////////////////////
	-->
@stop

<title>@section('title')Chronicler</title>

@section('body')
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.0";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
    <header class="header-content">
        <a class="switch-navigation" href="#">
            <span class="menu-marker"></span>
        </a>
    </header>

	<section id="pageTitle">
		<h1>Chronicler</h1>
		@if($lang == 'ja')
			<p>
				<q class="quote-line">人間は世界史の重要な担い手であって、<br>世界史は人類の運命の集合から生ずる。</q><br>
				<span class="quote-from">- フランツ・ブレンターノ</span>
			</p>
		@else
			<p>
				<quote class="quote-line">
					&ldquo;The souls of emperors and cobblers<br> are cast in the same mold.&rdquo;
				</quote><br>
				<span class="quote-from">- Michel de Montaigne</span>
			</p>
		@endif
		<div class="search-area">
			<form name="searchOnTop" action="/timeline" method="GET">
			    <input type="text" name="k" class="searchBox fl" placeholder="Enter yyyy or yyyymmdd you like" required>
			    <a onclick="document.forms.searchOnTop.submit();" href="#" class="btn fl mlrem">Search</a>
			    @if($lang == 'ja')
					<select class="lang-selection" onchange="javascript:location.href = this.value;">
						<option value="">言語を選択</option>
						<option value="/?lang=en">英語</option>
						<option value="/?lang=ja">日本語</option>
					</select>
				@else
					<select class="lang-selection" onchange="javascript:location.href = this.value;">
						<option value="">Choose your Language</option>
						<option value="/?lang=en">English</option>
						<option value="/?lang=ja">Japanese</option>
					</select>
				@endif
			    
		    </form>

		    @include('includes.social_buttons')
		</div>
	</section>
@stop
