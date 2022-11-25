@extends('admin.layouts.main')


@section('content')

    <div class="content-wrapper">

        <div class="content-header" id="admin_create">
            <div class="container-fluid">
                <div class="row mb-5">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактировать категорию — <strong>{{ $category->title }}</strong></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">

                        <form  method="post" action="#">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Редактировать данные:</label>
                                <input type="text" class="form-control" name="title" value="{{ $category->title }}">
                                @error("title")
                                <div class="form-text alert alert-danger" id="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary" >Обновить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>
    @if(session()->has('success'))
        <div class="alert alert-success" id="message">
            {{ session('success') }}
        </div>
    @endif
@endsection
