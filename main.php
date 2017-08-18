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
.jumbotron {
  background-image:url('images/image.png');
  height:300px;
  background-repeat: no-repeat;
  background-size: cover; 
  border-bottom:1px solid #ff6a00
}

.jumbotron .container {
  position:relative;
  top:50px;
}

.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-menu {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-menu a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-menu a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-menu {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

.message{
    display:none;
    color:#000;
    background:#f1f1f1;
    position:absolute;
    top:10px;
}

.UNMATCHED .body{
    text-align: center;
}
.jumbotron {
    margin: auto;
    width: 50%;
    border: 3px solid #7fddf4;
    padding: 10px;
}
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
$('.uploaded').onclick = function checkFileExtension( parafilevalue ){
  var file = parafilevalue.split('.');
  var validType = false;

  if( file.length < 2 ){
   return false;
  }

  var fileext = file[1].toLowerCase();
  if( fileext == 'xml' ) {
   validType = true;
  }
  else {
    validType = false;
    alert("Invalid File type!");
  }
return validType;

 } 


$('.uploaded').addEventListener("click", alert('hi')); 

      $(document).ready(function() {
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
  <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#abc" >LOGIN</button>
  </div>
    </div> <!-- end container-->
  </nav> <!-- End of navigation -->


<br>
<div class= "container-fluid">
<div class = "jumbotron text-center">
 <img src="images/lumina.png" style="align-center">
</div>
</div>
<br><br>

    <div class = "container-fluid" >
    <div class = "row">
    <div class = " col-xs-12  col-xs-offset-3 col-sm-6  col-md-offset-5 col-md-2 col-lg-offset-5 col-lg-2">

    <div class="dropdown">
      <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Select Product &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <span class="caret"></span></button>
      <ul class="dropdown-menu" id="ddl">
        <li class = "text-center"><a href="#">HDE</a></li>
        <li class = "text-center"><a href="#">PLR</a></li>
        <li class = "text-center"><a href="#">HED</a></li>
      </ul>
    </div> 
    </div>
    </div>
    </div>
    <hr>
    <div class = "container-fluid text-center" ng-controller="myCtrl">
    <form action="brython.php" method="post" enctype="multipart/form-data" class = "text-center">

    <center><h4>Select xml file to upload:</h4><br>
    <!--input type="file" name="fileToUpload" id="fileSelected" accept="text/xml" file-model="myApp.myFile"><br></center-->    <!-- The file upload form used as target for the file upload widget -->
    <div class = "row">
    <div class="col-lg-offset-4 col-lg-7 col-md-offset-4 col-md-7">
    <center>
    <form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data" data-ng-app="demo" data-ng-controller="DemoFileUploadController" data-file-upload="options" data-ng-class="{'fileupload-processing': processing() || loadingFiles}">
        <!-- Redirect browsers with JavaScript disabled to the origin page -->
        <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <div class="col-lg-7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                &nbsp&nbsp&nbsp
                <span class="btn btn-success fileinput-button" ng-class="{disabled: disabled}">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add files...</span>
                    <input type="file" name="files[]" multiple ng-disabled="disabled">
                </span>
                
                <button type="button" class="btn btn-primary start" data-ng-click="submit()">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start upload</span>
                </button>
                

                <button type="button" class="btn btn-warning cancel" data-ng-click="cancel()">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel upload</span>
                </button>
                <!-- The global file processing state -->
                <span class="fileupload-process"></span>
            </div>
            <!-- The global progress state -->
            <div class="col-lg-5 fade" data-ng-class="{in: active()}">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" data-file-upload-progress="progress()"><div class="progress-bar progress-bar-success" data-ng-style="{width: num + '%'}"></div></div>
                <!-- The extended global progress state -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The table listing the files available for upload/download -->
        <table class="table table-striped files ng-cloak">
            <tr data-ng-repeat="file in queue" data-ng-class="{'processing': file.$processing()}">
                <td data-ng-switch data-on="!!file.thumbnailUrl">
                    <div class="preview" data-ng-switch-when="true">
                        <a data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}" data-gallery><img data-ng-src="{{file.thumbnailUrl}}" alt=""></a>
                    </div>
                    <div class="preview" data-ng-switch-default data-file-upload-preview="file"></div>
                </td>
                <td>
                    <p class="name" data-ng-switch data-on="!!file.url">
                        <span data-ng-switch-when="true" data-ng-switch data-on="!!file.thumbnailUrl">
                            <a data-ng-switch-when="true" data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}" data-gallery>{{file.name}}</a>
                            <a data-ng-switch-default data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}">{{file.name}}</a>
                        </span>
                        <span data-ng-switch-default>{{file.name}}</span>
                    </p>
                    <strong data-ng-show="file.error" class="error text-danger">{{file.error}}</strong>
                </td>
                <td>
                    <p class="size">{{file.size | formatFileSize}}</p>
                    <div class="progress progress-striped active fade" data-ng-class="{pending: 'in'}[file.$state()]" data-file-upload-progress="file.$progress()"><div class="progress-bar progress-bar-success" data-ng-style="{width: num + '%'}"></div></div>
                </td>
                <td>
                    <button type="button" class="btn btn-primary start" data-ng-click="file.$submit()" data-ng-hide="!file.$submit || options.autoUpload" data-ng-disabled="file.$state() == 'pending' || file.$state() == 'rejected'">
                        <i class="glyphicon glyphicon-upload"></i>
                        <span>Start</span>
                    </button>
                    <button type="button" class="btn btn-warning cancel" data-ng-click="file.$cancel()" data-ng-hide="!file.$cancel">
                        <i class="glyphicon glyphicon-ban-circle"></i>
                        <span>Cancel</span>
                    </button>
                    <button data-ng-controller="FileDestroyController" type="button" class="btn btn-danger destroy" data-ng-click="file.$destroy()" data-ng-hide="!file.$destroy">
                        <i class="glyphicon glyphicon-trash"></i>
                        <span>Delete</span>
                    </button>
                </td>
            </tr>
        </table>
</form>
</center>
</div>
</div>
    <button type= "button" id = "uploaded" class="btn btn-info">PROCESS XML</button>
</form>
</div>
</center>