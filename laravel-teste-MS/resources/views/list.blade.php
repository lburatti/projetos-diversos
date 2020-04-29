@extends('layouts.app')

@section('content')
<section class="container">
    <h2 class="my-3">Lista de cadastros:</h2>
    <table id="tblGrid" class="table table-striped table-bordered" cellspacing="0">
        <thead class="text-center">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome Completo</th>
                <th scope="col">Última Atualização</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach(App\Register::all() as $register)
            <tr class="text-center">
                <th scope="row">{{$register->id}}</th>
                <td>{{$register->nome_completo}}</td>
                <td>{{$register->updated_at}}</td>
                <td class="d-flex justify-content-center">
                    <form action="{{ url('/edit', $register->id) }}" method="GET">
                        @csrf
                        {{ method_field('POST') }}
                        <input type="hidden" name="id" value="{{$register->id}}" />
                        <button type="submit"><i class="fas fa-edit"></i></i></button>
                    </form>
                    <form action="{{ url('/delete', $register->id) }}" method="POST">
                        @csrf
                        {{ method_field('POST') }}
                        <input type="hidden" name="id" value="{{$register->id}}" />
                        <button type="submit" class="mx-1"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <button type="submit" class="btn btn-secondary">
        <a class="text-white text-decoration-none" href="{{ route('register.create') }}">Novo Cadastro</a>
    </button>
</section>
@endsection