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
                  @foreach (auth()->user()->students as $student)
                  <tr>
                      <td>{{ $student->id }}</td>
                      <td>{{ $student->name }}</td>
                      <td>{{ $student->email }}</td>
                      <td><a href="{{ route('admin.student.edit', $student->id) }}" class="text-success"><i class="fas fa-pencil-alt"></i></a></td>
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
