<!doctype html>
<html lang="en">

<head>
    <?php session_start(); ?>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
      </header>
      <!doctype html>
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
             <div class="container-fluid">
                 <a class="navbar-brand" href="#">Weboldalam</a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                     data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                     aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                         <li class="nav-item">
                             <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="cards.php">Kártyák</a>
                         </li>
                         <li class="nav-item dropdown">
                             
                         </li>
                         <?php 
                         if (isset($_SESSION['user'])) {
                            echo '<li class="nav-item">
                            <a class="nav-link" href="controllers/logout.php" tabindex="-1" >LogOut</a>
                        </li>
                    </ul>';
                         }
                         else {
                            echo '<li class="nav-item">
                            <a class="nav-link" href="register_form.php" tabindex="-1" >Register</a>
                        </li> <li class="nav-item">
                        <a class="nav-link" href="login_form.php" tabindex="-1" >LogIn</a>
                    </li>
                </ul>';
                        
                         }
                         
                         
                         ?>
                         
                     <form class="d-flex">
                         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                         <button class="btn btn-outline-light" type="submit">Search</button>
                     </form>
                 </div>
             </div>
         </nav>
      <html lang="en" class="h-100">
      
      <head>
          <title>PageTitle</title>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
          <!-- Bootstrap CSS -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
      
         <!-- Convert this to an external style sheet -->
         <style>
             main>.container {
                 padding: 60px 15px 0;
                 margin-bottom: 5rem;
             }
             .sticky-footer {
                 position: sticky;
                 left: 0;
                 bottom: 0;
                 width: 100%;
             }
         </style>
      </head>
      
      <body class="d-flex flex-column h-100">
      
      
      
          
          
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
          </script>
      </body>
      
      </html>
  <main>
   

  