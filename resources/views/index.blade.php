@extends('layouts.app')

@section('content')

  
<div class="container">
   
   <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}<br><br>

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

                        
                         <button class="btn btn-success" type="submit">Delete</button>

                     </form>
                      
                     </td>
                   
            
            
       </tr>
       @endforeach

   


    </table>
                </div>
            </div>
        </div>
    </div>
 </div>



@endsection

