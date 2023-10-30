
@extends('layout.app')
@section('body')

        <div class="searchbar">
            <input class="form-control" type="text" placeholder="Search">
        </div>

        <div class="products">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://source.unsplash.com/220x220/?perfume?1" class="card-img-top" alt="Perfume 1">
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod eius facere aut reiciendis natus aliquam dolorum, mollitia commodi cum ea accusantium beatae quam nam consequatur iste placeat ducimus tenetur inventore!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://source.unsplash.com/220x220/?perfume?2" class="card-img-top" alt="Perfume 2">
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod eius facere aut reiciendis natus aliquam dolorum, mollitia commodi cum ea accusantium beatae quam nam consequatur iste placeat ducimus tenetur inventore!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://source.unsplash.com/220x220/?perfume?3" class="card-img-top" alt="Perfume 3">
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod eius facere aut reiciendis natus aliquam dolorum, mollitia commodi cum ea accusantium beatae quam nam consequatur iste placeat ducimus tenetur inventore!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
        <a class="btn btn-primary" style="margin: 4rem; " href="{{ route('login') }}" role="button">Logout</a>
        </div>

        <div class="about" style=" background-color: black;">
            <h1 class="text-center">About Us</h1>
            <p> <!-- Your about us content goes here --> </p>
        </div>
        @stop
       