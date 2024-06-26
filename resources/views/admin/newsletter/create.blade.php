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
              <li class="breadcrumb-item active">Розсилки</li>
              <li class="breadcrumb-item active">Додавання розсилку</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="p-3">
      <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Створити розсилку</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.newsletter.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Назва</label>
              <input name="title" type="text" class="form-control" placeholder="Назва розсилки" value="{{ old('title') }}">
              @error('title')
                <p class="text-danger">Це поле має бути заповненим</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Текст</label>
              <textarea id="summernote" name="content">
                {{ old('content') }}
              </textarea>
              @error('content')
                <p class="text-danger">Це поле має бути заповненим</p>
              @enderror
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
