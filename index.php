<?php
require_once('function.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">

<head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <link rel=StyleSheet href="lib/css/bootstrap.css" type="text/css" media=screen>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="lib/js/jquery.tagsinput.js"></script>
  <link rel=StyleSheet href="lib/css/style.css" type="text/css" media=screen>

  <script type='text/javascript' src='http://xoxco.com/x/tagsinput/jquery-autocomplete/jquery.autocomplete.min.js'>
  </script>
  <link rel="stylesheet" type="text/css" href="http://xoxco.com/x/tagsinput/jquery-autocomplete/jquery.autocomplete.css" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js">
  </script>  
  <script type="text/javascript" src="functions.js"></script>

  <title>NAME OF OUR APP</title>
<script type="text/javascript">
    
    function onAddTag(tag) {
      alert("Added a tag: " + tag);
    }
    function onRemoveTag(tag) {
      alert("Removed a tag: " + tag);
    }
    
    function onChangeTag(input,tag) {
      alert("Changed a tag: " + tag);
    }
    
    $(function() {

      $('#tags').tagsInput({
        height:'40px',
        width:'450px',
        font:'40px',

      });


      $('#tags2').tagsInput({  
        height:'100px',
        width:'270px',
      });


// Uncomment this line to see the callback functions in action
//      $('input.tags').tagsInput({onAddTag:onAddTag,onRemoveTag:onRemoveTag,onChange: onChangeTag});   

// Uncomment this line to see an input with no interface for adding new tags.
//      $('input.tags').tagsInput({interactive:false});
    });
  
  </script>
</header>
<body>
<div class="container">
<div id="header">
  <div class="logo"><a href="index.php">
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
              <li class="">
                <a href="./listings.php">Browse</a>
              </li>
              <li class="">
                <a href="./create.php">Create</a>
              </li>
          </ul>
          <ul class="nav pull-right">
             
             <li>
			 <? if(isset($_SESSION['id'])) {  ?> <a href="./login2.php">Logout</a> <? } else { ?>

                <a href="./login.php">Login</a> <? } ?>
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
<div id="content-front" class="span8">


<div class="row">
<div class="listing main span11">


<h1>Discover great community projects to work on. Make a <i>big impact</i>.</h1>


<div class="row">
	<div class="span4">
		<h2> Find a project:</h2>
	</div>
	<div id="front" class="span5">
	  <input name="type" id="tags" class="main" value="Social Good" />
	</div>
	<div class="front span1">
		  <button class="btn" onclick="window.location.href='./listings.php'">Go</button>
	</div>
</div>

</div>

<div id="needhalp" class="span12">
	<div class="span11">
	<h1>Need help with your project?</h1>

	<p><a href="signup.php">Sign up </a>to find talented individuals recommended by your network.</p>
</div>
</div>

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


