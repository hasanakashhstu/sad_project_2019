<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Let's Travel Bangladesh</title>
    <meta name="description" content="" />
    <meta name="author" content="Tooplate" />
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Additional CSS Files -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/tooplate-style.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />
  </head>
<body>  
 <section class="section my-work" data-section="section3">
        <div class="container">
          <div class="section-heading">
            <h2>Gallery</h2>
            <div class="line-dec"></div>
            <span>checked out the most beautiful places of our country Bangladesh </span>
          </div>
          <div class="row">
            <div class="isotope-wrapper">
              <form class="isotope-toolbar">
                <label><input type="radio" data-type="*" checked="" name="isotope-filter" />
                  <span>all</span></label>
                <label><input type="radio" data-type="pretty" name="isotope-filter" />
                  <span>pretty</span></label>
                <label><input type="radio" data-type="sexy" name="isotope-filter" />
                  <span>sexy</span></label>
                <label><input type="radio" data-type="beach" name="isotope-filter" />
                  <span>beach</span></label>
              </form>
              <div class="isotope-box">
                <div class="isotope-item" data-type="beach">
                  <figure class="snip1321">
                    <img src="assets/images/woman-beach.jpg" alt="woman at the beach" />
                    <figcaption>
                      <a href="assets/images/woman-beach.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>Girl One</h4>
                      <span>woman at the beach</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="sexy">
                  <figure class="snip1321">
                    <img src="assets/images/woman-chair-sunshine.jpg" alt="sq-sample26" />
                    <figcaption>
                      <a href="assets/images/woman-chair-sunshine.jpg"
                        data-lightbox="image-1"
                        data-title="Sunshine Woman"><i class="fa fa-search"></i></a>
                      <h4>Sexy Lady</h4>
                      <span>there you go sexy girl</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="pretty">
                  <figure class="snip1321">
                    <img src="assets/images/woman-pretty.jpg" alt="Pretty Girl" />
                    <figcaption>
                      <a href="assets/images/woman-pretty.jpg"
                        data-lightbox="image-1"
                        data-title="Pretty Girl"><i class="fa fa-search"></i></a>
                      <h4>Pretty Girl</h4>
                      <span>red flowers white girl</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="pretty">
                  <figure class="snip1321">
                    <img src="assets/images/escalator-blue.jpg" alt="Escalator Blue" />
                    <figcaption>
                      <a href="assets/images/escalator-blue.jpg"
                        data-lightbox="image-1"
                        data-title="Escalator Blue"><i class="fa fa-search"></i></a>
                      <h4>Escalator Up</h4>
                      <span>Blue architecture building</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="beach">
                  <figure class="snip1321">
                    <img src="assets/images/woman-feeling.jpg" alt="woman feeling" />
                    <figcaption>
                      <a href="assets/images/woman-feeling.jpg"
                        data-lightbox="image-1"
                        data-title="Her Feeling"><i class="fa fa-search"></i></a>
                      <h4>Her Feeling</h4>
                      <span>Ut sollicitudin risus</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="sexy">
                  <figure class="snip1321">
                    <img src="assets/images/woman-bikini.jpg" alt="Bikini Girl" />
                    <figcaption>
                      <a href="assets/images/woman-bikini.jpg" 
                      data-lightbox="image-1" data-title="Sexy Bikini">
                      <i class="fa fa-search"></i></a>
                      <h4>Bikini Girl</h4>
                      <span>Donec eget massa ante</span>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
	  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
      //according to loftblog tut
      $(".main-menu li:first").addClass("active");

      var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, ""),
          reqSection = $(".section").filter(
            '[data-section="' + direction + '"]'
          ),
          reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $("body, html").animate(
            {
              scrollTop: reqSectionPos
            },
            800
          );
        } else {
          $("body, html").scrollTop(reqSectionPos);
        }
      };

      var checkSection = function checkSection() {
        $(".section").each(function() {
          var $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var currentId = $this.data("section"),
              reqLink = $("a").filter("[href*=\\#" + currentId + "]");
            reqLink
              .closest("li")
              .addClass("active")
              .siblings()
              .removeClass("active");
          }
        });
      };

      $(".main-menu").on("click", "a", function(e) {
        e.preventDefault();
        showSection($(this).attr("href"), true);
      });

      $(window).scroll(function() {
        checkSection();
      });
    </script>
	  </body>
	  </html>