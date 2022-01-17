{{-- ============================================================ --}}
{{-- LAYOUT BOOTSTRAP --}}
{{-- ============================================================ --}}
@extends('layout')

{{-- ============================================================ --}}
{{-- MAIN IN LAYOUT FILE --}}
{{-- ============================================================ --}}

@section('main')
    <div class="row">
        <div class="col-sm-12">
            {{-- ============================================================ --}}
            {{-- HEADER --}}
            {{-- ============================================================ --}}
            <h1 class="display-1">Error Log Report - in Error</h1>

            {{-- ============================================================ --}}
            {{-- FILTER AND BUTTON --}}
            {{-- ============================================================ --}}
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
                {{-- @csrf --}}
            {{-- ============================================================ --}}
            {{-- SEARCH PARAMETER --}}
            {{-- ============================================================ --}}
                   <label for="pdsNum">PDS Number</label>
                   <input type="text" id="pdsNum" name="pdsNum" class="form-control" required=""><br>
            {{-- ============================================================ --}}
            {{-- BUTTON --}}
            {{-- ============================================================ --}}
                 <button type="submit" class="btn btn-primary">Search</button><br><br>
            </form>

            {{-- ============================================================ --}}
            {{-- TABLE --}}
            {{-- ============================================================ --}}
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Function Name</td>
                        <td>Message</td>
                        <td>Created by</td>
                        <td>Created Date</td>
                        <td>Created Time</td>
                        <td colspan=2>Actions</td>
                    </tr>
                </thead>
                <tbody>
{{-- ============================================================ --}}
{{-- ITEMS IN TABLES --}}
{{-- ============================================================ --}}

     @foreach ($events as $event)
        <tr>
            <td>{{$event->id}}</td>
            <td>{{$event->functionName}}
            <td>{{$event->message}}</td>
            <td>{{$event->createdBy}}</td>
            <td>{{$event->createdDate}}</td>
            <td>{{$event->createdTime}}</td>

             <td>
                <a href="{{ route('events.edit',$event->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('events.destroy', $event->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
                </tbody>
            </table>
            <div>
            </div>
        @endsection
