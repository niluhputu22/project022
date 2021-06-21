@extends('template')

@section('content')
<div class="container">
    <h2>Input Category</h2>
    <form action="{{route('category.save')}}" method="post">
        @csrf
    <div class="form-group">
        <label>Name</label>
    <input type="text" name="name" class="form-control">
    </div>
<input type="submit" name="submit" value="Save Data" class="btn btn-primary">
<a href="{{ route('category.index') }}" class="btn btn-secondary">Cancel</a>
</form>
</div>
@endsection
