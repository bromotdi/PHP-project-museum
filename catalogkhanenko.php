<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/catalog.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="main.js"></script>
    <title>Колекція</title>
</head>
<body>
<header class="burger">
 <h1>Музей Ханенків</h1>
 <input class="burger-input" id="burger" type="checkbox" />
 <label for="burger">
  <span></span>
  <span></span>
  <span></span>
 </label>
 <nav>
  <ul>
  
  <li> <a href="index.php">Головна</a></li>
  <li> <a href="catalog.php">Колекція</a></li>
  <li> <a href="history.php">Історія</a></li>
  <li> <a href="program.php">Програма</a></li>
  <li> <a href="contact.php">Відвідати</a></li>
           
  </ul>
 </nav>
</header>
    <div class="header">        
        <div class="green_head">
            <div class="cont_head">
                <p>Тел.: +380 44 288-14-50</p>
                <p>Email:  museumkhanenko@gmail.com</p>
            </div>
            <div class="social_h">
                <a href=""><img src="./media/social/twitter.svg"></a>
                <a href=""><img src="./media/social/facebook.svg"></a>
                <a href=""><img src="./media/social/instagram.svg"></a>
                <a href=""><img src="./media/social/pinterest.svg"></a>
                <a href=""><img src="./media/social/youtube.svg"></a>
            </div>
        </div>
        <div class="white_head">              
            <a href="index.php"><h1><img src="./media/лого.PNG" width="150" ></h1></a>
            <div class="w_h_links">
                <a href="catalog.php">Колекція</a>
                <a href="history.php">Історія</a>
                <a href="program.php">Програма</a>
                <a href="contact.php">Відвідати</a>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="blank"></div>
        <div class="navigation">
            <a href="index.php">Головна</a>
            <img src="./media/5f8f84f3d4d23a31c1f2fcae_arrow-right-mini-icon.svg">
            Колекція
        </div>
        <div class="all">
            <div class="a_header">
                <h1>Усі експонати</h1>
                <form>
                    <div class="w_h_links">
                    <div class="a_h_radio">
                        <input id="r1" type="radio" name="type" >
                        <a href="catalog.php" onclick="document.getElementById('a_h_radio').submit()">Усі експонати</a>
                    </div>
                    <div class="a_h_radio">
                        <input id="r2" type="radio" name="type" >
                        <a href="catalogsakhnovski.php" onclick="document.getElementById('a_h_radio').submit()">Дім Сахновських</a>
                    </div>
                    <div class="a_h_radio">
                        <input id="r3" type="radio" name="type" checked>
                        <label for="r3">Дім Ханенків</label>
                    </div>
                </div>
                </form>
            </div>
            <div class="showcase">
                <?php
                    $link = mysqli_connect('localhost', 'root', '', 'museum') 
                        or die("Ошибка " . mysqli_error($link));
                    
                    $query="SELECT name, photo FROM collection LEFT JOIN collection_name ON collection_name.id_collection=collection.id_collection WHERE name_collection = 'Дім Ханенків'";
                    #$result=mysqli_query($link , $query);
                    $result=$link->query($query);
                    $project=mysqli_fetch_assoc($result);
                    $i = 0;
                    foreach($result as $row) {
                        $i = $i + 1;
                        $image ='media/khanenko/'.$row['photo'];
                        if ($i%4==1) echo "<div class='s_row'>";
                        echo "<a href='' class='product'>
                                <img src='".$image."'>
                                <div class='p_info'>
                                <p class='p_i_text'>".$row['name']."</p>
                                </div></a>
                                ";
                        if ($i%4==0) echo "</div>";
                    }
                ?>                
            </div>
        </div>
        <div class="foot">
            <div class="sub">
                <div class="s_info">
                    <img src="./media/social/telegram.svg" style=" max-width: 100px">
                    <h1>Підписуйся, щоб не пропустити нові експозиції & отримай<span>  знижку 10% !</span></h1> </div>
                <form action="includes/email.php" method="POST">
                     <input class="s_f_email" name="name" placeholder="Введіть ім'я...">
                        <input class="s_f_email" type="email" name="email" placeholder="Введіть @email...">
                         <button class="btn btn1" type="submit"> Підписатися → </button>
                </form>
            </div>
            <div class="insta">
                <div class="i_header">
                    <h1>Приєднуйся до нашого Instagram!</h1>
                    <a href="">@MuseumKhanenko</a>
                </div>
                <div class="i_photos">
                    <div class="i_p_left">
                        <img src="./media/insta/5f8f84f3d4d23a4687f2fc98_instagram-02.jpg">
                        <img src="./media/insta/5f8f84f3d4d23a5bfdf2fc9b_instagram-03.jpg">
                        <img src="./media/insta/5f8f84f3d4d23a618af2fcb0_side-image-02.jpg">
                    </div>
                    <div class="i_p_left">
                        <img src="./media/insta/5f8f9748b2ae71b90dee5df4_1488193340773.jpg">
                        <img src="./media/insta/5f8f9789aeb3fbf6c6eafeed_завантаження (1).jpg">
                        <img src="./media/insta/5f8f9806dd6620f0d2a4f2fc_30907.970.jpg">
                    </div>
                </div>
                <a class="btn btn1" href="">Більше фото →</a>
            </div>
            <div class="footer">
                <div class="footerf">
                <a href="index.php"><img src="media/лого1.PNG" width="150" ></a>
                <div class="f_links">
                    <a href="catalog.html">Колекція</a>
                    <a href="history.html">Історія</a>
                    <a href="program.html">Програма</a>
                    <a href="contacts.html">Відвідати</a>
                </div>
            
                    <p>Адреса
                    <br>Україна, м. Київ,
                    <br>вул. Терещенківська, 15-17</p>
                    <p>Телефон
                    <br>+380 44 288-14-50
                    <br>+380 44 235-32-90</p>
                    <p>Email
                    <br>khanenkomuseum@ukr.net
                    <br>museumkhanenko@gmail.com
                    </p>
                <div class="social">
                    <a href=""><img src="./media/social/twitter.svg"></a>
                    <a href=""><img src="./media/social/facebook.svg"></a>
                    <a href=""><img src="./media/social/instagram.svg"></a>
                    <a href=""><img src="./media/social/pinterest.svg"></a>
                    <a href=""><img src="./media/social/youtube.svg"></a>
                </div>
                </div>
                <hr>
                <p>© 1919-2021 Музей мистецтв імені Богдана та Варвари Ханенків.</p>
            </div>

        </div>
    </div>
</body>
</html>


