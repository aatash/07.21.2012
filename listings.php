<?php
	require_once('function.php');
	$listings = DB::query("SELECT * from projects WHERE 1 ORDER BY id DESC"); ?>
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<link rel=StyleSheet href="lib/css/bootstrap.css" type="text/css" media=screen>
	<link rel=StyleSheet href="lib/css/style.css" type="text/css" media=screen>

	<script type="text/javascript" src="functions.js"></script>
	<script type="text/javascript">

	function makeGold(img) {
		img.src = "lib/img/star-gold.gif"
	}

	</script>

	<title>Project Listings</title>

</header>
<body>
<div class="container">
<div id="header">
	<div class="logo"><a href="index.html">
		<h1> Project Wing </h1>
	</a></div>
	<div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <button type="button"class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active">
                <a href="./listings.html">Browse</a>
              </li>
              <li class="">
                <a href="./createproject.html">Create</a>
              </li>
          </ul>
          <ul class="nav pull-right">
             
             <li>
                <a href="./login.html">Login</a>
              </li>
              <li>
                <a href="./signup.html">Signup</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</div>



<div id="content-sidebar" class="span12 container">
	<div class="pagination">
  <ul>
    <li><a href="#">Prev</a></li>
    <li class="active">
      <a href="#">1</a>
    </li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">Next</a></li>
  </ul>
</div>
<div id="content" class="span8">
<div class="row">
<div class="span8">
</div>
</div>

<?php
foreach($listings as $listing) {

?>
<div class="row">
<div class="listing span8">
	<div class="row">
		<div class="title span7"><a href=""><?=$listing['projectname'];?></a></div>
		<div class="span1 last">
			<img id="change-star" class="star" onclick="makeGold(this)" src="lib/img/star-gray.gif" width=30px>		</div>
	</div>
	<div class="row">
		<span class="italic">
		<div class="collaborators span8 last"><?=$listing['collaborators']?></div>
		</span>
	</div>
	<div class="row">
		<div class="description span8 last"><?=$listing['projectdesc']?>
		</div>
	</div>
	<div class="row">
		<div class="types span8 last">
			<span class="bold">Type: </span>
			<? $x = explode(',',$listing['projecttype']); foreach($x as $xs) { ?><a href=""><?=$xs;?></a> <? } ?>
		</div>
	</div>
	<div class="row">
		<div class="skills span8 last">
			<span class="bold">Help Needed With: </span>
			<? $x = explode(',',$listing['skills']); foreach($x as $xs) { ?><a href=""><?=$xs;?></a><? } ?>
		</div>
	</div>
	<div class="row">
		<div class="timeline span8 last"><span class="bold">Timeline: </span><?=$listing['timeframe'];?></div>
		<a id="readmore" class="span8 last" href="">Learn more...</a>
	</div>
</div>
</div>
<? } ?>

<div class="listing span8">
	<div class="row">
		<div class="title span7"><a href="project-detail.html">Develop a web site to connect people working on projects with people who want to help.</a></div>
		<div class="span1 last">
			<img id="change-star" class="star" onclick="makeGold(this)" src="lib/img/star-gray.gif" width=30px>		</div>
	</div>
	<div class="row">
		<div class="collaborators span8 last">
			<span class="italic">
			Dexter Zhuang, Edward Wang, Aatash Parikh
		</span>
	</div>
	</div>
	<div class="row">
		<div class="description span8 last">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut...
		</div>
	</div>
	<div class="row">
		<div class="types span8 last">
			<span class="bold">Type: </span>
			<a href="">Social Good</a><a href="">Paid Extravagantly</a>
		</div>
	</div>
	<div class="row">
		<div class="skills span8 last">
			<span class="bold">Help Needed With: </span>
			<a href="">Web Design</a><a href="">Marketing</a></div>
	</div>
	<div class="row">
		<div class="timeline span8 last"><span class="bold">Timeline: </span>May 2012-July 2012</div>
		<a id="readmore" class="span8 last" href="project-detail.html">Learn more...</a>
	</div>
</div>
</div>


</div>

<div id="sidebar" class="span3">
	<div class="listing">
		<div class="title">Filter results</div>

		<h3>By skill:</h3>
		<input class="span2" placeholder="E.g.: web design"></input>

		<h3>By type:</h3>
		<input class="span2" placeholder="E.g.: social good"></input>

	</div>
</div>
</div>

</div>
</body>

  <footer class="footer">
  	<div class="container">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>Built by the Project Wing Team</p>
    </div>
  </footer>
</html>


