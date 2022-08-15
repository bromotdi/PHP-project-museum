<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/program.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>
    <title>Відвідати</title>
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
            Програма
        </div>
        <div class="all">
            <div class="a_int">
                <p class="a_green">Що ми можемо запропонувати?</p>
                <h1>Коротко про Музей Ханенків</h1>
                <p>Програми Музею Ханенків – це заходи різні за тематикою та форматом. Вони створюються та вдосконалюються відповідно до запитів аудиторії та новацій у музейній справі, культурному дозвіллі, педагогіці, психології тощо.</p>
                <div class="p_h_link">
                <a href="">Більше про нас →</a>
            </div>
            </div>
            <img class="back" src="./media/Музей_мистецтв_імені_Богдана_та_Варвари_Ханенків_Київ.jpg">
            <h1 class="margin">Музей пропонує широке розмаїття екскурсій та програм: з відкритим або усталеним сценарієм, камерні та масштабні, різні за тематичним фокусом.</h1>
            <?php
                $link = mysqli_connect('localhost', 'root', '', 'museum') 
                    or die("Ошибка " . mysqli_error($link));
                
                $query="SELECT * FROM project ORDER BY id_project LIMIT 3";
                #$result=mysqli_query($link , $query);
                $result=$link->query($query);
                $project=mysqli_fetch_assoc($result);
                $inc = 1;
                foreach($result as $row) {
                    $inc = $inc + 1;
                    $image ='media/'.$row['photo'];
                    if ($inc%2==0) {
                    echo "<div class='banner'>
                            <div class='b_info'>
                                <h1>".$row['name']."</h1>
                                <p>".$row['description']."</p>        
                                <a class='btn btn1' href='contacts.html'>Забронювати квиток →</a>
                            </div>
                            <img class='move' src='".$image."'>
                    </div>";
                    }
                    else {
                        echo "<div class='banner'>
                                <img class='move' src='".$image."'>
                                <div class='b_info'>
                                    <h1>".$row['name']."</h1>
                                    <p>".$row['description']."</p>        
                                    <a class='btn btn1' href='contacts.html'>Забронювати квиток →</a>
                                </div>
                        </div>";
                    }
            }
            ?>
        </div>
        
        <div class="story">
            Про музей
            <h1>Історія дому Ханенків</h1>
            Музей Ханенків – чільний музей світового мистецтва в Україні. Фонд налічує більше 25 000 предметів. 
            <br></br>
            <button class="btn btn1" onclick="myFunction();return false;">Click me </button>
      
        </div>
        <div id="video"></div>

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