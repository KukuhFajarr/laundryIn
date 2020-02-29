<center>

<h3>halaman tracking admin</h3>
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">no</th>
        <th scope="col">id</th>
        <th scope="col">status</th>
      </tr>
    </thead>
    <?php $NO=1; foreach ($pesan as $pelanggan): ?>
    <tbody>
      <tr>
        <td><?= $NO; ?></td>
        <td><?= $pelanggan['id_user'];  ?></td>
        <td><?= $pelanggan['status_laundry'];  ?></td>
        <td><a href="<?= base_url(); ?>admin/edit/<?= $pelanggan['id_laundry']; ?>">edit</a></td>
      </tr>
    </tbody>
    <?php $NO++; endforeach; ?>
  </table>
</div>

</div>
  <br>


</center>
