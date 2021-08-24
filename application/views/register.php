
			<!-- Main Content -->
			<div id="content" class="site-content">
				<!-- Breadcrumb -->
				<div id="breadcrumb">
					<div class="container">
						<h2 class="title">Register</h2>
						
						<ul class="breadcrumb">
							<li><a href="<?= base_url();?>" title="Home">Home</a></li>
							<li><span>Register</span></li>
						</ul>
					</div>
				</div>

    <div class="container">
					<div class="login-page">
						<div class="login-form form">
							<div class="block-title">
								<h2 class="title"><span>Register</span></h2>
							</div>
						
							<form action="#" method="post" enctype="multipart/form-data">
                                <div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" value="" name="nama">
								</div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label><br>
                                    <input type="radio" name="jenis_kelamin" value="Laki-laki" checked> Laki-laki<br>
                                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
                                </div>
                                <div class="form-group">
									<label>Alamat</label>
									<input type="text" value="" name="alamat">
								</div>

                                <div class="form-group">
									<label>No Handphone</label>
									<input type="number" value="" name="no">
								</div>

								<div class="form-group">
									<label>Email</label>
									<input type="email" value="" name="email">
								</div>
								
								<div class="form-group">
									<label>Password</label>
									<input type="password" value="" name="password">
								</div>
								
								<div class="form-group text-center">
									<input type="submit" class="btn btn-primary" value="Sign In">
								</div>

                                <div class="form-group text-center">
									<div class="link">
                                        <text class="title">Sudah memiliki akun?</text>
										<a href="<?= base_url('login');?>">Login</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
    </div>