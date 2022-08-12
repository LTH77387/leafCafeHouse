<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK NOW </title>
    <?php include("./cdn.php") ?>
<style>
    /* From uiverse.io by @mrhyddenn */
button {
  text-transform: uppercase;
  letter-spacing: 0.1em;
  padding: 10px 30px;
  transition: 0.5s;
  position: relative;
  font-size: 17px;
  background: #333;
  border: none;
  color: #fff;
}

button:hover {
  letter-spacing: 0.25em;
  background: #ff1867;
  color: #ff1867;
  box-shadow: 0 0 45px #ff1867;
}

button::before {
  content: '';
  position: absolute;
  inset: 2px;
  background: #222222;
}

button span {
  position: relative;
  z-index: 1;
}

button i {
  position: absolute;
  inset: 0;
  display: block;
}

button i::before {
  content: '';
  position: absolute;
  border: 2px solid #ff1867;
  width: 7px;
  height: 4px;
  top: -3.5px;
  left: 80%;
  background: #222222;
  transform: translateX(-50%);
  transition: 0.5s;
}

button:hover i::before {
  width: 20px;
  left: 20%;
}

button i::after {
  content: '';
  position: absolute;
  border: 2px solid #ff1867;
  width: 7px;
  height: 4px;
  bottom: -3.5px;
  left: 20%;
  background: #222222;
  transform: translateX(-50%);
  transition: 0.5s;
}

button:hover i::after {
  width: 20px;
  left: 80%;
}
</style>
</head>
<body>
<?php include_once('/Applications/MAMP/htdocs/AIMT /miniProject/nav.php') ?>
<br><br><br>
<section >
   <div class="container" style="background-color: #8c6d41;">
       <div class="row">
           <div class="col md-6 offset-1 m-2">
               <div class="card">
                   <div class="card-header text-center">
                      <h3>BOOKING</h3>
                   </div>
                   <div class="card-body">
                       <label for="name">Name :</label>
                       <input type="text" name="name" id="" class="form-control">
                       <label for="email">Email :</label>
                       <input type="email" name="email" id="" class="form-control">
                       <label for="phone">Phone :</label>
                       <input type="number" name="phone" id="" class="form-control">
                       <label for="address">Address :</label>
                       <textarea rows="5" cols="5" class="form-control" style="resize: none;"></textarea>
                       <label for="address">Your Message :</label>
                       <textarea rows="10" cols="5" class="form-control" style="resize: none;"></textarea><br>
                       <div class="card-footer">
                       <div class="scene">
                       <button class="float-end">
    <span>Order Now</span><i></i>
</button>
</div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>
</body>
</html>