@foreach ($categories as $category)
	@if ($category->children->where('published', 1)->count())
		<li class="nav-item dropdown">
			<a href="{{ url("/blog/category/$category->slug") }}" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" id="navbarDropdown">
				{{ $category->title }} <span class="caret"></span>
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				@include('layouts.top_menu', ['categories' => $categories->children])
			</div>
	@else
		<li class="nav-item">
			<a class="nav-link" href="{{ url("/blog/categories/$category->slug") }}">{{ $category->title }}</a>
	@endif
		</li>
@endforeach