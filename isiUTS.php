<div class="row">
  <section class="col-lg-12 connectedSortable">
    <div class="card direct-chat direct-chat-primary">
      <div class="card-header">
        <h3 class="card-title">Form Pengukuran BMI</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>

          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-3">
        <form style="border: 1px solid orange;" class="p-3" action="uts.php" method="POST">
          <div class="form-group row">
            <label for="kode" class="col-4 col-form-label">Kode Pasien</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-500px"></i>
                  </div>
                </div>
                <input id="kode" name="kode" placeholder="Masukkan Kode Pasien" type="text" class="form-control"
                  required="required">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
              <input id="nama" name="nama" placeholder="Masukkan Nama Pasien" type="text" class="form-control"
                required="required">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-address-book"></i>
                  </div>
                </div>
                <input id="email" name="email" placeholder="Masukkan Email Pasien" type="text" class="form-control"
                  required="required">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Gender</label>
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L" required="required">
                <label for="jk_0" class="custom-control-label">Laki-Laki</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P" required="required">
                <label for="jk_1" class="custom-control-label">Perempuan</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="id_pasien" class="col-4 col-form-label">ID Pasien</label>
            <div class="col-8">
              <input id="id_pasien" name="id_pasien" placeholder="ID Pasien" type="text" class="form-control"
                required="required">
            </div>
          </div>
          <div class="form-group row">
            <label for="tanggal_regis" class="col-4 col-form-label">Tanggal Pemeriksaan</label>
            <div class="col-8">
              <input id="tanggal_regis" name="tanggal_regis" type="date" class="form-control" required="required">
            </div>
          </div>
          <div class="form-group row">
            <label for="tinggi_p" class="col-4 col-form-label">Tinggi Pasien</label>
            <div class="col-8">
              <input id="tinggi_p" name="tinggi_p" placeholder="Masukkan Tinggi Pasien" type="number"
                class="form-control" required="required">
            </div>
          </div>
          <div class="form-group row">
            <label for="berat_p" class="col-4 col-form-label">Berat</label>
            <div class="col-8">
              <input id="berat_p" name="berat_p" placeholder="Masukkan Berat Pasien" type="number" class="form-control"
                required="required">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary" value="submit">Submit</button>
            </div>
          </div>
        </form>

        <?php
        require_once "class_pasien.php";
                $_submit = $_POST['submit'];
                $_id = $_POST['id'];
                $_kode = $_POST['kode'];
                $_nama = $_POST['nama'];
                $_tmp_lahir = $_POST['tmp_lahir'];
                $_tgl_lahir = $_POST['tgl_lahir'];
                $_email = $_POST['email'];
                $_jk = $_POST['jk'];
                $_id_pasien = $_POST['id_pasien'];
                $_tanggal_regis = $_POST['tanggal_regis'];
                $_tinggi_p = $_POST['tinggi_p'];
                $_berat_p = $_POST['berat_p'];
        $form_tes = new Pasien($_id, $_kode, $_nama, $_tmp_lahir, $_tgl_lahir, $_email, $_jk, $_id_pasien, $_tanggal_regis, $_tinggi_p, $_berat_p);
        ?>
        <?php  if (isset($_submit)) : ?>
        <div class="row mt-3" style="border: 1px solid green;">
          <div class="col-md-12 p-3">
            <h4 class="text-center bg-success">Hasil Data Pasien</h4>
            <table class="table table-primary mt-4">

              <thead>
                <tr>
                  <th scope="col">Tanggal Pemeriksaan</th>
                  <th scope="col">:</th>
                  <th scope="col"><?= $form_tes->tanggal ?></th>
                </tr>

                <tr>
                  <th scope="col">Kode Pasien</th>
                  <th scope="col">:</th>
                  <th scope="col"><?= $form_tes->kode ?></th>
                </tr>

                <tr>
                  <th scope="col">Nama</th>
                  <th scope="col">:</th>
                  <th scope="col"><?= $form_tes->nama ?></th>
                </tr>

                <tr>
                  <th scope="col">Gender</th>
                  <th scope="col">:</th>
                  <th scope="col"><?= $form_tes->gender ?></th>
                </tr>

                <tr>
                  <th scope="col">Berat Pasien</th>
                  <th scope="col">:</th>
                  <th scope="col"><?= $form_tes->berat ?></th>
                </tr>

                <tr>
                  <th scope="col">Tinggi Pasien</th>
                  <th scope="col">:</th>
                  <th scope="col"><?= $form_tes->tinggi ?></th>
                </tr>

                <tr>
                  <th scope="col">Angka BMI</th>
                  <th scope="col">:</th>
                  <th scope="col"><?= $form_tes->nilai_bmi() ?></th>
                </tr>

                <tr>
                  <th scope="col">Hasil</th>
                  <th scope="col">:</th>
                  <th scope="col"> <?= $form_tes->status_bmi() ?>
                  </th>
                </tr>

              </thead>


            </table>

          </div>
        </div>
        <?php endif ?>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <h4>Project UTS</h4>
      </div>
      <!-- /.card-footer-->
    </div>

    <!-- /.card -->
  </section>
</div>

<div class="row">
  <section class="col-lg-12 connectedSortable">
    <div class="card direct-chat direct-chat-primary">
      <div class="card-header">
        <h3 class="card-title">Daftar Pasien</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>

          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-3">
        <?php
        // require_once "class_bmiPasien.php";
        // require_once "class_pasien.php";
        // require_once "class_bmi.php";

       
        ?>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tanggal Periksa</th>
              <th scope="col">Kode Pasien</th>
              <th scope="col">Nama Pasien</th>
              <th scope="col">Gender</th>
              <th scope="col">Berat (kg)</th>
              <th scope="col">Tinggi (cm)</th>
              <th scope="col">Nilai BMI</th>
              <th scope="col">Status BMI</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($array_pasien as $pasien) : ?>
            <tr>
              <th scope="row"><?= $no++; ?></th>
              <td><?= $pasien->tanggal ?></td>
              <td><?= $pasien->kode ?></td>
              <td><?= $pasien->nama ?></td>
              <td><?= $pasien->gender ?></td>
              <td><?= $pasien->berat ?></td>
              <td><?= $pasien->tinggi ?></td>
              <td><?= $pasien->nilai_bmi() ?></td>
              <td><?= $pasien->status_bmi() ?></td>
            </tr>
            <?php endforeach;   ?>

            <?php  if (isset($_submit)) : ?>
            <tr>
              <th scope="row"><?= $no; ?></th>
              <td><?= $form_tes->tanggal ?></td>
              <td><?= $form_tes->kode ?></td>
              <td><?= $form_tes->nama ?></td>
              <td><?= $form_tes->gender ?></td>
              <td><?= $form_tes->berat ?></td>
              <td><?= $form_tes->tinggi ?></td>
              <td><?= $form_tes->nilai_bmi() ?></td>
              <td><?= $form_tes->status_bmi() ?></td>
            </tr>
            <?php endif ?>
          </tbody>
        </table>


      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <h4>Project UTS</h4>
      </div>
      <!-- /.card-footer-->
    </div>

    <!-- /.card -->
  </section>
</div>
