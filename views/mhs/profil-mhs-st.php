<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('mhs/dist/header');
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Setting Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Setting Profile</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">Informasi Akademik</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="identitas-tab" data-toggle="tab" href="#identitas"
                                        role="tab" aria-controls="identitas" aria-selected="false">Identitas Sekolah
                                        Asal</a>
                                </li>

                            </ul>


                            <div class="tab-content" id="myTabContent">
                                <!-- Start Ini Tab untuk Setting Akun -->
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <?php echo $this->session->flashdata('pesan'); ?>
                                    <div class="row mt-sm-4">
                                        <div class="col-12 col-md-12 col-lg-5">
                                            <div class="card profile-widget">
                                                <?php if ($this->session->flashdata('error')): ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>Error:</strong>
                                                    <?php echo $this->session->flashdata('error'); ?>
                                                </div>
                                                <?php endif; ?>
                                                <div class="profile-widget-header">
                                                    <?php if ($mhs['photo'] == NULL) { ?>
                                                    <img src="<?php echo base_url('assets/images/default.jpg'); ?>"
                                                        alt="" class="rounded-circle profile-widget-picture">
                                                    <?php } else { ?>
                                                    <img src="<?php echo base_url('assets/images/uploads/' . $mhs['photo']); ?>"
                                                        alt="" class="rounded-circle profile-widget-picture">
                                                    <?php } ?>
                                                </div>
                                                <form class="form-horizontal" method="post"
                                                    action="<?= site_url('mhs/profil/updatePhoto'); ?>"
                                                    enctype="multipart/form-data">
                                                    <div class="card-default custom-file">
                                                        <input type="hidden" name="id_mahasiswa"
                                                            value="<?= $mhs['id_mahasiswa']; ?>">
                                                        <input type="hidden"
                                                            name="<?= $this->security->get_csrf_token_name(); ?>"
                                                            value="<?= $this->security->get_csrf_hash(); ?>">
                                                        <input type="file" class="custom-file-input" id="upload_file"
                                                            name="photo" required="">
                                                        <label class="custom-file-label" for="customFile">Choose
                                                            file</label>
                                                    </div>
                                                    <div class="card-footer text-left">
                                                        <button type="submit" class="btn btn-primary">Upload
                                                            Foto</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="card card-primary">
                                                <div class="card-header">
                                                    <h4>Reset Password</h4>
                                                </div>
                                                <form method="POST">
                                                    <div class="form-group">
                                                        <label for="password">New Password</label>
                                                        <input id="password" type="password"
                                                            class="form-control pwstrength" data-indicator="pwindicator"
                                                            name="password" tabindex="2" required>
                                                        <div id="pwindicator" class="pwindicator">
                                                            <div class="bar"></div>
                                                            <div class="label"></div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="password-confirm">Confirm Password</label>
                                                        <input id="password-confirm" type="password"
                                                            class="form-control" name="confirm-password" tabindex="2"
                                                            required>
                                                    </div>

                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary btn-lg btn-block"
                                                            tabindex="4">
                                                            Reset Password
                                                        </button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-7">
                                            <div class="card">
                                                <?php if ($this->session->flashdata('success')): ?>
                                                <div class="alert alert-success" role="alert">
                                                    <?php echo $this->session->flashdata('success'); ?>
                                                </div>
                                                <?php endif; ?>

                                                <form class="needs-validation" method="post"
                                                    action="<?php echo base_url('mhs/profil/updateAksiProfil') ?>"
                                                    novalidate>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-12">
                                                                <label>NIM</label>
                                                                <input type="hidden" name="id_mahasiswa"
                                                                    value="<?php echo $mhs['id_mahasiswa']; ?>">
                                                                <input type="hidden"
                                                                    name="<?= $this->security->get_csrf_token_name(); ?>"
                                                                    value="<?= $this->security->get_csrf_hash(); ?>">
                                                                <input type="text" class="form-control"
                                                                    value="<?php echo $mhs['nim'] ?>" required=""
                                                                    disabled>
                                                                <div class="invalid-feedback">Please fill in the first
                                                                    name</div>
                                                            </div>
                                                            <div class="form-group col-md-6 col-12">
                                                                <label>Nama Lengkap</label>
                                                                <input name="nama_mhs" type="text" class="form-control"
                                                                    value="<?php echo $mhs['nama_mhs'] ?>" required="">
                                                                <div class="invalid-feedback">Please fill in the last
                                                                    name</div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-12">
                                                                <label>Agama</label>
                                                                <?php $ag = $mhs['agama']; ?>
                                                                <select name="agama" class="form-control">
                                                                    <option value=""></option>
                                                                    <option value="Islam"
                                                                        <?php echo ($ag == 'Islam') ? 'selected' : ''; ?>>
                                                                        Islam
                                                                    </option>
                                                                    <option value="Kristen"
                                                                        <?php echo ($ag == 'Kristen') ? 'selected' : ''; ?>>
                                                                        Kristen
                                                                    </option>
                                                                    <option value="Katolik"
                                                                        <?php echo ($ag == 'Katolik' ) ? 'selected' : ''; ?>>
                                                                        Katolik
                                                                    </option>
                                                                    <option value="Konghucu"
                                                                        <?php echo ($ag == 'Konghucu') ? 'selected' : ''; ?>>
                                                                        Konghucu
                                                                    </option>
                                                                    <option value="Budha"
                                                                        <?php echo ($ag == 'Budha') ? 'selected' : ''; ?>>
                                                                        Budha
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6 col-12">
                                                                <label>Jenis Kelamin</label>
                                                                <?php $jk = $mhs['jk']; ?>
                                                                <select name="jk" class="form-control">
                                                                    <option value=""></option>
                                                                    <option value="Laki-Laki"
                                                                        <?php echo ($jk == 'Laki-Laki') ? 'selected' : ''; ?>>
                                                                        Laki-Laki
                                                                    </option>
                                                                    <option value="Perempuan"
                                                                        <?php echo ($jk == 'Perempuan') ? 'selected' : ''; ?>>
                                                                        Perempuan
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-12">
                                                                <label>Tempat Lahir</label>
                                                                <input type="text" name="tempat_lahir"
                                                                    value="<?php echo $mhs['tempat_lahir']; ?>"
                                                                    class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-md-7 col-12">
                                                                <label>Email</label>
                                                                <input type="email" name="email" class="form-control"
                                                                    value="<?php echo $mhs['email'] ?>" required="">
                                                                <div class="invalid-feedback">Please fill in the email
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-5 col-12">
                                                                <label>No Hp / WA</label>
                                                                <input name="hp" type="tel" class="form-control"
                                                                    value="<?php echo $mhs['hp'] ?>">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-12">
                                                                <label>Alamat</label>
                                                                <textarea name="alamat"
                                                                    class="form-control"><?php echo $mhs['alamat']; ?></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-12">
                                                                <label>Kota</label>
                                                                <input type="text" name="kota"
                                                                    value="<?php echo $mhs['kota']; ?>"
                                                                    class="form-control" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Save
                                                            Changes</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Untuk tab panel Setting Akun -->
                                <!-- Tab informasi Akademik -->
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="card-body">
                                        <h3 class="card-header"> Informasi Akademik</h3>
                                        <div class="row">
                                            <div class="col-12 col-md-12">
                                                <div class="card">
                                                    <form>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label>Your Name</label>
                                                                        <input type="text" class="form-control is-valid"
                                                                            value="Rizal Fakhri" required="">
                                                                        <div class="valid-feedback">
                                                                            Good job!
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label>Your Name</label>
                                                                        <input type="text" class="form-control is-valid"
                                                                            value="Rizal Fakhri" required="">
                                                                        <div class="valid-feedback">
                                                                            Good job!
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Your Name</label>
                                                                <input type="text" class="form-control is-valid"
                                                                    value="Rizal Fakhri" required="">
                                                                <div class="valid-feedback">
                                                                    Good job!
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input type="email" class="form-control is-invalid"
                                                                    required="" value="rizal@fakhri">
                                                                <div class="invalid-feedback">
                                                                    Oh no! Email is invalid.
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Subject</label>
                                                                <input type="email" class="form-control">
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <label>Message</label>
                                                                <textarea class="form-control is-invalid"
                                                                    required="">Hello, i'm handsome!</textarea>
                                                                <div class="invalid-feedback">
                                                                    Oh no! You entered an inappropriate word.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-right">
                                                            <button class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="identitas" role="tabpanel"
                                    aria-labelledby="identitas-tab">
                                    <div class="card-body">
                                        <h3 class="card-header"> Identitas Sekolah Asal</h3>
                                        <div class="row">
                                            <div class="col-12 col-md-12">
                                                <div class="card">
                                                    <form>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label>Your Name</label>
                                                                        <input type="text" class="form-control is-valid"
                                                                            value="Rizal Fakhri" required="">
                                                                        <div class="valid-feedback">
                                                                            Good job!
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label>Your Name</label>
                                                                        <input type="text" class="form-control is-valid"
                                                                            value="Rizal Fakhri" required="">
                                                                        <div class="valid-feedback">
                                                                            Good job!
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Your Name</label>
                                                                <input type="text" class="form-control is-valid"
                                                                    value="Rizal Fakhri" required="">
                                                                <div class="valid-feedback">
                                                                    Good job!
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input type="email" class="form-control is-invalid"
                                                                    required="" value="rizal@fakhri">
                                                                <div class="invalid-feedback">
                                                                    Oh no! Email is invalid.
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Subject</label>
                                                                <input type="email" class="form-control">
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <label>Message</label>
                                                                <textarea class="form-control is-invalid"
                                                                    required="">Hello, i'm handsome!</textarea>
                                                                <div class="invalid-feedback">
                                                                    Oh no! You entered an inappropriate word.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-right">
                                                            <button class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>

        <h2 class="section-title">Hi,
            <?ph
p echo $mhs['nama_mhs']?>
        </h2>
        <p class="section-lead">
            <!-- Change information about yourself on this page. -->
        </p>
</div>
</section>

</div>











<?php $this->load->view('mhs/dist/footer'); ?>