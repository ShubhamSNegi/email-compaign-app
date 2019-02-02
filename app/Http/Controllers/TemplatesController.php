<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Template;
class TemplatesController extends Controller
{
 
     public function index()
     {
       $alltemplatesparameters = \App\Template::all();
        return view('/templates')->with('alltemplatesparameters',$alltemplatesparameters);
    }

    public function create()
        {
          return view('/createTemplate');  
        }
    public function store(Request $request){

        $this->validate($request,[
            'Subject' => 'required',
        'content' => 'required']
        );
        
        $Templates= new \App\Template([
            'Subject' => $request->get('Subject'),
            'content' => $request->get('content')
        ]);
        $Templates->save();
      
    return redirect('/templates');
    }
}
