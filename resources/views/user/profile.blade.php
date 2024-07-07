@extends('adminlte::page')

@include('sweetalert::alert')


@section('content')
    <div class="container">
        <form action="{{ route('user.update', $user->id) }}"
            class="d-flex flex-column justify-content-center align-items-center" method="post" enctype="multipart/form-data">
            <img src="{{ $user->adminlte_image() }}" alt="" width="150px" class="mt-4 rounded-circle">

            @csrf
            @method('PUT    ')
            <div class="col-md-3">
                <label for="">Nombre</label>
                <input class="form-control" type="text" name="name" value="{{ $user->name }}">
            </div>
            <div class="col-md-3">
                <label for="">Email</label>
                <input class="form-control" type="email" name="email" id="" value="{{ $user->email }}">
            </div>
            <div class="col-md-3">
                <input type="file" accept="jpg" name="image" id="" class="form-control my-2" >
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-sm btn-success">Guardar</button>
            </div>
        </form>

    </div>
@endsection
