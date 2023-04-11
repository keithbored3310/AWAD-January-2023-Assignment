@extends('layouts.app')
@section('title', 'editMenu')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Menu Item</div>
                    <div class="card-body">
                    <form method="POST" action="{{ route('menu.update', $menu->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $menu->name }}" required>
                            </div>
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" id="description" class="form-control" value="{{ $menu->description }}" required>
                            </div>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                            <label for="category_id">Category</label>
                            <input type="text" name="category_id" id="category_id" class="form-control" value="{{ $menu->category_id }}" required>
                        </div>
                        @error('category')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price" class="form-control" value="{{ $menu->price }}" required>
                        </div>
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $menu->quantity }}" required>
                        </div>
                        @error('quantity')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection