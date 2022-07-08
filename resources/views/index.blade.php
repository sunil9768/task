@extends('layouts.app')

@section('content')

  
<div class="container">
    
   
    <a href="/userlogin/create"><button class="btn btn-primary">Add New</button></a>


 <table class="table table-striped" style="margin-top:5px; ">
        <tr >
            
            <td>S.No</td>
            <td>First Name</td>
             <td>Last Name</td>
              <td>Age</td>
              <td>Address</td>
            
              <td colspan="2">Action</td>
        </tr>

         

       @foreach($a as $value)


        <tr>
                  <td>{{$loop->iteration}}</td>
             <td>{{$value->firstname}}</td>
             <td>{{$value->lastname}}</td>
                 <td>{{$value->age}}</td>
                     <td>{{$value->UserDetails->pluck('address')->implode(',')}}</td>
                     <td>
                     <form action="/userlogin/{{$value->id}}" method="post">
                        @csrf
                        @method('delete')

                        
                         <button type="submit">Delete</button>

                     </form>
                       <a href="/userlogin/{{$value->id}}/edit">Edit</a>
                     </td>
                   
            
            
       </tr>
       @endforeach

   


    </table>
 </div>



@endsection

