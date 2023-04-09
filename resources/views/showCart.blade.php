@extends('layouts.app')
@section('title', 'Cart')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 border-bottom">
        <h1 class="h3 mb-0 text-gray-800">Cart</h1>
    </div>

    <!-- cart item card -->
    <div class="mb-3">
        <div class="mb-3" data-itemid="">
            <div class="card shadow" style="border-radius: 15px;">
                <div class="row ">
                    <div class="col-md-4">
                        <img src="your-image.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">Drink Name</h5>
                                </div>
                                <div class="col" data-toggle="modal" data-target="#cartModal">
                                    <i class="fas fa-edit float-right" style="font-size: 24px;"></i>
                                </div>
                            </div>
                            <p class="card-text">Qty</p>
                            <p class="card-text">Price</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3" data-itemid="">
            <div class="card shadow" style="border-radius: 15px;">
                <div class="row ">
                    <div class="col-md-4">
                        <img src="your-image.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">Drink Name</h5>
                                </div>
                                <div class="col" data-toggle="modal" data-target="#cartModal">
                                    <i class="fas fa-edit float-right" style="font-size: 24px;"></i>
                                </div>
                            </div>
                            <p class="card-text">Qty</p>
                            <p class="card-text">Price</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3" data-itemid="">
            <div class="card shadow" style="border-radius: 15px;">
                <div class="row ">
                    <div class="col-md-4">
                        <img src="your-image.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">Drink Name</h5>
                                </div>
                                <div class="col" data-toggle="modal" data-target="#cartModal">
                                    <i class="fas fa-edit float-right" style="font-size: 24px;"></i>
                                </div>
                            </div>
                            <p class="card-text">Qty</p>
                            <p class="card-text">Price</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <h3 class="text-right mb-3">Total : 0.00</h3>
    <hr>
    <form action="" method="post">
        <div class="text-right">
            <input class="btn btn-primary mb-3" type="submit" value="Proceed Order">
        </div>
    </form>

    <!-- popout modal -->
    <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="cartModalLabel">Drink Name</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="mb-2">
                <img class="card-img-top" src="" alt="Card image cap">
              </div>
              <div class="float-right font-weight-bold"> RM <span id="price">0.00</span></div>
              <div class="mt-5">
                Description:
              </div>
              <div class="float-right inline">
                <button class="btn" id="up">
                  <i class="fa fa-chevron-up"></i>
                </button>
                <div class="bg-light text-center" id="quant">
                 0
                </div>
                <button class="btn" id="down">
                  <i class="fa fa-chevron-down"></i>
                </button>
              </div>
            </div>
            <div class="modal-footer">
              <div class="font-weight-bold mr-auto">Total : <span id="total">0.00</span> </div>
              <form action="{{route('addToCart',['id'=>auth()->user()->id]) }}" method="post">
                @csrf
                <input type="hidden" name="quantity" id="post_quant" value="0">
                <input type="hidden" name="item_id" value="">
                <input type='submit' class="btn btn-primary" value="Update Cart">
              </form>

            </div>
          </div>
        </div>
      </div>
  
</div>
@endsection