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
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="p-3">
      <!-- /.card-header -->
      <div class="card">
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Назва</th>
                <th>Текст</th>
                <th>Дія</th>
              </tr>
            </thead>
            <tbody>
              @foreach($newsletters as $newsletter)
              <tr data-toggle="collapse" data-target="#accordion_{{ $newsletter->id }}" aria-expanded="false" aria-controls="accordion_{{ $newsletter->id }}">
                  <td>{{ $newsletter->id }}</td>
                  <td>{{ $newsletter->title }}</td>
                  <td>
                      <button class="btn btn-link">Show Content</button>
                      <div id="accordion_{{ $newsletter->id }}" class="collapse">
                          {!! $newsletter->content !!}
                      </div>
                  </td>
                  <td><a href="{{ route('admin.newsletter.show', $newsletter->id) }}"><i class="far fa-eye"></i></a></td>
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
@endsection
