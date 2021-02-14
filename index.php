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
        <div class="blog-card">
      <input type="radio" name="select" id="tap-1" checked>
      <input type="radio" name="select" id="tap-2">
      <input type="radio" name="select" id="tap-3">
      <input type="checkbox" id="imgTap">
      <div class="sliders">
        <label for="tap-1" class="tap tap-1"></label>
        <label for="tap-2" class="tap tap-2"></label>
        <label for="tap-3" class="tap tap-3"></label>
      </div>
<div class="inner-part">
        <label for="imgTap" class="img">
          <img class="img-1" src="img/nepal.jpg">
        </label>
        <div class="content content-1">
          <span>26 February 2021</span>
          <div class="title text-white">
Quote of the date_modify</div>
<div class="text text-white">
The best leaders are those most interested in surrounding themselves with assistants and associates smarter than they are. 
They are frank in admitting this and are willing to pay for such talents.</div>
<button type="read"> <a href="stories.php">Read more </a></button>
        </div>
</div>
<div class="inner-part">
        <label for="imgTap" class="img">
          <img class="img-2" src="#">
        </label>
        <div class="content content-2">
          <span>26 December 2018</span>
          <div class="title">
Lorem Ipsum Dolor</div>
<div class="text">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eos ut consectetur numquam ullam fuga animi laudantium nobis rem molestias.</div>
<button type="read"> <a href="stories.php">Read more </a></button>
        </div>
</div>

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
<footer><p class="p-3 bg-dark text-white text-center">©prashantsubedi <?php echo date('Y'); ?></p></footer>
   <!--Footer ends-->
    <!--Script Starts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--Script Ends-->
</body>
</html>