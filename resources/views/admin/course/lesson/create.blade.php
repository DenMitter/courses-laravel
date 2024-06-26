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
              <li class="breadcrumb-item active">Уроки</li>
              <li class="breadcrumb-item active">Додавання уроку</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="col-6 p-3">
      <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Додавання уроку</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.course.lesson.store', $course->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label>Назва</label>
              <input name="title" type="text" class="form-control" placeholder="Назва уроку" value="{{ old('title') }}">
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
            <div class="d-flex p-0 w-100">
              <div class="form-group w-100">
                <label for="exampleInputFile">Додатковий матеріал до уроку</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input name="lesson_file" type="file" class="custom-file-input">
                    <label class="custom-file-label" for="exampleInputFile">Завантажити файл</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Завантажити</span>
                  </div>
                </div>
              </div>
              <div class="form-group w-100 ml-3">
                <label>Назва матеріалу</label>
                <input name="file_name" type="text" class="form-control" placeholder="Назва матеріалу" value="{{ old('file_name') }}">
                @error('file_name')
                  <p class="text-danger">Це поле має бути заповненим</p>
                @enderror
              </div>
            </div>
            <div class="form-group w-100">
              <label>Дата старту</label>
              <input name="starting" type="date" class="form-control" placeholder="Дата старту" value="">
              @error('starting')
                <p class="text-danger">Це поле має бути заповненим</p>
              @enderror
            </div>
            <div class="form-group">
              <label>Посилання на відео</label>
              <input name="link_video" type="text" class="form-control" placeholder="Посилання на відео" value="{{ old('link_video') }}">
              @error('link_video')
                <p class="text-danger">Це поле має бути заповненим</p>
              @enderror
            </div>
            <div class="form-group">
              <label>Домашня робота</label>
              <textarea name="homework_content" type="text" class="form-control" placeholder="Домашня робота">{{ old('homework_content') }}</textarea>
              @error('homework_content')
                <p class="text-danger">Це поле має бути заповненим</p>
              @enderror
            </div>
            <div class="form-group">
              <label>Опис уроку</label>
              <textarea id="summernote" name="lesson_content">
                {{ old('lesson_content') }}
              </textarea>
              @error('lesson_content')
                <p class="text-danger">Це поле має бути заповненим</p>
              @enderror
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-success">Додати</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
