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
		@if($lang == 'ja')
			<p>世界の歴史を視覚化<br>とりあえず眺めてみよう！</p>
		@else
			<p>
				You can visualize the World History.<br>
				Let's overlook first of all !
			</p>
		@endif
		<div class="search-area">
			<form name="searchOnTop" action="/timeline" method="GET">
			    <input type="text" name="k" class="searchBox fl" placeholder="Find Stuff" required>
			    <a onclick="document.forms.searchOnTop.submit();" href="#" class="btn fl mlrem">Search</a>
			    @if($lang == 'ja')
					<select class="lang-selection" onchange="javascript:location.href = this.value;">
						<option value="">言語を選択</option>
						<option value="/?lang=en">英語</option>
						<option value="/?lang=ja">日本語</option>
					</select>
				@else
					<select class="lang-selection" onchange="javascript:location.href = this.value;">
						<option value="">Select your Language</option>
						<option value="/?lang=en">English</option>
						<option value="/?lang=ja">Japanese</option>
					</select>
				@endif
			    
		    </form>
		</div>
	</section>
@stop
