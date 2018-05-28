<main class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
  <form action="/admin/info" method="post">
    <ul class="list-group">
      <li class="list-group-item">
        Address: <input type="text" value="<?php echo $contacts['Address']; ?>"/><br />
      </li>
      <li class="list-group-item">
        Phone: <input type="text" value="<?php echo $contacts['Phone']; ?>" /><br />
      </li>
      <li class="list-group-item">
        Email: <input type="text" value="<?php echo $contacts['Email']; ?>" /><br />
      </li>
      <li class="list-group-item">
        Fax: <input type="text" value="<?php echo $contacts['Fax']; ?>" /><br />
      </li>
      <li class="list-group-item">
        Year: <input type="text" value="<?php echo $site_info['Year']; ?>" /><br />
      </li>
      <li class="list-group-item">
        Designed By: <input type="text" value="<?php echo $site_info['DesignedBy']; ?>" /><br />
      </li>
      <li class="list-group-item">
        Implemented By: <input type="text" value="<?php echo $site_info['ImplementedBy']; ?>" /><br />
      </li>
      <li class="list-group-item">
        Owner's Name Full: <input type="text" value="<?php echo $site_info['OwnerNameFull']; ?>" /><br />
      </li>
      <li class="list-group-item">
        Owner's Name Brief: <input type="text" value="<?php echo $site_info['OwnerNameBrief']; ?>" /><br />
      </li>
    </ul>
    <input type="submit" value="Submit"/>
  </form>
</main>
