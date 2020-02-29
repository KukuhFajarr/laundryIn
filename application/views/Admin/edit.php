
	<?php foreach($status as $u){ ?>
	<form action="<?php echo base_url().'admin/update'; ?>" method="post">

      <center>
      <div style="width: 60%;">
      <form class="" action="<?= base_url(); ?>user/pesan" method="post">
        <input type="hidden" name="id" value="<?php echo $u->id_laundry ?>">

        <input class="form-control" type="text" placeholder="status_laundry" name="status_laundry" value="<?= $u->status_laundry?>"> <br>
      <button type="submit">submit</button>


	</form>
	<?php } ?>
