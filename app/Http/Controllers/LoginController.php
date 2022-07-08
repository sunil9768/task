<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loginuser;
use App\Models\Addressuser;
 use DB;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
         $a=Loginuser::with('UserDetails')->get();
  
        
        return view('index',compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {           
            
                     $address1=$request->input('address');

                             
                      
                        $data=new Loginuser();
                        $data->firstname=$request->firstname;
                   
                          $data->lastname=$request->lastname;
                            $data->age=$request->age;
                       

                           

                       
                                // dd($data);
                                if($data->save())
                                {
                                    // echo "<pre>";
                                    //  print_r($address1);
                                    
                                       
                                     foreach($address1 as $adrs)
                                     {  

                             $lastid=$data->id;
                                   $info=new Addressuser();
           
                                     $info->Loginuser_id=$lastid;

                                         $info->address=$adrs;

                                        
                                       $info->save();



                                          
                                     }

                                }
         
        return redirect('userlogin')->with('alert', 'Successfully Insert Data');

                     
                        

                        

 



    


 


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Loginuser::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $datadelete=Loginuser::find($id);
          $datadelete->UserDetails()->delete();
          $datadelete->delete();
          return redirect('userlogin');


    }
}
