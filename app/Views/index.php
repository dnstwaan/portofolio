<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />

    <title>Dean Setiawan</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-style.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />
  </head>

  <body>
    <div id="page-wraper">
      <!-- Sidebar Menu -->
      <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
            <div class="image">
              <a href="#"><img src="assets/images/dean1.jpg" alt="" /></a>
            </div>
            <div class="author-content">
              <h4>Dean Setiawan</h4>
              <span>a gamer & movie enthusiast </span>
            </div>
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
                <li><a href="#section1">About Me</a></li>
                <li><a href="#section2">Experiences</a></li>
                <li><a href="#section3">Favorites</a></li>
              </ul>
            </nav>
            <div class="social-network">
              <ul class="soial-icons">
                <li>
                  <a href="https://www.facebook.com/dnstwaan"
                    ><i class="fa fa-facebook"></i
                  ></a>
                </li>
                <li>
                  <a href="https://x.com/dnstwaan"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/dean-setiawan-751737210/"><i class="fa fa-linkedin"></i></a>
                </li>
              </ul>
            </div>
            
          </div>
        </div>
      </div>

      <section class="section about-me" data-section="section1">
        <div class="container">
          <div class="section-heading">
            <h2>About Me</h2>
            <div class="line-dec"></div>
            <span
              >I am Muhammad Dean Setiawan Putra, and im also a gamer & movie enthusiast. I live in Sukabumi and i am currently studying at Universitas Muhammadiyah Sukabumi, 
            majoring in Informatics Engineering. I am in my sixth semester.
            As a gamer, I am spends a lot of time playing various types of video games, ranging from complex strategy games to adrenaline-pumping action games. Im very enthusiastic about 
            keeping up with the latest developments in the gaming world, including new game releases and the latest gaming technology. Often, I also participates in gaming communities,
            both online and offline, to share tips, tricks, and gaming experiences with fellow gamers.In addition to gaming, I also a movie enthusiast. I have a deep love for films of 
            various genres, including action, adventure, science fiction, drama, and comedy. I frequently follows news and reviews about the latest movies and never misses a chance to 
            watch films currently showing in theaters. I also enjoys collecting his favorite movies on DVD or Blu-ray and re-watching classic films in my spare time.
            This combination of hobbies gives me extensive knowledge not only about games and movies themselves but also about the industries behind them. I often engages in discussions 
            with friends and communities about games and films, recommending interesting titles, and even writing reviews or blogs to express his views.I am always up-to-date with the 
            latest trends in the gaming and film worlds, makes me a valuable source of information for his friends seeking good game or movie recommendations. I enjoys every moment spent 
            both in front of his computer screen while gaming and in front of the cinema screen while watching movies, makes me a true gamer and movie enthusiast.  </span
            >
            
          </div>
        </div>
      </section>

      <section class="section my-services" data-section="section2">
        <div class="container">
          <div class="section-heading">
            <h2>My Experiences</h2>
            <div class="line-dec"></div>
            <span
              >My experience includes my school experience, and my involvement in various organizations and companies.</span
            >
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service-item">
                <div class="first-service-icon service-icon"></div>
                <h2>School &amp; Study</h2>
                <?php foreach($data1 as $Schools) {?>
                <li>
                <?php echo $Schools['nama_sekolah'];?>( <?php echo $Schools['masuk'];?> - <?php echo $Schools['keluar'];?> )
                </li>
                <?php }?>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="service-item">
                <div class="third-service-icon service-icon"></div>
                <h4>Organizations &amp; Companies</h4>
                <?php foreach($data2 as $Companiess) {?>
                <li>
                <?php echo $Companiess['organizations_companies'];?>( <?php echo $Schools['masuk'];?> - <?php echo $Schools['keluar'];?> )
                </li>
                <?php }?>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section my-work" data-section="section3">
        <div class="container">
          <div class="section-heading">
            <h2>My Favorites</h2>
            <div class="line-dec"></div>
            <span
              >This is my favorites games and movies list.</span
            >
          </div>
          <div class="row">
            <div class="isotope-wrapper">
              <form class="isotope-toolbar">
                <label
                  ><input
                    type="radio"
                    data-type="*"
                    checked=""
                    name="isotope-filter"
                  />
                  <span>all</span></label
                >
                <label
                  ><input
                    type="radio"
                    data-type="games"
                    name="isotope-filter"
                  />
                  <span>games</span></label
                >
                <label
                  ><input
                    type="radio"
                    data-type="movies"
                    name="isotope-filter"
                  />
                  <span>movies</span></label
                >
                
                
              </form>
              <div class="isotope-box">
                <div class="isotope-item" data-type="games">
                  <figure class="snip1321">
                    <img
                      src="assets/images/dota2.jpg"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/dota2.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                      ></a>
                      <h4>Dota 2</h4>
                      <span>My favorite moba games</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="movies">
                  <figure class="snip1321">
                    <img
                      src="assets/images/aeg.jpg"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/aeg.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                      ></a>
                      <h4>Avengers : Endgame</h4>
                      <span>My favorite Marvel Cinematic Universe movies</span>
                    </figcaption>
                  </figure>
                </div>
                
                <div class="isotope-item" data-type="movies">
                  <figure class="snip1321">
                    <img
                      src="assets/images/gkotm.jpg"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/gkotm.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                      ></a>
                      <h4>Godzilla : King of the Monsters</h4>
                      <span>My favorite Monsterverse movies</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="games">
                  <figure class="snip1321">
                    <img
                      src="assets/images/valorant.jpg"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/valorant.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                      ></a>
                      <h4>Valorant</h4>
                      <span>My favorite first-person shooter games</span>
                    </figcaption>
                  </figure>
                </div>
                <div class="isotope-item" data-type="movies">
                  <figure class="snip1321">
                    <img
                      src="assets/images/kimetsu.jpg"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/kimetsu.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                      ></a>
                      <h4>Kimetsu no Yaiba : Mugen Train</h4>
                      <span>My favorite Anime movies</span>
                    </figcaption>
                  </figure>
                </div>
                <div class="isotope-item" data-type="games">
                  <figure class="snip1321">
                    <img
                      src="assets/images/dragonnest.jpg"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/dragonnest.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                      ></a>
                      <h4>Dragon Nest</h4>
                      <span>My favorite MMORPG games</span>
                    </figcaption>
                  </figure>
                </div>
                <div class="isotope-item" data-type="movies">
                  <figure class="snip1321">
                    <img
                      src="assets/images/ngerisedap.jpg"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/ngerisedap.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                      ></a>
                      <h4>Ngeri Ngeri Sedap</h4>
                      <span>My favorite Family movies</span>
                    </figcaption>
                  </figure>
                </div>
                <div class="isotope-item" data-type="games">
                  <figure class="snip1321">
                    <img
                      src="assets/images/coc.jpg"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/coc.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                      ></a>
                      <h4>Clash of Clans</h4>
                      <span>My favorite Strategy games</span>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
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
