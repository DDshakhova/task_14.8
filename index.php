<?php session_start();
include_once('functions.inc.php');
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Спа-салон Ли Юэ</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Ли Юэ спа</h1>
        </header>
        <footer>
            <div class="links">
                <a href="#">Вакансии</a>
                <a href="#">Контакты</a>
                <a href="#">Реклама</a>
            </div>
            <?php if(!getCurrentUser()){
             echo '
            <div class="stranger">
            <a href="login.php">&raquo; Войти</a>
            <br>
            <br>
            <br>
            <a href="signup.php">&raquo; Зарегистрироваться</a>
            </div>';
            } else {
            echo '<span class="familiar">'.hello().getCurrentUser() .'!</span>  <div class="stranger">';
            include_once('birthday.php');
            echo '<a href="logout.php" >&raquo; Выйти</a>
            </div>';
         }
?>
 
<section class="service" ><h3>Наши услуги</h3>
<p>Комплекс расслабляющих процедур «Янтарный туман» 5000&#8381</p>
<p>Комплекс тонизирующих процедур «Танец журавля» 3200&#8381 </p>
<p>Комплекс омолаживающих процедур «Медовый лотос» 8000&#8381 </p>
<p>Комплексная программа «На склонах Ли Юэ» 12000&#8381 </p>
<p>Подарочные сертификаты -5000&#8381, -10000&#8381, -15000&#8381 </p>

<?php if(!getCurrentUser()){
   echo '<div class="offer"><span> Авторизуйтесь, чтобы получить персональную скидку!</span></div>'; 
} else {
  echo '<div class="offer"><span>Специальное предложение и только для Вас - скидка в 3% в течение ближайших суток. До конца акции: <code id="timer"></code></span><script src="js/timer.php" ></script></div>'; 
  
}?>
</section>


<section class="album" ><h3>Фото салона</h3>
<p>Не только наши мастера, но и сам интерьер нашего салона настраивает на полное расслабление. Стоит вам переступить порог, как цвета и ароматы спокойстивя окутают вас и заставят забыть все проблемы. Приезжайте к нам, мы обещаем настоящий комфорт для каждого посетителя.</p>
<div><img src="./images/chelsea-shapouri-r40EYKVyutI-unsplash.jpg">
<img src="./images/huum-K65M3GbRYq8-unsplash (1).jpg">
<img src="./images/jared-rice-PibraWHb4h8-unsplash.jpg">
</div>
</section>
</body>
</html>
            <div class="copyright">Copyright © Ли Юэ 2022</div>
        </footer>
    </body>
</html>