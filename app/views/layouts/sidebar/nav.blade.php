<nav id="nav">
	<ul>
		@foreach($pages as $page)
			<li><a href="#">{{{ $page->title }}}</a></li>
		@endforeach

		{{--<li class="current"><a href="#">Latest Post</a></li>
		<li><a href="#">Archives</a></li>
		<li><a href="#">About Me</a></li>
		<li><a href="#">Contact Me</a></li>--}}
	</ul>
</nav>