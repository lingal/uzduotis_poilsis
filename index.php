 <?php

  $serverName = "localhost";
  $userName = "root";
  $password = "";
  $dbName = "pasiulymai";


  try {
    $con = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $offers_query = "SELECT * FROM spa_pasiulymai";
    $offers = $con->query($offers_query);

  ?>


   <!DOCTYPE html>
   <html lang="lt">

   <head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="./css/styles.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


     <title>Poilsis</title>
   </head>

   <body>
     <header class="header">
       <div class="header-banner">
         <h1>poilsis</h1>
         <p>
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia ut,
           voluptatum itaque quod eos magni officiis, ipsam similique sed nemo
           fugit, labore aliquam quibusdam doloremque.
         </p>
       </div>
     </header>
     <main>
       <section class="products">
         <div class="filters-container">
           <!-- miestai starts here -->

           <div class="filter">
             <div class="filter-title">
               <span class="icon"><i class="fa-solid fa-building"></i></span>

               <button type="button" class="filter-btn">
                 <span>miestas</span>
                 <span class="chevron-down">
                   <i class="fa-solid fa-chevron-down"></i></span>
                 <span class="chevron-up">
                   <i class="fa-solid fa-chevron-up"></i></span>
               </button>
             </div>

             <form>

               <div>
                 <input type="checkbox" name="city" id="kaunas" />
                 <label for="kaunas">Kaunas</label>
               </div>

               <div>
                 <input type="checkbox" name="city" id="vilnius" />
                 <label for="vilnius">Vilnius</label>
               </div>

               <div>
                 <input type="checkbox" name="city" id="palanga" />
                 <label for="palanga">Palanga</label>
               </div>

               <div>
                 <input type="checkbox" name="city" id="druskininkai" />
                 <label for="druskininkai">Druskininkai</label>
               </div>
             </form>
           </div>

           <!-- miestai ends here -->

           <!-- trukme starts here -->
           <div class="filter">
             <div class="filter-title">
               <span class="icon"><i class="fa-solid fa-clock"></i></span>

               <button type="button" class="filter-btn">
                 <span> nakvynės trukmė</span>
                 <span class="chevron-down">
                   <i class="fa-solid fa-chevron-down"></i></span>
                 <span class="chevron-up">
                   <i class="fa-solid fa-chevron-up"></i></span>
               </button>
             </div>

             <form>
               <div>
                 <input type="checkbox" name="duration" id="duration-1" value="1" />
                 <label for="duration-1">1 naktis</label>
               </div>

               <div>
                 <input type="checkbox" name="duration" id="duration-2" value="2" />
                 <label for="duration-2">2 naktys</label>
               </div>

               <div>
                 <input type="checkbox" name="duration" id="duration-3" value="3" />
                 <label for="duration-3">3 naktys</label>
               </div>

               <div>
                 <input type="checkbox" name="duration" id="duration-4" value="4" />
                 <label for="duration-4">4 naktys</label>
               </div>

               <div>
                 <input type="checkbox" name="duration" id="duration-5" value="5" />
                 <label for="duration-5">5+ naktys</label>
               </div>

             </form>
           </div>

           <!-- trukme ends here -->

           <!-- asmenu skaicius starts here -->
           <div class="filter">
             <div class="filter-title">
               <div class="icon"><i class="fa-solid fa-user-group"></i></div>

               <button type="button" class="filter-btn">
                 <span>asmenų skaičius</span>
                 <span class="chevron-down">
                   <i class="fa-solid fa-chevron-down"></i></span>
                 <span class="chevron-up">
                   <i class="fa-solid fa-chevron-up"></i></span>
               </button>
             </div>
             <form>

               <div>
                 <input type="checkbox" name="guests" value="1" id="guest-1" />
                 <label for="guest-1">1 asmuo</label>
               </div>

               <div>
                 <input type="checkbox" name="guests" value="2" id="guest-2" />
                 <label for="guest-2">2 asmenys</label>
               </div>

               <div>
                 <input type="checkbox" name="guests" value="3" id="guest-3" />
                 <label for="guest-3">3 asmenys</label>
               </div>

               <div>
                 <input type="checkbox" name="guests" value="4" id="guest-4" />
                 <label for="guest-4">4+ asmenys</label>
               </div>
             </form>
           </div>

           <!-- asmenu skaicius ends here -->

           <!-- kaina starts here -->
           <div class="filter">
             <div class="filter-title">
               <span class="icon"><i class="fa-solid fa-euro-sign"></i></span>

               <button type="button" class="filter-btn">
                 <span>kaina</span>
                 <span class="chevron-down">
                   <i class="fa-solid fa-chevron-down"></i></span>
                 <span class="chevron-up">
                   <i class="fa-solid fa-chevron-up"></i></span>
               </button>
             </div>

             <form>
               <input type="range" class="price-filter" min="0" max="1000" />
               <p>Kaina už nakvynę: <span class="price-value"></span> <i class="fa-solid fa-euro-sign"></i></p>
             </form>
           </div>
           <!-- kaina ends here -->
         </div>
         <div class="products-container">

           <!-- <?php include 'db.php'; ?> -->

           <?php
            foreach ($offers as $offer) {

            ?>
             <article class="product">
               <img src="./images/<?php echo $offer['img'] ?>.jpeg" alt="<?php echo $offer['hotel'] ?> " class="product-img" />
               <div class="product-text">
                 <header>
                   <h4><?php echo $offer['title'] ?></h4>
                   <h5><?php echo $offer['hotel'] ?></h5>

                   <p><span><i class="fa-solid fa-location-dot"></i></span> <?php echo $offer['city'] ?></p>

                 </header>

                 <div class="product-desc">
                   <div class="price-tag">
                     <p>nuo</p>
                     <h5><span class="price"><?php echo $offer['price'] ?></span> <i class="fa-solid fa-euro-sign"></i></h5>
                   </div>

                   <ul>
                     <li>
                       <i class="fa-solid fa-user"></i>
                       <span><?php echo $offer['guests_num'] ?> asmenys</span>
                     </li>
                     <li class="stay-duration">
                       <i class="fa-solid fa-clock"></i>
                       <span><?php echo $offer['duration'] ?></span>
                       <span></span>
                     </li>
                     <li>
                       <i class="fa-solid fa-calendar-days"></i>
                       <span><?php echo $offer['valid_until'] ?></span>
                     </li>
                   </ul>
                 </div>
               </div>
             </article>

           <?php
            }
            ?>


         </div>

       </section>
     </main>

     <script src="./app/js/script.js"></script>
   </body>

   </html>

 <?php
  } catch (PDOException $e) {
    echo 'Failed to connect' . $e->getMessage();
  }
  ?>