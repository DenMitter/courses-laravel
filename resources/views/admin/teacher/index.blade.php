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
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="col-6 p-3">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Ім'я</th>
                  <th>Пошта</th>
                  <th colspan="3" class="text-center">Дія</th>
                </tr>
              </thead>
              <tbody>
                @foreach($teachers as $teacher)
                  @if ($teacher->role == 2)
                    <tr>
                      <td>{{ $teacher->id }}</td>
                      <td>{{ $teacher->name }}</td>
                      <td>{{ $teacher->email }}</td>
                      <td><a href="{{ route('admin.teacher.show', $teacher->id) }}"><i class="far fa-eye"></i></a></td>
                      <td><a href="{{ route('admin.teacher.edit', $teacher->id) }}" class="text-success"><i class="fas fa-pencil-alt"></i></a></td>
                    </tr>
                  @endif
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
