<?php
	$hash = md5(rand(rand(), rand()));
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="A Simple Online Tool To Bcrypt Text And Check Bcrypt Hashes!">
		<link rel="icon" href="/favicon.ico">
		<title>Bcrypter - Bcrypt Hasher & Checker</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="/assets/css/custom.css?v=<?php echo $hash; ?>">
	</head>
	<body>
		<header>
			<div class="navbar navbar-dark bg-dark box-shadow">
				<div class="container-fluid">
					<a href="/" class="navbar-brand d-flex align-items-center">
						<strong>Bcrypter <small class="d-none d-md-inline">- Bcrypt Hasher & Checker</small></strong>
					</a>
				</div>
			</div>
		</header>
		<main role="main">
			<section class="text-center">
				<div class="jumbotron jumbotron-fluid">
					<div class="container-fluid">
						<h1 class="display-4">BCRYPTER</h1>
						<p class="lead">A Simple Online Tool To Bcrypt Text And Check Bcrypt Hashes!</p>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6">
							<div class="card">
								<div class="card-header bg-primary text-light">
									ENCRYPT
								</div>
								<div class="card-body">
									<strong>Encrypt A Plain Text String To A Bcrypt Hash</strong>
									<hr>
									<form id="encrypt_form">
										<div class="form-group" id="encrypt-response"></div>
										<div class="input-group mb-3">
											<input name="string" id="string" type="text" class="form-control" placeholder="String To Encrypt" aria-label="String To Encrypt">
											<div class="input-group-append">
												<button class="btn btn-outline-primary" id="encrypt-button" type="button">HASH</button>
											</div>
										</div>
										<div class="input-group mb-3">
											<input name="rounds" id="rounds" value="12" type="number" min="4" max="18" class="form-control" aria-describedby="basic-addon2">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">Rounds</span>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card">
								<div class="card-header bg-primary text-light">
									CHECK
								</div>
								<div class="card-body">
									<strong>Test Your Hash Against A Plain Text String To See If They Match</strong>
									<hr>
									<form id="check_form">
										<div class="form-group" id="check-response"></div>
										<div class="input-group mb-3">
											<input id="hash" name="hash" type="text" class="form-control" placeholder="Hash To Check">
										</div>
										<div class="input-group mb-3">
											<input name="string" id="string" type="text" class="form-control" placeholder="String To Check Against" aria-label="String To Check Against">
											<div class="input-group-append">
												<button class="btn btn-outline-primary" id="check-button" type="button">CHECK</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.6/dist/clipboard.min.js"></script>
		<script src="/assets/js/custom.js?v=<?php echo $hash; ?>"></script>
	</body>
</html>