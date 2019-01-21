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
@endsection
