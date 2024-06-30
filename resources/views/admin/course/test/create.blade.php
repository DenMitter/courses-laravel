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
              <li class="breadcrumb-item active">Тести</li>
              <li class="breadcrumb-item active">Додавання тесту</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="col-6 p-3">
      <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Додавання тесту</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.course.test.store', $course->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label>Назва</label>
              <input name="title" type="text" class="form-control" placeholder="Назва тесту" value="{{ old('title') }}">
              @error('title')
                <p class="text-danger">Це поле має бути заповненим</p>
              @enderror
            </div>
            <div class="form-group">
              <label>Посилання на тест</label>
              <input name="link_test" type="text" class="form-control" placeholder="Посилання на тест" value="{{ old('link_test') }}">
              @error('link_test')
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
