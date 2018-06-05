<main class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
  <form action="/admin/projects/" method="post" class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <?php echo $this->lang->line("project_name"); ?>: <br>
      <input type="text" name="project_name" required />
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <?php echo $this->lang->line("project_image"); ?>: <br>
      <input type="file" name="project_image"   />
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <?php echo $this->lang->line("project_header"); ?>: <br>
      <input type="text" name="project_header" required />
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <?php echo $this->lang->line("project_content"); ?>: <br>
      <!--
      <input type="text" name="project_content" required />
      -->
      <textarea name="project_content" required></textarea>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <?php echo $this->lang->line("client_name"); ?>: <br>
      <input type="text" name="project_client_name" required />
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <?php echo $this->lang->line("project_date"); ?>: <br>
      <input type="date" name="project_client_date" required />
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <input type="hidden" name="add_new_project" value="true"/>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <input type="submit" value="Сохранить проект"/>
    </div>
  </form>
</main>
