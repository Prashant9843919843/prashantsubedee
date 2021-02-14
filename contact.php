<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.google.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
      <title>Contact</title>
      <style>
body{
  position: relative;
  background-color: black;
}
</style>
</head>
<body>
      <?php include 'menu.php' ?>
      
      <!--Contact starts-->
   <section class="my-5">
  <div class="py-5">
    <h2 class="text-center text-white">Contact :)</h2>
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
</body>
</html>