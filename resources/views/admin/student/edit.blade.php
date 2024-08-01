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
              <li class="breadcrumb-item active">Студенти</li>
              <li class="breadcrumb-item active">Редагування студента</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="col-6 p-3">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Редагування студента</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.student.update', $student->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Логін</label>
              <input name="name" type="text" class="form-control" placeholder="Логін" value="{{ $student->name }}">
              @error('name')
                <p class="text-danger">Це поле має бути заповненим</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Пошта</label>
              <input name="email" type="email" class="form-control" placeholder="Пошта" value="{{ $student->email }}">
              @error('email')
                <p class="text-danger">Це поле має бути заповненим</p>
              @enderror
            </div>
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
