
<style>
   #margin-a{
     font-size: 30px;
     font-weight: bold;
     margin-bottom: 30px;
   }
   #margin-aa{
     margin-top: -150px;
     margin-left: 250px;
   }
   #margin-b{
     margin-left: 250px;
     margin-top: 10px;
   }
  #margin-c{
        font-size: 30px;
        font-weight: bold;
        margin-top: 100px;
      }
  #btn-member{
    display: inline-block;
    width: 200px;
    text-align: center;
    height: 50px;
    padding-top: 5px;
    margin-top: 20px;
    margin-left: 130px;
    border: 2px solid black;
    border-radius: 20px;
    font-size: 20px;
    font-weight: bold;
  }
  .kiri{
    margin-top: 50px;
    padding-left: 50px;
  }
  .kanan{
    float: right;
    margin-right: 400px;
    margin-top: -400px;
  }
  .kanan img{
    position: absolute;
  }
</style>
<div class="container-fluid kiri">
  <div class="kiri">
    <p id="margin-a">Laundry kiloan & satuan</p>
    <img src="<?= base_url() ?>assets/antar.png" width="200px" height="200px">
    <h2 id="margin-aa">ANTAR JEMPUT</h2>
    <p id="margin-b">Langsung ke rumah untuk daerah <br>Malang & sekitarnya</p>
    <p id="margin-c">Jadi member banyak keuntungan</p>
    <a id="btn-member" href="#">Daftar Sekarang</a>
  </div>
  <div class="kanan">
    <img id="img-a" src="<?= base_url() ?>assets/jemur.png" width="200px" height="100px">
    <img src="<?= base_url() ?>assets/ibulaundry.png" width="150px" height="200px">
    <img src="<?= base_url() ?>assets/ironing.png" width="50px" height="100px">
  </div>

  </div>
</div>
