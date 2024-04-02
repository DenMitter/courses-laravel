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
              <li class="breadcrumb-item active">Курси</li>
              <li class="breadcrumb-item active">Додавання курса</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="col-6 p-3">
      <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Додавання курса</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.course.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label>Назва</label>
              <input name="title" type="text" class="form-control" placeholder="Назва курса" value="{{ old('title') }}">
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
              <div class="select2-green" data-select2-id="29">
                <select class="select2 select2-hidden-accessible" name="tag_ids[]" multiple="" data-placeholder="Виберіть тег" data-dropdown-css-class="select2-green" style="width: 100%;" data-select2-id="15" tabindex="-1" aria-hidden="true">
                  @foreach ($tags as $tag)
                    <option {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? ' selected' : '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label>Ціна курсу</label>
              <input name="price" type="number" class="form-control" placeholder="Ціна курсу" value="{{ old('price') }}">
              @error('price')
                <p class="text-danger">Це поле має бути заповненим</p>
              @enderror
            </div>
            <div class="form-group">
              <label>Опис курсу</label>
              <textarea name="description" class="form-control" placeholder="Опис курсу">{{ old('description') }}</textarea>
              @error('description')
                <p class="text-danger">Це поле має бути заповненим</p>
              @enderror
            </div>
            <div class="d-flex p-0 w-100">
              <div class="form-group w-100">
                <label>Дата старту</label>
                <input name="starting" type="date" class="form-control" placeholder="Дата старту" value="{{ old('starting') }}">
                @error('starting')
                  <p class="text-danger">Це поле має бути заповненим</p>
                @enderror
              </div>
              <div class="form-group ml-2 w-100">
                <label>Як довго буде йти курс</label>
                <input name="during" type="text" class="form-control" placeholder="1 тиждень" value="{{ old('during') }}">
                @error('during')
                  <p class="text-danger">Це поле має бути заповненим</p>
                @enderror
              </div>
            </div>
            <div class="form-group">
              <label>Основний колір</label>
              <input name="color" type="color" class="form-control" value="{{ old('color') }}">
              @error('color')
                <p class="text-danger">Це поле має бути заповненим</p>
              @enderror
            </div>
            <div class="form-check">
              <input name="is_published" type="checkbox" class="form-check-input" value="1">
              <label class="form-check-label" for="exampleCheck1">Публічний курс</label>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-success">Створити</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
