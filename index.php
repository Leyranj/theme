<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-full-width text-center">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article-full">
        <header>
          <h2><?php the_title(); ?></h2>
          By: <?php the_author(); ?>
        </header>
       <?php the_content(); ?>
      </article>
<?php endwhile; else : ?>
      <article>
        <p>Sorry, no post was found!</p>
      </article>
<?php endif; ?>
  </section>
  <div class="container-fluid">
  <div class="row justify-content-center">
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
          </ul>
          <form class="d-flex" role="search">
            <button class="btn btn-outline-success" type="submit">Sample</button>
          </form>
        </div>
      </div>
    </nav>
    <div class="col-md-12">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo get_stylesheet_directory_uri(). '/images/1s.png'?> " class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo get_stylesheet_directory_uri(). '/images/2.jpg'?> " class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo get_stylesheet_directory_uri(). '/images/3.jpg'?> " class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
    </div>

    <div class="divider"></div>

    <div class="text-center mb-5">
      <h5 class="">About Us</h5>
      <h3 class="my-3">Find Out More About Us</h3>
      <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita <br>at voluptas atque vitae autem.</p>
    </div>
    

    <div class="col-md-3">
      <div class="card" style="width: 24rem;">
        <img src="<?php echo get_stylesheet_directory_uri(). '/images/4.jpg'?> " class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>  
    <div class="col-md-3">
      <div class="card" style="width: 24rem;">
        <img src="<?php echo get_stylesheet_directory_uri(). '/images/5.jpg'?> " class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div> 
    <div class="col-md-3">
      <div class="card" style="width: 24rem;">
        <img src="<?php echo get_stylesheet_directory_uri(). '/images/6.jpg'?> " class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>  

    <div class="divider"></div>
    <div class="col-md-8">
      <div class="text-center">
        <p><mark>F.A.Q</mark></p>
        <h3>Frequently Asked Questions</h3>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita <br> at voluptas atque vitae autem.</p>
        <p>
          <div class="text-start">
                <a class="btn btn-light" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
                <i class="bi bi-chevron-compact-down"></i> Non consectetur a erat nam at lectus urna duis?
              </a>
            </p>
            <div class="collapse" id="collapseExample1">
              <div class="card card-body">
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </div>
            </div>
                <a class="btn btn-light" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                <i class="bi bi-chevron-compact-down"></i> Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
              </a>
            </p>
            <div class="collapse" id="collapseExample2">
              <div class="card card-body">
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </div>
            </div>
                <a class="btn btn-light" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
                <i class="bi bi-chevron-compact-down"></i> Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
              </a>
            </p>
            <div class="collapse" id="collapseExample3">
              <div class="card card-body">
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </div>
            </div>
                <a class="btn btn-light" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
                <i class="bi bi-chevron-compact-down"></i> Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
              </a>
            </p>
            <div class="collapse" id="collapseExample4">
              <div class="card card-body">
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </div>
            </div>
          </div>
          
      </div>
      
    </div>
      
    </div>
  </div>
</div>
</main>
<?php get_footer(); ?>