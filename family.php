<?php include $_SERVER['DOCUMENT_ROOT'].'/functions.php';
//get json data from file
$jsonData = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data.json');
//convert json data to php array
$existingData = json_decode($jsonData,TRUE);

?>

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
            <div class="card" style="width: 80%;">
              <table>
                
              </table>
            </div>
          </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
