@extends('...layouts.layout')

@section('title')
	Web-Blog
@stop


@section('content')

	<!-- Post -->
@foreach($posts as $post)

	<article class="box post post-excerpt">
        <header>
            <h2><a href="#">{{{ $post->title }}}</a></h2>
            <p>{{{ $post->description }}}</p>
        </header>
        <div class="info">
            <span class="date"><span class="month">Jul<span>y</span></span> <span class="day">14</span><span class="year">, 2014</span></span>
            <ul class="stats">
                <li><a href="#" class="icon fa-comment">16</a></li>
                <li><a href="#" class="icon fa-heart">32</a></li>
                <li><a href="#" class="icon fa-twitter">64</a></li>
                <li><a href="#" class="icon fa-facebook">128</a></li>
            </ul>
        </div>
        <a href="#" class="image featured"><img src="images/{{{ $post->img }}}" alt="" /></a>
        <p>{{{ $post->content }}}</p>
    </article>

@endforeach

<!-- Pagination -->
    <div class="pagination">
        <!--<a href="#" class="button previous">Previous Page</a>-->
        <div class="pages">
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <span>&hellip;</span>
            <a href="#">20</a>
        </div>
        <a href="#" class="button next">Next Page</a>
    </div>

@stop