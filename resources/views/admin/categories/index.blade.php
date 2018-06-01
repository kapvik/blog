@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
  @component('admin.components.breadcrumbs')
    @slot('title') List of categories @endslot
    @slot('parent') Main @endslot
    @slot('active') Categories @endslot
  @endcomponent

  <hr>

  <a href="{{route('admin.category.create')}}" class="btn btn-primary float-right">
    <i class="fa fa-plus"></i>
    Create categories
  </a>

  <table class="table table-striped">
    <thead>
      <th>Name</th>
      <th>Publication</th>
      <th class="text-right">Action</th>
    </thead>
    <tbody>
      @forelse ($categories as $category)
        <tr>
          <td>{{$category->title}}</td>
          <td>{{$category->published}}</td>
          <td>
            <a href="{{route('admin.category.edit', $category)}}">
              <i class="fa fa-edit"></i>
            </a>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="3" class="text-center">
            <h2>Data is not available</h2>
          </td>
        </tr>
      @endforelse
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3">
          <ul class="pagination float-right">
            {{$categories->links()}}
          </ul>
        </td>
      </tr>
    </tfoot>
  </table>
</div>

@endsection
