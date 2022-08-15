<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     
    <script src="js/main.js"></script>
    <title>Головна</title>
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
        <div class="welcome">
            
        <div class="wel">
        <p class="p_wel" id="museum_work"></p>
        <h1 >Відкрийте по-новому Дім Ханенків!</h1>
        <a class="btn btn1" href="programs1.php">Обрати екскурсію →</a>
        </div>
        </div>
    
        <div class="two">
            <div class="t_khanenko">
                <img src="./media/h-4.jpg">
                <div class="t_p_text">
                    <h1>Дім <br> Ханенків</h1>
                    <a class="btn btn1" href="https://my.matterport.com/show/?m=GR38x621JeA" target="_blank">3D-тур</a>
                </div>
            </div>
            <div class="t_sakhnovski">
                <div class="t_w_text">
                    <h1>  Дім Сахновських</h1>
                    <a class="btn btn1 btn_S" href="https://my.matterport.com/show/?m=zSQs9HAWM25" target="_blank">3D-тур</a>
                </div>
                <img src="./media/видео2.PNG">
            </div>
        </div>
        <div class="khanenko">
            <div class="p_header">
                <h1>Дім Ханенків</h1>
                <div class="p_h_link">
                    <a  href="catalogkhanenko.php" >Уся колекція →</a>
                </div>
            </div>
            <div class="showcase">
                <div class="s_row">
                    <?php
                        $link = mysqli_connect('localhost', 'root', '', 'museum') 
                            or die("Ошибка " . mysqli_error($link));
                        
                        $query="SELECT name, photo FROM collection LEFT JOIN collection_name ON collection_name.id_collection=collection.id_collection WHERE name_collection = 'Дім Ханенків' ORDER BY id_exhibit DESC LIMIT 4";
                        #$result=mysqli_query($link , $query);
                        $result=$link->query($query);
                        $project=mysqli_fetch_assoc($result);
                        foreach($result as $row) {
                            $image ='media/khanenko/'.$row['photo'];
                            echo "<a href='' class='product'>
                                    <img src='".$image."'>
                                    <div class='p_info'>
                                    <p class='p_i_text'>".$row['name']."</p>
                                    </div></a>";
                                }
                    ?>
                </div>
            </div>
        </div>
        <div class="khanenko">
            <div class="p_header">
                <h1>Дім Сахновських</h1>
                <div class="p_h_link">
                    <a href="catalogsakhnovski.php">Уся колекція →</a>
                </div>
            </div>
            <div class="showcase">
                <div class="s_row">
                    <?php
                        
                        $query="SELECT name, photo FROM collection LEFT JOIN collection_name ON collection_name.id_collection=collection.id_collection WHERE name_collection = 'Дім Сахновських' ORDER BY id_exhibit DESC LIMIT 4";
                        #$result=mysqli_query($link , $query);
                        $result=$link->query($query);
                        $project=mysqli_fetch_assoc($result);
                        foreach($result as $row) {
                            $image ='media/sakhnovski/'.$row['photo'];
                            echo "<a href='' class='product'>
                                    <img src='".$image."'>
                                    <div class='p_info'>
                                    <p class='p_i_text'>".$row['name']."</p>
                                    </div></a>";
                                }
                    ?>
                    
                </div>
            </div>
        </div>
        <div class="story">
            Про музей
            <h1>Історія дому Ханенків</h1>
            Музей Ханенків – чільний музей світового мистецтва в Україні. Фонд налічує більше 25 000 предметів. 
            <br></br>
            <button class="btn btn1" onclick="myFunction();return false;">Click me </button>
        </div>
        <div id="video"></div>
        <h1 class="text">Розклад і вартість</h1>
        <div class="ad">
            <div class="a_info">
                <h1>Години роботи:</h1>
                <p class="p_a_info">Музей працює з середи по неділю. Понеділок та вівторок – вихідні дні.</p>
                <p class="p_a_info">Робочі години з 10:30 до 17:30. Каси працюють до 17:00. У перший четвер місяця – санітарні години з 14:00. Каси працюють до 13:30. </p>
                <p class="p_a_info">Останній прийом - за 1 годину до закриття. Евакуація кімнат починається за 30 хвилин до закриття.</p>
                <a class="btn btn1" href="programs1.php">Обрати екскурсію →</a>
            </div>
            <img src="./media/время.png">
        </div>
        <div class="ad">
            <div class="a_info">
                <h1>Вартість:</h1>
                <p class="p_a_info">Право на безкоштовний візит мають:</p>
                <ul>
                <?php
                $link = mysqli_connect('localhost', 'root', '', 'museum') 
                    or die("Ошибка " . mysqli_error($link));
                
                $query="SELECT * FROM benefits";
                $result=$link->query($query);

                foreach($result as $row) {
                    echo "<li>".$row['name_benefits'].";</li>";
                    }
                   ?>
                    </ul>
                <a class="btn btn1" href="program.html">Обрати екскусію →</a>
            </div>
            <img src="./media/цена.JPG">
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

    <script>
        let today = new Date();
        let weekday = today.getDay();
        if (weekday == 1 || weekday == 2) document.getElementById("museum_work").innerHTML = "Музей сьогодні не працює";
        else document.getElementById("museum_work").innerHTML = "Музей працює сьогодні з 9:00 до 18:00";
    </script> 

</body>
</html>