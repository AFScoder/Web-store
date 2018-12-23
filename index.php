<?php
    include "header.php";
?>
<main>
    <h1>новые поступления весны</h1>
    <h2>мы подготовили для вас лучшие новинки сезона</h2>
    <button>
        <a href="#">посмотреть новинки</a>
    </button>
    <div class="gallery">
        <div class="gallery-item" >
            <img src="/pseudoname/web-store/images/1.jpg" alt="" id="high-block">
        </div>
        <div class="gallery-item" id="season">
            <img src="images\icon\attention-sign-outline.png" alt="">
            <p>каждый сезон мы подготавливаем для вас исключительно лучшую модную одежду. Следите за новинками!</p>
        </div>
        <div class="gallery-item">
            <img src="images\3.jpg" alt="">
        </div>
        <div class="gallery-item" id="shoes">
            <h2>элегантная обувь</h2>
            <h3>ботинки, кроссовки</h3>
        </div>
        <div class="gallery-item">
        </div>
        <div class="gallery-item" id="jeans">
            <h2>джинсы</h2>
            <h3>от 3200 руб</h3>
        </div>
        <div class="gallery-item" id="season">
            <img src="images\icon\attention-sign-outline.png" alt="">
            <p>самые низкие цены в Москве. </p>
            <p>нашли дешевле?</p>
            <p>вернём разницу!</p>
        </div>
        <div class="gallery-item">
            <img src="/pseudoname/web-store/images/4.jpg" alt="" id="high-block">
        </div>
        <div class="gallery-item">
            <img src="images\5.jpg" alt="">
        </div>
        <div class="gallery-item" id="shoes">
            <h2>аксессуары</h2>
        </div>
        <div class="gallery-item" id="sports">
            <h2>спортивная одежда</h2>
            <h3>от 590 руб</h3>
        </div>
        <div class="gallery-item">
        </div>
    </div>
    <div class="subscribe">
        <h2>будь всегда в курсе выгодных предложений!</h2>
        <h3>подписывайся и следи за новинками и выгодными предложениями</h3>
        <form action="">
            <input type="text" placeholder="Введите Ваш e-mail">
            <button type="submit">Отправить</button>
        </form>
    </div>
</main>
<script src="jquery-3.3.1.min.js"></script>
<!-- <script src="main.js"></script> -->
<?php
    include ('footer.php');
?>