@extends('layout.master')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Links list</h6>
    </div>
    <div class="card-body">
         <form method="POST" action="{{ route('saveTheLink') }}">
            @csrf
            <div class="input-group mb-3">
              <input type="text" name="link" class="form-control" placeholder="Enter URL" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-success" type="submit">Generate Link</button>
              </div>
            </div>
        </form>
    </div>
</div>

@endsection