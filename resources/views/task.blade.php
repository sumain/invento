@extends('layout.master')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Links list</h6>
    </div>
    <div class="card-body">
		<div><h4>Task 1:</h4>
		Q:{{$var}}<br>
        
		A:{{$pair}}
		</div>
		
    </div>
</div>

@endsection