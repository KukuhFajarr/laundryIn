
<center>
  <h3>registration</h3>
<div style="width:70%; text-align: left;">

<form class="user" method="post" action="<?= base_url(); ?>login/register">
  <div class="form-group">
    <label for="exampleInputEmail1">full name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
           placeholder="full name" name="name"
           value="<?= set_value('name'); ?>">
    <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="email" aria-describedby="emailHelp"
           placeholder="Enter email" name="email"
           value="<?= set_value('email'); ?>">
    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
</div>
<div class="form-group">
  <label for="exampleInputPassword1">no handphone</label>
  <input type="number" class="form-control" id="nomor" placeholder="no handphone" name="nomor">
  <?= form_error('nomor', '<small class="text-danger">', '</small>'); ?>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="gender" value="L" checked>
  <label class="form-check-label" for="exampleRadios1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="gender" value="P">
  <label class="form-check-label" for="exampleRadios1">
    Female
  </label>
  <div class="form-group">
    <label for="exampleInputPassword1">TTL</label>
    <input type="date" class="form-control" id="ttl" name="ttl">
    <?= form_error('ttl', '<small class="text-danger">', '</small>'); ?>
  </div>
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password1" placeholder="Password" name="password1">
    <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="password2" placeholder="Password" name="password2">
  </div>
  <button type="submit" class="btn btn-primary">register akun</button>
  <a href="<?= base_url();?>login" class="ml-5">back to login</a>
</form>

</div>
</center>
