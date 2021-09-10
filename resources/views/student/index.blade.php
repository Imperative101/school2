@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Student create</div>

               <div class="card-body">
                 <table class="table">
                   <tr>
                     <th>name</th>
                     <th>surname</th>
                     <th>id</th>
                     <th>edit</th>
                     <th>delete</th>
                   </tr>
                  @foreach ($students as $student)
                    <tr>
                      <td>{!!$student->grade!!}</td>
                      <td>{!!$student->letter!!}</td>
                      <td><a class="btn btn-success" href="{{route('student$student.show',[$student])}}">užeiti</a></td>
                      <td><a class="btn btn-primary" href="{{route('student$student.edit',[$student])}}">edit</a></td>
                      <td>
                        <form method="POST" action="{{route('student$student.destroy', $student)}}">
                          @csrf
                          <button class="btn btn-danger" type="submit">DELETE</button>
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