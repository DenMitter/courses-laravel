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
              <li class="breadcrumb-item active">Користувачі</li>
              <li class="breadcrumb-item active">Про користувача</li>
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
              <td><a href="{{ route('admin.user.edit', $user->id) }}" type="button" class="btn btn-block btn-primary btn-sm">Редагувати користувача</a></td>
            </tr>
        </tbody>
      </table>
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <tbody>
                <tr>
                  <td>ID</td>
                  <td>{{ $user->id }}</td>
                </tr>
                <tr>
                  <td>Логін</td>
                  <td>{{ $user->name }}</td>
                </tr>
                <tr>
                  <td>Пошта</td>
                  <td>{{ $user->email }}</td>
                </tr>
                <tr>
                  <td>Роль</td>
                  <td>{{ $user->role ? 'Адміністратор' : 'Гість' }}</td>
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
