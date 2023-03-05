      <!-- FlashData -->
      <div class="flash-data-login" data-flashdata="<?= $this->session->flashdata('msglogin'); ?>"></div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row" id="mycard-dimiss">
            <div class="col-12 mb-4">
                <div class="hero text-white hero-bg-image hero-bg-parallax" style="background-image: url('<?= base_url('assets/img/polsek_cibarusah.jpg') ?>'); background-position: center; background-attachment: inherit;">
                    <div class="hero-inner">
                        <a data-dismiss="#mycard-dimiss" class="float-right text-white" href="#"><i class="fas fa-times" style="font-size: 20px;"></i></a>
                        <h2>Selamat Datang, Azkazikna Ageung Laksana!</h2>
                        <p class="lead">
                            di Aplikasi Control Command Center Cibarusah.
                        </p>
                    </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1 card-primary">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Admin</h4>
                  </div>
                  <div class="card-body">
                    10
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1 card-danger">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Masyarakat</h4>
                  </div>
                  <div class="card-body">
                    42
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1 card-warning">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Berita</h4>
                  </div>
                  <div class="card-body">
                    1,201
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1 card-success">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Online Users</h4>
                  </div>
                  <div class="card-body">
                    47
                  </div>
                </div>
              </div>
            </div>                  
          </div>
        </section>
      </div>