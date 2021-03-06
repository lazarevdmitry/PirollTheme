<main>
  <section class="info">
    <div class="container">
      <div class="row">
        <div class="contact-info col-lg-5 col-md-6 col-sm-6 col-xs-12">
          <h1><?php echo $this->lang->line('contact_info');?></h1>
          <p><?php echo $this->lang->line('contact_info_description');?></p>
          <div itemscope itemtype="http://schema.org/Organization">
            <div class="contact-address">
              <?php echo $this->lang->line('contact_address');?><span itemprop="postalCode"></span><span itemprop="address"><?php echo $contact_info['Address'];?></span>
            </div>
            <div class="contact-phone">
              <?php echo $this->lang->line('contact_phone');?> <span itemprop="telephone"><?php echo $contact_info['Phone']; ?></span>
            </div>
            <div class="contact-email">
              <?php echo $this->lang->line('contact_email');?> <span itemprop="email"><?php echo $contact_info['Email']; ?></span>
            </div>
            <div class="contact-fax">
              <?php echo $this->lang->line('contact_fax');?> <span itemprop="fax"><?php echo $contact_info['Fax']; ?></span>
            </div>
          </div>
        </div>
        <div class="review-form col-lg-7 col-md-6 col-sm-6 col-xs-12">
          <form class="row" method="post" action="/form/">
            <input class="col-lg-5 col-md-5 col-sm-5 col-xs-12" type="text" placeholder="<?php echo $this->lang->line('your_name');?>" name="name">
            <input class="col-lg-5 col-lg-offset-2 col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2 col-xs-12" type="email" placeholder="<?php echo $this->lang->line('your_email');?>" name="email">
            <input class="col-lg-12 col-md-12 col-sm-12 col-xs-12" type="text" placeholder="<?php echo $this->lang->line('your_title');?>" name="title">
            <textarea class="col-lg-12 col-md-12 col-sm-12 col-xs-12" placeholder="<?php echo $this->lang->line('your_comment');?>" name="message"></textarea>

            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
              <input type="submit" value="<?php echo $this->lang->line('send_message');?>" id="contact_form_submit">
              <span id="message_area"></span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="google-maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10838.427892817743!2d39.7151756!3d47.224272049999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x766b639c81255633!2z0JvQsNC90LTQsNGDINC4INCa0L4!5e0!3m2!1sru!2sru!4v1526632517668" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>

</main>
