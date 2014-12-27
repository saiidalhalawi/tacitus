<!doctype html>
<html lang="ja">
	<head>
		<link rel="stylesheet" href="/foundation/icons/accessibility/stylesheets/accessibility_foundicons.css">
		<link rel="stylesheet" href="/foundation/icons/general/stylesheets/general_foundicons.css">
		<link rel="stylesheet" href="/foundation/icons/general_enclosed/stylesheets/general_enclosed_foundicons.css">
		<link rel="stylesheet" href="/foundation/icons/social/stylesheets/social_foundicons.css">

		@include('includes.header_meta_common')

	    @yield('meta')
	    @yield('script')
		<title>@yield('title')</title>
	</head>

	<body>
		
		@yield('header')

		<article id="mainContainer">
			@yield('body')

			<nav>
		        <ul class="navigation-menu">
		            <li><a href="/about">About</a></li>
		            <li><a href="mailto:contact@chronicler.info">Contact us</a></li>
		            <!-- <li><a href="#0">API documentation</a></li> -->
		        </ul>
		    </nav>
		</article>

		@include('includes.footer')

		<div class="loading hidden"><img src="/images/common/ui/loading.gif"></div>
	</body>
</html>
