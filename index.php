<!DOCTYPE html>
 <html lang="ru">

 <head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
   <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,400;1,600;1,900&display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/b88caf3b4a.js" crossorigin="anonymous"></script>
   <link rel="shortcut icon" href="/img/01.png" />
   <style>
     li {
       list-style-type: none;
     }

     body {
       background-color: beige;
       font-family: 'Italic', sans-serif;
     }
   </style>
   <title>У Бурёнки</title>
 </head>

 <body>
   <header>
     <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(255, 228, 181)">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link" href="/pages/index.php">Главная<span class="sr-only">(текущая)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/pages/info.html" style="color: black">
               О нас</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/pages/contacts.html" style="color: black">Контакты</a>
           </li>
         </ul>
         <li class="nav-item">
           <i class="fa-solid fa-phone mr-2 mb-5"></i>
         </li>
         <li class="nav-item">
           <a href="tel:+79962404767">+7 (996) 240-47-67</a>
           <p>Ежедневно с 9 00 до 21 00</p>
         </li>
         <nav class="navbar navbar-expand-lg">
           <form class="form-inline">
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#feedbackFormModal">
               Обратная связь
             </button>
           </form>
         </nav>
       </div>
     </nav>
   </header>
   <div class="container font-italic text-center mt-4">
     <h1>Наша продукция</h1>
   </div>

   <div class="container text-center font-italic mt-4">
      <div class="row">
        <div class="col-sm-4"><img src="/img/tvorog.png" alt="творог" class="rounded">
          <p>Творог</p>
          <h5 class="font-weight-bold">165 руб.</h5>
        </div>
        <div class="col-sm-4"><img src="/img/moloko.png" alt="молоко" class="rounded">
          <p>Молоко парное</p>
          <h5 class="font-weight-bold">170 руб.</h5></div>
        <div class="col-sm-4"><img src="/img/kefir.png" alt="Кефир" class="rounded">
          <p>Кефир</p>
          <h5 class="font-weight-bold">210 руб.</h5></div>
      </div>
    </div>
    <div class="container text-center font-italic">
      <div class="row">
        <div class="col-sm-4"><img src="/img/maslo.png" alt="масло" class="rounded">
          <p>Сливочное масло</p>
          <h5 class="font-weight-bold">360 руб.</h5>
        </div>
        <div class="col-sm-4"><img src="/img/smetana.png" alt="Сметана" class="rounded">
          <p>Сметана</p>
          <h5 class="font-weight-bold">172 руб.</h5></div>
        <div class="col-sm-4"><img src="/img/topmoloko.png" alt="Молокото" class="rounded">
          <p>Топленное молоко</p>
          <h5 class="font-weight-bold">397 руб.</h5></div>
      </div>
    </div>
    <div class="container text-center font-italic">
      <div class="row">
        <div class="col-sm-4"><img src="/img/sir.png" alt="Сыр" class="rounded">
          <p>Сыр домашний</p>
          <h5 class="font-weight-bold">280 руб.</h5>
        </div>
        <div class="col-sm-4"><img src="/img/ryaj.png" alt="Ряженка" class="rounded">
          <p>Ряженка</p>
          <h5 class="font-weight-bold">270 руб.</h5></div>
      </div>
    </div>



   <div class="container font-italic text-center mt-5">
     <h1>У нас лучше</h1>
     <p>Потому что:</p>
   </div>

   <div class="container text-center font-italic">
     <div class="row">
       <div class="col-sm-3"><img src="/img/001.png" alt="">
         <h5 class="font-weight-bold">Самое свежее</h5>
         <p>Мы сосредоточены на наиболее скорой доставке категории продуктов первой свежести</p>
       </div>
       <div class="col-sm-3 mt-3"><img src="/img/02.png" alt="">
         <h5 class="font-weight-bold">Быстрая доставка</h5>
         <p>Мы имеем возможность быть быстрее, а значит свежее других</p>
       </div>
       <div class="col-sm-3"><img src="/img/03.png" alt="">
         <h5 class="font-weight-bold">Экологически чистые</h5>
         <p>Мы поставляем исключительно натуральную продукцию</p>
       </div>
       <div class="col-sm-3"><img src="/img/04.png" alt="">
         <h5 class="font-weight-bold">Качественные продукты</h5>
         <p>Мы не стремимся к промышленным объемам реализации, что позволяет сохранять высокий уровень качества</p>
       </div>
     </div>
   </div>





   <!-- Форма обратной связи в модальном окне -->
   <div class="modal" id="feedbackFormModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="myModalLabel">Форма обратной связи</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
           </button>
         </div>
         <div class="modal-body">
           <!-- Форма обратной связи -->
           <form action="/php/sendMail.php" method="POST" name="form">
             <div class="form-group">
               <input class="form-control" type="text" name="name" placeholder="Имя" required />
             </div>
             <div class="form-group">
               <input type="email" class="form-control" aria-describedby="emailHelp" name="email" placeholder="E-mail" />
               <small id="emailHelp" class="form-text text-muted">Мы никогда никому не передадим Вашу электронную почту.</small>
             </div>
             <div class="form-group">
               <input class="form-control" type="tel" name="tel" placeholder="Телефон" required />
             </div>
             <div class="form-group">
               <textarea class="form-control" name="message" rows="3" placeholder="Текст сообщения"></textarea>
             </div>
             <input type="submit" value="Отправить" />
           </form>
         </div>
       </div>
     </div>
   </div>
   <script>
     function sendInfo() {
       $("#feedbackFormModal").modal("show");
     }
   </script>

   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
   <script src="/feedback/vendors/jquery/jquery-3.3.1.min.js"></script>
   <script src="/feedback/vendors/bootstrap/js/bootstrap.min.js"></script>
   <script src="/feedback/js/main.js"></script>
 </body>

 </html>