<?php $portfolio_items = $Table->GetTable('portfolio');
?>
<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Portfolio</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>
    <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
      <li data-filter="*" class="filter-active">All</li>
      <?php $skill = array_map(function($item){
      return $item['skills'];
      }, $portfolio_items);
      $skill_unique = array_unique($skill);
      sort($skill_unique);
      foreach ($skill_unique as $value) {echo "<li data-filter='.filter-$value'>$value</li>";}?>
    </ul>
    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
      <?php array_map(function($item){?>
      <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $item['skills']??'assets/img/portfolio/portfolio-1.jpg' ?>">
        <div class="portfolio-img"><img src="<?php echo $item['image']??'assets/img/portfolio/portfolio-1.jpg' ?>" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
          <h4><?php echo $item['title']; ?></h4>
          <p class="text-capitalize"><?php echo $item['skills']; ?></p>
          <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>
      <?php }, $portfolio_items); ?>
    </div>
  </div>
</section>