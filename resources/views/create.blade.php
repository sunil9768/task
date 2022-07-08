@extends('layouts.app')

@section('content')

  
 <!-- Start Container !-->
  <div class="container">
  
   @if(session('alert'))
     <div  class='alert alert-success'>{{session('alert')}} </div>
   @endif  

    
 <!-- Start Row Justiy !-->
 
<div class="row justify-content-center">
	 <!-- Start  Row  col-md-8  !-->
<div class="col-md-8">
	<!-- Start  Card  !-->
	<div class="card">
	<div class="card-header">User  Form</div>
<!-- Start  Card  Body !-->

	  <div class="card-body">
<form action="/userlogin" method="post">
	 @csrf
	   <div class="row mb-3">
                            <label for="firstname" class="col-md-4 col-form-label text-md-end">First Name</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control " name="firstname" value="" required autocomplete="firstname" autofocus>

                                                            </div>
                        </div>

                         <div class="row mb-3">
                            <label for="lastname" class="col-md-4 col-form-label text-md-end">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control " name="lastname" value="" required autocomplete="lastname" autofocus>

                                                            </div>
                        </div>





                         <div class="row mb-3">
                            <label for="age" class="col-md-4 col-form-label text-md-end">Age</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control " name="age" value="" required autocomplete="age" autofocus>

                                                            </div>
                        </div>



                      
<!--  -->
  
<div class="row">
    <div class="col-md-8">
 <div id="maindiv">
        <div id="childdiv-1">
           <label for="t1">   Address - 1</label>
 
            <textarea type="text" name="address[]" class="form-control"  id="t1"></textarea>
    
    
        
    
              <br>
     
                  
   

              </div>
             </div>
             </div>

             <div class="col-md-4">
                 <br>
                  <br><p onclick="addInput()" class="btn btn-primary">Add Option</p></div>

     </div>        

<input type="hidden"  class="form-control" value="1"  id="tot">
    

                          
<br>
	 <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>


</form>

<!-- End  Card  Body !-->
</div>

<!-- End  Card  !-->
</div>
<!-- Start  End  col-md-8  !-->
</div>
 <!-- End Row Justiy !-->
</div>
 <!-- End Container !-->
</div>



















   

@endsection
 
<script type="text/javascript">
      
function addInput(){

     tot.value=Number(tot.value)+1;
     divobj=document.createElement('div');
     divobj.setAttribute('id',"childdiv-"+tot.value);

     lblobj=document.createElement('label');
     lblobj.setAttribute('for',"t"+tot.value);
 

                    lblbr=document.createElement('br');
     lbltxt=document.createTextNode('Address - '+tot.value);
         lblobj.appendChild(lbltxt);
   
      
      

     divobj.appendChild(lblobj);
      divobj.appendChild(lblbr);

     inputobj=document.createElement('textarea');
     inputobj.setAttribute('id',"t"+tot.value);
      inputobj.setAttribute('name',"address[]");
       inputobj.setAttribute('class',"form-control");

   divobj.appendChild(inputobj);
   maindiv.appendChild(divobj);



}
</script>