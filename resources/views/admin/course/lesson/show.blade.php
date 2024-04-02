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
              <li class="breadcrumb-item active">Про курс</li>
              <li class="breadcrumb-item active">Про урок</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="col-6 p-3">
      <!-- /.card-header -->
      <div class="col-12">
        <table class="table table-bordered text-center">
          <tbody>
            <tr>
              <td><a href="{{ route('admin.course.lesson.edit', $lesson->id) }}" type="button" class="btn btn-block btn-primary btn-sm">Редагувати урок</a></td>
            </tr>
          </tbody>
        </table>
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <tbody>
                <tr>
                  <td>ID</td>
                  <td>{{ $lesson->id }}</td>
                </tr>
                <tr>
                  <td>Назва</td>
                  <td>{{ $lesson->title }}</td>
                </tr>
                <tr>
                  <td>Відео урок</td>
                  <td><a href="{{ $lesson->link_video }}" target="_blank">натисніть щоб переглянути відео</a></td>
                </tr>
                <tr>
                  <td>Опис уроку</td>
                  <td>{!! $lesson->lesson_content !!}</td>
                </tr>
                <tr>
                  <td>Додатковий матеріал до уроку</td>
                  <td><a href="{{ '/storage/' . $lesson->lesson_file }}" download="{{ $lesson->file_name }}">{{ $lesson->file_name }}</a></td>
                </tr>
                <tr>
                  <td>Дата старту</td>
                  <td>{{ $lesson->starting }}</td>
                </tr>
                <tr>
                  <td>Домашня робота</td>
                  <td>{{ $lesson->homework_content }}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
@endsection
