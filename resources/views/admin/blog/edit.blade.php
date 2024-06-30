@extends('admin.layouts.main')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
              <li class="breadcrumb-item active">Блог</li>
              <li class="breadcrumb-item active">Редагування поста</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="col-6 p-3">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Редагування поста</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.blog.update', $post->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="card-body">
            <div class="form-group">
              <label>Назва</label>
              <input name="title" type="text" class="form-control" placeholder="Назва поста" value="{{ $post->title }}">
              @error('title')
                <p class="text-danger">Це поле має бути заповненим</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Превью</label>
              <div class="input-group">
                <div class="custom-file">
                  <input name="preview_image" type="file" class="custom-file-input">
                  <label class="custom-file-label" for="exampleInputFile">Завантажити файл</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Завантажити</span>
                </div>
              </div>
            </div>
            <div class="form-group" data-select2-id="29">
              <label>Теги</label>
              <select class="select2 select2-hidden-accessible" name="tag_ids[]" multiple="" data-placeholder="Select a State" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
                @foreach ($tags as $tag)
                  <option {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? ' selected' : '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Контент</label>
              <textarea id="summernote" name="content">
                {{ $post->content }}
              </textarea>
              @error('description')
                <p class="text-danger">Це поле має бути заповненим</p>
              @enderror
            </div>
            <div class="form-check">
              <input name="is_published" type="checkbox" class="form-check-input" value="1" {{ $post->is_published ? 'checked' : '' }}>
              <label class="form-check-label" for="exampleCheck1">Публічний курс</label>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Оновити</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
