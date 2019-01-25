@extends('layouts.app')
@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
         <div>
               
            </div>  
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
            </div>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid"style="margin-top:-5%;padding-top:5%;" class="container">
         <div class="container">
              <h1 class="display-4">Email Campaign App</h1>
                  <p class="lead">Simply create, edit and use to transform your mail</p>
               <div style="margin-top:7%;padding-bottom:5%;">
                    <a href="/campaign" class="btn btn-outline-primary btn-lg" style="margin-right:3%;" tabindex="-1" role="button">
                       Compaign
                    </a>
                    <a href="/subscriber" class="btn btn-outline-primary btn-lg" tabindex="-1" role="button"style="margin-right:3%;">
                       Subscriber
                    </a>
                    <a href="/categories" class="btn btn-outline-primary btn-lg" tabindex="-1" role="button">
                       Categories
                    </a>
               </div>
@endsection
