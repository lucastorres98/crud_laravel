@extends('layout.master')
@section('content')
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">nome</th>
          <th scope="col">email</th>
          <th scope="col">ação</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
          <tr>
            <td scope="row">{{ $user->id }}</td>
            <td scope="row">{{ $user->name}}</td>
            <td scope="row">{{ $user->email}}</td>
            <td> 
              <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir</button>
                <a href={{route('user.edit', $user->id)}} type="button" class="btn btn-warning">Editar</button>
              </form> 
            </td>
          </tr>
        @endforeach  
      </tbody>
    </table> 
  <a href="{{route('user.create')}}" class="btn btn-outline-success">Cadastro   </a>
@endsection