@extends('layout.master')
@section('content')
    <form method="post" action="{{route('user.update', $users->id)}} ">
        @csrf
        @method ('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">Nome:</label>
                <input name="name" type="name" class="form-control" placeholder="Enter email" value="{{$users->name}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email:</label>
                <input name="email" type="email" class="form-control" placeholder="Password" value="{{$users->email}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha:</label>
                <input name="password" type="password" class="form-control" placeholder="Password" value="{{$users->password}}">
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection