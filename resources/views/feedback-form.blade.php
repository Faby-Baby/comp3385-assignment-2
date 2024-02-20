@extends('layouts.app')

@section('content')
<h1> Feedback Form</h1>
<br>
<form action="">
    @csrf

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="mb-3">
        <label for="username" class="form-label">Full Name <span class="text-danger">(Required)</span></label>
        <input type="text" class="form-control" name="username" id="username">
    </div> 
    
    <div class="mb-3">
        <label for="email" class="form-label">Email <span class="text-danger">(Required)</span></label>
        <input type="email" class="form-control" name="email" id="email">
    </div>
    
    <div class="mb-3">
        <label for="comments" class="form-label">Comments <span class="text-danger">(Required)</span></label>
        <input type="text" class="form-control" name="comments" id="comments">
        <p class="form-text fw-semibold">Let us know what you think of our website.</p>
    </div>
    
    <div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    
</form>
@endsection