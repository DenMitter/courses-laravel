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
              <li class="breadcrumb-item active">Блог</li>
              <li class="breadcrumb-item active">Про пост</li>
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
              <td><a href="{{ route('admin.blog.edit', $post->id) }}" type="button" class="btn btn-block btn-primary btn-sm">Редагувати пост</a></td>
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
                  <td>{{ $post->id }}</td>
                </tr>
                <tr>
                  <td>Назва</td>
                  <td>{{ $post->title }}</td>
                </tr>
                <tr>
                  <td>Публічний пост</td>
                  <td>{{ $post->is_published ? "Публічний" : "Приватний" }}</td>
                </tr>
                <tr>
                  <td>Теги</td>
                  <td>
                    @foreach ($tags as $tag)
                      @if (is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()))
                        <span class="show-tags mr-1">
                          {{ $tag->title }}
                        </span>
                      @endif
                    @endforeach
                  </td>
                </tr>
                <tr>
                  <td>Контент</td>
                  <td>{!! $post->content !!}</td>
                </tr>
                <tr>
                  <td>Дата створення</td>
                  <td>{{ $post->created_at }}</td>
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
