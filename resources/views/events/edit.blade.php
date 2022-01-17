@extends('layout')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-1">Update a Event</h1>

        @if ($events->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($events->all() as $event)
                <li>{{ $event }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('events.update', $event->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="functionName">Function Name:</label>
                <input type="text" class="form-control" name="functionName" value={{ $event->functionName }} />
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <input type="text" class="form-control" name="message" value={{ $event->message }} />
            </div>

            <div class="form-group">
                <label for="createdBy">Created by:</label>
                <input type="text" class="form-control" name="createdBy" value={{ $event->createdBy }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
