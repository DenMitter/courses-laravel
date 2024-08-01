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
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="col-6 p-3">
      <div class="d-flex">
        <div class="col-12">
          <table class="table table-bordered text-center">
            <tbody>
              <tr>
                <td><a href="{{ route('admin.course.lesson.create', $course->id) }}" type="button" class="btn btn-block btn-success btn-sm">Додати урок</a></td>
                <td><a href="{{ route('admin.course.edit', $course->id) }}" type="button" class="btn btn-block btn-primary btn-sm">Редагувати курс</a></td>
              </tr>
            </tbody>
          </table>
          <table class="table table-bordered text-center">
            <tbody>
              <tr>
                <td><a href="{{ route('admin.course.test.create', $course->id) }}" type="button" class="btn btn-block btn-danger btn-sm">Додати тест</a></td>
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
                    <td>{{ $course->id }}</td>
                  </tr>
                  <tr>
                    <td>Назва</td>
                    <td>{{ $course->title }}</td>
                  </tr>
                  <tr>
                    <td>Публічний курс</td>
                    <td>{{ $course->is_published ? "Публічний" : "Приватний" }}</td>
                  </tr>
                  <tr>
                    <td>Ціна за один урок</td>
                    <td>{{ $course->price ? $course->price . ' грн' : "Безкоштовний" }}</td>
                  </tr>
                  <tr>
                    <td>Теги</td>
                    <td>
                      @foreach ($course->tags as $tag)
                        <span class="show-tags mr-1">
                          {{ $tag->title }}
                        </span>
                      @endforeach
                    </td>
                  </tr>
                  <tr>
                    <td>Опис курсу</td>
                    <td>{{ $course->description }}</td>
                  </tr>
                  <tr>
                    <td>Кількість уроків</td>
                    <td>{{ $course->lesson_count }}</td>
                  </tr>
                  <tr>
                    <td>Основний колір</td>
                    <td>
                      <span class="show-tags mr-1" style="background-color: {{ $course->color }}"></span>
                    </td>
                  </tr>
                  {{-- <tr>
                    <td>Дата старту</td>
                    <td>{{ $course->starting }}</td>
                  </tr>
                  <tr>
                    <td>Як довго буде йти курс</td>
                    <td>{{ $course->during }}</td>
                  </tr> --}}
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Список уроків</h3>
            </div>
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
                  @foreach ($lessons as $lesson)
                    @if (is_array($course->lessons->pluck('id')->toArray()) && in_array($lesson->id, $course->lessons->pluck('id')->toArray()))
                      <tr>
                        <td>{{ $lesson->id }}</td>
                        <td>{{ $lesson->title }}</td>
                        <td><a href="{{ route('admin.course.lesson.show', $lesson) }}"><i class="far fa-eye"></i></a></td>
                          <td><a href="{{ route('admin.course.lesson.edit', $lesson) }}" class="text-success"><i class="fas fa-pencil-alt"></i></a></td>
                          <td>
                            <form action="{{ route('admin.course.lesson.delete', $lesson) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="border-0 bg-transparent">
                                <i class="fas fa-trash text-danger" role="button"></i>
                              </button>
                            </form>
                          </td>
                      </tr>
                    @endif
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Список тестів</h3>
            </div>
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
                  @foreach ($tests as $test)
                    @if (is_array($course->tests->pluck('id')->toArray()) && in_array($test->id, $course->tests->pluck('id')->toArray()))
                      <tr>
                        <td>{{ $test->id }}</td>
                        <td>{{ $test->title }}</td>
                        <td><a href="{{ route('admin.course.test.show', $test) }}"><i class="far fa-eye"></i></a></td>
                          <td><a href="{{ route('admin.course.test.edit', $test) }}" class="text-success"><i class="fas fa-pencil-alt"></i></a></td>
                          <td>
                            <form action="{{ route('admin.course.test.delete', $test) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="border-0 bg-transparent">
                                <i class="fas fa-trash text-danger" role="button"></i>
                              </button>
                            </form>
                          </td>
                      </tr>
                    @endif
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
