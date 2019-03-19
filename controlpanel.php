<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/app.css">
    <title>Controlpanel : Rustams Šteinbergs</title>
</head>
<header>
    <a href="https://github.com/codedbad">
        <div class="codedbad">
            codedbad
        </div>
    </a>
</header>
<main>
<?php
include_once 'config/app_config.php';               
error_reporting(E_ALL);
$succ = "";

$con = mysqli_connect("$dbhost", "$dbuser", "$dbpass", "$dbtbl");

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

    $query = "INSERT INTO products" . "(sku, mox, dim, osx, mem, scr, prc, img)" . "VALUES ('$getSku','$getMox', '$getDim', '$getOsx', '$getMem', '$getScr', '$getPrc', '$getImg')";

    if ($con->query($query) === TRUE) { 
        $succ = "success";
    } else {
        echo "Error: " . $query . "<br>" . $con->error;
    }
}
?>
<div class="cp_con">
    <div>
    <form action="<?php $_PHP_SELF ?>" method="post">
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
<div class="container-menu">
    <div class="menu-right">Save new product:<br>
        <span class="small-tx">please provide all info</span>
    </div>
    <div class="menu-left">
        <span class="btn-block">
        <button class="btn-submit" type="submit" name="submit">Save</button>
        </span><br>
        <span class="small-tx-rd"><?php echo $succ;?></span>
    </div>
</div>
</form>
<div class="container-menu">
    <div class="menu-right">Delete selected:<br>
        <span class="small-tx">select one or more to delete</span>
    </div>
    <div class="menu-left">
        <span class="btn-block">
        <button class="btn-delete" type="submit" name="delete">Delete</button>
        </span><br>
        <span class="small-tx-rd">success</span>
    </div>
</div>
<div class="container-pl">
        <?php
        $query = 'SELECT * from products ORDER by dat';
        $result = $con->query($query, MYSQLI_STORE_RESULT);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $mox = $row["mox"];
                $dim = $row["dim"];
                $osx = $row["osx"];
                $mem = $row["mem"];
                $src = $row["scr"];
                $prc = $row["prc"];
                $img = $row["img"];
                ?>

    <div class="portrait">
        <ul>
            <li class="small-tx-dg">
                <input class="checkbox" type="checkbox" name="select" value="delete">
                <span>Mobile Phones</span>
            </li>
        </ul>
            <img src="<?php echo $img;?>" alt="">
        <ul>
            <li class="medium-tx">
                <span>
                    <?php echo $mox;?>
                </span>
            </li>
            <li class="small-tx">
                <span>
                    <?php echo $mem;?>
                </span>
                <span>Gb,</span>
                <span>
                    <?php echo $src;?>
                </span>
            </li>
            <li class="price-tag-pl">
                <span>€</span>
                <span>
                    <?php echo $prc;?>
                </span>
                <span>Eur</span>
            </li>
        </ul>
    </div>
        <?php
            }
        } else {
            echo "0 results";
        }
        mysqli_close($con);
        ?>
</div>
</main>