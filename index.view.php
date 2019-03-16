<?php

$con = mysqli_connect("localhost","root","110189","todo_list");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_close($link);
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

<body>
    <a href="https://github.com/codedbad">
        <div class="codedbad">
            codedbad
        </div>
    </a>
    <header>
        <a href="#">
            <img class="img-cart" src="images/cart.png" alt="">
        </a>
        <a href="#">
            <img class="img-home" src="images/home.png" alt="">
        </a>
    </header>
    <main>
        <div class="container-pv">
            <div class="row-left">
                <h5>Phone model</h5>
                <p class="big-tx">
                    <?php
                            foreach ($prClass as $key => $val) {
                                if($key == "model"){
                                    echo $val;
                                }
                            }
                    ?>
                </p>
                <p class="small-tx">color version</p>
                <br>
                <h5>Dimension</h5>
                <p>
                    <?php
                            foreach ($prClass as $key => $val) {
                                if($key == "dimension"){
                                    echo $val;
                                }
                            }
                        ?>
                </p>
                <p class="small-tx">HxWxD in mm</p>
                <br>
                <h5>OS</h5>
                <p>
                    <?php
                            foreach ($prClass as $key => $val) {
                                if($key == "os"){
                                    echo $val;
                                }
                            }
                        ?>
                </p>
                <p class="small-tx">operating system</p>
            </div>
            <div class="portrait-pv">
                <img src="images/Apple-iPhoneXs-Gold-1-3x.jpg" alt="">
            </div>
            <div class="row-right">
                <h5>Memory</h5>
                <p>
                    <?php
                            foreach ($prClass as $key => $val) {
                                if($key == "memory"){
                                    echo $val;
                                }
                            }
                        ?>
                    <span>Gb</span>
                </p>
                <p class="small-tx">built in memory</p>
                <br>
                <h5>Screen</h5>
                <p>
                    <?php
                            foreach ($prClass as $key => $val) {
                                if($key == "screen"){
                                    echo $val;
                                }
                            }
                        ?>
                </p>
                <p class="small-tx">screen resolution</p>
                <br>
                <h5>Price</h5>
                <p class="price-tag" href="#">
                    <?php
                            foreach ($prClass as $key => $val) {
                                if($key == "price"){
                                    echo $val;
                                }
                            }
                        ?>
                    <span>Eur</span>
                    <span class="btn-block">
                        <a class="btn" href="#">add to Cart</a>
                    </span>
                </p>
                <p class="small-tx">including taxes</p>
            </div>
        </div>
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
            <div class="menu-left"><button>Reset</button></div>
        </div>
        <div class="container-pl">
            <a href="#" rel="">
                <div class="portrait">
                    <ul>
                        <li class="small-tx-dg">Mobile Phones</li>
                    </ul>
                    <img src="images/samsung.jpg" alt="">
                    <ul>
                        <li class="medium-tx">Samsung S10+</li>
                        <li class="small-tx">Black<span>,</span> <span>32Gb</span></li>
                        <li class="price-tag-pl">€<span>899Eur</span></li>
                    </ul>
                </div>
            </a>
            <a href="#" rel="">
                <div class="portrait">
                    <ul>
                        <li class="small-tx-dg">Mobile Phones</li>
                    </ul>
                    <img src="images/Apple-iPhoneXs-Gold-1-3x.jpg" alt="">
                    <ul>
                        <li class="medium-tx">Iphone Xs</li>
                        <li class="small-tx">Gold<span>,</span> <span>64Gb</span></li>
                        <li class="price-tag-pl">€<span>1099Eur</span></li>
                    </ul>
                </div>
            </a>
            <a href="#" rel="">
                <div class="portrait">
                    <ul>
                        <li class="small-tx-dg">Mobile Phones</li>
                    </ul>
                    <img src="images/huawei.jpg" alt="">
                    <ul>
                        <li class="medium-tx">Huawei P30 pro</li>
                        <li class="small-tx">Black<span>,</span> <span>64Gb</span></li>
                        <li class="price-tag-pl">€<span>969Eur</span></li>
                    </ul>
                </div>
            </a>
            <a href="#" rel="">
                <div class="portrait">
                    <ul>
                        <li class="small-tx-dg">Mobile Phones</li>
                    </ul>
                    <img src="images/xiaomi.jpg" alt="">
                    <ul>
                        <li class="medium-tx">Xioami mi 9</li>
                        <li class="small-tx">White<span>,</span> <span>128Gb</span></li>
                        <li class="price-tag-pl">€<span>799Eur</span></li>
                    </ul>
                </div>
            </a>
            <a href="#" rel="">
                <div class="portrait">
                    <ul>
                        <li class="small-tx-dg">Mobile Phones</li>
                    </ul>
                    <img src="images/sony-xp.jpg" alt="">
                    <ul>
                        <li class="medium-tx">Sony Xperia 10 Plus</li>
                        <li class="small-tx">Black<span>,</span> <span>64Gb</span></li>
                        <li class="price-tag-pl">€<span>1190Eur</span></li>
                    </ul>
                </div>
            </a>
            <a href="#" rel="">
                <div class="portrait">
                    <ul>
                        <li class="small-tx-dg">Mobile Phones</li>
                    </ul>
                    <img src="images/vivo.jpg" alt="">
                    <ul>
                        <li class="medium-tx">Vivo V15 Pro</li>
                        <li class="small-tx">Gold<span>,</span> <span>32Gb</span></li>
                        <li class="price-tag-pl">€<span>599Eur</span></li>
                    </ul>
                </div>
            </a>
            <a href="#" rel="">
                <div class="portrait">
                    <ul>
                        <li class="small-tx-dg">Mobile Phones</li>
                    </ul>
                    <img src="images/moto.jpg" alt="">
                    <ul>
                        <li class="medium-tx">Moto G7</li>
                        <li class="small-tx">Silver<span>,</span> <span>32Gb</span></li>
                        <li class="price-tag-pl">€<span>699Eur</span></li>
                    </ul>
                </div>
            </a>
            <a href="#" rel="">
                <div class="portrait">
                    <ul>
                        <li class="small-tx-dg">Mobile Phones</li>
                    </ul>
                    <img src="images/meizu.jpg" alt="">
                    <ul>
                        <li class="medium-tx">Meizu note 9</li>
                        <li class="small-tx">Grey<span>,</span> <span>64Gb</span></li>
                        <li class="price-tag-pl">€<span>799Eur</span></li>
                    </ul>
                </div>
            </a>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>