<?php
session_start([
    'cookie_lifetime' => 86400,
    'read_and_close' => true,
]);
include_once 'config/app_config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles/app.css">
  <title>Controlpanel : codedbad</title>
</head>

<body>
  <header>
    <a href="https://github.com/codedbad">
      <div class="codedbad">
        codedbad
      </div>
    </a>
    <a href="index.php">
      <img class="btn-home-cp" src="images/home.png" alt="">
    </a>
  </header>
  <main>
    <?php
        error_reporting(E_ALL);
        $sucSave = "";
        $message = "";
        $saveErorr = "";

        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        } 

        if(isset($_POST['submit'])) {
            $getSku = $_POST['sku'];
            $getMox = $_POST['mox'];
            $getDim = $_POST['dim'];
            $getOsx = $_POST['osx'];
            $getMem = $_POST['mem'];
            $getScr = $_POST['scr'];
            $getPrc = $_POST['prc'];
            $getImg = $_POST['img'];

            $query = "INSERT INTO products" . "(sku, mox, dim, osx, mem, scr, prc, img)"
            . "VALUES ('$getSku','$getMox', '$getDim', '$getOsx', '$getMem', '$getScr', '$getPrc', '$getImg')";

            if ($con->query($query) === TRUE) { 
                $sucSave = "success";
            } else {
                $saveErorr = "Error";
            }
        }
        ?>
    <form action="<?php $_PHP_SELF ?>" method="post">
      <div class="input-cp">
        <div>
          <label for="model">SKU:</label><br>
          <input class="input" type="text" name="sku" id="sku" required="required">
          <label for="model">Model:</label><br>
          <input class="input" type="text" name="mox" id="mox" required="required">
          <label for="dimension">Dimension:</label><br>
          <input class="input" type="text" name="dim" id="dim" required="required">
          <label for="os">Operating system:</label><br>
          <input class="input" type="text" name="osx" id="osx" required="required">
          <label for="memory">Memory:</label><br>
          <input class="input" type="text" name="mem" id="mem" required="required">
          <label for="screen">Screen:</label><br>
          <input class="input" type="text" name="scr" id="scr" required="required">
          <label for="price">Price:</label><br>
          <input class="input" type="text" name="prc" id="prc" required="required">
          <label for="image">Image:</label><br>
          <input class="input" type="text" name="img" id="img" required="required">
        </div>
      </div>
      <div class="container-menu-cp">
        <div>
          <span class="medium-tx">Save new product:</span><br>
          <span class="small-tx">please provide all info</span>
        </div>
        <div>
          <span class="btn-block">
            <button class="btn-submit" type="submit" name="submit">Save</button>
            <span class="small-tx-rd">
              <?php 
                            echo $sucSave;
                            echo $saveErorr;
                            ?>
            </span>
          </span>
        </div>
      </div>
    </form>
    <?php
        if(isset($_POST['save'])){
            $checkbox = $_POST['check'];
            for($i=0;$i<count($checkbox);$i++){
                $del_id = $checkbox[$i]; 
                mysqli_query($con,"DELETE FROM products WHERE id='".$del_id."'");
                $message = "Succses";
            }
        }
        $result = mysqli_query($con,"SELECT * FROM products");
        if(isset($message)) { 
        ?>

    <form method="post" action="<?php $_PHP_SELF ?>">
      <div class="container-menu-cp">
        <div>
          <span class="medium-tx">Delete selected:</span><br>
          <span class="small-tx">select one or more to delete</span>
        </div>
        <div>
          <span class="btn-block">
            <button type="submit" class="btn-submit" name="save">Delete</button>
            <span class="small-tx-rd">
              <?php 
                                echo $message; 
                            } 
                            ?>
            </span>
          </span>
        </div>
      </div>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Select</th>
            <th>products Id</th>
            <th>Date adedd</th>
            <th>SKU</th>
            <th>Model</th>
            <th>Dimension</th>
            <th>Memory</th>
            <th>Price</th>
          </tr>
        </thead>
        <?php
                $i=0;
                while($row = mysqli_fetch_array($result)) {
                    ?>
        <tr>
          <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["id"]; ?>"></td>
          <td><?php echo $row["id"]; ?></td>
          <td><?php echo $row["dat"]; ?></td>
          <td><?php echo $row["sku"]; ?></td>
          <td><?php echo $row["mox"]; ?></td>
          <td><?php echo $row["dim"]; ?></td>
          <td><?php echo $row["mem"]; ?></td>
          <td><?php echo $row["prc"]; ?></td>
        </tr>
        <?php
                    $i++;
                }
                ?>
      </table>
    </form>
</body>

</html>