<header class="main-nav">
  <div class="sidebar-user text-center">
    <a class="setting-primary" href="<?php echo base_url('user/profile'); ?>"><i data-feather="settings"></i></a>
    <img class="img-90 rounded-circle" src="<?php echo base_url('public'); ?>/assets/images/dashboard/1.png" alt="">
    <div class="badge-bottom"><span class="badge badge-primary"></span></div><a href="">
    <h6 class="mt-3 f-14 f-w-600"><?php echo $this -> auth -> kullanicibilgisi() -> adsoyad; ?></h6></a>
    <p class="mb-0 font-roboto">
		<?php
			if($this -> auth -> kullanicibilgisi() -> yetki == 1)
			{
				echo "Admin";
			}
			else if($this -> auth -> kullanicibilgisi() -> yetki == 2)
			{
				echo "Tedarikçi";
			}
			else if($this -> auth -> kullanicibilgisi() -> yetki == 3)
			{
				echo "Acente";
			}
		?>
	</p>
    <ul>
      <li><span><?php echo duzgun_tarih($this -> auth -> kullanicibilgisi() -> olusturma_tarihi); ?></span>
        <p>Oluşturma Tarihi</p>
      </li>
    </ul>
  </div>
  <nav>
    <div class="main-navbar">
      <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
      <div id="mainnav">
        <ul class="nav-menu custom-scrollbar">
          	<li class="back-btn">
            	<div class="mobile-back text-end"><span>Geri</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
          	</li>

			<?php if($this -> auth -> kullanicibilgisi() -> yetki == 1): ?>
				<li class="sidebar-main-title">
					<div>
					  <h6>Yönetim Paneli</h6>
					</div>
				</li>
				<li class="dropdown">
					<a class="nav-link menu-title <?php echo $this->uri->segment(1) == 'admin' && $this->uri->segment(2) == '' ? 'active' : ''; ?>" href="javascript:void(0)"><i data-feather="home"></i><span>Anasayfa</span></a>
					<ul class="nav-submenu menu-content">
					  <li><a href="<?php echo base_url(); ?>admin" <?php echo $this->uri->segment(1) == 'admin' && $this->uri->segment(2) == '' ? 'class="active"' : ''; ?>>Gösterge Paneli</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="nav-link menu-title <?php echo $this->uri->segment(1) == 'admin' && ($this->uri->segment(2) == 'rezervasyon_ekle' || $this->uri->segment(2) == 'rezervasyonlar') ? 'active' : ''; ?>" href="javascript:void(0)"><i data-feather="book"></i><span>Rezervasyonlar</span></a>
					<ul class="nav-submenu menu-content">
					  <li><a href="<?php echo base_url(); ?>admin/rezervasyon_ekle" <?php echo $this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'rezervasyon_ekle' ? 'class="active"' : ''; ?>>Rezervasyon Ekle</a></li>
					  <li><a href="<?php echo base_url(); ?>admin/rezervasyonlar/islemde" <?php echo $this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'rezervasyonlar' && $this->uri->segment(3) == 'islemde' ? 'class="active"' : ''; ?>">İşlemde</a></li>
					  <li><a href="<?php echo base_url(); ?>admin/rezervasyonlar/onay_bekleyenler" <?php echo $this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'rezervasyonlar' && $this->uri->segment(3) == 'onay_bekleyenler' ? 'class="active"' : ''; ?>">Onay Bekleyenler</a></li>
					  <li><a href="<?php echo base_url(); ?>admin/rezervasyonlar/iptal_edilen" <?php echo $this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'rezervasyonlar' && $this->uri->segment(3) == 'iptal_edilen' ? 'class="active"' : ''; ?>>İptal Edilen</a></li>
					  <li><a href="<?php echo base_url(); ?>admin/rezervasyonlar/tamamlananlar" <?php echo $this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'rezervasyonlar' && $this->uri->segment(3) == 'tamamlananlar' ? 'class="active"' : ''; ?>>Tamamlananlar</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="nav-link menu-title <?php echo $this->uri->segment(1) == 'admin' && ($this->uri->segment(2) == 'acenteler' || $this->uri->segment(2) == 'acente_duzenle') ? 'active' : ''; ?>" href="javascript:void(0)" ><i data-feather="users"></i><span>Acenteler</span></a>
					<ul class="nav-submenu menu-content">
						<li><a href="<?php echo base_url(); ?>admin/acenteler" <?php echo $this->uri->segment(1) == 'admin' && ($this->uri->segment(2) == 'acenteler' || $this->uri->segment(2) == 'acente') ? 'class="active"' : ''; ?>>Acente Listesi</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="nav-link menu-title <?php echo $this->uri->segment(1) == 'admin' && ($this->uri->segment(2) == 'tedarikciler' || $this->uri->segment(2) == 'tedarikci_duzenle') ? 'active' : ''; ?>" href="javascript:void(0)"><i data-feather="users"></i><span>Tedarikçiler</span></a>
					<ul class="nav-submenu menu-content">
						<li><a href="<?php echo base_url(); ?>admin/tedarikciler" <?php echo $this->uri->segment(1) == 'admin' && ($this->uri->segment(2) == 'tedarikciler' || $this->uri->segment(2) == 'tedarikci_duzenle') ? 'class="active"' : ''; ?>>Tedarikçi Listesi</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="nav-link menu-title <?php echo $this->uri->segment(1) == 'admin' && ($this->uri->segment(2) == 'turlar' || $this->uri->segment(2) == 'tur_ekle') ? 'active' : ''; ?>" href="javascript:void(0)"><i data-feather="box"></i><span>Şehir Turları</span></a>
					<ul class="nav-submenu menu-content">
						<li><a href="<?php echo base_url(); ?>admin/turlar" <?php echo $this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'turlar' ? 'class="active"' : ''; ?>>Turlar</a></li>
						<li><a href="<?php echo base_url(); ?>admin/tur_ekle" <?php echo $this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'tur_ekle' ? 'class="active"' : ''; ?>>Tur Ekle</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="nav-link menu-title <?php echo $this->uri->segment(1) == 'admin' && ($this->uri->segment(2) == 'tedarikci_talepleri' || $this->uri->segment(2) == 'acente_talepleri') ? 'active' : ''; ?>" href="javascript:void(0)"><i data-feather="list"></i><span>Destek Talepleri</span></a>
					<ul class="nav-submenu menu-content">
						<li><a href="<?php echo base_url(); ?>admin/acente_talepleri" <?php echo $this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'acente_talepleri'? 'class="active"' : ''; ?>>Acente Destek</a></li>
						<li><a href="<?php echo base_url(); ?>admin/tedarikci_talepleri" <?php echo $this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'tedarikci_talepleri'? 'class="active"' : ''; ?>>Tedarikçi Destek</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file"></i><span>Raporlar</span></a>
					<ul class="nav-submenu menu-content">
						<li><a href="">Satış Raporları</a></li>
						<li><a href="">Acente Komisyonları</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layers"></i><span>İşlemler</span></a>
					<ul class="nav-submenu menu-content">
						<li><a href="">Make Up</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="database"></i><span>Marketing</span></a>
					<ul class="nav-submenu menu-content">
						<li><a href="">Mail</a></li>
						<li><a href="">Sms</a></li>
					</ul>
				</li>
			<?php endif; ?>

			<?php if($this -> auth -> kullanicibilgisi() -> yetki == 2): ?>
				<li class="sidebar-main-title">
					<div>
						<h6>Tedarikçi Paneli</h6>
					</div>
				</li>
				<li class="dropdown">
					<a class="nav-link menu-title <?php echo $this->uri->segment(1) == 'tedarikci' && $this->uri->segment(2) == '' ? 'active' : ''; ?>" href="javascript:void(0)"><i data-feather="home"></i><span>Anasayfa</span></a>
					<ul class="nav-submenu menu-content">
						<li><a href="<?php echo base_url(); ?>tedarikci" <?php echo $this->uri->segment(1) == 'tedarikci' && $this->uri->segment(2) == '' ? 'class="active"' : ''; ?>>Gösterge Paneli</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="nav-link menu-title <?php echo $this->uri->segment(1) == 'tedarikci' && ($this->uri->segment(2) == 'rezervasyon_ekle' || $this->uri->segment(2) == 'rezervasyonlar') ? 'active' : ''; ?>" href="javascript:void(0)"><i data-feather="book"></i><span>Rezervasyonlar</span></a>
					<ul class="nav-submenu menu-content">
						<li><a href="<?php echo base_url(); ?>tedarikci/rezervasyon_ekle" <?php echo $this->uri->segment(1) == 'tedarikci' && $this->uri->segment(2) == 'rezervasyon_ekle' ? 'class="active"' : ''; ?>>Rezervasyon Ekle</a></li>
						<li><a href="<?php echo base_url(); ?>tedarikci/rezervasyonlar/aktif" <?php echo $this->uri->segment(1) == 'tedarikci' && $this->uri->segment(2) == 'rezervasyonlar' && $this->uri->segment(3) == 'aktif' ? 'class="active"' : ''; ?>">Aktif Rezervasyonlar</a></li>
						<li><a href="<?php echo base_url(); ?>tedarikci/rezervasyonlar/iptal_edilen" <?php echo $this->uri->segment(1) == 'tedarikci' && $this->uri->segment(2) == 'rezervasyonlar' && $this->uri->segment(3) == 'iptal_edilen' ? 'class="active"' : ''; ?>>İptal Edilenler</a></li>
						<li><a href="<?php echo base_url(); ?>tedarikci/rezervasyonlar/tamamlananlar" <?php echo $this->uri->segment(1) == 'tedarikci' && $this->uri->segment(2) == 'rezervasyonlar' && $this->uri->segment(3) == 'tamamlananlar' ? 'class="active"' : ''; ?>>Tamamlananlar</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="command"></i><span>Araçlar</span></a>
					<ul class="nav-submenu menu-content">
						<li><a href="<?php echo base_url(); ?>tedarikci/araclar">Araç Listesi</a></li>
						<li><a href="<?php echo base_url(); ?>tedarikci/arac_ekle">Araç Ekle</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="user"></i><span>Sürücüler</span></a>
					<ul class="nav-submenu menu-content">
						<li><a href="">Sürücü Listesi</a></li>
						<li><a href="">Sürücü Ekle</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="feather"></i><span>Şehirler</span></a>
					<ul class="nav-submenu menu-content">
						<li><a href="">Şehir Listesi</a></li>
						<li><a href="">Şehir Ekle</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file"></i><span>Raporlar</span></a>
					<ul class="nav-submenu menu-content">
						<li><a href="">Raporlar</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="nav-link menu-title <?php echo $this->uri->segment(1) == 'tedarikci' && ($this->uri->segment(2) == 'taleplerim' || $this->uri->segment(2) == 'talep_olustur') ? 'active' : ''; ?>" href="javascript:void(0)"><i data-feather="list"></i><span>Destek Talepleri</span></a>
					<ul class="nav-submenu menu-content">
						<li><a href="<?php echo base_url(); ?>tedarikci/talep_olustur" <?php echo $this->uri->segment(1) == 'tedarikci' && $this->uri->segment(2) == 'talep_olustur'? 'class="active"' : ''; ?>>Talep Oluştur</a></li>
						<li><a href="<?php echo base_url(); ?>tedarikci/taleplerim" <?php echo $this->uri->segment(1) == 'tedarikci' && $this->uri->segment(2) == 'taleplerim'? 'class="active"' : ''; ?>>Taleplerim</a></li>
					</ul>
				</li>
			<?php endif; ?>

			<?php if($this -> auth -> kullanicibilgisi() -> yetki == 3): ?>
				<li class="sidebar-main-title">
					<div>
						<h6>Acente Paneli</h6>
					</div>
				</li>
				<li class="dropdown">
					<a class="nav-link menu-title <?php echo $this->uri->segment(1) == 'acente' && $this->uri->segment(2) == '' ? 'active' : ''; ?>" href="javascript:void(0)"><i data-feather="home"></i><span>Anasayfa</span></a>
					<ul class="nav-submenu menu-content">
						<li><a href="<?php echo base_url(); ?>acente" <?php echo $this->uri->segment(1) == 'acente' && $this->uri->segment(2) == '' ? 'class="active"' : ''; ?>>Gösterge Paneli</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="nav-link menu-title <?php echo $this->uri->segment(1) == 'acente' && ($this->uri->segment(2) == 'rezervasyon_ekle' || $this->uri->segment(2) == 'rezervasyonlar') ? 'active' : ''; ?>" href="javascript:void(0)"><i data-feather="book"></i><span>Rezervasyonlar</span></a>
					<ul class="nav-submenu menu-content">
						<li><a href="<?php echo base_url(); ?>acente/rezervasyon_ekle" <?php echo $this->uri->segment(1) == 'acente' && $this->uri->segment(2) == 'rezervasyon_ekle' ? 'class="active"' : ''; ?>>Rezervasyon Ekle</a></li>
						<li><a href="<?php echo base_url(); ?>acente/rezervasyonlar/aktif" <?php echo $this->uri->segment(1) == 'acente' && $this->uri->segment(2) == 'rezervasyonlar' && $this->uri->segment(3) == 'aktif' ? 'class="active"' : ''; ?>">Aktif Rezervasyonlar</a></li>
						<li><a href="<?php echo base_url(); ?>acente/rezervasyonlar/iptal_edilen" <?php echo $this->uri->segment(1) == 'acente' && $this->uri->segment(2) == 'rezervasyonlar' && $this->uri->segment(3) == 'iptal_edilen' ? 'class="active"' : ''; ?>>İptal Edilenler</a></li>
						<li><a href="<?php echo base_url(); ?>acente/rezervasyonlar/tamamlananlar" <?php echo $this->uri->segment(1) == 'acente' && $this->uri->segment(2) == 'rezervasyonlar' && $this->uri->segment(3) == 'tamamlananlar' ? 'class="active"' : ''; ?>>Tamamlananlar</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file"></i><span>Raporlar</span></a>
					<ul class="nav-submenu menu-content">
						<li><a href="">Raporlar</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="nav-link menu-title <?php echo $this->uri->segment(1) == 'acente' && ($this->uri->segment(2) == 'taleplerim' || $this->uri->segment(2) == 'talep_olustur') ? 'active' : ''; ?>" href="javascript:void(0)"><i data-feather="list"></i><span>Destek Talepleri</span></a>
					<ul class="nav-submenu menu-content">
						<li><a href="<?php echo base_url(); ?>acente/talep_olustur" <?php echo $this->uri->segment(1) == 'acente' && $this->uri->segment(2) == 'talep_olustur'? 'class="active"' : ''; ?>>Talep Oluştur</a></li>
						<li><a href="<?php echo base_url(); ?>acente/taleplerim" <?php echo $this->uri->segment(1) == 'acente' && $this->uri->segment(2) == 'taleplerim'? 'class="active"' : ''; ?>>Taleplerim</a></li>
					</ul>
				</li>
			<?php endif; ?>

          <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </div>
  </nav>
</header>
