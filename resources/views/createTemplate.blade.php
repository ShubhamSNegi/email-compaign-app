@extends('layouts.app')
@section('content')
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
    
<div class="container">     
      <form method="POST" action="{{url('/createTemplate')}}">
      {{csrf_field()}}
      <!-- <?php
      if(isset($_GET['id']))
{
    $id = $_GET['id'];}
       $alltemplatesparameters=\App\Template::all();
       $alltemplatesparameters->get('Subject')
       
       
       ?>    -->
              <div class="form-group">
              
                   <label for="exampleFormControl1"><h2>Subject</h2></label>
                   <input type="text" class="form-control" id="exampleFormControl1" placeholder="Subject" name="Subject">
              </div>
              <div class="form-group">
                   <label for="exampleFormControl1"><h2>Content</h2></label>
                   <textarea class="form-control" rows="10" name="content"></textarea>
              </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
     </form>
</div>
@endsection