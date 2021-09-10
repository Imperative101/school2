@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Studentu redagavimas</div>

               <div class="card-body">
                <form method="POST" action="{{route('student.update',$student)}}">

                    <div class="form-group">
                        <label>Klasė</label>
                        <input type="text" name="grade"  class="form-control" value="{{$student->name}}">
                        {{-- <small class="form-text text-muted">name.</small> --}}
                    </div>
                    <div class="form-group">
                        <label>Raidė</label>
                        <input type="text" name="letter"  class="form-control" value="{{$student->surname}}">
                        {{-- <small class="form-text text-muted">surname.</small> --}}
                    </div>
                    <div class="form-group">
                        <label>Raidė</label>
                        <input type="text" name="letter"  class="form-control" value="{{$student->school_class_id}}">
                        {{-- <small class="form-text text-muted">school class id.</small> --}}
                    </div>
                    @csrf
                    <button class="btn btn-success" type="submit">update</button>
                 </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection