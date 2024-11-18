<?= $this->extend('layout/template'); ?>
<?= $this->section('content') ?>
<div class="container mt-5">

  <table class="table">
    <thead class="table-success">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Alamat</th>
        <th scope="col">Tipe</th>
        <th scope="col">Rumah</th>
      </tr>
    </thead>
    <?php $i = 1; ?>
    <tbody>
      <?php foreach($users as $user) : ?>
      <tr>
        <th scope="row"><?= $i++; ?></th>
        <td><?= $user['alamat']; ?></td>
        <td><?= $user['tipe']; ?></td>
        <td><?= $user['kota']; ?></td>
      </tr>  
      <?php endforeach; ?>  
    </tbody>
  </table>
  <h2 class="text-center">Hubungi Kami</h2>
  <div class="row">
    <div class="col-md-6">
      <form>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Your Name" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Your Email" required>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" rows="4" placeholder="Your Message" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Send Message</button>
      </form>
    </div>
    <div class="col-md-6 mt-3">
      <div class="map" id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126525.27384434438!2d109.47292524335936!3d-7.692291899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7acb18bd87c67b%3A0xae0d20eb35aca3b3!2sMushola%20Arrohman!5e0!3m2!1sid!2sid!4v1731865157290!5m2!1sid!2sid" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection(); ?>