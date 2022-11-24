@extends('admin.layouts.main')


@section('content')

    <div class="content-wrapper">

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
                    <div class="col-4">
                        <table class="table caption-top">
                            <caption>Список категорий</caption>
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Наименование</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $cat)
                                    <tr>
                                        <th scope="row">{{ $cat['id'] }}</th>
                                        <td>{{ $cat['title'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        </section>
    </div>

@endsection
