<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Citation</title>
<link rel="icon" type="image/gif" href="animated_favicon1.gif">

<noscript>Please enable Javascript to view this page correctly.</noscript>
<script type="text/javascript" src="src/brython.js"></script>
<script src="scripts/angular.min.js"></script>     
<script src="scripts/script.js"></script> 
<script src="http://demos.9lessons.info/ajaxLoginServer/js/jquery.min.js"></script>
<script src="http://demos.9lessons.info/ajaxLoginServer/js/jquery.ui.shake.js"></script>
<!-- Generic page styles -->
<link rel="stylesheet" href="css/style.css">
<!-- blueimp Gallery styles -->
<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="css/jquery.fileupload.css">
<link rel="stylesheet" href="css/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>
<style>
/* Hide Angular JS elements before initializing */
.ng-cloak {
    display: none;
}
<style>
.header .jumbotron {
  background-image:url('images/image.png');
  height:300px;
  background-repeat: no-repeat;
  background-size: cover; 
  border-bottom:1px solid #ff6a00
}
.jumbotron .container{
  position:relative;
  top:100px;
}
.register{display:none;}
</style>


<script>
 function userlogin(){
  if(navigator.appname=="Microsoft Internet Explorer"){
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  else
  {
    xhttp = new XMLHttpRequest();
    xhttp.open("POST","brython.php?NAME="+name+"&PASSWORD="+pwd,true);
    xhttp.send();
    xhttp.onreadystatechange=function() {
        if(xhttp.readyState == 4) {
          if(responseText=='Invalid User!!! Please Register.'){
      document.getElementById('user_check').innerHTML=xhttp.responseText;
    }
      }
    }
  }
  }


 </script>




<script>
      $(document).ready(function() {
      

$('.sign_up').click(function() { $('.log_in').hide();$('.register').show(); })
$('.log').click(function() { $('.register').hide();$('.log_in').show(); })


      $('#login').click(function()
      {
      var username=$("#name").val();
      var password=$("#pwd").val();
        var dataString = 'username='+username+'&password='+password;
        alert(dataString);
      if($.trim(username).length>0 && $.trim(password).length>0)
      {
      
 
      $.ajax({
            type: "POST",
            url: "ajaxLogin.php",  
            data: dataString,
            cache: false,
            beforeSend: function(){ $("#login").val('Connecting...');},
            success: function(data){
            if(data)
            {
             $('#box').shake();
       $("#login").val('Login')
       $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username and password. ");
       
            }
            else
            {
             $('#box').shake();
       $("#login").val('Login')
       $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username and password. ");
            }
            }
            });
      
      }
      return false;
      });
      
        
      });



    </script>



<title><link rel="shortcut icon"  href="images/cite.ico" /> Cite</title>
<!-- rel="stylesheet" href="doc/doc_brython.css"-->
</head>

<body ng-app="myApp">
<nav class="navbar navbar-inverse navbar-fixed-top navclass" id="main-navbar" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="sr-only"> Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div> <!-- end navbar header-->

  <div class="collapse navbar-collapse" id="nav">
  <ul class= "nav navbar-nav">
  <li>
  <a href ="#"><span class="glyphicon glyphicon-home" style = "font-size:2em; color: cyan;"/></span></a>
  </li>
  </ul>  
  <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#abc" style= "top:50px">LOGIN</button>
  </div>
    </div> <!-- end container-->
  </nav> <!-- End of navigation -->


<br>
<div class= "header container-fluid">
<!--div class = "jumbotron text-center"-->
<div class = "carousel slide" data-ride="carousel" id = "caro">
<!--ol class="carousel-indicators">
<li class = "active" data-target="#caro" data-slide-to="1"></li>
<li  data-target="#caro" data-slide-to="2"></li>
</ol-->

<div class = "carousel-inner">
<div class = "item active"><img class = "center-block"src = "images/head1.jpg" style= "background-size:cover "></div>
<div class = "item"><img class = "center-block"src = "images/head2.jpg"></div>
<a class="carousel-control left" data-slide="prev" href="#caro"><span class= "glyphicon glyphicon-backward"></span></a>
<a class="carousel-control right" data-slide="next" href= "#caro"><span class= "glyphicon glyphicon-forward"></span></a>

</div>

</div>
</div>
<br>
<br>

<!--/div-->
<div class = "row">
<div class = "col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 text-center"
<h4> Login to view content</h4><hr>
<div class = "container-fluid">

 <button type="button" class="btn btn-info" data-toggle="modal" data-target="#abc" >LOGIN TO CITE</button>
</div>
</div>
</div>

<!--script type="text/python3" id = "popTable">
from browser import document
from browser.html import TABLE, TR, TH, TD
def insert_table(event):
    table = TABLE()
    
    table <= TR(TH('Column {}'.format(i)) for i in range(5))
    # header row

    # table rows
    for row in range(3):
    table <= TR(TD('Cell {}-{}'.format(row, i)) for i in range(5))
    document["zone7"].clear()
    document["zone7"] <= table
    
document['uploadxml'].bind('click', insert_table)
</script-->

<!-- Modal -->
<!--div class = "modal fade" id = "abc">
<div class = "modal-dialogue">
<section class = "signup">
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">LOGIN</h4>
      </div>
      <div class="modal-body">
        <form role="form">
    <div class="form-group">
      <label for="username">USERNAME:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Username">
    </div>
    <div class="form-group">
      <label for="pwd">PASSWORD:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter Password">
    </div>
  </form>
      </div>
      <div class="modal-footer text-center">
      <button type="button" id = "sign_up" class="btn btn-default">Sign Up</button>
        <button type="button" id = "login" class="btn btn-default" data-dismiss="modal" onclick="userlogin()">Confirm Login</button>
      </div>
    </div>
  </div>
</div>
</section>
<section class = "signup">
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">SIGN UP</h4>
      </div>
      <div class="modal-body">
        <form role="form">
    <div class="form-group">
      <label for="username">USERNAME:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Username">
    </div>
    <div class="form-group">
      <label for="pwd">PASSWORD:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter Password">
    </div>
    <div class="form-group">
      <label for="pwd">CONFIRM PASSWORD:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Repeat Password">
    </div>
  </form>
      </div>
      <div class="modal-footer text-center">
      <div class="btn-group" role="group" aria-label="Basic example">
       <button type="button" id = "sign_up" class="btn btn-default">Confirm Sign Up</button>
        <button type="button" id = "login" class="btn btn-default" data-dismiss="modal" onclick="userlogin()">Login</button>
      </div>
    </div>
    </div>
  </div>
</div>
</section>
</div>
</div-->
<div id="abc" class="modal fade" role="dialog">
  <div class="modal-dialog">
  <section class = "log_in">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">LOGIN</h4>
      </div>
      <div class="body modal-body text-center">
        <form role="form">
    <div class="form-group">
      <label for="username">USERNAME:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Username">
    </div>
    <div class="form-group">
      <label for="pwd">PASSWORD:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter Password">
    </div>

  </form>
      </div>
      <div class="modal-footer center">
      <div class="btn-group" role="group" aria-label="Basic example">
       <button type="button" class="submit btn btn-success" data-dismiss="modal">Submit</button>
       <button type="button" class="sign_up btn btn-primary">Register</button>
      </div>
      </div>
    </div>
    </section>


  <section class = "register">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">SIGN UP AS A NEW USER</h4>
      </div>
      <div class="body modal-body text-center">
        <form role="form">
    <div class="form-group">
      <label for="username">USERNAME:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Username">
    </div>
    <div class="form-group">
      <label for="pwd">PASSWORD:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter Password">
    </div>
    <div class="form-group">
      <label for="pwd">CONFIRM PASSWORD:</label>
      <input type="password" class="form-control" id="cpwd" placeholder="Repeat Password">
    </div>
       </form>
      </div>
      <div class="modal-footer text-center">
      <div class="btn-group" role="group" aria-label="Basic example">
      <button type="button" class="confirm btn btn-success" data-dismiss="modal">Save & Register</button>
      <button type="button" class="log btn btn-info">Login</button>
      </div>
      </div>
    </div>
    </section>

  </div>
</div>

<div id="UNMATCHED" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Unmatched Records</h4>
      </div>
      <div class="body modal-body text-center">
        <form role="form">
    <div class="form-group">
      <label for="username">PVP:</label>
      <strong>Thomas v. Winchester</strong>
    </div>
    <div class="form-group">
      <label for="pwd">LINK:</label>
      <input type="textbox" id = "citedata" placeholder = "Enter Citation">
    </div>

  </form>
      </div>
      <div class="modal-footer text-center">
         <ul class="pager">
            <li><a href="#">Prev</a></li>
            <li><a href="#">Next</a></li>
          </ul> 
      </div>
    </div>
  </div>
</div>




<!--script type="text/javascript">
   upload.onclick = function(){myScript}; 
</script-->
<!--script>

/*var app = angular.module('fileDemo', []);

app.directive('fdInput', ['$timeout', function ($timeout) {
    return {
        link: function (scope, element, attrs) {
            element.on('change', function  (evt) {
                var files = evt.target.files;
                console.log(files[0].name);
                console.log(files[0].size);
            });
        }
    }
}]);*/

angular.module('myApp', [])
.controller('myCtrl', ['$scope', function($scope) {
    $('#fileSelected').on('click', function (evt) {
    var files = $(evt.currentTarget).get(0).files;

    if(files.length > 0) {
        $('#fileName').text(files[0].name);
        $('#fileSize').text(files[0].size);
        $('#filePath').text($('#fileSelected').val());
        alert (fileName,fileSize,filePath);
    }
    });
}]);
</script-->



</body>
</html>