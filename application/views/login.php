
  <center>
    <h3>bagian login</h3>
<div style="width:50%; text-align: left;">
  <?= $this->session->flashdata('message'); ?>
  <form class="user" method="post" action="<?= base_url('login'); ?>">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
    </div>
    <button type="submit" class="btn btn-primary">login</button>
    <a href="<?= base_url();?>login/register" class="ml-5">register</a>
  </form>

</div>
</center>
