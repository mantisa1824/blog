<nav id="nav">
	<ul>
		<li><a href="/">Главная</a></li>
		@foreach($pages as $page)
			<li><a href="{{{  $page->url }}}">{{{ $page->title }}}</a></li>
		@endforeach
	</ul>
</nav>