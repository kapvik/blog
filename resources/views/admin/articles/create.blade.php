@extends ('admin.layouts.app_admin')

@section('content')

<div class="container">
	@component('admin.components.breadcrumbs')
		@slot('title') List of articles @endslot
	    @slot('parent') Main @endslot
	    @slot('active') Articles @endslot
	@endcomponent

	<hr>
	<form action="{{ route('admin.article.store') }}" method="post" class="form-horizontal">
		@csrf
  		
  		<!-- Form include -->
		@include('admin.articles.partials.form')

		<input type="hidden" name="created_by" value="{{ Auth::id() }}">
	</form>

</div>

@endsection
