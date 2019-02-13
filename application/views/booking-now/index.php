<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Pemesanan HOMS Monitoring</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="smart pest" />
    <meta name="keywords" content="solar system /sun & wind" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
  
  <link rel='stylesheet' href='https://cdn.gitcdn.xyz/cdn/angular/bower-material/v1.0.0-rc3/angular-material.css'>

      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/booking-now/style.css">
      
    <link rel="shortcut icon" type="image/icon" href="<?php echo base_url(); ?>/assets/images/favicon.png" />

  
</head>

<body>

  <div ng-controller="DemoCtrl" ng-cloak="" class="md-inline-form" ng-app="MyApp" layout="column" layout-sm="row" layout-align="center center" layout-align-sm="start start" layout-fill>
		<md-content id="SignupContent" class="md-whiteframe-10dp" flex-sm>
				<md-toolbar flex id="materialToolbar">
						<div class="md-toolbar-tools"> <span flex=""></span> <span class="md-headline" align="center">Pemesanan HOMS Monitoring</span> <span flex=""></span> </div>
				</md-toolbar>
				<div layout-padding="">
						<div></div>
						<form name="userForm" method="POST" action="" ng-submit="user.submit(userForm.$valid)" enctype="multipart/form-data">
								<input type="hidden" name="action" value="signup" />
								<div layout="row" layout-sm="column">
										<md-input-container flex-gt-sm="">
												<label>Nama Lengkap</label>
												<input ng-model="user.first_name" name="first_name" required type="text" ng-pattern="/^[a-zA-Z'. -]+$/" placeholder="Tulis Nama Anda">
												<div ng-if="userForm.first_name.$dirty" ng-messages="userForm.first_name.$error" role="alert">
														<div ng-message="required" class="my-message">Lengkapi Nama Anda</div>
														<div ng-message="pattern" class="my-message">Masukkan Nama dengan Benar</div>
												</div>
										</md-input-container>
										<md-input-container flex-gt-sm="">
												<label>Alamat Rumah</label>
												<input ng-model="user.last_name" name="last_name" required type="text" ng-pattern="/^[a-zA-Z'. -]+$/" placeholder="Tulis Alamat Rumah">
												<div ng-if="userForm.last_name.$dirty" ng-messages="userForm.last_name.$error" role="alert">
														<div ng-message="required" class="my-message">Lengkapi Alamat Rumah</div>
														<div ng-message="pattern" class="my-message">Masukkan Alamat dengan Benar</div>
												</div>
										</md-input-container>
								</div>
								<div layout="row" layout-sm="column">
										<p style="font-size: 12px; margin-left: 3px; margin-top: 18px;">Kapasitas Listrik Rumah Anda: </p>
										<input type="hidden" name="gender" value="{{user.gender}}" />
										<md-radio-group style="margin: 12px 0 19px;" ng-model="user.gender" required>
												<md-radio-button value="Male" class="md-primary">900 - 3.500VA</md-radio-button>
												<md-radio-button value="Female">4.400 - 11.000VA</md-radio-button>
										</md-radio-group>
										<md-input-container flex-gt-sm="60">
												<label>Jumlah Pemesanan</label>
												<input required type="number" step="any" name="age" ng-model="user.age" min="0" max="10" placeholder="1" />
												<div ng-if="userForm.age.$dirty" ng-messages="userForm.age.$error" role="alert" multiple>
														<div ng-message="required">Lengkapi Jumlah Pemesanan.</div>
														<div ng-message="min">Masukkan Jumlah Pemesanan.</div>
														<div ng-message="max">Maaf {{userForm.age.$viewValue}} Jumlah Pesanan Maksimal 10 Pesanan.</div>
												</div>
										</md-input-container>
								</div>
								<div layout="row" layout-sm="column">
										<md-input-container flex-gt-sm="">
												<label>Email Anda</label>
												<input required type="email" name="email" ng-model="user.email" ng-pattern="/^[_a-z0-9-+]+(\.[_a-z0-9-+]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/" placeholder="email.anda@domain.com" />
												<div ng-if="userForm.email.$dirty" ng-messages="userForm.email.$error" role="alert">
														<div ng-message="required" class="my-message">Lengkapi Email Anda.</div>
														<div ng-message="pattern" class="my-message">Masukkan Email dengan Benar. </div>
														<div ng-message="email" class="my-message">Masukkan Email dengan Benar. </div>
												</div>
										</md-input-container>
								</div>
								<div layout="row" layout-sm="column">
										<md-input-container flex-gt-sm="">
												<label>No. Handphone</label>
												<input name="password" ng-model="user.password" type="password" minlength="8" maxlength="100" ng-pattern="/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/" required placeholder="Masukkan Nomor Handphone">
												<div ng-if="userForm.password.$dirty" ng-messages="userForm.password.$error" role="alert" multiple>
														<div ng-message="required">Lengkapi Nomor Handphone.</div>
														<div ng-message="pattern">Masukkan Nomor HP dengan Benar.</div>
												</div>
										</md-input-container>
										<md-input-container flex-gt-sm="">
												<label>Alasan Pemesanan</label>
												<input name="confmPassword" ng-model="user.confmPassword" type="password" minlength="8" maxlength="100" ng-pattern="/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/" required compare-to="user.password" placeholder="Alasan Membeli HOMS Monitoring">
												<div ng-if="userForm.confmPassword.$dirty" ng-messages="userForm.confmPassword.$error" role="alert">
														<div ng-message="required">Masukkan Alasan Anda.</div>
														<div ng-message="compareTo">Masukkan Alasan Anda.</div>
												</div>
										</md-input-container>
								</div>
								<md-button class="md-raised md-primary" style="width:100%; margin: 0px 0px;" type="submit" ng-disabled="userForm.$invalid" name="submit">Pesan</md-button>
								<md-button class="md-raised md-primary" ng-href="https://codepen.io/faizanrupani/pen/QjzMJp" target="_blank" style="width:100%; margin: 15px 0px 0px 0px;">Daftar Akun</md-button>
						</form>
				</div>
		</md-content>
</div>
  <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular-animate.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular-route.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular-aria.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular-messages.min.js'></script>
<script src='https://cdn.gitcdn.xyz/cdn/angular/bower-material/v1.0.0-rc3/angular-material.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-114/assets-cache.js'></script>

  

    <script  src="<?php echo base_url(); ?>/assets/js/booking-now/index.js"></script>




</body>

</html>
