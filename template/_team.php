<?php $teams = $Table->GetTable('teams');?>
<section id="team" class="team section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Team</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>
    <div class="row">
      <?php array_map(function($team){?>
      <div class="col-lg-6">
        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
          <div class="pic"><img src="<?php echo $team['image']??"assets/img/team/team-1.jpg" ?>" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4><?php echo $team['name']??"Unknown"; ?></h4>
            <span><?php echo $team['position']??"Unknown"; ?></span>
            <p><?php echo $team['description']??"Unknown"; ?></p>
            <div class="social">
              <a href=""><i class="ri-twitter-fill"></i></a>
              <a href=""><i class="ri-facebook-fill"></i></a>
              <a href=""><i class="ri-instagram-fill"></i></a>
              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
            </div>
          </div>
        </div>
      </div>
      <?php }, $teams);?>
    </div>
  </div>
</section>