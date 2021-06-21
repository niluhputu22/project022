@extends('template')
@section('content')
    <div class="container">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title">Data Category</h4>

                <a href="{{ route('category.add') }}" class="btn btn-outline-info">Add Category</a>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>HAPUS</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection