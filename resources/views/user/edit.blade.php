@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Edit User
                </div>
                <div class="card-body">
                    <form action="{{route('user.update',$user->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Nama User</label>
                            <input type="text" name="name" class="form-control" placeholder="silahkan masukan nama user" value="{{$user->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="silahkan masukan email" value="{{$user->email}}">
                        </div>
                        <button class="btn btn-success">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection