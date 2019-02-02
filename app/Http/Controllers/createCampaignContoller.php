<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


class createCampaignContoller extends Controller
{   
    public function index()
        {
           $allcampaignparameters = \App\createtemplates::all();
           return view('/campaign')->with('allcampaignparameters',$allcampaignparameters);
        }
    
    public function store(Request $request){

        $this->validate($request,[
            'email' => 'required',
            'Subject' => 'required',
        'content' => 'required']
        );
        
        $createtemplates= new \App\createtemplates([
            'email' => $request->get('email'),
            'Subject' => $request->get('Subject'),
            'content' => $request->get('content')
        ]);
        $createtemplates->save();
      
    return redirect('/campaign');
    }
}
