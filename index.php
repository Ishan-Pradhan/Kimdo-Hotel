<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>


<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>


  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/144a91ca19.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <title>Kimdo</title>
</head>
<body>
  <?php include 'include/header.php';?>
  <!-- HERO SECTION -->
  <section class="hero-section">
  <div class="carousel">
  <div><img class="carousel-img" src="images/carousel/1.png" alt=""></div>
  <div><img class="carousel-img" src="images/carousel/2.png" alt=""></div>
  <div><img class="carousel-img" src="images/carousel/3.png" alt=""></div>
  <div><img class="carousel-img" src="images/carousel/4.png" alt=""></div>
  <div><img class="carousel-img" src="images/carousel/5.png" alt=""></div>
</div>

<!-- BOOKING AVAILABILITY -->
<div class="booking-availability">
  <h4>Checking Booking Availability</h4>
  <div class="booking-content">
    <form action="">
      <div class="content checkin">
        <label for="checkin">Check-in</label>
        <input class="booking" type="date" name="checkin" id="checkin">
      </div>
      <div class="content checkout">
        <label for="checkout">Check-out</label>
        <input class="booking" type="date" name="checkout" id="checkout">
      </div>
  <div class="content adult">
    <label for="adult">Adult</label>
    <select class="booking" name="adult" id="adult">
      <option value="One">One</option>
      <option value="Two">Two</option>
      <option value="Three">Three</option>
      <option value="Four">Four</option>
      <option value="Five">Five</option>
      <option value="Six">Six</option>
      <option value="Seven">Seven</option>
      <option value="Eight">Eight</option>
      <option value="Nine">Nine</option>
    </select>
  </div>

  <div class="content children">
    <label for="children">children</label>
    <select class="booking" name="children" id="children">
      <option value="One">One</option>
      <option value="Two">Two</option>
      <option value="Three">Three</option>
      <option value="Four">Four</option>
      <option value="Five">Five</option>
      <option value="Six">Six</option>
      <option value="Seven">Seven</option>
      <option value="Eight">Eight</option>
      <option value="Nine">Nine</option>
    </select>
  </div>
  <input type="submit" class="btn-checkroom" name="checkrooms" value="Check Rooms">
</form>
</div>
</div>
  </section>

<!-- welcome section -->
<section class="welcome-section">
  <img class="welcome-image" src="images/homepage/welcome photo.png" alt="">
  <div class="welcome-content">
    <div class="welcome-texts">
<h3 class="section-title h-font">WELCOME TO KIMDO HOTEL & RESORT</h3>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti magni consequuntur incidunt. Nihil ducimus doloribus aut ea eum ullam sed veritatis. Nemo commodi, reiciendis voluptate deleniti expedita, placeat eveniet repellat fuga totam temporibus ad voluptates debitis sit vero quia. Quas quidem beatae repudiandae tempore amet voluptatibus magni animi laudantium provident quasi officia modi dolores, accusamus libero voluptate cupiditate! Tempore id cumque aspernatur modi recusandae, nihil ex odit maxime earum placeat tenetur quam, deserunt eius mollitia ratione quas pariatur, molestiae laborum eveniet cum! Porro at laborum beatae obcaecati quam consequuntur iusto quasi dignissimos? Veniam esse provident quaerat consequatur perspiciatis veritatis laudantium.</p>
<button class="btn readmore">READ MORE</button>
</div>
</div>
</section>

<section class="features">
<div class="feature-content">
<h3 class="section-title h-font">OUR AMENITIES</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo amet earum repellendus aspernatur quod, reprehenderit adipisci non quae veritatis, iure beatae impedit quisquam repellat omnis facere natus eius laudantium ab nam aperiam laboriosam hic doloribus voluptatum. Illo, rerum! Ratione ex iste corrupti maiores possimus eos amet consequatur beatae delectus provident?.</p>
</div>
<div class="feature-features">
  <div class="feat wifi"><i class="fa-solid fa-wifi ficons"></i>
  <span class="feature-writing">Free WI-FI</span>
</div>
  <div class="feat parking">
  <i class="fa-solid fa-square-parking ficons"></i>
  <span class="feature-writing">Wide Parking Space</span>
  </div>
  <div class="feat beach">
  <i class="fa-solid fa-umbrella-beach ficons"></i>
  <span class="feature-writing">Private Beach</span>
  </div>
  <div class="feat spa">
  <i class="fa-solid fa-spa ficons"></i>
  <span class="feature-writing">Spa & Massage</span>
  </div>
  <div class="feat gym">
  <i class="fa-solid fa-dumbbell ficons"></i>
  <span class="feature-writing">Gyma & Yoga</span>
