<?php if ( isset( $_GET['info'] ) ) : ?>
	<?php phpinfo();
	exit; ?>
<?php endif; ?>
<html>
<head>
	<title>CT PV</title>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
			integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
			crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
			integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
			crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				crossorigin="anonymous"></script>
<body>
<div class="container">

	<div class="jumbotron">
		<h2>Welcome to Circle Tree's Primary Vagrant</h2>
	</div>

	<div class="col-md-12">

		<h2>Our dev site(s)</h2>
		<ul>
			<li>
				<a href="http://mycircletree.pv/" target="_blank">mycircletree.pv</a>
				<ul>
					<li>
						<b>WordPress</b>
						<ul>
							<li><a href="http://mycircletree.pv/"
										 target="_blank">Public Site</a></li>
							<li><a href="http://mycircletree.pv/wp/wp-admin"
										 target="_blank">WordPress Admin</a></li>
						</ul>
					</li>
					<li><b>WHMCS</b>
						<ul>
							<li><a href="http://mycircletree.pv/client-area/"
										 target="_blank">WHMCS Client Area</a></li>
							<li><a href="http://mycircletree.pv/client-area/admin"
										 target="_blank">WHMCS Admin</a>
								<b>Addons</b>
								<ul>
									<li>
										<a href="http://mycircletree.pv/client-area/admin/addonomodules.php?module=enom_pro"
											 target="_blank">eNom PRO</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<a href="http://ccu.pv/" target="_blank">ccu.pv</a>
			</li>

		</ul>
	</div>

	<div class="col-md-6">

		<h2>Primary Vagrant Tools</h2>

		<ul>
			<li><a href="?info">PHPInfo()</a></li>
			<li><a href="http://phpmyadmin.pv"
						 target="_blank">phpMyAdmin</a></li>
			<li><a href="http://replacedb.pv"
						 target="_blank">MySQL find/replace</a>
			</li>
			<li><a href="http://webgrind.pv"
						 target="_blank">Webgrind - App profiling</a></li>
			<li><a href="http://pv:8025"
						 target="_blank">MailHog - Collects email / mocks SMTP</a>
			</li>
		</ul>
	</div>

	<div class="col-md-6">


		<h2>WordPress<sup>&trade;</sup> Development Sites</h2>

		<ul>
			<li><a href="http://core.wordpress.pv"
						 target="_blank">WordPress Core (src folder for WordPress core development)</a>
			</li>
			<li><a href="http://legacy.wordpress.pv"
						 target="_blank">WordPress Legacy Branch (old version - 4.4.x)</a>
			</li>
			<li><a href="http://stable.wordpress.pv"
						 target="_blank">WordPress Stable Branch (current version - 4.5.x)</a>
			</li>
			<li><a href="http://trunk.wordpress.pv"
						 target="_blank">WordPress Trunk (development) Version</a></li>
		</ul>
	</div>
	<div class="col-md-12">

		<h2>About Primary Vagrant</h2>
		<ul>
			<li><a href="https://github.com/CircleTree/Primary-Vagrant/"
						 target="_blank">View the Circle Tree Primary Vagrant Project on GitHub</a>
			</li>
			<li><a href="https://github.com/ChrisWiegman/Primary-Vagrant"
						 target="_blank">
					<span class="text text-muted">(fork of)</span>
					Primary Vagrant</a></li>
		</ul>
		<h3 style="text-align:center;line-height:2;"><a target="_blank"
																										style="text-decoration:none;font-size:10px;color:#666"
																										href="http://mycircletree.com">Made with &hearts; by Circle Tree
				<img style="vertical-align:middle;opacity:0.3;"
						 width="30"
						 height="30"
						 alt="Website by Circle Tree"
						 src="https://s3.amazonaws.com/myct2/footer-logo-30px.png"/></a>
		</h3>
	</div>
</div>
</body>
</html>