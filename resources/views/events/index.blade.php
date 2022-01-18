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
            <h1 class="display-1">Event Log Report - in 18Jan22 2:04</h1>

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
            {{-- HEADER --}}
            {{-- ============================================================ --}}
            @if(session()->get('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif

            {{-- ============================================================ --}}
            {{-- CREATE BUTTON --}}
            {{-- ============================================================ --}}
            {{-- <div><a style="margin: 0px;" href="{{ route('events.create')}}" class="btn btn-primary">New data</a></div><br> --}}
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
            <td>{{$event->rowid}}</td>
            <td>{{$event->functionName}}
            <td>{{$event->description}}</td>
            <td>{{$event->createby}}</td>
            <td>{{$event->createdate}}</td>
            <td>{{$event->createtime}}</td>
             {{-- <td>
                <a href="{{ route('events.edit',$event->id)}}" class="btn btn-primary">Edit</a>
            </td> --}}
            <td>
                {{-- <form action="{{ route('events.destroy', $event->id)}}" method="post"> --}}
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
