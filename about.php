<?php

include 'includes/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'includes/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">Home</a> <span> / About</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-us.jpg" alt="">
      </div>

      <div class="content">
         <p>Welcome to Floraa, where beauty blossoms and memories flourish! At Floraa, we're more than just a florist; we're your partner in creating unforgettable moments through the language of flowers.</p>
         <h3>why choose us?</h3>
         <p>
         Exceptional Quality: We believe in delivering nothing but the finest blooms to our customers. Each flower is carefully hand-selected to ensure freshness, vibrancy, and longevity.
         <br>Creative Floral Designs: Our talented team of florists possesses a passion for creativity and an eye for detail. From elegant bouquets to stunning arrangements, we craft each piece with love and artistry, tailored to suit every occasion.
        <br> Personalized Service: Your satisfaction is our top priority. We take the time to understand your preferences and requirements, offering personalized recommendations and solutions to bring your floral visions to life.
         <br>Wide Selection: Whether you're celebrating a special milestone, expressing love and gratitude, or simply brightening someone's day, our diverse collection of flowers and gifts ensures you'll find the perfect arrangement for every moment.
         <br>Convenience: Ordering flowers has never been easier. With our user-friendly website and seamless online ordering system, you can browse, select, and send your favorite blooms from the comfort of your home or on the go.
         <br>Timely Delivery: We understand the importance of timely delivery, especially for those milestone occasions. Rest assured, our dedicated team works diligently to ensure your flowers arrive fresh and on schedule, every time.
         <br>Commitment to Sustainability: We are committed to sustainability and environmental responsibility. Our flowers are sourced ethically, and we minimize waste through eco-friendly practices wherever possible.
         <br>Community Engagement: As proud members of the community, we actively support local initiatives and charities. 
         <br>When you choose Floraa, you're not just supporting a business; you're contributing to the growth and vitality of our community.
         </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/choose-order.webp" alt="">
         <h3>choose order</h3>
         <p>Order with us for a seamless floral experience, where exceptional quality meets personalized service, ensuring timely delivery and sustainability at every step.</p>
      </div>

      <div class="box">
         <img src="images/fast-delivery.webp" alt="">
         <h3>fast delivery</h3>
         <p>Experience swift and reliable flower delivery with us, ensuring your blooms arrive fresh and vibrant, right on time to brighten any occasion.</p>
      </div>

      <div class="box">
         <img src="images/enjoy.webp" alt="">
         <h3>enjoy our servie</h3>
         <p>Savor the ease and excellence of our service, where every floral arrangement is crafted with care and delivered with a smile, ensuring your special moments are celebrated in style.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->



<!-- reviews section ends -->


<!-- footer section starts  -->
<?php include 'includes/footer.php'; ?>
<!-- footer section ends -->

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>