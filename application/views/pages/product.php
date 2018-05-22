<main>
  <section class="single-section">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12" itemscope itemtype="http://schema.org/Person">
        <h1><?php echo $project_data['header']; ?></h1>
        <?php echo $project_data['content']; ?>
        <div class="client-name">Client: <span itemprop="name"><?php echo $project_data['clientName']; ?></span></div>
        <div class="client-date">Date: <span><?php echo $project_data['clientDate']; ?></span></div>
        <div class="client-share">Share: <span><?php echo $project_data['share']; ?></span></div>
      </div>
      <div class="project_photo col-lg-6 col-md-6 col-sm-4 col-xs-12">
          <img  src="/img/projects/<?php echo $project_data['image']; ?>" alt="<?php echo $project_data['header']; ?>"/>
      </div>
    </div>
  </section>
  <section class="pages-navigation">
    <div class="container">
      <div class="row">
        <div class="prev col-lg-3 col-md-3 col-sm-4 col-xs-5"><a href="#">previous project</a></div>
        <div class="center col-lg-2 col-lg-offset-2 col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-1 col-xs-2"><a href="#"></a></div>
        <div class="next col-lg-3 col-lg-offset-2 col-md-3 col-md-offset-2 col-sm-4 col-sm-offset-1 col-xs-5"><a href="#">next project</a></div>
      </div>
    </div>
  </section>
</main>
