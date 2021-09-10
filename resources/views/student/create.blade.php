@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">student sukurimas</div>

               <div class="card-body">
                <form method="POST" action="{{route('student.store')}}">

 
                    <div class="form-group">
                        <label>name</label>
                        <input type="text" name="grade"  class="form-control">
                        {{-- <small class="form-text text-muted">name</small> --}}
                    </div>
                    <div class="form-group">
                        <label>surname</label>
                        <input type="text" name="letter"  class="form-control">
                        {{-- <small class="form-text text-muted">surname</small> --}}
                    </div>
                    <div class="form-group">
                        <label>school class id</label>
                        <input type="text" name="letter"  class="form-control">
                        {{-- <small class="form-text text-muted">school class id</small> --}}
                    </div>


                    @csrf
                    <button class="btn btn-primary" type="submit">ADD</button>
                 </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection