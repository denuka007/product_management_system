@extends('product.product_master')

@section('content')
    <div class="table-responsive">
        <table class="table table-hover table-info ">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach ($products as $pro)
                <tbody>
                    <tr>
                        <td>{{ $pro->name }}</td>
                        <td>{{ $pro->description }}</td>
                        <td>{{ $pro->price }}</td>
                        <td>
                            <img src="{{ asset('assets/uploads/' . $pro->image) }}" style="width: 60px; height: 60px" />
                        </td>
                        <td>
                            <a href="{{ route('product.update', $pro->id) }}" class="btn btn-primary btn-sm">UPDATE</a>
                            <a href="{{ route('product.delete', $pro->id) }}" class="btn btn-danger btn-sm">DELETE</a>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
