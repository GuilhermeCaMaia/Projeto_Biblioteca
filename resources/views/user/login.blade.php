@extends('layouts.app')

@section('title', 'Login')
@section('content')
<div>
    <form action="" method="POST" class="row g-3">
        @csrf
        <div class="col-md-4">
            <label for="validationServer01" class="form-label">Usuario</label>
            <input type="text" name="user" class="form-control" id="validationServer01" required>
        </div>
        <div></div>
        <div class="col-md-4">
            <label for="validationServer01" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control" id="validationServer01" required>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" name="submit" type="submit">Entrar</button>
        </div>
    </form>
</div>
@endsection
