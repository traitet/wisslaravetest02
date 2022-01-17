@extends('layout')

@section('main')
<div>
    <a style="margin: 19px;" href="{{ route('events.create')}}" class="btn btn-primary">New event</a>
    </div>
<div class="col-sm-12">

    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div>
    @endif
  </div>
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a event</h1>
  <div>
    @if ($events->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($events->all() as $event)
              <li>{{ $event }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    {{-- ===================================================================== --}}
    {{-- PARAMETERS --}}
    {{-- ===================================================================== --}}

      <form method="post" action="{{ route('events.store') }}">
          @csrf
          <div class="form-group">
              <label for="first_name">Function Name:</label>
              <input type="text" class="form-control" name="functionName"/>
          </div>

          <div class="form-group">
              <label for="last_name">Message:</label>
              <input type="text" class="form-control" name="message"/>
          </div>

          <div class="form-group">
              <label for="createdBy">Created By:</label>
              <input type="text" class="form-control" name="createdBy"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Add Data</button>
      </form>
  </div>
</div>
</div>
@endsection
