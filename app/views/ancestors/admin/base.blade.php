<!doctype html>
<html lang="ja">
	<head>
		<link rel="stylesheet" href="/foundation/icons/accessibility/stylesheets/accessibility_foundicons.css">
		<link rel="stylesheet" href="/foundation/icons/general/stylesheets/general_foundicons.css">
		<link rel="stylesheet" href="/foundation/icons/general_enclosed/stylesheets/general_enclosed_foundicons.css">
		<link rel="stylesheet" href="/foundation/icons/social/stylesheets/social_foundicons.css">

		@include('includes.bo_header_meta_common')

	    @yield('meta')
	    @yield('script')
		<title>@yield('title')</title>
	</head>

	<body>
		<script src="/foundation/js/vendor/jquery.js"></script>
		<script src="/foundation/js/foundation.min.js"></script>
		<script>
			$(function() {
			   $(document).foundation();
			   $.getScript("/foundation/js/foundation/foundation.reveal.js");
			   $.getScript("/foundation/js/foundation/foundation.topbar.js");
			});
		</script>

		@include('includes.bo_header_nav')
		<article id="adminMainContainer">
			<section class="inner-box">
				@yield('body')
			</section>
		</article>

		@yield("footer")

		<div class="loading hide"><img src="/images/common/ui/loading.gif"></div>
	</body>
</html>

