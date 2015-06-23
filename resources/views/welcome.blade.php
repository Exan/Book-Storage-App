<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>
    <body>   
        
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Book Storage App</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
           <ul class="nav navbar-nav navbar-right">
               <li><a href="../auth/login">Log in</a></li>
               <li><a href="../auth/register">Register</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    
    <div class="jumbotron">
      <div class="container">
        <h1>Welcome!</h1>
        <p>The following app is a project created by Janie Brideau to test some features of <a href="http://laravel.com/">Laravel 5</a>.
            You can register or login to begin using the application. The code is available on my <a href="">github account</a>.</p>
        <p><a class="btn btn-primary btn-lg" href="../auth/register" role="button">Register Now</a></p>
      </div>
    </div>
        
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Store books</h2>
          <p>This applications let you store books you've read. It's possible to add your own comments about the book, give your own rating, and much more.
          Updating older entries is also possible.</p>
          
        </div>
        <div class="col-md-4">
          <h2>Charts</h2>
          <p>I have decided to include charts in this project to give a better visual representation. At the moment it's possible to see how many books of each genre was read by the user.</p>
          
       </div>
        <div class="col-md-4">
          <h2>Built With...</h2>
          <p>This project was built using Laravel 5, SQLite, Twitter Bootstrap, Jquery.</p>
          
        </div>
    </div>
      
            <hr>

      <footer>
        <p>Janie Brideau, 2015</p>
      </footer>
    </div>
    </body>
    
    
   <script src="//code.jquery.com/jquery.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</html>