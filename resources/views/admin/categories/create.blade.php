@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
	@component('admin.components.breadcrumbs')
	    @slot('title') List of categories @endslot
	    @slot('parent') Main @endslot
	    @slot('active') Categories @endslot
  	@endcomponent

  	<hr>

  	<form class="form-horizontal" action="{{ route('admin.category.store') }}" method="post">
  		{{ csrf_field() }}

  		<!-- Form include -->
  		@include('admin.categories.partials.form')
  	</form>
</div>

@endsection