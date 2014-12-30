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
		</div>
	</section>
@stop
