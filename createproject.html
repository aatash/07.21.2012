<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <link rel=StyleSheet href="lib/css/bootstrap.css" type="text/css" media=screen>
    <link rel=StyleSheet href="lib/css/style.css" type="text/css" media=screen>
  <link rel=StyleSheet href="lib/js/jquery.autocomplete.css" type="text/css" media=screen>

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="lib/js/jquery.tagsinput.min.js"></script>
    <script type="text/javascript" src="lib/js/jquery.autocomplete.min.js"></script>

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js">
  </script>  
  <script type="text/javascript" src="functions.js"></script>

  <title> Create a project </title>
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
        height:'100px',
        width:'270px'

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
  
  $(function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    function split( val ) {
      return val.split( /,\s*/ );
    }
    function extractLast( term ) {
      return split( term ).pop();
    }

    $( "#tagsauto" )
      // don't navigate away from the field on tab when selecting an item
      .bind( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).data( "autocomplete" ).menu.active ) {
          event.preventDefault();
        }
      })
      .autocomplete({
        minLength: 0,
        source: function( request, response ) {
          // delegate back to autocomplete, but extract the last term
          response( $.ui.autocomplete.filter(
            availableTags, extractLast( request.term ) ) );
        },
        focus: function() {
          // prevent value inserted on focus
          return false;
        },
        select: function( event, ui ) {
          var terms = split( this.value );
          // remove the current input
          terms.pop();
          // add the selected item
          terms.push( ui.item.value );
          // add placeholder to get the comma-and-space at the end
          terms.push( "" );
          this.value = terms.join( ", " );
          return false;
        }
      });
  });
  </script>

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
              <li class="">
                <a href="./listings.html">Browse</a>
              </li>
              <li class="active" >
                <a href="">Create</a>
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
<div id="content" class="span8">

<div class="row">
<div class="listing span8">
<div id="page">

  <div class="row">
    <div class="span8">
       <form class="form-horizontal" action="createproject.php" method="post">
        <fieldset>
          <legend class="form-title">Create a Project</legend>

          <div class="control-group">
            <label class="control-label" for="name">Project Title</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="name" name="projecttitle">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="type">Type</label>
            <div class="controls">
              <input name="type" id="tags" value="nonprofit" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="skills">Skills Required</label>
            <div class="controls">
              <input name="skills" id="tags2" value="Ruby on Rails, Javascript" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="optionsCheckbox">Public/Private</label>
            <div class="controls">
              <label class="checkbox">
                <input type="checkbox" id="optionsCheckbox" value="private" name="private">
                Check the box if you want to make the project private
              </label>
            </div>
          </div>
  
          <div class="control-group">
            <label class="control-label" for="collaborators">Add collaborators</label>
            <div class="controls">
     
              <input type="text" class="input-xlarge" id="tagsauto" name="collaborators">

            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="timeframe">Timeframe</label>
            <div class="controls">
              <input type="text" class="input-small" id="timeframe" name="timeframe-start"> to <input type="text" class="input-small" id="timeframe" name="timeframe-end">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="fileInput">Attached files</label>
            <div class="controls">
              <input class="input-file" id="fileInput" type="file" name="file">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="description">Description</label>
            <div class="controls">
              <textarea class="input-xlarge" id="description" rows="3" name="description"></textarea>
            </div>
          </div>
          <div class="controls">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button class="btn">Cancel</button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>

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


