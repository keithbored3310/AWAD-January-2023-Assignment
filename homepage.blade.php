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

.topnav {
  overflow: hidden;
  background-color: #ffffe0;
}

.topnav a {
  float: left;
  color: black;
  text-align: right;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #fff44f;
  color: black;
}

.topnav a.active {
  background-color: #FFFF00;
  color: black;
}

.topnav a.right {
	float: right;
}

		/* Style the side navigation bar */
  .sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 60px; /* set top position to account for the height of the top navigation bar */
    left: 0;
    background-color: #ffffe0;
    overflow-x: hidden;
    padding-top: 20px;
    overflow-y: scroll; /*This one is to enable scroll ability*/
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

<div class="topnav">
  <a class="active" href="#home"><i class="material-icons">home</i>Home</a>
  <a href="menu"><i class="material-icons">menu</i>Menu</a>
  <a href="activity"><i class="material-icons">manage_search</i>Activity</a>
  <a href="account"><i class="material-icons">man</i>Account</a>
  <a class="right" href="#cart"><i class="material-icons">shopping_cart</i>Cart</a>
</div>

<div class="fixed-div" style="margin-left:200px; padding:20px;" onclick="location.href='http://www.example.com';">
		<img src="image.jpg" alt="Image">
</div>


</body>
</html>
