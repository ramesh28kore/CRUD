@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-16">
                <div class="card-header">
                    Notes
                </div>
                <div class="card-body">
                    <table class="table">
                        <th>Title</th>
                        <th>Description</th>
                        <th colspan="3">Action</th>
                      @foreach($notes as $note)
                        <tr>
                        <td>{{$note->title}}</td>
                        <td>{{$note->description}}</td>
                        <td><a href="{{route('notes.show',[$note])}}" class="btn btn-link">Show</a>
                       <a href="" class="btn btn-link">Edit</a>
                        <a href="{{route(notes.delete)}}" class="btn btn-link">Delete</a></td>
                        </tr>
                     @endforeach
                    </table>
                    {{$notes->links()}}
                </div>

         </div>

     </div>
 </div>
@endsection