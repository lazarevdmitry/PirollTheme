<main class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
  <form action="/admin/home" method="post">
    <ul class="list-group">
      <li class="list-group-item">
      <?php echo $this->lang->line('home_header'); ?>: <input type="text" name="home_header" value="<?php echo $home_info['HomeHeader']; ?>"/><br />
      </li>
      <li class="list-group-item">
        <?php echo $this->lang->line('home_description'); ?>: <input type="text" name="home_description" value="<?php echo $home_info['HomeDescription']; ?>" /><br />
      </li>

    </ul>
    <input type="submit" value="<?php echo $this->lang->line('submit'); ?>" name="home_submit"/>
  </form>
</main>
