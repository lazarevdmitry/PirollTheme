<main>
  <section class="single-section">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12" itemscope itemtype="http://schema.org/Person">
        <h1><?php echo $project_data['header']; ?></h1>
        <?php echo $project_data['content']; ?>
        <div class="client-name">
          <?php echo $this->lang->line('client_name');?> <span itemprop="name"><?php echo $project_data['clientName']; ?></span>
        </div>
        <div class="client-date">
          <?php echo $this->lang->line('project_date');?> <span><?php echo $project_data['clientDate']; ?></span>
        </div>
        <div class="client-share">
          <?php echo $this->lang->line('project_share');?> <span><?php echo $project_data['share']; ?></span>
        </div>
      </div>
      <div class="project_photo col-lg-6 col-md-6 col-sm-4 col-xs-12">
          <img  src="/img/projects/<?php echo $project_data['image']; ?>" alt="<?php echo $project_data['header']; ?>"/>
      </div> <!-- End of .project_photo -->
    </div> <!-- End of .row  -->
  </section> <!-- End of .single-section -->
  <section class="pages-navigation">
    <div class="container">
      <div class="row">
        <div class="prev col-lg-3 col-md-3 col-sm-4 col-xs-5">
          <?php if ($prev_project_url!=NULL){?>
            <a href="/projects/<?php echo $prev_project_url['id'];?>">
              <?php echo $this->lang->line('prev_project');?>
            </a>
          <?php } ?>
        </div> <!-- End of .prev -->
        <div class="center col-lg-2 col-lg-offset-2 col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-1 col-xs-2">
          <a href="/projects/"></a>
        </div> <!-- End of .center -->

        <div class="next col-lg-3 col-lg-offset-2 col-md-3 col-md-offset-2 col-sm-4 col-sm-offset-1 col-xs-5">
          <?php if ($next_project_url!=NULL){?>
            <a href="/projects/<?php echo $next_project_url['id'];?>">
              <?php echo $this->lang->line('next_project');?>
            </a>
          <?php } ?>

        </div> <!-- End of .next -->
      </div> <!-- End of .row -->
    </div>  <!-- End of .container -->
  </section> <!-- End of .pages-navigation -->
</main>
