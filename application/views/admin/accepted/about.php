<main class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
  <form action="/admin/about" method="post">
    <ul class="list-group">
      <li class="list-group-item">
        <?php echo $this->lang->line('about_header'); ?>: <input type="text" name="about_header" value="<?php echo $about_info['AboutHeader']; ?>"/><br />
      </li>
      <li class="list-group-item">
        <?php echo $this->lang->line('about_description'); ?>: <input type="text" name="about_description" value="<?php echo $about_info['AboutDescription']; ?>" /><br />
      </li>

    </ul>
    <input type="submit" value="Submit" name="about_submit"/>
  </form>
</main>