</div>
  <div class="feat pool">
  <i class="fa-solid fa-water-ladder ficons"></i>
  <span class="feature-writing">Swimming Pool</span>
  </div>
</div>
</section>
<section class="our-room-section">
<h3 class="section-title h-font">OUR ROOMS</h3>

<div class="product-card-container">

<!-- Room 1 -->
<div class="product-card">
  <div class="room-image">
    <img src="images/our rooms/h1.png" alt="Product Name">
  </div>
  <div class="room-details">
    <h4>Supreme deluxe room</h4>
    <p><span class="room-price">$1000 </span>per night</p>
  </div>
  <p class="product-title">Features</p>
  <div class="description-container">
    <p class="product-description">bedroom</p>
    <p class="product-description">balcony</p>
    <p class="product-description">kitchen</p>
  </div>
  <p class="product-title">Facilities</p>
  <div class="description-container">
    <p class="product-description">Wifi</p>
    <p class="product-description">A/C</p>
    <p class="product-description">Room Heater</p>
    <p class="product-description">Geyser</p>
  </div>
  <p class="product-title">Guests</p>
  <div class="description-container">
    <p class="product-description">9 Adults</p>
    <p class="product-description">10 Children</p>
  </div>
  <p class="product-title">Rating</p>
  <div class="rating-stars">
            <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
  </div>
  <div class="card-btns">
    <button class="btn">Book Now</button>
    <button class="btn secondary-btn">More Detail</button>
  </div>
</div>

<!-- Room 2 -->
<div class="product-card">
<div class="room-image">
  <img src="images/our rooms/h2.png" alt="Product Name">
</div>
  <div class="room-details">
    <h4>Supreme deluxe room</h4>
    <p><span class="room-price">$1000 </span>per night</p>
  </div>
  <p class="product-title">Features</p>
  <div class="description-container">
    <p class="product-description">bedroom</p>
    <p class="product-description">balcony</p>
    <p class="product-description">kitchen</p>
  </div>
  <p class="product-title">Facilities</p>
  <div class="description-container">
    <p class="product-description">Wifi</p>
    <p class="product-description">A/C</p>
    <p class="product-description">Room Heater</p>
    <p class="product-description">Geyser</p>
  </div>
  <p class="product-title">Guests</p>
  <div class="description-container">
    <p class="product-description">9 Adults</p>
    <p class="product-description">10 Children</p>
  </div>
  <p class="product-title">Rating</p>
  <div class="rating-stars">
            <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
  </div>
  <div class="card-btns">
    <button class="btn">Book Now</button>
    <button class="btn secondary-btn">More Detail</button>
  </div>
</div>

<!-- Room 3 -->
<div class="product-card">
<div class="room-image">
  <img src="images/our rooms/h3.png" alt="Product Name">
</div>
  <div class="room-details">
    <h4>Supreme deluxe room</h4>
    <p><span class="room-price">$1000 </span>per night</p>
  </div>
  <p class="product-title">Features</p>
  <div class="description-container">
    <p class="product-description">bedroom</p>
    <p class="product-description">balcony</p>
    <p class="product-description">kitchen</p>
  </div>
  <p class="product-title">Facilities</p>
  <div class="description-container">
    <p class="product-description">Wifi</p>
    <p class="product-description">A/C</p>
    <p class="product-description">Room Heater</p>
    <p class="product-description">Geyser</p>
  </div>
  <p class="product-title">Guests</p>
  <div class="description-container">
    <p class="product-description">9 Adults</p>
    <p class="product-description">10 Children</p>
  </div>
  <p class="product-title">Rating</p>
  <div class="rating-stars">
            <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
  </div>
  <div class="card-btns">
    <button class="btn">Book Now</button>
    <button class="btn secondary-btn">More Detail</button>
  </div>
</div>
</div>

<button class="btn secondary-btn more-room-btn">More Rooms</button>
</section>

<section class="photo-gallery">
  <div class="title-container">

    <h3 class="section-title h-font">Photo Gallery</h3>
  </div>
<div class="gallery-photoes ">

  <img src="images/photo gallery/2.jpg
  " alt="">
  <img src="images/photo gallery/3.jpg
  " alt="">
  <img src="images/photo gallery/4.jpg
  " alt="">
  <img src="images/photo gallery/5.jpg
  " alt="">
  <img src="images/photo gallery/6.jpg
  " alt="">
  <img src="images/photo gallery/7.jpg
  " alt="">
</div>
</section>

