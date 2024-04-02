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
              <li class="breadcrumb-item active">Розсилки</li>
              <li class="breadcrumb-item active">Про розсилку</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    {{-- <div class="col-6 p-3 d-flex"> --}}
      <!-- /.card-header -->
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <tbody>
                <tr>
                  <td>ID</td>
                  <td>{{ $newsletter->id }}</td>
                </tr>
                <tr>
                  <td>Назва</td>
                  <td>{{ $newsletter->title }}</td>
                </tr>
                <tr>
                  <td>Текст</td>
                  <td>{!! $newsletter->content !!}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    {{-- </div> --}}
  </div>
@endsection
