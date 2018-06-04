@extends('admin.layouts.app_admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="jumbotron text-center">
					<p>Categories <span class="badge badge-primary"> {{ $count_categories }}</span>	</p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="jumbotron text-center">
					<p>Materials <span class="badge badge-primary"> {{ $count_articles }}</span>	</p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="jumbotron text-center">
					<p>Visitors <span class="badge badge-primary">0</span>	</p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="jumbotron text-center">
					<p>Today <span class="badge badge-primary">0</span>	</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<a href="{{route('admin.category.create')}}" class="btn btn-block btn-secondary">Add category</a>
				@foreach ($categories as $category)
					<a href="{{ route('admin.category.edit', $category) }}" class="list-group-item">
						<h4>{{ $category->title }}</h4>
						<p>{{ $category->articles()->count() }}</p>
					</a>
				@endforeach
			</div>
			<div class="col-sm-6">
				<a href="{{ route('admin.article.create') }}" class="btn btn-block btn-secondary">Add material</a>
				@foreach ($articles as $article)
					<a href="{{ route('admin.article.edit', $article) }}" class="list-group-item">
						<h4 >{{ $article->title }}</h4>
						<p>
							{{ $article->categories()->pluck('title')->implode(', ') }}
						</p>
					</a>
				@endforeach
			</div>
		</div>
	</div>
@endsection
