@extends('layouts.app')

@section('content')
    <div class="container">
        <ul class="list-unstyled">
            <li>title: {{$record->title}}</li>
            <li>creation date: {{$record->creation_date}}</li>
            <li>description: {{$record->record_description}}</li>
            <li>completed: {{$record->completed}}</li>
        </ul>
    </div>
@endsection