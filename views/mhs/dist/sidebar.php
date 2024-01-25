<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#"> <img class="img-circle" src="<?php echo base_url() ?>assets/img/logo_sbh.png" alt=""
                    style="width: 50px; height: 40px;" />
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">SBH</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="<?php echo $this->uri->segment(2) == 'index' ? 'active' : ''; ?>"><a class="nav-link"
                    href="<?php echo base_url(); ?>mhs/home"><i class="fas fa-fire"></i><span>Dashboard
                    </span></a>
            </li>
            <!-- <li
                class="dropdown <?php echo $this->uri->segment(2) == '' || $this->uri->segment(2) == 'index' || $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>"><a class="nav-link"
                            href="<?php echo base_url(); ?>mhs/dist/index_0">General Dashboard</a></li>
                    <li
                        class="<?php echo $this->uri->segment(2) == '' || $this->uri->segment(2) == 'index' ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo base_url(); ?>dist/index">Ecommerce Dashboard</a>
                    </li>
                </ul>
            </li> -->
            <li class="menu-header">Informasi Akademik</li>
            <li
                class="dropdown <?php echo $this->uri->segment(2) == 'jadwal' || $this->uri->segment(2) == 'jadwaluts' || $this->uri->segment(2) == 'jadwaluas' ? 'active' : ''; ?>">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Jadwal Perkuliahan</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo $this->uri->segment(2) == 'jadwal' ? 'active' : ''; ?>"><a class="nav-link"
                            href="<?php echo base_url(); ?>mhs/jadwal">Jadwal Kuliah</a>
                    </li>
                    <li class="<?php echo $this->uri->segment(2) == 'jadwaluts' ? 'active' : ''; ?>"><a class="nav-link"
                            href="<?php echo base_url(); ?>mhs/jadwaluts">Jadwal UTS</a>
                    </li>
                    <li class="<?php echo $this->uri->segment(2) == 'jadwaluas' ? 'active' : ''; ?>"><a class="nav-link"
                            href="<?php echo base_url(); ?>mhs/jadwaluas">Jadwal UAS</a>
                    </li>
                </ul>
            </li>


            <li class="menu-header">Akademik</li>

            <li
                class="dropdown <?php echo $this->uri->segment(2) == 'forms_advanced_form' || $this->uri->segment(2) == 'forms_editor' || $this->uri->segment(2) == 'forms_validation' ? 'active' : ''; ?>">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Akademik</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo $this->uri->segment(2) == 'mhs/Krs' ? 'active' : ''; ?>"><a class="nav-link"
                            href="<?php echo base_url(); ?>mhs/Krs">Isi KRS</a>
                    </li>
                    <li class="<?php echo $this->uri->segment(2) == 'mhs/KrsView' ? 'active' : ''; ?>"><a
                            class="nav-link" href="<?php echo base_url(); ?>mhs/KrsView">Cetak KRS</a></li>
                    <li class="<?php echo $this->uri->segment(2) == 'mhs/Khs' ? 'active' : ''; ?>"><a class="nav-link"
                            href="<?php echo base_url(); ?>mhs/Khs">Cetak KHS</a></li>

                </ul>
            </li>


            <li class="<?php echo $this->uri->segment(2) == 'credits' ? 'active' : ''; ?>"><a class="nav-link"
                    href="<?php echo base_url(); ?>mhs/dist/credits"><i class="far fa-file-alt"></i>
                    <span>Transkrip Nilai</span></a></li>
            <li class="menu-header">Administrasi</li>

            <li class="<?php echo $this->uri->segment(2) == 'credits' ? 'active' : ''; ?>"><a class="nav-link"
                    href="<?php echo base_url(); ?>mhs/dist/credits"><i class="fas fa-pencil-ruler"></i>
                    <span>Administrasi</span></a></li>
        </ul>


    </aside>
</div>