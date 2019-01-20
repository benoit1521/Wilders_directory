
@extends('layouts.app')

@section('content')
<form action="/wilder" method="post">
    {{ csrf_field() }}
    <input type="text" name="lastName" placeholder="Nom" class="form-control offset-3 col-6 mt-3">
    <input type="text" name="name" placeholder="Prénom" class="form-control offset-3 col-6 mt-3">
    <input type="email" name="email" placeholder="Email" class="form-control offset-3 col-6 mt-3">
    <input type="number" name="age" placeholder="Age" class="form-control offset-3 col-6 mt-3">
    <input type="text" name="school" placeholder="Ecole" class="form-control offset-3 col-6 mt-3">
    <input type="text" name="promo" placeholder="Promo" class="form-control offset-3 col-6 mt-3">
    <input type="text" name="language" placeholder="Langage" class="form-control offset-3 col-6 mt-3">
    <input type="text" name="qualities" placeholder="Descritpion en quelques mots" class="form-control offset-3 col-6 mt-3">
    <input type="text" name="where" placeholder="Comment se place t'il dans un groupe ?"   class="form-control offset-3 col-6 mt-3">
    <input type="text" name="why" placeholder="Pourquoi le code ?"  class="form-control offset-3 col-6 mt-3">
    <input type="text" name="tomorrow" placeholder="Où se voit-il demain ?"  class="form-control offset-3 col-6 mt-3">


    <input type="submit" value="Ajouter le wilder au book" class="btn btn-primary offset-5 mt-3">


</form>
@endsection