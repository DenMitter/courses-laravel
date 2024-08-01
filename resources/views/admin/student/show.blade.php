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
              <li class="breadcrumb-item active">Про студента</li>
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
              <tbody>
                <tr>
                  <td>ID</td>
                  <td>{{ $teacher->id }}</td>
                </tr>
                <tr>
                  <td>Логін</td>
                  <td>{{ $teacher->name }}</td>
                </tr>
                <tr>
                  <td>Пошта</td>
                  <td>{{ $teacher->email }}</td>
                </tr>
                <tr>
                  <td>Викладач</td>
                  <td>
                    @foreach ($student->teachers as $teacher)
                      <span class="show-tags mr-1">
                        {{ $teacher->name }}
                      </span>
                    @endforeach
                  </td>
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
