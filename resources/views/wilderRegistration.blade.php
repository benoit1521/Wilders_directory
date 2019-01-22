@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Inscription d'un nouveau wilder</div>
                <div class="card-body">

                    <form action="{{route('wilder')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nom</label>
                            <div class="col-md-6">

                                <input type="text" name="lastname" class="form-control ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Prénom</label>
                            <div class="col-md-6">

                                <input type="text" name="name" class="form-control ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">E-mail</label>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ecole</label>
                            <div class="col-md-6">
                                <input type="text" name="school" class="form-control ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Promo</label>
                            <div class="col-md-6">
                                <input type="text" name="promo" class="form-control ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Langage</label>
                            <div class="col-md-6">
                                <input type="text" name="language" class="form-control ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Description</label>
                            <div class="col-md-6">
                                <input type="text" name="description" placeholder="Descritpion en quelques mots" class="form-control ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Groupe</label>
                            <div class="col-md-6">
                                <input type="text" name="where" placeholder="Comment se place t'il dans un groupe ?"
                                    class="form-control ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Motivations</label>
                            <div class="col-md-6">
                                <input type="text" name="why" placeholder="Pourquoi le code ?" class="form-control ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Avenir</label>
                            <div class="col-md-6">
                                <input type="text" name="tomorrow" placeholder="Où se voit-il demain ?" class="form-control ">
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">
                                Ajouter une photo pour ce wilder ?
                            </label>
                            <div class="col-md-6">
                                <input type="file" name="photo" />
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit"  class="btn btn-outline-primary ">
                                    Ajouter le wilder au book
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection