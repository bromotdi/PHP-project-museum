<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/contacts.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="main.js"></script>
   
    

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
            <!-- <div class="w_h_blank"></div>
            <a class="w_h_cart" href=""><div class="w_h_c_text">Квитки</div><img src="../media/cart.png" width="30" margin="30px" width="30" margin="30px"><div class="w_h_c_num">3
            </div></a> -->
        </div>
    </div>
  
    <div class="body">
        <div class="blank"></div>
        <div class="navigation">
            <a href="index.php">Головна</a>
            <img src="./media/5f8f84f3d4d23a31c1f2fcae_arrow-right-mini-icon.svg">
            Відвідати
        </div>
        <div class="all">
            <iframe class="a_maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.9963912462786!2d30.512405515731054!3d50.44116787947418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cef919bbf7cb%3A0xe7a80e0dc3e26f54!2z0YPQuy4g0KLQtdGA0LXRidC10L3QutC-0LLRgdC60LDRjywgMTUsINCa0LjQtdCyLCAwMTAwNA!5e0!3m2!1sru!2sua!4v1621820240032!5m2!1sru!2sua" ></iframe>
            <div class="a_info">

                <form class="a_i_form" action="includes/orders.php" method="post" id="id">
                    <h1>Зробити замовлення:</h1>
                    <label>ПІБ:</label>
                    <input class="a_i_f_text" type="text" name="names" placeholder="Введіть ПІБ">
                    <label>Email Address:</label>
                    <input class="a_i_f_text" name="email" placeholder="Your contact email">
                    <label>
                    Екскурсія: 
                        <select class="a_i_f_option" name="project">


                        <?php
                $link = mysqli_connect('localhost', 'root', '', 'museum') 
                    or die("Ошибка " . mysqli_error($link));
                
                $query="SELECT * FROM project";
                $result=$link->query($query);
                foreach($result as $row) {
                    echo "<option>".$row['name'];
                    }
                   ?>

                    </select>
                    </label>
                    <label>Дата:</label>
                    <input class="a_i_f_text" type="date" name="date" id="date">
                    <label>Статус:
                    <select class="a_i_f_option" name="status">
                    <?php
                $link = mysqli_connect('localhost', 'root', '', 'museum') 
                    or die("Ошибка " . mysqli_error($link));
                
                $query="SELECT * FROM status";
                $result=$link->query($query);
                foreach($result as $row) {
                    echo "<option>".$row['age'];
                    }
                   ?>
                   </select>
                    </label>
                   <label>Пільги на безкоштовний візит (за наявності посвідчення):</label>
                        <select class="a_i_f_option" name="benefits">
                      
                      <?php
                $link = mysqli_connect('localhost', 'root', '', 'museum') 
                    or die("Ошибка " . mysqli_error($link));
                
                $query="SELECT * FROM benefits";
                $result=$link->query($query);

                foreach($result as $row) {
                    echo "<option>".$row['name_benefits'];
                    }
                   ?>
                        </select>
                    </label>

                    <label>Доповнення:</label>
                    <input class="a_i_f_area" name="coment" placeholder="Напишіть коментар">
                    <button class="btn btn1" type="submit">Забронювати →</button>
                </form>
        
        

                <div class="a_i_info">
                    <h1>Контакти:</h1>
                    Україна, м. Київ,<br>вул. Терещенківська, 15-17<br>
                    +044 288 14 50
                    <div class="b">museumkhanenko@gmail.com</div>
                    <h2>Підтримай нас:</h2>
                    <div class="a_i_i_socials">
                        <a class="twitter" href=""><img src="./media/social/twitter.svg"></a>
                        <a class="facebook" href=""><img src="./media/social/facebook.svg"></a>
                        <a class="instagram" href=""><img src="./media/social/instagram.svg"></a>
                        <a class="pintrest" href=""><img src="./media/social/pinterest.svg"></a>
                        <a class="youtube" href=""><img src="./media/social/youtube.svg"></a>
                    </div>
                </div>
            </div>
        </div>



        <div class="coments" id="coments">
            <div class="a_info">
                <form class="a_i_form" action="includes/coment.php" method="post" id="id">
                    <h1>Залишити коментар:</h1>
                    <label>ПІБ:</label>
                    <input class="a_i_f_text" type="name" name="name" placeholder="Enter your name">
                    <label>Email Address:</label>
                    <input class="a_i_f_text" name="email" placeholder="Your contact email">
                    <label>Коментар:</label>
                    <input class="a_i_f_area" name="coment" placeholder="Message text">
                    <button class="btn btn1" type="submit">Відправити →</button>
                </form>
               
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


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript">

$('#edit').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('_id')
var names = button.data('names')
var email = button.data('email') 
var project = button.data('project') 
var status = button.data('status')
var benefits = button.data('benefits') 
var coments = button.data('coments') 
var modal = $(this)
modal.find('#_id').val(id)
modal.find('#names').val(names)
modal.find('#email').val(email)
modal.find('#project').val(project)
modal.find('#status').val(status)
modal.find('#benefits').val(benefits)
modal.find('#coments').val(coments)
})
</script>

</body>
</html>


