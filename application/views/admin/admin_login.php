<main class="jumbotron">
  <div class="row">
    <form method="post" action="/admin/login" class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4">
      <div class="row">
        <label for="login" class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><?php echo $this->lang->line("login_name"); ?>: </label>
        <input type="text" name="login"  class="col-lg-9 col-md-9 col-sm-9 col-xs-9"/>
      </div>
      <div class="row">
        <label for="password"  class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><?php echo $this->lang->line("password"); ?>:</label>
        <input type="password" name="password"  class="col-lg-9 col-md-9 col-sm-9 col-xs-9"/>
      </div>
      <div class="row">
        <input type="submit"  value="send" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"/>
      </div>
    </form>
  </div>
</main>
