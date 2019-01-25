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
<div class="container-fluid" style="margin-top:-3%">
     <div class="row">
          <nav class="col-md-2 d-none d-md-block bg-light sidebar">
               <div class="sidebar-sticky">
                    <ul class="nav flex-column"style="margin-top:20%">
                        <li class="nav-item">
                            <a href="/campaign" class="nav-link active">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                               </svg>
                               Campaign 
                               <span class="sr-only">(current)</span>
                             </a>
                        </li> 
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                               </svg>
                               Subscriber
                            </a>
                        </li> 
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                               </svg>
                               Categories
                            </a>
                        </li> 
                        <li class="nav-item">
                          <a href="/templates" class="nav-link active">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                             <path d="M4 3h16a2 2 0 0 1 2 2v6a10 10 0 0 1-10 10A10 10 0 0 1 2 11V5a2 2 0 0 1 2-2z"></path>
                             <polyline points="8 10 12 14 16 10"></polyline>
                             </svg>
                             Templates
                          </a>
                        </li>
                    </ul>

               </div>
          </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                      <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                      </div>
                </div>
          <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
               <div style="position:absolute;width:200%;height:200%;left:0; top:0">
               </div>
          </div>
          </div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Templates</h1>
          <div class="col-lg-3" >
               <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                           <span class="input-group-btn">
                                 <button class="btn btn-primary" type="button">Go!</button>
                           </span>
               </div>
          </div>
          </div>
          <form>
                <div class="form-group">
                     <label for="exampleFormControlInput1">To</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                     <label for="exampleFormControl1">Subject</label>
                     <input type="text" class="form-control" id="exampleFormControl1" placeholder="subject">
    
                </div>
                <div style="margin-bottom: 2%;">
                     <a class="btn btn-primary" href="/templates" role="button">+ Templates</a>
                     <a class="btn btn-success" href="#" role="button">Save as New</a>
  
                     <div class="form-group">
                          <label for="exampleFormControl1">Content</label>
                          <textarea class="form-control" rows="7"></textarea>
                     </div>
                <a class="btn btn-secondary" href="#" role="button">Submit</a>
          </form>
    </main>
@endsection