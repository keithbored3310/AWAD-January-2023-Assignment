@extends('layouts.app')
@section('title', 'Menu')
@section('content')
<div class="container-fluid">
  <!-- Page Heading -->
 
  <div class="d-sm-flex align-items-center justify-content-between mb-4 border-bottom">
    <h1 class="h3 mb-0 text-gray-800">Menu</h1>
  </div>
  <!-- the menu item (grid card) -->
  <div class="p-5">
    <div class="row mb-5">
      @foreach($menu as $item)
      <div class="col mb-5 clickable" data-itemid="{{$item->id}}">
        <div class="card shadow-lg" style="width: 18rem;border-radius: 15px;" data-toggle="modal" data-target="#itemModal{{$item->id}}">
          <div class="card-body">
            <h5 class="card-title">{{$item->name}}</h5>
            <p class="card-text">{{$item->description}}</p>
            <p class="card-text float-right font-weight-bold"> RM {{$item->price}}</p>
          </div>
        </div>
      </div>


      <!-- popout modal -->
      <div class="modal fade" id="itemModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="itemModalLabel{{$item->id}}" aria-hidden="true" >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="itemModalLabel{{$item->id}}">{{$item->name}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="mb-2">
              <img class="card-img-top" src="{{ asset('images/'.$item->id.'.jpg') }}" alt="Card image cap">
              </div>
              <div class="float-right font-weight-bold" > RM <span id="price{{$item->id}}">{{$item->price}}</span></div>
              <div class="mt-5">
                Description: {{$item->description}}
              </div>
              <div class="float-right inline">
                <button class="btn" id="up{{$item->id}}">
                  <i class="fa fa-chevron-up"></i>
                </button>
                <div class="bg-light text-center" id="quant{{$item->id}}">0</div>
                <button class="btn" id="down{{$item->id}}">
                  <i class="fa fa-chevron-down"></i>
                </button>
              </div>
            </div>
            <div class="modal-footer">
              <div class="font-weight-bold mr-auto">Total : <span id="total{{$item->id}}">0.00</span> </div>
              <form action="{{route('addToCart')}}" method="post" >
                @csrf
                <input type="hidden" name="quantity" id="post_quant{{$item->id}}" value="0">
                <input type="hidden" name="item_id" value="{{$item->id}}">
                <input type='submit' class="btn btn-primary" value="Add to Cart">
              </form>

            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
@section("scripts")
<script type="application/javascript">
  $(document).ready(function() {
    // used saved item variable in to javascript variable one the card is clicked
    $(".clickable").click(function(){
      var itemID=$(this).data("itemid");
      var price=parseFloat($("#price"+itemID).html());
      var total=parseFloat($("#total"+itemID).html());
      var quant=parseFloat($("#quant"+itemID).html());
      console.log("itemID:"+itemID,"price:"+price,"total:"+total,"quantity:"+quant);
      //the add quantity button
      $("#up"+itemID).click(function(){
        total+=price;
        quant+=1;
        $("#total"+itemID).html(total.toFixed(2));
        $("#quant"+itemID).html(quant);
        $("#post_quant"+itemID).val(quant);
      })
      //the minus quantity button
      $("#down"+itemID).click(function(){
        if(total!=0){
          total-=price;
          quant-=1;
        $("#total"+itemID).html(total.toFixed(2));
        $("#quant"+itemID).html(quant);
        $("#post_quant"+itemID).val(quant);
        }
      })
    });
  })
</script>
@endsection
