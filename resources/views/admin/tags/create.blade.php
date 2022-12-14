@extends('admin.layouts.main')


@section('content')

    <div class="content-wrapper">

        <div class="content-header" id="admin_create">
            <div class="container-fluid">
                <div class="row mb-5">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавить новый тег</h1>
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

                        <form  method="post" action="{{ route('admin.tag.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Название тега:</label>
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                @error("title")
                                <div class="form-text alert alert-danger" id="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary" >Создать</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>

@endsection
