<?php
/*
Author name: Nadeem
E-mail ID:   nadeem566sourceus@gmail.com
Date:        2/1/18
*/
/////////////////////////////////////////////////////////
//include_once("variables.php");
//include_once("checkLoginStatus.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Seeker</title>
    <?php include_once("stylesAndFont.php"); ?>
</head>
<body>
  	<!-- Left bar starts -->
     <div class="left-bar">
      <div class="image1">
        <img src="images/dcentmass_png.png" class="img-fluid">
      </div>
      <ul>
        <!-- User class="activeLink" to make links active -->
        <li class="activeLink"><a href="#"><i class="material-icons">home</i><span class="menuText">Home</span></a></li>
        <li><a href="#"><i class="material-icons">language</i><span class="menuText">DCent MASS</span></a></li>
        <li><a href="#"><i class="material-icons">settings_applications</i><span class="menuText">Our Services</span></a></li>
        <li><a href="#"><i class="material-icons">group_work</i><span class="menuText">Student Hub</span></a></li>
        <li><a href="#"><i class="material-icons">library_books</i><span class="menuText">Courses</span></a></li>
        <li><a href="#"><i class="material-icons">event</i><span class="menuText">Events</span></a></li>
        <li><a href="#"><i class="material-icons">perm_media</i><span class="menuText">Media</span></a></li>
        <!-- <li><a href="#">Forum</a></li> -->
        <li><a href="#"><i class="material-icons">contacts</i><span class="menuText">Contact Us</span></a></li>
        <!-- <li style="border-bottom:  2px solid #06f;"><a href="#"></a></li> -->
        <!-- <li style="border-bottom: 2px solid #06f;"><a href="#">FAQs</a></li> -->
      </ul>
     </div>
     <!-- Left bar ends -->
<!-- Mobile bar starts here -->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <ul> <!-- User class="activeLink" to make links active -->
        <li><a href="#">Home</a></li>
        <li><a href="#">DCent MASS</a></li>
        <li><a href="#">Our Services</a></li>
        <li><a href="#">Student Hub</a></li>
        <li><a href="#">Courses</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Media</a></li>
        <!-- <li><a href="#">Forum</a></li> -->
        <li style="border-bottom:  2px solid #06f;"><a href="#">Contact Us</a></li>
        <!-- <li style="border-bottom:  2px solid #06f;"><a href="#">FAQs</a></li> -->
  </ul>
</div>

<span id="openNavID" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<!-- Mobile bar ends here -->
     <!-- Right bar starts -->
     <div class="right-bars">
     	<div class="righ-col-1"> <!-- User class="activeLink" to make links active -->
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 1</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 2</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 3</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 4</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 5</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 6</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 7</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 8</span></div></a>
         
      </div>
     	<div class="righ-col-2"> <!-- User class="activeLink" to make links active -->
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 9</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 10</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 11</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 12</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 13</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 14</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 15</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 16</span></div></a>
     	</div>
     </div>
     
<div class="mainContainer" id="mainContainer">  <!-- DO NOT REMOVE THIS -->
	<div class="container-fluid">
<!-- MAIN CONTENT STARTS -->
<!-- <span class="bgtext">Template</span> -->
<div class="jumbotron jumbotron-fluid" style="margin-top: 10px; background-image:url(../DCentMASS/images/maktum/online2.png); ">
  <div class="container">
    <center><h2>Find Your Dream Job </h2></center>
  </div>
</div>



<!-- WRITE MAIN CONTENT HERE -->
<div class="container-fluid">
<hr>
<!-- <div id="form-wrapper">
<button class="go-button">Go</button>
<span class="nav-list">
  <span class="current-selection">
  </span>
  <span class="arrow"></span>
    <select id="dropdown">
    <option value="books-and-ebooks">Books & eBooks</option>
    <option value="audiobooks">Audiobooks</option>
    <option value="dvds">DVDs</option>
    <option value="other-resources">Other Resources</option>
    <option value="random">Random</option>
  </select>
</span>
  <div class="in-wrap">
    <input type="text" name="q" id="search-box">
  </div>
</div>
</div> -->
<form class="form-inline my-2 my-lg-0">
<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
<div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Location/Locality
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
<div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Experience
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
<div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Salary
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
<center>
<h3> OR </h3>

<button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
  Upload Resume
</button>
<button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
  Upload Picture
</button>
<button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
  Submit
</button>
</center>
<hr>
</div>

<div class="jumbotron jumbotron-fluid" style="margin-top: 10px; background-image:url(../DCentMASS/images/maktum/online2.png); ">
  <div class="container">
    <center><h2> Dream Job </h2></center>
  </div>
</div>

<div class="container-fluid">

<div class="row">
<div class="col-md-8">
<span class="para">
1. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati soluta nemo praesentium magnam, asperiores, quae natus ipsum nisi incidunt, maxime sapiente consequuntur nihil. Nam quas incidunt nulla delectus aut odio.
</span>
</div>
<div class="col-md-4">
<img src="images/nad-jb1.jpg" class="img-fluid">
</div>
</div>

<div class="row">
<div class="col-md-8">
<span class="para">
2. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati soluta nemo praesentium magnam, asperiores, quae natus ipsum nisi incidunt, maxime sapiente consequuntur nihil. Nam quas incidunt nulla delectus aut odio.
</span>
</div>
<div class="col-md-4">
<img src="images/nad-jb2.jpg" class="img-fluid">
</div>
</div>

<div class="row">
<div class="col-md-8">
<span class="para">
3. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati soluta nemo praesentium magnam, asperiores, quae natus ipsum nisi incidunt, maxime sapiente consequuntur nihil. Nam quas incidunt nulla delectus aut odio.
</span>
</div>
<div class="col-md-4">
<img src="images/nad-jb3.jpg" class="img-fluid">
</div>
</div>

</div>

<!-- NOTE: Please keep your code clean + readable and add comments -->





<!-- MAIN CONTENT ENDS -->
	</div>
</div>
<?php include_once("script.php"); ?>
</body>
</html>
