@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger mb-3 mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.records.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="creation_date" class="form-label">creation_date</label>
                <input type="date" class="form-control" id="creation_date" name="creation_date"
                    value="{{ old('creation_date') }}">
            </div>
            <div class="mb-3">
                <label for="record_description" class="form-label">record_description</label>
                <textarea class="form-control" id="record_description" rows="3" name="record_description">{{ old('record_description') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="completed" class="form-label">is completed?</label>
                <select name="completed" id="completed">
                    <option value="" {{ old('completed') == null ? 'selected' : '' }}>choose</option>
                    <option value="1" {{ old('completed') == '1' ? 'selected' : '' }}>yes</option>
                    <option value="0" {{ old('completed') == '0' ? 'selected' : '' }}>no</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">add</button>
        </form>
    </div>
@endsection
