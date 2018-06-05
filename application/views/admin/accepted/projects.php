<main class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
  <ul class="nav nav-pills">
    <li role="presentation">
      <a href="/admin/new_project"><?php echo $this->lang->line('new_project'); ?></a>
    </li>
  </ul>
  <ul id="accordion">
    <?php foreach ($projects_list as $project){?>
      <li data-id="<?php echo $project['id']; ?>">
        <h3><?php echo $project['name'];?></h3>
        <div>
          <form action="#" method="post" id="form_<?php echo $project['id']; ?>">
            <ul class="list-group">
              <!-- Project name -->
              <li class="list-group-item">
                <?php echo $this->lang->line('project_name'); ?>: <input type="text" value="<?php echo $project['name'];?>" name="project_name" /><br />
              </li>
              <!-- Project Image -->
              <li class="list-group-item">
                <?php echo $this->lang->line('project_image'); ?>: <label name="project_image"><?php echo $project['image']; ?></label><br />
                <input type="text" name="project_image" value="<?php echo $project['image']; ?>" /><br />
              </li>
              <!-- Project Header -->
              <li class="list-group-item">
                <?php echo $this->lang->line('project_header'); ?>: <input type="text" value="<?php echo $project['header']; ?>" name="project_header"/><br />
              </li>
              <!-- Project Header -->
              <li class="list-group-item">
                <?php echo $this->lang->line('project_content'); ?>:<br>
                <!-- <input type="text" value="<?php echo $project['content']; ?>"  name="project_content" />-->
                <textarea name="project_content" style="width:100%;height:150px"><?php echo $project['content']; ?></textarea>
                <br />
              </li>
              <!-- Client Name -->
              <li class="list-group-item">
                <?php echo $this->lang->line('client_name'); ?>: <input type="text" name="project_client_name" value="<?php echo $project['clientName']; ?>"   /><br />
              </li>
              <!-- Project Date -->
              <li class="list-group-item">
                <?php echo $this->lang->line('project_date'); ?>: <input type="date" name="project_client_date"  value="<?php echo $project['clientDate']; ?>"   /><br />
              </li>
            </ul>
            <input type="hidden" name="update_project" value="true"/>
            <input type="hidden" value="<?php echo $project['id']; ?>" name="id"/>
            <input type="submit" value="<?php echo $this->lang->line('save_project'); ?>"/>
          </form>
          <form action="#" method="post">
            <input type="hidden" name="delete_project" value="true"/>
            <input type="hidden" value="<?php echo $project['id']; ?>" name="project_id"/>
            <input type="submit" value="<?php echo $this->lang->line('delete_project'); ?>"  />
          </form>
        </div>
      </li>
    <?php } ?>
  </ul>

</main>
