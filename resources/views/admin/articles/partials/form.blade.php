<label for="">Status</label>
<select name="published" class="form-control">
	@if (isset($article->id))
		<option value="0" @if ($article->published == 0) selected="" @endif>Not published</option>
		<option value="1" @if ($article->published == 1) selected="" @endif>Published</option>
	@else
		<option value="0">Not published</option>
		<option value="1">Published</option>
	@endif
</select>

<label for="">Heading</label>
<input type="text" name="title" class="form-control" placeholder="Article heading" value="{{ $article->title or "" }}" required>

<label for="">Slug (Unique value)</label>
<input type="text" name="slug" class="form-control" placeholder="Automatic generation" value="{{ $article->slug or "" }}" readonly>

<label for="">Parent article</label>
<select name="categories[]" class="form-control" multiple>
	@include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<label for="description_short">Short description</label>
<textarea name="description_short" id="description_short" class="form-control">{{ $article->description_short or "" }}</textarea>

<label for="description">Full description</label>
<textarea name="description" id="description" class="form-control">{{ $article->description or "" }}</textarea>

<hr>

<label for="">Meta heading</label>
<input type="text" name="meta_title" class="form-control" placeholder="Meta heading" value="{{ $article->meta_title or "" }}" required>

<label for="">Meta description</label>
<input type="text" name="meta_description" class="form-control" placeholder="Meta description" value="{{ $article->meta_titledescription or "" }}" required>

<label for="">Meta tags</label>
<input type="text" name="meta_keyword" class="form-control" placeholder="Meta tags, separated by commas" value="{{ $article->meta_keyword or "" }}" required>
<hr>

<input type="submit" class="btn btn-primary" value="Save">