@extends ('admin.layouts.app_admin')

@section('content')

<div class="container">
	@component('admin.components.breadcrumbs')
		@slot('title') Edit the article @endslot
	    @slot('parent') Main @endslot
	    @slot('active') Articles @endslot
	@endcomponent

	<hr>
	<form action="{{ route('admin.article.update', $article) }}" method="post" class="form-horizontal">
		<input type="hidden" name="_method" value="put">
		@csrf
  		
  		<!-- Form include -->
		@include('admin.articles.partials.form')

		<input type="hidden" name="modified_by" value="{{ Auth::id() }}">
	</form>

</div>

@endsection
