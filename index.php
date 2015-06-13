<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

<!-- logo -->
<header></header>
	
<!-- ye olde burger nav -->
<nav class="navbar navbar-inverse" role="navigation">
   <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" 
         data-target="#example-navbar-collapse">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">TutorialsPoint</a>
   </div>
   <div class="collapse navbar-collapse" id="example-navbar-collapse">
      <ul class="nav navbar-nav">
         <li class="active"><a href="http://multimusen.dk">Multimusen.dk</a></li>
         <li><a href="http://multimusen.blogspot.com">Per's Computer Cyprianus</a></li>
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               Info <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
               <li><a href="info.php">Phpinfo</a></li>
               <li><a href="#">Sit</a></li>
               <li><a href="#">Jasper Report</a></li>
               <li class="divider"></li>
               <li><a href="#">Separated link</a></li>
               <li class="divider"></li>
               <li><a href="#">One more separated link</a></li>
            </ul>
         </li>
      </ul>
   </div>
</nav>

<!-- main container -->
<div class="container">

<!-- purpose -->
 <div class="row">
	 <div class="col-sm-12 col-md-12 col-lg-12">
    <div class="jumbotron"> 
    <h1>I am up and running</h1> 
    <p class="jumboTxt">
	Here's apache2, php5 and MySQL on a Raspian Pi B+ system. 		
    </p> 
 </div>

</div><!-- row end -->



</div><!-- end container -->

<!-- the footer section -->
<footer>
	<!-- creative do-what-thou-willt-commons-license -->
	<a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">This webpage</span> was created by <a xmlns:cc="http://creativecommons.org/ns#" href="http://multimusen.dk" property="cc:attributionName" rel="cc:attributionURL">Per Thykjær Jensens Style Tile Creator</a>.<br>It is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.
</footer>


<script>
var site = "Noobs Home Server";
var lorem = "Pellentesque ac fringilla ante. Curabitur cursus, ex eget viverra placerat, mauris neque blandit velit, id tristique arcu lacus non augue. Aliquam mauris justo, vestibulum vitae rutrum at, efficitur non mi. Praesent a scelerisque mauris, at dignissim orci. Quisque blandit molestie sem laoreet commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec lacinia erat quis massa convallis, in hendrerit purus euismod. Quisque quam justo, bibendum et massa eget, iaculis feugiat elit. Donec vulputate dignissim nunc. Integer luctus mattis urna in venenatis. Ut pulvinar diam non nisl scelerisque vehicula. Donec posuere magna ac urna maximus sagittis. Etiam malesuada rutrum lorem ac gravida. Integer sed ipsum eget ligula fringilla ultrices ut at arcu.";
var res = lorem.substring((45-13), (152-13));

$(document).ready(function(){
    $("title, .navbar-brand, header").html(site);
    //$('h1').html(" " + site);
    //$('.lorem').html(lorem);
    //$('.jumboTxt').html(res)
});
</script>

</body>
</html>
