<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link styles -->
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/first-screen.css">
    <link rel="stylesheet" href="styles/about.css">
    <link rel="stylesheet" href="styles/slider.css">
    <link rel="stylesheet" href="styles/work.css">
    <link rel="stylesheet" href="styles/contacts.css">
    <link rel="stylesheet" href="styles/footer.css">
  	<link rel="stylesheet" href="styles/burger.css">

    <!-- Link fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;900&display=swap" rel="stylesheet">

    <title>Portfolio -> from Andriy</title>
</head>
<body>
    <div class="body__content">
        <header class="header block__wrap">
            <div class="header__content block__content">
                <div class="header__logo logo__wrapper">
                    <div class="logo__ico"><img src="img/ico/myLogo_white.png" alt="logo"></div>
                    <div data-text-one="Andriy Shmagala" data-text-two="Web Developer" class="logo__text">Andriy Shmagala</div>
                </div>
                <nav class="header__menu menu">
                    <ul>
                        <li class="menu__item" ><a href="#about">about</a></li>
                        <li class="menu__item" ><a href="#works">works</a></li>
                        <li class="menu__item" ><a href="#contacts">contacts</a></li>
                        <li class="menu__burger-ico">
                            <div class="menu__burger-wrapper"><div class="menu__burger"></div></div>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
      	<div class="menu-burger block__wrap">
            <div class="menu-burger__content block__content burger-menu__wrapp">
                
            </div>
        </div>
        <div id="first-screen" class="first-screen block__wrap screen">
            <div class="first-screen__content block__content">
                <div class="first-screen__logo logo__ico"><img src="img/ico/myLogo_white.png" alt="logo"></div>
                <div class="first-screen__bottom-block bottom-block">
                    <div class="bottom-block__back"></div>
                    <div class="bottom-block__text">
                        <span>PORTFOLIO FROM</span>
                        <span class="My-name">ANDRIY SHMAGALA</span>
                    </div>
                </div>
            </div>
        </div>
        <div id="about" class="about block__wrap">
            <div class="about__back back"></div>
            <div class="about__content block__content">
                <h1>ABOUT</h1>
                <div class="about__me-wrap">
                    <div class="about__img">
                        <img src="img/i.png" alt="my-photo">
                    </div>
                    <div class="about__info">
                        <div class="about__text">
                            <p>Привет меня зовут Адрей, мне 20 и я Веб-розроботчик.
                                Верстаю адаптивные и кроссбраузерные сайты.
                            </p>
                            <p>
                            В роботе использую HTML, CSS(Scss) , JS,
                            мега крутой React/Redux как с хуками так и с класами.
                            Для взаймодействие с сервером Rest API/ HTTP.
                            Бази даных SQL, MySQL.                            
                            Есть небольшой опыт с PHP и JQuery.
                            мой IDE -> Visual Studio Code
                            контроль версий GIT -> GitGub
                            </p>
                            <p>
                            Если говорить об навыках в Веб-дизайне, то:
                            PS
                            AI
                            XD
                            Figma 
                            </p>
                        </div>
                        <div class="about__tags">
                        <?php
                            $host = 'localhost'; // адрес сервера 
                            $database = 'cv56763_bd'; // имя базы данных
                            $user = 'cv56763_bd'; // имя пользователя
                            $password = '123123'; // пароль

                            $link = mysqli_connect($host, $user, $password, $database);
                                if ($link == false) {
                                    
                                    echo "Извините, возникла проблема на сайте";
                                
                                    
                                    echo "Ошибка: Не удалась создать соединение с базой MySQL и вот почему: \n";
                                    echo "Номер ошибки: " . $mysqli_connect_errno . "\n";
                                    echo "Ошибка: " . $mysqli_connect_error . "\n";
                                    
                                    exit();
                                }

                                $res = mysqli_query($link, "SELECT * FROM `skills`");
                                while (($adb = mysqli_fetch_assoc($res))) {
                                    echo '<div class="about__tag tag">'.$adb['skill'].'</div>';
                                }
                            ?>
                            <!-- <div class="about__tag tag">HTML 5</div>
                            <div class="about__tag tag">CSS 3</div>
                            <div class="about__tag tag">JS</div>
                            <div class="about__tag tag">GULP</div>
                            <div class="about__tag tag">BOOTSTRAP</div>
                            <div class="about__tag tag">BEM</div>
                            <div class="about__tag tag">PHP</div>
                            <div class="about__tag tag">MySQL</div>
                            <div class="about__tag tag">PS</div>
                            <div class="about__tag tag">AI</div>
                            <div class="about__tag tag">XD</div>
                            <div class="about__tag tag">Figma</div> -->
                        </div>
                        <a href="#contacts" class="about__button-wrap">
                            <div class="about__button button button__type1">
                                <div class="button__decoration"></div>
                                <div class="button__text">Зв’язатися</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="works" class="works block__wrap">
            <div class="works__content block__content">
                <h1 class="last-works__title">LAST WORKS</h1>
                <div class="slider last-works">
                <?php

                    $aio = mysqli_query($link, "SELECT * FROM `mywork` LIMIT 4");
                    $indexL = 0;
                        while (($arr = mysqli_fetch_assoc($aio))) {
                            echo '
                            <div class="slider__item">
                                <div class="slide__border">
                                    <div class="slide__content">
                                        <img src="'.$arr["img"].'" alt="my-work">
                                        <div class="slide__hover work__hover">
                                            <div class="slide__eclipse eclipse"></div>
                                            <div class="slide__title-wrap"><h2>'.$arr["title"].'</h2></div>
                                            <a target="_blank" href="'.$arr["link"].'" class="slide__button work__button button__type2">GO</a>
                                        </div>  
                                    </div>
                                </div>   
                            </div>
                            ';
                        $indexL++;
                        }

                ?>
                        
                </div>
                <h1 class="all-works__title">ALL WORKS</h1>
                <div class="all-works__wrap">
                <?php

                    $aio = mysqli_query($link, "SELECT * FROM `mywork`");
                    $indexL = 0;
                        while (($arr = mysqli_fetch_assoc($aio))) {
                            echo '
                            <div class="work__item">
                                <div class="work__hover">
                                    <div class="work__eclipse eclipse"></div>
                                    <h2 class="work__name">'.$arr["title"].'</h2>
                                    <a target="_blank" href="'.$arr["link"].'" class="button__w work__button button__type2">GO</a>
                                </div>
                                <img src="'.$arr['img'].'" alt="work">
                             </div>
                            ';
                        $indexL++;
                        }

                    ?>
                    <div class="all-work__button button">MORE</div>
                    
                </div>
                </div>
            </div>
        </div>
        <div id="contacts" class="contacts block__wrap ">
            <div class="contacts__content block__content">
                <h1>contacts</h1>
                <div class="contacts__cards">
                    <div class="contacts__my-cont-wrap">
                        <div class="contacts__my-cont my-cont__card contacts__border">
                            <h3 class="my-cont__nameNet">Facebook</h3>
                            <div class="my-cont__link contacts__border">
                                <div onclick="copyButton()" class="my-cont__link-copy"><img src="img/ico/Group_25copyIcon.png" alt="copy"></div>
                                <input type="text" class="my-cont__link-text" value="id:004624as465aa" readonly>
                            </div>
                            <div class="my-cont__mes-wrapp">
                                <div onclick="setBusinesCardInfo('viber')" data-mes="viber" data-color="#7360f2" data-link="id:0000001" class="my-cont__mes-ico contacts__border"><img src="img/mes/viber-logo.png" alt="viber"></div>
                                <div onclick="setBusinesCardInfo('facebook')" data-mes="facebook" data-color="#4267B2" data-link="https://www.facebook.com/profile.php?id=100007940146034" class="my-cont__mes-ico my-cont__mes-ico_active contacts__border"><img src="img/mes/1024px-Facebook_Logo_(2019).png" alt="facebook"></div>
                                <div onclick="setBusinesCardInfo('instagram')" data-mes="instagram" data-color="#C13584" data-link="andrii_shmagala" class="my-cont__mes-ico contacts__border"><img src="img/mes/a25f4f58938bbe61357ebca42d23866f.png" alt="instagram"></div>
                                <div onclick="setBusinesCardInfo('telegram')" data-mes="telegram" data-color="#0088CC" data-link="@swed01" class="my-cont__mes-ico contacts__border"><img src="img/mes/768px-Telegram_Messenger.png" alt="telegram"></div>
                                <div class="my-cont__mes-ico contact__mes-color"></div>
                            </div>
                        </div>
                    </div>
                    <div class="contacts__form-wrap">
                        <form id="form" class="contacts__border contact__form" action="/scripts/form.php" method="POST">
                            <h4>Залишити контакти</h4>
                            <div class="form__input-wrap contacts__border">
                                <div class="form__ico"><img src="img/ico/user.svg" alt="user"></div>
                                <input autocomplete="off" form="form" name="user" type="text" class="form__input _val _user" placeholder="name">
                            </div>
                            <div class="form__input-wrap contacts__border">
                                <div class="form__ico"><img src="img/ico/mail.svg" alt="user"></div>
                                <input autocomplete="off" form="form" name="mail" type="email" class="form__input _val _mail" placeholder="mail">
                            </div>
                            <div class="form__input-wrap contacts__border">
                                <div class="form__ico"><img src="img/ico/speech-bubble.svg" alt="user"></div>
                                <textarea form="form" name="message" class="form__textarea" placeholder="message" ></textarea>
                            </div>
                            <button type="submit" class="button button__type1 form__button">
                                <div class="button__decoration"></div>
                                <div class="button__text">Відправити</div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer block__wrap">
            <div class="footer__logo"><img src="img/ico/myLogo_white.png" alt="logo"></div>
            <div class="footer__text">THANKS FOR WATCH</div>
        </footer>
        <div class="popup__area">
            
        </div>
    </div>

    <!-- Link scripts -->
    <script src="/scripts/main.js"></script>
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="/scripts/slick.min.js"></script>
    <script src="/scripts/slider.js"></script>
    <script src="/scripts/form.js"></script>
</body>
</html>