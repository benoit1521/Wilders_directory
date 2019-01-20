@extends('layouts.app')

@section('content')
    <form action="/wilder" method="post">
    {{ csrf_field() }}

        <input type="email" name="email" placeholder="Email" class="form-control offset-3 col-6 mt-3">
        <input type="password" name="password" placeholder="Mot de passe"class="form-control offset-3 col-6 mt-3">
        <input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)"class="form-control  offset-3 col-6 mt-3">
        <input type="number" name="age" placeholder="Age"class="form-control offset-3 col-6 mt-3">
        <input type="submit" value="M'inscrire" class="btn btn-primary offset-6 mt-3">
    </form>
@endsection