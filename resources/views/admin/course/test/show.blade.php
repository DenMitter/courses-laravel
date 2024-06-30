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
              <li class="breadcrumb-item active">Про тест</li>
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
              <td><a href="{{ route('admin.course.test.edit', $test->id) }}" type="button" class="btn btn-block btn-primary btn-sm">Редагувати тест</a></td>
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
                  <td>{{ $test->id }}</td>
                </tr>
                <tr>
                  <td>Назва</td>
                  <td>{{ $test->title }}</td>
                </tr>
                <tr>
                  <td>Посилання на тест</td>
                  <td><a href="{{ $test->link_test }}" target="_blank">перейти на тест</a></td>
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
