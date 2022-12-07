<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="shortcut icon" href="./Images/logo 1.svg" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <title>HomePlants</title>
</head>

<body>
    <?php include 'catalog.php'?>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href=""><img src="./Images/logo 1.svg"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent"
                    aria-contrlos="navContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navContent" class="collapse navbar-nav navbar-collapse justify-content-end">
                    <a href="#us" class="nav-link">О нас</a>
                    <a href="#catalog" class="nav-link">Каталог</a>
                    <a href="#blog" class="nav-link">Блог</a>
                    <a href="#contacts" class="nav-link">Контакты</a>
                    <a href="#faq" class="nav-link">FAQ</a>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="description">
                <h1>Джунгли у вас дома</h1>
                <p>У нас растения за которыми легко ухаживать</p>
                <a href="#catalog"><button class="btn btn-outline-dark">Выбрать растение</button></a>
            </div>
        </div>
    </header>

    <main>
        <section id="us">
            <div class="container">
                <div class="row justify-content-between align-items-center about">
                    <div class="col-lg-5 col-md-5 col-sm-10">
                        <img src="./Images/about.png" class="img-fluid">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10 desc">
                        <h2>О нас</h2>
                        <p>Наша команда из опытных специалистов выращивает здоровые растения,
                            которые будут радовать вас долгие годы. Сопровождаем каждого клиента
                            по вопросам ухода, а при покупке даем памятку по растению.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="catalog">
            <div class="container">
                <div class="catalog">
                    <div class="catalog-header">
                        <h2>Наши растения</h2>
                        <p>Выберите растение себе по душе</p>
                    </div>

                    <div class="row">
                        <?php foreach($data as $product) : ?>
                        <div class="col-lg-4 col-md-4 col-sm-10">
                            <div class="card">
                                <img src="./Images/<?=$product['img'] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-desc d-flex justify-content-between">
                                        <p class="card-title"><?=$product['title']?></p>
                                        <p class="card-text"><?=$product['min_price']?> - <?=$product['min_price']?>₽</p>
                                    </div>
                                    <a href="#order" class="btn btn-outline-dark">Заказать</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </section>
        <div class="CTA d-flex align-items-center">
            <div class="container">
                <div class="col-lg-9 col-md-9 c0l-sm-12 CTA-header">
                    <h3>Получите гайд по любому растению бесплатно</h3>
                </div>
                <form method="POST" action="form.php">
                <div class="row CTA-form">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <input type="text" name="name" class="form-control" placeholder="Имя" arla-label="Name">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <input type="email" name="email" class="form-control" placeholder="E-mail" arla-label="E-mail">
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-outline-dark mt-4">Получить гайд</button>
            </div>
        </form>
        </div>

        <section id="blog">
            <div class="container">
                <div class="blog">
                    <div class="blog-header">
                        <h2 class="text-left">Блог</h2>
                        <p class="text-left">Узнайте больше полезной информации по уходу за растениями</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="card">
                                <img src="./Images/news_card.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-desc">
                                        <p class="card-title"><a href="">Умные растнения, которые не нужно поливать</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="card">
                                <img src="./Images/news_card.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-desc">
                                        <p class="card-title"><a href="">Фитодизайн и озеленение</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="card">
                                <img src="./Images/news_card.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-desc">
                                        <p class="card-title"><a href="">Неприхотливые комнатные цветы</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="card">
                                <img src="./Images/news_card.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-desc">
                                        <p class="card-title"><a href="">Трендовые растения 2023</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="order">
        <div class="CTA d-flex align-items-center">
            <div class="container">
                <div class="col-lg-9 col-md-9 c0l-sm-12 CTA-header">
                    <h3>Оформить заказ на наши чудные растения</h3>
                </div>
                <form method="POST" action="orderform.php">
                <div class="row CTA-form">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <input type="text" name="name" class="form-control" placeholder="Имя" arla-label="Name">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <input type="email" name="email" class="form-control" placeholder="E-mail" arla-label="E-mail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <input type="plant" name="plant" class="form-control" placeholder="Растение" arla-label="Plant">
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-outline-dark mt-4">Заказать</button>
            </div>
        </form>
        </div>
        </section>

        <section id="contacts">
            <div class="contacts d-flex align-items-center">
                <div class="container">
                    <div class="contacts-header offset-md-6 mt-4">
                        <h3>Оставайтесь с нами на связи</h3>
                    </div>
                    <div class="contacts-desc offset-md-6 mt-4">
                        <p>+7 926 123-45-67</p>
                        <p>Телеграм</p>
                        <p>Вконтакте</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <section id="faq">
        <div class="container">
            <h2 class="title">FAQ</h2>
            <div class="faq">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Вы доставляете растения в другие города России?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">На данный момент мы осуществляем доставку только по Москве и ближайшему Подмосковью.
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Я получу растение как на фото в каталоге?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Они как и мы индивидуальны, поэтому двух одинаковых 
                                не бывает. И это хорошо, так как вы никогда не встретите точно такое же растение как 
                                у вас. При оформлении заказа мы можем прислать фотографию именно вашего экземпляра, чтобы вы поняли случился мэтч или нет.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Тяжело ли ухаживать за комнатными растениями?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Если вы до сих пор сомневаетесь, получится у вас или нет, 
                                не сомневайтесь. У вас обязательно получиться, главное подойти к выбору зеленого друга с умом. А наша задача – помочь вам в ваших начинаниях.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Я не нашёл в каталоге, то что мне нужно. Что делать?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Ничего страшного, так бывает. Напишите или позвоните нам, расскажите что именно вас интересует, 
                                    и наши менеджеры подберут для вас варианты.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <footer class="d-flex flex-column align-items-center mt-5">
        <a href="" class="navbar-brand"><img src="./Images/logo 1.svg"></a>
        <p>HomePlants</p>
        <p>2022</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>