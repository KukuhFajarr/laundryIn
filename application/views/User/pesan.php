<center>
<div style="width: 60%;">
<h4>form laundry</h4>
<form class="" action="<?= base_url(); ?>user/pesan" method="post">
  <label for="exampleFormControlFile1">Jenis Laundry</label>
  <select class="form-control" name="Jenis_laundry">
  <option>kiloan</option>
  <option>satuan</option>
</select><br>
<label for="exampleFormControlFile1">Pilih Laundry</label>
<select class="form-control" name="Pilih_laundry">
<option>reguler(3 - 4 hari)</option>
<option>express(1 - 2 hari)</option>
</select><br>
  <input class="form-control" type="text" placeholder="name" name="Nama" value="<?= $user['name'];?>"> <br>
  <input class="form-control" type="number" name="No" placeholder="no hp" value="<?= $user['nomor'];?>"> <br>
  <input class="form-control" type="email" name="Email" placeholder="email" value="<?= $user['email'];?>"> <br>
  <input type="datetime-local" name="Waktu_pengambilan"> <br>
  <label for="exampleFormControlFile1">pilih pembayaran</label>
  <select class="form-control" name="Pembayaran">
  <option>cash</option>
  <option>saldo</option>
</select><br>
  <input class="form-control" type="text" placeholder="alamat" name="Alamat"> <br>
  <input class="form-control" type="text" placeholder="kab/kota" name="Kota"> <br>
  <input class="form-control" type="text" placeholder="kelurahan" name="Kel"> <br>
  <input class="form-control" type="text" placeholder="kecamatan" name="Kec"> <br>
  <textarea class="form-control" name="Catatan" rows="8" cols="80" placeholder="detail alamat"></textarea>
  <input class="form-control" type="hidden" name="id_User" value="<?= $user['id'];?>"> <br>
    <input class="form-control" type="hidden" name="status_laundry" value="pesanan sedang di ferifikasi"> <br>
<button type="submit">submit</button>



</form>
</div>
</center>
