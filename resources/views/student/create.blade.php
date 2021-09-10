@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">School class sukurimas</div>

               <div class="card-body">
                <form method="POST" action="{{route('schoolClass.store')}}">

 
                    <div class="form-group">
                        <label>Klasė</label>
                        <input type="text" name="grade"  class="form-control">
                        {{-- <small class="form-text text-muted">Class number</small> --}}
                    </div>
                    <div class="form-group">
                        <label>Raidė</label>
                        <input type="text" name="letter"  class="form-control">
                        {{-- <small class="form-text text-muted">letters</small> --}}
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