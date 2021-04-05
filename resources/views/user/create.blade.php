@extends('layout.master')
@section('content')
    <form method="post" action="{{route('user.store')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Nome:</label>
            <input name="name" type="name" class="form-control"  placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email:</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha:</label>
            <input name="password" type="password" class="form-control"  placeholder="Password">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection