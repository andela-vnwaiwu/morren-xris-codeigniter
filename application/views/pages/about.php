<script type="text/javascript">
  $(document).ready(function() {
    $('.carousel.carousel-slider').carousel({
      full_width: true,
      indicators: true
    });
    autoplay();
    function autoplay () {
      $('.carousel').carousel('next');
      setTimeout(autoplay, 4500);
    }
  });
</script>
<main>
  <div class="container">
    <div class="row">
      <div class="carousel carousel-slider">
        <div class="carousel-item"><img src="<?php echo base_url(); ?>images/about-carousel/bar1.jpg"></div>
        <div class="carousel-item"><img src="<?php echo base_url(); ?>images/about-carousel/food-1.jpg"></div>
        <div class="carousel-item"><img src="<?php echo base_url(); ?>images/about-carousel/hotel-room-1.jpg"></div>
        <div class="carousel-item"><img src="<?php echo base_url(); ?>images/about-carousel/pool-side-1.jpg"></div>
      </div>
    </div>
    <div class="row">
      <h3 class="text-justify"> About Morren-Xris</h3>
      <p class="text-justify flow-text">
        <strong>Morren-Xris</strong>... for your comfort and relaxation.
      </p>
      <p class="text-justify flow-text">
        Morren-xris Suites and Gardens is an International standard outfit situated in the heart of Amaokpala, Orumba-North Local
        Government in Anambra State. It is a stone throw from the prestigious Federal Polytecnic, Oko. The ambience of our location
        is such that leaves our guest in utmost comfort and relaxation at its peak. We offer the following services to mention but a few:
      </p>
      <ul>
        <li>Maximum security complimented with CCTV monitoring systems</li>
        <li>24 hours power supply</li>
        <li>Tastefully furnished rooms and suites with amenities to make you feel at home</li>
        <li>Standard swimming pool</li>
        <li>We provide you with different African and Continental dishes served fresh</li>
        <li>24 hours room service</li>
        <li>Well trained staffs who will give you utmost attention and ensure your stay with us is enjoyable</li>
      </ul>
      <p class="text-justify flow-text">A trial will convince you</p>
      <p class="flow-text">
        <strong>Morren-Xris</strong>...Your comfort is our goal!.
      </p>
    </div>
  </div>
  <section id="about-footer">
    <div class="container">
      <div class="row">
        <div id="testimonial">
          <blockquote>
            Morren-Xris is the place to be...right from when you step your feet into their premises. You will be treated like a king.<br/> 
            Their staffs are always cheeful and willing to help you settle in quickly. Anytime i am visiting around that area I lodge there.<br/>
            Excellent services
            <br/><span class="small-quote">Mr. Ikenna Okoye</span>
          </blockquote>
        </div>
      </div>
    </div>
  </section>
</main>
