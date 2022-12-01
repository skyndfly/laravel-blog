@extends('admin.layouts.main')


@section('content')
    <div class="content-wrapper" id="admin_category">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-5">
                    <div class="col-sm-6">
                        <h1 class="m-0">Категории</h1>
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
                        <a href="{{ route('admin.category.create') }}" class="btn btn-primary">
                            <i class="nav-icon far fa-plus-square"></i>
                            Новая категория
                        </a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Список категорий</h3>
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
                                    @forelse($categories as $cat)
                                        <tr>
                                            <th scope="row">{{ $cat->id }}</th>
                                            <td>{{ $cat->title }}</td>
                                            <td class="action_links">
                                                <a href="{{route('admin.category.show', $cat->id)}}">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                                <a href="{{route('admin.category.edit', $cat->id)}}" class="edit">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <form action="{{ route('admin.category.delete', $cat->id) }}"
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
                                           <td>Здесь ничего нет! Создайте новую категорию или зайдите позже</td>
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
