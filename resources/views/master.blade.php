@extends('layouts.app')
@section('title', 'menuMaster')
@section('content')
<div class="container-fluid">
      <!-- Page Heading -->
 
  <div class="d-sm-flex align-items-center justify-content-between mb-4 border-bottom">
    <h1 class="h3 mb-0 text-gray-800">Menu List</h1>
  </div>
</div>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div><a href="{{ route('menu.create') }}" class="btn btn-primary float-right">Add Menu Item</a></div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menuItems as $menuItem)
                                    <tr>
                                        <td>{{ $menuItem->id }}</td>
                                        <td>{{ $menuItem->name }}</td>
                                        <td>{{ $menuItem->description }}</td>
                                        <td>{{ $menuItem->category_id }}</td>
                                        <td>{{ $menuItem->price }}</td>
                                        <td>{{ $menuItem->quantity }}</td>
                                        <td>
                                        <a href="{{ route('menu.editMenu', $menuItem) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('menu.destroy', $menuItem) }}" method="post" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this menu item?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection