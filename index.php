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
  <title>Main : codedbad</title>
</head>

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
    <a href="index.php">
      <img class="btn-home" src="images/home.png" alt="">
    </a>
  </header>
  <main>
    <?php
        if (isset($_GET['id'])) {
            $idx = $_GET['id'];
            $result = mysqli_query($con, "SELECT * FROM products where id=" . $idx);
            while ($row = mysqli_fetch_array($result))
            {
                ?>
    <div class="container-view">
      <div class="row-left">
        <p class="medium-tx">Phone model</p>
        <p class="big-tx">
          <?php echo $row['mox']; ?>
        </p>
        <p class="small-tx">color version</p><br>
        <p class="medium-tx">Dimension</p>
        <p class="big-tx">
          <?php echo $row['dim']; ?>
        </p>
        <p class="small-tx">HxWxD in mm</p><br>
        <p class="medium-tx">OS</p>
        <p class="big-tx">
          <?php echo $row['osx']; ?>
        </p>
        <p class="small-tx">operating system</p><br>
      </div>
      <div class="row-view">
        <img src="<?php echo $row['img']; ?>" alt="">
      </div>
      <div class="row-right">
        <p class="medium-tx">Memory</p>
        <p class="big-tx">
          <?php echo $row['mem']; ?>
          <span>Gb</span>
        </p>
        <p class="small-tx">built in memory</p><br>
        <p class="medium-tx">Screen</p>
        <p class="big-tx">
          <?php echo $row['scr']; ?>
        </p>
        <p class="small-tx">screen resolution</p><br>
        <p class="medium-tx">Price</p>
        <p class="price-tag big-tx">
          <?php echo $row['prc']; ?>
          <span>Eur</span>
        </p>
        <p class="small-tx">including taxes</p>
        <span class="btn-block">
          <a class="btn" type="button" href="#">add to Cart</a>
        </span>
      </div>
    </div>
    <?php
            }
        }
        ?>
    <div class="container-menu">
      <div class="row-sort">
        Sort:
      </div>
      <div class="row-list">
        <select onchange="location = this.value;">
          <option value="index.php">Newest</option>
          <option value="index.php">Memory</option>
          <option value="index.php">Price</option>
        </select>
      </div>
    </div>
    <div class="container-list">
      <?php
            $query = "SELECT * FROM products ORDER by dat DESC";
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

      <div class="row">
        <ul>
          <li class="small-tx-cat"><span>Mobile Phones</span></li>
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
            <li class="price-tag-list">
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