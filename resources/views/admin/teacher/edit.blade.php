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
              <li class="breadcrumb-item active">Викладачі</li>
              <li class="breadcrumb-item active">Редагування викладача</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="col-6 p-3">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Редагування викладача</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.teacher.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Логін</label>
              <input name="name" type="text" class="form-control" placeholder="Логін" value="{{ $teacher->name }}">
              @error('name')
                <p class="text-danger">Це поле має бути заповненим</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Пошта</label>
              <input name="email" type="email" class="form-control" placeholder="Пошта" value="{{ $teacher->email }}">
              @error('email')
                <p class="text-danger">Це поле має бути заповненим</p>
              @enderror
            </div>
            <div class="form-group" data-select2-id="29">
              <label>Студенти викладача</label>
              <div class="select2-primary" data-select2-id="29">
                <select class="select2 select2-hidden-accessible" name="student_ids[]" multiple="" data-placeholder="Виберіть студента" data-dropdown-css-class="select2-primary" style="width: 100%;" data-select2-id="15" tabindex="-1" aria-hidden="true">
                  @foreach ($students as $student)
                    <option {{ is_array(old('student_ids')) && in_array($student->id, old('student_ids')) ? ' selected' : '' }} value="{{ $student->id }}">{{ $student->name }}</option>
                  @endforeach
                </select>
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
