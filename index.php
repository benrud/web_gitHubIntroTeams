<?php include $_SERVER['DOCUMENT_ROOT'].'/functions.php';?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bare - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <?php echo $mainMenu;?>
        </nav>
        <!-- Page content-->
                  <div class="row justify-content-center mt-2"> 
                    <div class="card" style="width: 80%; background-color: #D3D3D3;">
                      <div class="card-body">
                        <form action ="/redirect.php" method="post">
                          <div class="row"> 
                            <div class="col-4 mt-2"> 
                              <label for="first-name">First Name:</label> <br>
                              <input type="text" id="first-name" name="first-name"><br>
                            </div>  
                            <div class="col-4 mt-2"> 
                              <label for="last-name">Last Name:</label> <br>
                              <input type="text" id="last-name" name="last-name"><br>
                            </div>  
                            <div class="col-4 mt-2"> 
                              <label for="email">Email:</label><br>
                              <input type="email" id="email" name="email"><br>
                            </div> 

                            <div class="col-4 mt-2"> 
                              <label for="phone">Phone:</label><br>
                              <input type="tel" id="phone" name="phone"><br>
                            </div>  
                            <div class="col-4 mt-2"> 
                              <label for="relationship">Relationship:</label><br>
                              <select id="relationship" name="relationship">
                                <option value="friend">Friend</option>
                                <option value="family">Family</option>
                                <option value="coworker">Coworker</option>
                              </select><br>
                            </div>       

                            <div class="col-4 mt-2"> 
                              <br>
                              <input type="submit" value="Submit"><br>
                            </div>   
                            
                          </div>

                        </form>
                      </div>
                    </div>
                  </div>


                  <div class="row justify-content-center mt-2">
                    <div class="card" style="width: 80%;">
                      some contacts
                    </div>
                  </div>


      
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
