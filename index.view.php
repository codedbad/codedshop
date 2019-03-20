<?php

session_start([
    'cookie_lifetime' => 86400,
    'read_and_close' => true,
]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/app.css">
    <title>codedbad : Rustams Šteinbergs</title>
</head>
<?php
    include_once 'config/app_config.php';
?>

<body>
    <header>
        <a href="https://github.com/codedbad">
            <div class="codedbad">
                codedbad
            </div>
        </a>
        <a href="#">
            <img class="btn-cart" src="images/cart.png" alt="">
        </a>
        <a href="#">
            <img class="btn-home" src="images/home.png" alt="">
        </a>
    </header>
    <main>
        <div id="p_view" class="container-pv">
            <?php
                if (isset($_GET['id'])) {
                    $txt = $_GET['id'];
                    $result = mysqli_query($con, "SELECT * FROM products where id=" . $txt);
                    while ($row = mysqli_fetch_array($result))
                    {
            ?>
            <div class="row-left">
                <h5>Phone model</h5>
                <p class="big-tx">
                    <?php echo $row['mox']; ?>
                </p>
                <p class="small-tx">color version</p>
                <br>
                <h5>Dimension</h5>
                <p>
                    <?php echo $row['dim']; ?>
                </p>
                <p class="small-tx">HxWxD in mm</p>
                <br>
                <h5>OS</h5>
                <p>
                    <?php echo $row['osx']; ?>
                </p>
                <p class="small-tx">operating system</p>
            </div>
            <div class="portrait-pv">
                <img src="<?php echo $row['img']; ?>" alt="">
            </div>
            <div class="row-right">
                <h5>Memory</h5>
                <p>
                    <?php echo $row['mem']; ?>
                    <span>Gb</span>
                </p>
                <p class="small-tx">built in memory</p>
                <br>
                <h5>Screen</h5>
                <p>
                    <?php echo $row['scr']; ?>
                </p>
                <p class="small-tx">screen resolution</p>
                <br>
                <h5>Price</h5>
                <p class="price-tag">
                    <?php echo $row['prc']; ?>
                    <span>Eur</span>
                    <span class="btn-block">
                        <a class="btn" type="button" href="#">add to Cart</a>
                    </span>
                </p>
                <p class="small-tx">including taxes</p>
            </div>
        </div>
        <?php
            }
        }
        ?>
        <div class="container-menu">
            <div class="menu-right">Option:</div>
            <div class="select-list">
                <select>
                    <option value="0">Select by:</option>
                    <option value="1">Price</option>
                    <option value="2">Memory</option>
                    <option value="3">Color</option>
                </select>
            </div>
            <div class="menu-left">
                <button class="btn-resset" type="submit" name="resset">Resset</button>
            </div>
        </div>
        <div class="container-pl">
            <?php
            $query = 'SELECT * FROM products ORDER by dat';
            $result = $con->query($query, MYSQLI_STORE_RESULT);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $idx = $row["id"];
                    $sku = $row["sku"];
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
                            <li class="small-tx-dg"><span>Mobile Phones</span></li>
                        </ul>
                        <a class="link" href="index.php?id=<?php echo $idx ?>" rel="">
                            <img src="<?php echo $img; ?>" alt="">
                            <ul>
                                <li class="medium-tx">
                    <span>
                        <?php echo $mox; ?>
                    </span>
                                </li>
                                <li class="small-tx">
                    <span>
                        <?php echo $mem; ?>
                    </span>
                                    <span>Gb,</span>
                                    <span>
                        <?php echo $src; ?>
                    </span>
                                </li>
                                <li class="price-tag-pl">
                                    <span>€</span>
                                    <span>
                        <?php echo $prc; ?>
                    <span>Eur</span>
                    </span>
                                </li>
                            </ul>
                        </a>
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
    <footer>

    </footer>
</body>
</html>