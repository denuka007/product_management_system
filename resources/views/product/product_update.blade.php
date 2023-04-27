@extends('product.product_master')

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('product.updatedone', $pro->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="form-outline mb-4">
                                <input type="text" id="name" name="name" class="form-control"
                                    value="{{ $pro->name }}" required />
                                <label class="form-label" for="form4Example1">Name</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="text" id="description" name="description" class="form-control"
                                    value="{{ $pro->description }}" required />
                                <label class="form-label" for="form4Example3">Description</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="number" id="price" name="price" class="form-control"
                                    value="{{ $pro->price }}" required />
                                <label class="form-label" for="form4Example1">Price</label>
                            </div>

                            <img src="{{ asset('assets/uploads/' . $pro->image) }}" style="width: 60px; height: 60px" />
                            <div class="form-outline mb-4">
                                <input type="file" id="image" name="image" class="form-control" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
