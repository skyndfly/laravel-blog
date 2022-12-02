@extends('admin.layouts.main')


@section('content')
    <div class="content-wrapper" id="admin_category">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-5">
                    <div class="col-sm-6">
                        <h1 class="m-0">Теги</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="{{ route('admin.tag.create') }}" class="btn btn-primary">
                            <i class="nav-icon far fa-plus-square"></i>
                            Добавить тег
                        </a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="card col-8">
                            <div class="card-header">
                                <h3 class="card-title">Список тегов</h3>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                               placeholder="Поиск">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Наименование</th>
                                        <th scope="col">Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($tags as $tag)
                                        <tr>
                                            <th scope="row">{{ $tag->id }}</th>
                                            <td>{{ $tag->title }}</td>
                                            <td class="action_links">
                                                <a href="{{route('admin.category.show', $tag->id)}}">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                                <a href="{{route('admin.category.edit', $tag->id)}}" class="edit">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <form action="{{ route('admin.category.delete', $tag->id) }}"
                                                      method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="delete" type="submit"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>
                                                <strong>Здесь ничего нет! Добавьте новый тег или зайдите позже</strong>
                                            </td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>
@endsection
