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
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="col-6 p-3">
      <!-- /.card-header -->
      <table class="table table-bordered text-center">
          <tbody>
            <tr>
              <td><a href="{{ route('admin.course.create') }}" type="button" class="btn btn-block btn-success btn-sm">Створити курс</a></td>
            </tr>
        </tbody>
      </table>
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Назва</th>
                  <th colspan="3" class="text-center">Дія</th>
                </tr>
              </thead>
              <tbody>
                @foreach($courses as $course)
                  <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->title }}</td>
                    <td><a href="{{ route('admin.course.show', $course->id) }}"><i class="far fa-eye"></i></a></td>
                      <td><a href="{{ route('admin.course.edit', $course->id) }}" class="text-success"><i class="fas fa-pencil-alt"></i></a></td>
                      <td>
                        <form action="{{ route('admin.course.delete', $course->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="border-0 bg-transparent">
                            <i class="fas fa-trash text-danger" role="button"></i>
                          </button>
                        </form>
                      </td>
                  </tr>
                @endforeach
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
