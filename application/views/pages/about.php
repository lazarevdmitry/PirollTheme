
    <main>
      <section class="section0">
        <h1><?php echo $about_data['NameHeader']; ?></h1>
        <p><?php echo $about_data['NameSubheader']; ?></p>
      </section>
      <section class="section_bar">
        <div class="container">
          <ul class="row">
            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <img src="/img/things1.png" alt="<?php echo $this->lang->line('how_much_projects_completed');?>">
              <div class="things">
                <?php echo $about_data['ProjectsAmount']; ?>
              </div>
              <div class="things-actions">
                <?php echo $this->lang->line('projects_completed_amount');?>
              </div>
            </li>
            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <img src="/img/things2.png" alt="<?php echo $this->lang->line('how_much_working_hours');?>">
              <div class="things">
                <?php echo $about_data['WorkingHoursAmount']; ?>
              </div>
              <div class="things-actions">
                <?php echo $this->lang->line('working_hours_amount');?>
              </div>
            </li>
            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <img src="/img/things3.png" alt="<?php echo $this->lang->line('how_much_positive_feedbacks');?>">
              <div class="things">
                <?php echo $about_data['PositiveFeedbacksAmount']; ?>
              </div>
              <div class="things-actions">
                <?php echo $this->lang->line('positive_feedbacks_amount');?>
              </div>
            </li>
            <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <img src="/img/things4.png" alt="<?php echo $this->lang->line('how_much_happy_clients');?>">
              <div class="things">
                <?php echo $about_data['HappyClientsAmount']; ?>
              </div>
              <div class="things-actions">
                <?php echo $this->lang->line('happy_clients_amount');?>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="about-me">
        <div class="container">
          <div class="about-me-container col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6 col-sm-12 col-xs-12">
            <h2>About me</h2>
            <p>Given let waters air sea had you'll, may seed abundatly fish. Were, you'll earth forth winged above brought. Own darkness they're him can't fourth sea place have.</p>
            <p>So the above May stars cattle fruitful face shall. Tree it, winged. Every signs male firmament us. Morning him.</p>
            <p> <img src="/img/sign.png" alt="Amelia Woods sign"></p>
          </div>
        </div>
      </section>
      <section class="need-a-project">
        <div class="nap-container container">
          <div class="row">
            <h2 class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
              <?php echo $this->lang->line('need_a_project');?>
            </h2>
          </div>
          <div class="row">
            <p class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
              <?php echo $this->lang->line('let_us_know');?>
            </p>
          </div>
          <div class="row">
            <button class="nap-button col-lg-2 col-lg-offset-5 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
              <?php echo $this->lang->line('lets_talk');?>
            </button>
          </div>
        </div>
      </section>
    </main>
