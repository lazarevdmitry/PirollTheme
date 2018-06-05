<main class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
  <ul id="accordion">
    <?php
    foreach ($submissions as $submission){
      ?>
      <li>
        <h3><?php echo $submission['name']; ?> Date:<?php echo $submission['date']; ?></h3>
        <div>
          <?php echo $this->lang->line('message_title'); ?>:<?php echo $submission['title']; ?><br />
          Email:<?php echo $submission['email']; ?><br />

          <?php echo $this->lang->line('message_text'); ?>:<?php echo $submission['message']; ?><br />
        </div>

      </li>
      <?php
    }
    ?>
  </ul>
</main>
