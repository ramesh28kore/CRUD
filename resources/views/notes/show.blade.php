@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-16">
                <div class="card-header">
                    {{$note->title}}
                <a href="{{route('notes.index')}} " class="btn btn-link" float-right>Back</a>
                </div>
                <div class="card-body">
                  {{$note->description}}
                </div>

         </div>

     </div>
 </div>
@endsection