<!-- Testimonials -->
<section class="testimonials">
  <div class="testimonials-titles">
    <h3 class="section-title h-font">Testimonials</h3>
    <p>AT THE HEART OF COMMUNITIES</p>
  </div>
    <div class="testimonial-container">

      <!-- 1
        <div class="testimonial-items">
          <div class="testimonial-images">
            <img src="images/testimonials/person1.png" alt="" />
          </div>
          <div class="testimonial-rating">
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          </div>
          <div class="testimonial-contents">
            <p class="testimonial-comment">
              This beautiful dress arrived at my door within a week of
              purchasing online. So impressed with the effortless process of
              purchasing items through Wo:Sa.
            </p>
            <p class="testimonial-author">Maria de Almeida</p>
            <p class="testimonial-job">
              Senior Product Manager at EDP Comercial
            </p>
          </div>
        </div> -->

        <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
        <div class="testimonial-items">
          <div class="testimonial-images">
            <img src="images/testimonials/person1.png" alt="" />
          </div>
          <div class="testimonial-rating">
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          </div>
          <div class="testimonial-contents">
            <p class="testimonial-comment">
              This beautiful dress arrived at my door within a week of
              purchasing online. So impressed with the effortless process of
              purchasing items through Wo:Sa.
            </p>
            <p class="testimonial-author">Maria de Almeida</p>
            <p class="testimonial-job">
              Senior Product Manager at EDP Comercial
            </p>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="testimonial-items">
          <div class="testimonial-images">
            <img src="images/testimonials/person1.png" alt="" />
          </div>
          <div class="testimonial-rating">
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          </div>
          <div class="testimonial-contents">
            <p class="testimonial-comment">
              This beautiful dress arrived at my door within a week of
              purchasing online. So impressed with the effortless process of
              purchasing items through Wo:Sa.
            </p>
            <p class="testimonial-author">Maria de Almeida</p>
            <p class="testimonial-job">
              Senior Product Manager at EDP Comercial
            </p>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="testimonial-items">
          <div class="testimonial-images">
            <img src="images/testimonials/person1.png" alt="" />
          </div>
          <div class="testimonial-rating">
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          </div>
          <div class="testimonial-contents">
            <p class="testimonial-comment">
              This beautiful dress arrived at my door within a week of
              purchasing online. So impressed with the effortless process of
              purchasing items through Wo:Sa.
            </p>
            <p class="testimonial-author">Maria de Almeida</p>
            <p class="testimonial-job">
              Senior Product Manager at EDP Comercial
            </p>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="testimonial-items">
          <div class="testimonial-images">
            <img src="images/testimonials/person1.png" alt="" />
          </div>
          <div class="testimonial-rating">
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          </div>
          <div class="testimonial-contents">
            <p class="testimonial-comment">
              This beautiful dress arrived at my door within a week of
              purchasing online. So impressed with the effortless process of
              purchasing items through Wo:Sa.
            </p>
            <p class="testimonial-author">Maria de Almeida</p>
            <p class="testimonial-job">
              Senior Product Manager at EDP Comercial
            </p>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="testimonial-items">
          <div class="testimonial-images">
            <img src="images/testimonials/person1.png" alt="" />
          </div>
          <div class="testimonial-rating">
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          <i class="fas fa-star rating-stars"></i>
          </div>
          <div class="testimonial-contents">
            <p class="testimonial-comment">
              This beautiful dress arrived at my door within a week of
              purchasing online. So impressed with the effortless process of
              purchasing items through Wo:Sa.
            </p>
            <p class="testimonial-author">Maria de Almeida</p>
            <p class="testimonial-job">
              Senior Product Manager at EDP Comercial
            </p>
          </div>
        </div>
      </div>
</div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev prev-btn"></div>
  <div class="swiper-button-next next-btn"></div>
    </div>

    </section>



<section>ge</section>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript">
  $('.carousel').slick({
  infinite: true,
  speed: 300,
  fade: true,
  arrows:false,
  autoplay:true,

  cssEase: 'linear'
});
</script>
<script type="text/javascript">
$('.gallery-photoes').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  arrows:false,
  infite: true
});
</script>

<!-- <script type="text/javascript">
 $('.testimonial-container').slick({
  centerMode: true,
  centerPadding: '10px',
  variableWidth: true,
  arrows: true,
  slidesToShow: 3,
  dots:true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
</script> -->


<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script>
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView:"auto",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints:{
          320: {
            slidesPerView:1,
          },
          640: {
            slidesPerView:1,
          },
          768: {
            slidesPerView:2,
          },
          1024: {
            slidesPerView:3,
          },

        }
      });
    </script>

</body>
</html>
