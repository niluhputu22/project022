@extends('template')

@section('content')
<div class="container">
    <h2>Input Product</h2>
    <form action="{{route('product.save')}}" method="post">
        @csrf
    <div class="form-group">
        <label>Name</label>
    <input type="text" name="name" class="form-control">
</div>
<div class="from-group">
    <label>Description</label>
    <textarea name="description" class="form-control"></textarea>
</div>
<div class="from-group">
    <label>Price</label>
    <input type="number" name="price" class="form-control">
</div>
<div class="from-group">
    <label>Category</label>
    <select name="category_id" class="form-control">
        <option value="1">Sembako</option>
        <option value="2">Alat Pembersih</option>
        <option value="3">Kendaraan</option>
    </select>
</div>
<input type="submit" name="submit" value="Save Data" class="btn btn-primary">
<a href="{{ route('product.index') }}" class="btn btn-secondary">Cancel</a>
</form>
</div>
@endsection
