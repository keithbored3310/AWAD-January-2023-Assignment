@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add Menu Item</div>
                    <div class="card-body">
                        <form action="{{ route('menu.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" id="description" class="form-control" required>
                            </div>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <input type="text" name="category_id" id="category_id" class="form-control" required>
                            </div>
                            @error('category')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" name="price" id="price" class="form-control" required>
                            </div>
                            @error('price')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" name="quantity" id="quantity" class="form-control" required>
                            </div>
                            @error('quantity')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <label for="images">Image</label> <!-- updated input name to 'images' -->
                                <input type="file" name="images" id="images" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
