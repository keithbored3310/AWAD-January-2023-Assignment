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
      <div class=" col-sm-3 col-lg-2 mb-5">
        <div class="card shadow-lg" style="width: 18rem;border-radius: 15px;" data-toggle="modal" data-target="#itemModal" data-whatever="$datahere">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Drink</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class=" col-sm-3 col-lg-2 mb-5">
        <div class="card shadow-lg" style="width: 18rem;border-radius: 15px;" data-toggle="modal" data-target="#itemModal" data-whatever="$datahere">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Drink</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class=" col-sm-3 col-lg-2 mb-5">
        <div class="card shadow-lg" style="width: 18rem;border-radius: 15px;" data-toggle="modal" data-target="#itemModal" data-whatever="$datahere">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Drink</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="row mb-5">
      <div class="col mb-5">
        <div class="card shadow-lg" style="width: 18rem;border-radius: 15px;" data-toggle="modal" data-target="#itemModal" data-whatever="$datahere">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Drink</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col mb-5">
        <div class="card shadow-lg" style="width: 18rem;border-radius:  15px;" data-toggle="modal" data-target="#itemModal" data-whatever="$datahere">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Drink</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col mb-5">
        <div class="card shadow-lg" style="width: 18rem;border-radius: 15px;" data-toggle="modal" data-target="#itemModal" data-whatever="$datahere">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Drink</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div> -->
  </div>


  <!-- popout modal -->
  <div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="itemModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="itemModalLabel">Drink Name</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="mb-2">
            <img class="card-img-top" src="..." alt="Card image cap">
          </div>
          <div class="float-right font-weight-bold" >$$Single Price</div>
          <div class="mt-5 ">
            Discription:Some quick example text to build on the card title and make up the bulk of the card's content
          </div>
          <div class="float-right inline">
            <button class="btn" >
            <i class="fa fa-chevron-up"></i>
            </button >
            <div class="bg-light text-center">0</div>
            <button class="btn">
            <i class="fa fa-chevron-down"></i>
            </button>
          </div>
        </div>
        <div class="modal-footer">
          <div class="font-weight-bold mr-auto">Total : 0.00  </div>
          <button type="button" class="btn btn-primary">Add to Cart</button>
          
        </div>
      </div>
    </div>
  </div>
  <div>
    <script>
      // script for popout modal
      $('#itemModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        // modal.find('.modal-title').text('New message to ' + recipient)
        // modal.find('.modal-body input').val(recipient)
      })

      $()
    </script>


    @endsection