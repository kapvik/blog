@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
  @component('admin.components.breadcrumbs')
    @slot('title') List of articles @endslot
    @slot('parent') Main @endslot
    @slot('active') Articles @endslot
  @endcomponent

  <hr>

  <a href="{{route('admin.article.create')}}" class="btn btn-primary float-right">
    <i class="fa fa-plus"></i>
    Create article
  </a>

  <table class="table table-striped">
    <thead>
      <th>Name</th>
      <th>Publication</th>
      <th class="text-right">Action</th>
    </thead>
    <tbody>
      @forelse ($articles as $article)
        <tr>
          <td>{{$article->title}}</td>
          <td>{{$article->published}}</td>
          <td class="text-right">
            <form onsubmit="(confirm('Delete?')) ? true : false" action="{{ route('admin.article.destroy', $article) }}" method="post" class="d-inline">
              <input type="hidden" name="_method" value="delete">
              @csrf
              <button type="submit" class="btn">
                <i class="fa fa-trash-alt"></i>
              </button>
            </form>
            <a class="btn btn-secondary" href="{{route('admin.article.edit', $article)}}">
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
            {{$articles->links()}}
          </ul>
        </td>
      </tr>
    </tfoot>
  </table>
</div>

@endsection
