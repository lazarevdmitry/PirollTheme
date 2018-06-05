<main class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
  <form action="/admin/info" method="post">
    <ul class="list-group">
      <li class="list-group-item">
        <?php echo $this->lang->line('contact_address'); ?>: <input type="text" value="<?php echo $contacts['Address']; ?>"/><br />
      </li>
      <li class="list-group-item">
        <?php echo $this->lang->line('contact_phone'); ?>: <input type="text" value="<?php echo $contacts['Phone']; ?>" /><br />
      </li>
      <li class="list-group-item">
        <?php echo $this->lang->line('contact_email'); ?>: <input type="text" value="<?php echo $contacts['Email']; ?>" /><br />
      </li>
      <li class="list-group-item">
        <?php echo $this->lang->line('contact_fax'); ?>: <input type="text" value="<?php echo $contacts['Fax']; ?>" /><br />
      </li>
      <li class="list-group-item">
        <?php echo $this->lang->line('year'); ?>: <input type="text" value="<?php echo $site_info['Year']; ?>" /><br />
      </li>
      <li class="list-group-item">
        <?php echo $this->lang->line('designed_by'); ?>: <input type="text" value="<?php echo $site_info['DesignedBy']; ?>" /><br />
      </li>
      <li class="list-group-item">
        <?php echo $this->lang->line('implemented_by'); ?>: <input type="text" value="<?php echo $site_info['ImplementedBy']; ?>" /><br />
      </li>
      <li class="list-group-item">
        <?php echo $this->lang->line('owner_full_name'); ?>: <input type="text" value="<?php echo $site_info['OwnerNameFull']; ?>" /><br />
      </li>
      <li class="list-group-item">
        <?php echo $this->lang->line('owner_brief_name'); ?>: <input type="text" value="<?php echo $site_info['OwnerNameBrief']; ?>" /><br />
      </li>
    </ul>
    <input type="submit" value="<?php echo $this->lang->line('submit'); ?>"/>
  </form>
</main>
