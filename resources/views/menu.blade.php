<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #ffffe0;

}

.navbar a {
  float: left;
  color: black;
  text-align: right;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  
}

.navbar a:hover {
  background-color: #fff44f;
  color: black;
}

.navbar a.active {
  background-color: #FFFF00;
  color: black;
}

.navbar a.right {
	float: right;
}

.navbar-default .navbar-brand {
    color: #ffffe0;
}

.navbar-default .navbar-nav > li > a {
    color: #ffffe0;

}

		/* Style the side navigation bar */
  .sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 60px; /* set top position to account for the height of the top navigation bar */
    left: 0;
    bottom: 0;
    background-color: #ffffe0;
    overflow-x: hidden;
    padding-top: 20px;
    overflow-y: scroll; /*This one is to enable scroll ability*/
    z-index: 100;
    padding: 48px 0 0; /* Height of navbar */
    box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
  }

  .sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: black;
    display: block;
  }

  .sidenav a:hover {
    background-color: #fff44f;
    color: black;
  }
/*end of side nav bar*/

      /* Style the fixed div */
      .fixed-div {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #f1f1f1;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
        cursor: pointer;
      }

      .fixed-div:hover {
        box-shadow: 4px 4px 8px rgba(0,0,0,0.5);
      }

      /* Style the image */
      .fixed img {
        display: inline-block;
        font-size: 16px;
        font-weight: bold;
        margin: 0;
        vertical-align: middle;
      }

      /* Style the text */
      .fixed p {
        display: inline-block;
        font-size: 16px;
        font-weight: bold;
        margin: 0;
        vertical-align: middle;
      }

</style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top fixed-top">
  <div class="navbar">
    <a href="home"><i class="material-icons">home</i>Home</a>
    <a class="active" href="#menu"><i class="material-icons">menu</i>Menu</a>
    <a href="activity"><i class="material-icons">manage_search</i>Activity</a>
    <a href="account"><i class="material-icons">man</i>Account</a>
    <a class="right" href="#cart"><i class="material-icons">shopping_cart</i>Cart</a>
  </div>
</nav>

<div class="sidenav">
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
</div>

<div class="row">
    @foreach ($items as $item)
        <div class="col-md-4 mb-4">
            <div class="card h-100">

                <div class="card-body">
                    <h5 class="card-title">{{ $item->item_name }}</h5>
                    <p class="card-text">{{ $item->item_price }}</p>

                </div>
            </div>
        </div>
    @endforeach
</div>


</body>
</html>





