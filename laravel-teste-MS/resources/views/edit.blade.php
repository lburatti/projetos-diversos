@extends('layouts.app')

@section('content')
<section class="container">
    <form action="{{ url('/edit/'.$register->id) }}" method="POST" class="form-column" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="nome_completo">Nome Completo</label>
            <input type="text" class="form-control {{$errors->has('nome_completo') ? ' is-invalid':''}}" name="nome_completo" id="nome_completo" value="{{ $register->nome_completo }}">
            <div class="invalid-feedback">{{ $errors->first('nome_completo') }}</div>
        </div>
        <button type="submit" class="btn btn-secondary">Enviar</button>
    </form>
</section>
@endsection