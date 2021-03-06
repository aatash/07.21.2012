<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <link rel=StyleSheet href="lib/css/bootstrap.css" type="text/css" media=screen>
  <link rel=StyleSheet href="lib/css/style.css" type="text/css" media=screen>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

  <script type="text/javascript" src="lib/js/bootstrap-modal.js" ></script>

  <script type="text/javascript" src="functions.js"></script>

  <title>Project: Website for education nonprofit</title>
<script>
$('#myModal').modal(options)

    
</script>
</header>
<body>
<div class="container">
<div id="header">
  <div class="logo"><a href="index.php">
    <h1> grapevine </h1>
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
                <a href="./listings.php">Browse</a>
              </li>
              <li class="">
                <a href="./createproject.php">Create</a>
              </li>
          </ul>
          <ul class="nav pull-right">
             
             <li>
			 <? if(isset($_SESSION['id'])) {  ?> <a href="./login2.php">Logout</a> <? } else { ?>

                <a href="./login.php">Logout</a> <? } ?>
              </li>
              <li>
                <a href="./signup.php">Signup</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</div>


<div id="content-sidebar" class="span12 container">
<div id="content" class="span8">
<div class="row">
<div class="span8">
  <p><a href="listings.php"><- Back to listings</a></p>
</div>
</div>

<div class="row">
<div class="listing span8">
  <div class="row">
    <div class="title span7">Develop a web site to connect people working on projects with people who want to help.</div>
    <div class="span1 last">
      <img id="change-star" class="star" onclick="switchstar()" src="images/star-gray.gif" width=30px>
    </div>
  </div>
 
  <div class="row">
    <div class="collaborators span8 last">Dexter Zhuang, Edward Wang, Aatash Parikh</div>
  </div>
 
  <div class="row">
    <div class="types span8 last">
      <span class="bold">Type:</span>
      <a href="">Social Good</a><a href="">Paid Extravagantly</a>
    </div>
  </div>
 
  <div class="row">
    <div class="skills span8 last"><span class="bold">Help Needed With: </span> <span class="skills"><a href="">Web Design</a><a href="">Marketing</a></div>
  </div>
 
  <div class="row">
    <div class="timeline span8 last"><span class="bold">Timeframe: </span>May 2012-July 2012</div>
  </div>

  <div class="row">
    <div class="description span8 last">
      <p class="bold">Description:</span>
      <p>We are looking for professional, hard-working people who will join our team to make a dent in the universe.</p>
      <p>Requirements </p>
      <ul>
        <li>Having a big heart</li>
        <li>Desire to change the world</li>
        <li>2+ years of product management experience, preferably at a consumer web or mobile company</li>
        <li>Exceptional communication and presentation skills</li>
        <li>Exceptional organizational and analytical skills</li>
        <li>Understanding of agile development processes. Direct experience preferred.</li>
        <li>Experience working within an agile development environment</li>
        <li>Passion for and applicable understanding of innovative consumer products</li>
        <li>BA/BS in Computer Science or related technical field is ideal</li>
</ul>
    </div>
  </div>


  <div class="row container">
    <a class="btn btn-primary">Apply</a> 

    <a class="btn" data-toggle="modal" href="#myModal">Refer a Friend</a>
    
  </div>
</div>
</div>

</div>

<div id="myModal" class="modal hide fade">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h3>Refer a Friend</h3>
            </div>
            <div class="modal-body">
               <form class="form-horizontal" action="createproject.php" method="post">
        <fieldset>

          <div class="control-group">
            <label class="control-label" for="e-mail">E-mail</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="name" name="e-mail">
            </div>
          </div>

            <div class="modal-footer">
              <a href="#" class="btn" data-dismiss="modal" >Close</a>
              <a href="#" class="btn btn-primary">E-mail</a>
            </div>
             </fieldset>
        </form>
          </div>
        </div>


<div id="sidebar" class="span3">
  <div class="listing">
    <div class="title">Similar Projects</div>

    <h3><a href="">Website development for animal welfare non-profit</a></h3>
    <div>
      <span class="types"><a href="">Social Good</a><a href="">Animals</a><br /><a href="">Non-profit</a><a href="">Volunteer</a><br /></span>
      <span class="skills"><a href="">Web Dev</a><a href="">Graphic Design</a></span>
    </div>

    <h3><a href="">Mini-documentary production for shop grand-opening</a></h3>
    <div>
      <span class="types"><a href="">Film/Video</a><a href="">Paid</a><br /></span>
      <span class="skills"><a href="">Video Production</a><br /><a href="">Video Editing</a></span>
    </div>

  </div>
</div>
</div>

</div>
</body>

  <footer class="footer">
    <div class="container">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>Built by the grapevine Team</p>
    </div>
  </footer>
</html>


