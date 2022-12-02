@extends('admin.layouts.main')


@section('content')

    <div class="content-wrapper" id="admin_category">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-5">
                    <div class="col-sm-6">
                        <h1 class="m-0">Категории — {{ $category->title }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col action_buttons d-flex gap-2">
                        <a href="{{route('admin.category.edit', $category->id)}}" class="btn btn-warning edit">
                            <i class="fa-solid fa-pen-to-square"></i>
                            Редактировать
                        </a>
                        <form action="{{ route('admin.category.delete', $category->id) }}"
                              method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger delete" type="submit">
                                <i class="fa-solid fa-trash"></i>
                                Удалить
                            </button>
                        </form>

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                    <tr>
                                        <th scope="row">ID</th>
                                        <td>{{ $category->id}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Наименование</th>
                                        <td>{{ $category->title }}</td>
                                    </tr>
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
