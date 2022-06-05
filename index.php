<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

<style>
    #entete{background-color: purple;}
    h1{color: white;}
    body{background-color: lightgrey;}
    a{ float: right; }
</style>
</head>
<body>
<header class="bg-primary">
    
<nav class="navbar navbar-expand-md navbar-dark px-5">
    <div class="navbar-collapse">
    <h1>MONSTER</h1>Logo
    <form class="d-flex">
                <input class="form-control" type="text" placeholder="Search">
                <button class="btn btn-outline-light ms-3 end" type="submit">Search</button>
    </form>
    </div>
    </nav>

</header>


<div class="container">


<header id="entete" class="row mt-3">
    <div  class="border border purple p-3 align-items-center d-flex">
    <img src="http://via.placeholder.com/100x100" alt="" class="me-3 rounded">
    <div>
        <h1>Bootstrap</h1>
        <p>Since 2011</p>
    </div>
    </div>
    
</header>

<div class="row  bg-light mt-3">
<h2>Bidoum, Badoum, Baloum</h2>
<?php for ($i = 0; $i < 3; $i++) : ?>
    <div class="col-9 ">
   <p class><i class="bi bi-arrow-right-square-fill"></i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit cumque ad ab alias tempora quidem blanditiis? Maxime vitae minima reprehenderit temporibus asperiores, esse ratione quae dolores exercitationem molestiae a quis!</p>
    
    </div>
    <?php endfor ?>
    <div>
    <a href="#" class="ms-auto text-decoration-none">Lire la suite</a>
    </div>
</div>



<div class="row  bg-light mt-3">
<h2>Bidoum, Badoum, Baloum</h2>
<?php for ($i = 0; $i < 3; $i++) : ?>
    <div class="col-9 ">
   <p><i class="bi bi-arrow-right-square-fill"></i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit cumque ad ab alias tempora quidem blanditiis? Maxime vitae minima reprehenderit temporibus asperiores, esse ratione quae dolores exercitationem molestiae a quis!</p>
    
    </div>
    <?php endfor ?>
    <div>
    <a href="#" class="ms-auto text-decoration-none">Lire la suite</a>
    </div>
</div>
       </div>

</body>
</html>