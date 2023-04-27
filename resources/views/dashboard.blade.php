@extends('product.product_master')

@section('content')
    <div class="row">
        <div class="col-6 d-flex justify-content-end">
            <button type="button" class="btn btn-primary mb-4" data-mdb-toggle="modal" data-mdb-target="#exampleModal">Add
                Product</button>
        </div>
        <div class="col-6 d-flex justify-content-start">
            <a href="{{ route('prodcut.view') }}" class="btn btn-success mb-4">View Product</a>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('product.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-outline mb-4">
                            <input type="text" id="name" name="name" class="form-control" required />
                            <label class="form-label" for="form4Example1">Name</label>
                        </div>

                        <span style="color: red">
                            @error('description')
                                {{ $message }}
                            @enderror
                        </span>
                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                            <label class="form-label" for="form4Example3">Description</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="number" id="price" name="price" class="form-control" required />
                            <label class="form-label" for="form4Example1">Price</label>
                        </div>

                        <label class="form-label" for="form4Example1">image</label>
                        <div class="form-outline mb-4">
                            <input type="file" id="image" name="image" class="form-control" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
@endsection
