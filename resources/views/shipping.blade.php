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
            <h1 class="display-1">Error Log Report</h1>

            {{-- ============================================================ --}}
            {{-- FILTER AND BUTTON --}}
            {{-- ============================================================ --}}
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
                {{-- @csrf --}}
            {{-- ============================================================ --}}
            {{-- SEARCH PARAMETER --}}
            {{-- ============================================================ --}}
                   <label for="pdsNum">PDS Number</label>
                   <input type="text" id="pdsNum" name="pdsNum" class="form-control" required="">
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

                    {{-- @foreach ($contacts as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->first_name}} {{$contact->last_name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->job_title}}</td>
            <td>{{$contact->city}}</td>
            <td>{{$contact->country}}</td>
            <td>
                <a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach --}}
                </tbody>
            </table>
            <div>
            </div>
        @endsection
