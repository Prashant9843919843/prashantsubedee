<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.google.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
      <title>Prashant</title>
      <style>
body{
  position: relative;
  background-color: black;
 }
</style>
</head>
<body>
       <?php include 'menu.php'; ?>

        <!--Carousel starts-->
        <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
   
  </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
      <img src="img/co.jpg" alt="img" width="1100" height="500">
      <div class="carousel-caption">
     
       <h1 class=" bg-dark">Read amazing stories, poems and many more.</h1>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/landscape.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h1 class="bg-dark">Send us what you have written. Let the world read it aloud.</h1>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
  <!--Carousel ends-->

    <!--About starts-->
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center"></h2>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="img/pokhara.jpg" alt="img" class="img-fluid aboutimage">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
    <h2 class="display-4 text-white">About this site!</h2>
    <p class="py-3 text-white"> This site is all about creative writings like poem, story, tech blogs, confessions and many more. </p>
    <a href="about.php" class="btn btn-success">Check More</a>
    </div>
  </div>
</div>
</section>
<!--About ends-->

<!--Services starts-->
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center text-white">Services</h2>
  </div>
  <div class="container-fluid">
    <div class=row>
      <div class="col-lg-4 col-md-4 col-12">
      <div class="card" style="width:400px">
  <img class="card-img-top" src="img/nepal.jpg" alt="Card image">
  <div class="card-body bg-dark">
    <h4 class="card-title text-white">Creative Writings</h4>
    <br>
    <p class="card-text text-white">Stories, poems and many more.</p>
    <a href="stories.php" class="btn btn-primary">Read</a>
  </div>
</div> 
      </div>

      <div class="col-lg-4 col-md-4 col-12">
      <div class="card" style="width:400px">
  <img class="card-img-top" src="img/nepal.jpg" alt="Card image">
  <div class="card-body bg-dark">
    <h4 class="card-title text-white">Confessions</h4>
    <p class="card-text text-white">
    <br>
    Read confessions here.</p>
    <a href="confessions.php" class="btn btn-primary">Confessions</a>
  </div>
</div> 
      </div>

      <div class="col-lg-4 col-md-4 col-12">
      <div class="card" style="width:400px">
  <img class="card-img-top" src="img/nepal.jpg" alt="Card image">
  <div class="card-body bg-dark">
    <h4 class="card-title text-white">Publish your Writings.</h4>
    <p class="card-text text-white">Send us something if you have written. Show the world what you've written!</p>
    <a href="manpad753@gmail.com" class="btn btn-primary">Send</a>
  </div>
</div> 
      </div>
    </div>
  </div>
</section>
 <!--Services ends-->

  <!--Contact starts-->
 <section class="my-5">
  <div class="py-5">
    <h2 class="text-center text-white">Contact</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group text-white">
        <label for="">Name</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group text-white">
        <label for="">Email ID</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group text-white">
        <label for="">Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
      <div class="form-group text-white">
        <label for="">Comment</label>
        <textarea name="comment" id="" class="form-control" name="comment"></textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
</section>
 <!--Contact ends-->

  <!--Footer starts-->
<footer><p class="p-3 bg-dark text-white text-center">©prashantsubedi</p></footer>
   <!--Footer ends-->
    <!--Script Starts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--Script Ends-->
</body>
</html>
