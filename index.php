<html>
<head>
    <meta charset="windows-1251">
    
    <link rel="stylesheet" href="CSS/style.css">
    
    <link href="https://fonts.googleapis.com/css?family=Kurale|Marmelad|Philosopher" rel="stylesheet">  
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    
</head>

<body>
    <header>
        
               <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script type="text/javascript" src='script/scriptJS.js'></script>
      
       <div class="prolauder">
      <div class='cssload-loader'>
  <div class='cssload-inner cssload-one'></div>
  <div class='cssload-inner cssload-two'></div>
  <div class='cssload-inner cssload-three'></div>
</div>
</div>
        
        <div class="logo">
            <a href="">DOЛИС</a>
        </div>
        
        <div class="contacts">
            <ul>
                <li><img src="images/icons8-%D0%A1%D0%BE%D0%BE%D0%B1%D1%89%D0%B5%D0%BD%D0%B8%D0%B5-25.png"><p>Zazulnitski@mail.ru</p></li>
                <li><img src="images/icons8-%D0%A2%D0%B5%D0%BB%D0%B5%D1%84%D0%BE%D0%BD-25.png"><p>
                +375296894108</p></li>
                <li><a href="#openModal"><img class="imgOne" src="images/icons8-%D0%97%D0%B0%D0%BC%D0%BE%D0%BA-25%20(2).png"><img class="imgTwo" src="images/icons8-%D0%A0%D0%B0%D0%B7%D0%B1%D0%BB%D0%BE%D0%BA%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D1%82%D1%8C-25%20(1).png">ВОЙТИ</a>

                <div id="openModal" class="modalDialog">
                    <div>
                        <a href="" class="close">x</a>
                        
                        <p>АВТОРИЗАЦИЯ</p>
                        <form action="autorization.php" method="post">
                            <input type="login" placeholder="Логин" name="login">
                            <input type="password" placeholder="Пароль" name="password">
                            
                            <input type="submit" value="Войти">
                        </form> 
                    </div>
                </div>

                </li>
            </ul>
        </div>
    </header>
    
    <nav>
        <div class="navigation">
            
            <ul id="menu" >
                <li><a onclick="openHome()">ГЛАВНАЯ</a></li>
                <li>РАЗДЕЛЫ
                    <div class="submenu">   
                        <div id="submenu">
                            <ul>
                                <p><a onclick="openFurnitureBlock() ">КАТАЛОГ МЕБЕЛИ</a></p>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Мебель для гостиной</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Детские</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Кабинеты</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Мягкая мебель</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Прихожие</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Светильники</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Спальни</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Столы и стулья</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Зеркала</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Предметы интерьера</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Матрасы</li>
                            </ul>
                            <ul class="list">
                                <p><a onclick="openFurnitureBlock()">ФАБРИКИ</a></p>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Alf</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Adrenalina</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Arteal</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Asnagi</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Calligaris</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Cattelan Italia</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Domingo Salotti</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">FriulSedie</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Het Anker</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Jetclass</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Karel Mintjens</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Keoma</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Lineas</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Luis Silva</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Mantellassi</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Panamar</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Perfecta</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Pigoli</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Schuller</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Tonin Casa</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Tonon</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Tosconova</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Trebol</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Turri</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Van Houdt</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Vipack</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Vismara Design</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Zanaboni</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Castro Lighting</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Dina Tapizados</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Monrabal Chirivella</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Meubar</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Fama</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Recor</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Connubia</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Relotti</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Velda</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Rigo Salotti</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Aleal</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">GiorgioCasa</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">MiassMobili</li>
                                <li><img src="images/icons8-%D0%92%D0%BF%D0%B5%D1%80%D0%B5%D0%B4-15.png">Eichholtz</li>
                            </ul>
                        <ul><p><a>АКЦИИ И РАСПРОДАЖИ</a></p></ul>
                        </div>
                        
                    </div>  
                </li>
                <li><a href="#aboutAs">О НАС</a></li>
                <li><a href="">КОНТАКТЫ</a></li>
            </ul>      
        
            <div class="search">
                
                <form action="" method="">
                
                    <input type="search" id="search">
                
                </form>
                    
                <img src="images/icons8-%D0%9F%D0%BE%D0%B8%D1%81%D0%BA-25.png" onclick="opensearch('search'); return false">
            </div>   
        </div>
    </nav>
    
    
    
    <content id="home">
  <div class="container-slider">
        
                    <ul id="slides">
                        <button id="previous"></button>
                        
                        <li class="slide showing">
                            <img src="images/furnitureOne.gif">
                        </li>
                        
                        <li class="slide">
                            <img src="images/furnitureTwo.gif">
                        </li>
                        
                        <li class="slide">
                            <img src="images/furnitureThree.gif">
                        </li>
                        
                        <button id="next"></button>
                    </ul>
        
                </div>
    
    <div class="aboutAs" id="aboutAs">
        
        <div class="textAboutAs">
        
            <span>О нас</span>
            
            <p> На мебельном рынке фирма «Долис» существует уже более 15 лет. Нашими партнерами являются фламандские, итальянские, испанские и португальские производители.Основным партнером является бельгийский концерн «Flanders Interiors», основанный в 1995 году. Он представляет фламандских производителей мебели для дома, освещения, картин и других декоративных товаров. На протяжении всего этого времени наши партнеры расширяли ассортимент и совершенствовали свою продукцию. Именно поэтому она настолько качественна и функциональна. 
            
            <br />    
                
            Салоны ООО «Долис», площадью 240-250 м2, находятся на разных улицах в центральной части города. На экспозициях, все время пополняющихся новинками, выставлена продукция ведущих фабрик, представляющих разный ценовой сегмент.</p>
            
        </div>
        
        <div class="advantages">
            
            <div class="textAdvantages">
            
                <div class="line"></div>
                
                <p><span>Эксклюзивный дизайн</span>
                «Долис» сотрудничает с ведущими дизайнерами г. Калининграда и области, находится в постоянном поиске новых предложений, дабы разнообразить стилевые направления.
                </p>
                
            </div>
            
            <div class="textAdvantages">
            
                <div class="line"></div>
                
                <p><span>Профессиональная команда</span>jinrengsig</p>
                
            </div>
            
            <div class="textAdvantages">
            
                <div class="line"></div>
                
                <p><span>Разумные цены</span>
                Огромный выбор стилевых направлений и цветов позволяет подобрать абсолютно индивидуальное решение для каждого покупателя по весьма привлекательной цене.</p>
                
            </div>
            
        </div>
        
        <img src="images/fame_420_auto_5_80.jpg">
        
    </div>
        
    <div class="testimonialsBlock">
    
        <p>Отзывы</p>
        
        <div class="testimonials">


            <ul id="slidesTestimonials">


                <li class="slides showing">
                    <textarea disabled class="textarea">Отличный магазин!Долго искали диван, то модель не та, то выбора тканей нет, то дорого.Здесь большой выбор моделей и тканей.Из-за нашей неопределённости мы задержали продавцов на 1 час после закрытия магазина! В другом месте от нас постарались бы побыстрей избавиться...но не здесь!Нам рассчитали цену в разных вариантах понравившихся тканей и наполнителей.Огромное спасибо продавцам-консультантам Стерховой Ирине и Подберезской Светлане за помощь в выборе хорошего дивана по приемлемой цене!!!</textarea>
                    12-07-2015
                </li>

                <?php

                require_once 'connecting.php';
                $link = mysqli_connect($server,$userBD,$passwordBD,$database)
                or die("Ошибка подключения".mysqli_error($link));
                mysqli_query($link, "SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
                mysqli_query($link, "SET CHARACTER SET 'utf8'");


                $zapros = "SELECT Reviews, DATE_FORMAT(CreationDateForReview,'%d-%m-%Y') FROM Reviews";
                $rezultat = mysqli_query($link, $zapros) or die("Ошибка " . mysqli_error($link));


                if ($rezultat) {
                    $rowCount = mysqli_num_rows($rezultat);
                    for ($i = 0; $i < $rowCount; $i++) {
                        $str = mysqli_fetch_row($rezultat);
                        echo "<li class='slides'><textarea disabled class='textarea'>". $str[0]."</textarea>".$str[1]."</li>";

                    }
                }

                ?>
                   
            </ul>

        </div>
        
    </div>   
        
    </content>
    
    <!-----------------------content products------------------------------------>
    
         <content id="furnitureBlock">
             
            <section id="furniture">
                
            <div class="catalogFurniture">
            
                <p class="catalog">Каталог мебели</p>
                
                <ul>
                    <li><a href>Мебель для гостинной</a></li>
                    <li><a href>Детские</a></li>
                    <li><a href>Кабинеты</a></li>
                    <li><a href>Мягкая мебель</a></li>
                    <li><a href>Прихожие</a></li>
                    <li><a href>Светильники</a></li>
                    <li><a href>Спальни</a></li>
                    <li><a href>Столы и стулья</a></li>
                    <li><a href>Зеркала</a></li>
                    <li><a href>Предметы интерьера</a></li>
                    <li><a href>Матрасы</a></li>
                </ul>
            
            </div>
             
             <div class="products">
                 
                 <p>Детская</p>
                 
                <div class="catalogProducts">
                 
                    <div><img src="images/%D0%B4%D0%BE%D0%BB%D0%B8%D1%811.png"></div>
                    <div><img src="images/%D0%B4%D0%BE%D0%BB%D0%B8%D1%812.png"></div>
                    <div><img src="images/%D0%94%D0%BE%D0%BB%D0%B8%D1%814.png"></div>
                    <div><img src="images/%D0%94%D0%BE%D0%BB%D0%B8%D1%814.png"></div>
                    <div><img src="images/%D0%B4%D0%BE%D0%BB%D0%B8%D1%815.png"></div>
                    <div><img src="images/%D0%B4%D0%BE%D0%BB%D0%B8%D1%816.png"></div>
                    <div><img src="images/%D0%B4%D0%BE%D0%BB%D0%B8%D1%817.png"></div>
                    <div><img src="images/%D0%B4%D0%BE%D0%BB%D0%B8%D1%818.png"></div>
                    <div><img src="images/%D0%B4%D0%BE%D0%BB%D0%B8%D1%819.png"></div>
                    <div><img src="images/%D0%B4%D0%BE%D0%BB%D1%81%D0%B810.png"></div>
                    <div><img src="images/%D0%B4%D0%BE%D0%BB%D0%B8%D1%8111.png"></div>
                    <div><img src="images/%D0%B4%D0%BE%D0%BB%D0%B8%D1%8112.png"></div>

                </div>

             </div>
             
             <div class="factory"> 
                    <ul>
                        <p>ФАБРИКИ</p>
                            <li>Alf</li>
                            <li>Adrenalina</li>
                            <li>Arteal</li>
                            <li>Asnagi</li>
                            <li>Calligaris</li>
                            <li>Cattelan Italia</li>
                            <li>Domingo Salotti</li>
                            <li>FriulSedie</li>
                            <li>Het Anker</li>
                            <li>Jetclass</li>
                            <li>Karel Mintjens</li>
                            <li>Keoma</li>
                            <li>Lineas</li>
                            <li>Luis Silva</li>
                            <li>Mantellassi</li>
                            <li>Panamar</li>
                            <li>Perfecta</li>
                            <li>Pigoli</li>
                            <li>Schuller</li>
                            <li>Tonin Casa</li>
                            <li>Tonon</li>
                            <li>Tosconova</li>
                            <li>Trebol</li>
                            <li>Turri</li>
                            <li>Van Houdt</li>
                            <li>Vipack</li>
                            <li>Vismara Design</li>
                            <li>Zanaboni</li>
                            <li>Castro Lighting</li>
                            <li>Dina Tapizados</li>
                            <li>Monrabal Chirivella</li>
                            <li>Meubar</li>
                            <li>Fama</li>
                            <li>Recor</li>
                            <li>Connubia</li>
                            <li>Relotti</li>
                            <li>Velda</li>
                            <li>Rigo Salotti</li>
                            <li>Aleal</li>
                            <li>GiorgioCasa</li>
                            <li>MiassMobili</li>
                            <li>Eichholtz</li>
                            </ul>
                 </div>
        </section>
        </content>
    
    
    <content class="contactsBlock"></content>
    
    <!-------------------------footer----------------------------------->
    <footer>
        <div class="logo">
            <a href="">DOЛИС</a>
        </div>
        
        <div>
            <ul>
                <li><a href="#">ГЛАВНАЯ</a></li>
                <li><a href="#">РАЗДЕЛЫ</a></li>
                <li><a href="#aboutAs">О НАС</a></li>
                <li><a href="#">КОНТАКТЫ</a></li>
            </ul>
        </div>
        
    </footer>
    <script src="script/jsOne.js"></script>
</body>
</html>