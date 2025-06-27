<div class="login-header box-shadow">
	<div class="container-fluid d-flex justify-content-between align-items-center">
		<div class="brand-logo">
			<a href="index.php" class="logo-link">
				<img src="<?= asset() ?>/vendors/images/schoolsvg.svg" alt="School Logo" class="logo-image" />
				<span class="logo-text">International Green School</span>
			</a>
		</div>
		<div class="header-info">
			<div class="contact-info">
				<span class="contact-item">
					<i class="icon-copy dw dw-phone"></i>
					+880 1234-567890
				</span>
				<span class="contact-item">
					<i class="icon-copy dw dw-mail"></i>
					info@greenschool.edu
				</span>
			</div>
		</div>
	</div>
</div>
<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-9 col-lg-6">
				<img src="<?= asset() ?>/vendors/images/school bck.avif" alt="" />
			</div>
			<div class="col-md-9 col-lg-6">
				<div class="login-box bg-white box-shadow border-radius-10">
					<div class="login-title">
						<h2 class="text-center text-primary">Login To School</h2>
						<p class="text-center text-muted">Default: admin</p>

						<p class="text-center text-muted">Password: Click QuickLogin</p>
					</div>
					<form action="<?= $_SERVER["PHP_SELF"] ?>" method="post" id="loginForm">
						<div class="select-role">
							<div class="btn-group btn-group-toggle" data-toggle="buttons">

								<label class="btn">
									<input type="radio" name="options" id="user" />
									<div class="icon">
										<img src="<?= asset() ?>/vendors/images/person.svg" class="svg" alt="" />
									</div>
									<span>I'm</span>
									Admin
								</label>
							</div>
						</div>
						<div class="input-group custom">
							<input type="text" class="form-control form-control-lg" name="username" id="username" placeholder="Admin_name" value="admin" />
							<div class="input-group-append custom">
								<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
							</div>
						</div>
						<div class="input-group custom">
							<input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="**********" value="" />
							<div class="input-group-append custom">
								<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
							</div>
						</div>
						<div class="row pb-30">
							<div class="col-6">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck1" />
									<label class="custom-control-label" for="customCheck1">Remember</label>
								</div>
							</div>
							<div class="col-6">
								<div class="forgot-password">
									<a href="forgot-password.html">Forgot Password</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="input-group mb-0">
									<input class="btn btn-primary btn-lg btn-block" type="submit" name="SignIn" value="Log In">
								</div>
								<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">
									OR
								</div>
								<div class="input-group mb-0">
									<button type="button" class="btn btn-success btn-lg btn-block" id="quickLogin">
										<i class="icon-copy dw dw-login"></i> Quick Login (Demo)
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<style>
	/* Header Styling */
	.login-header {
		background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
		padding: 15px 0;
		position: relative;
		box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
	}

	.login-header::before {
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="white" opacity="0.1"/><circle cx="10" cy="60" r="0.5" fill="white" opacity="0.1"/><circle cx="90" cy="40" r="0.5" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
		opacity: 0.3;
	}

	.login-header .container-fluid {
		position: relative;
		z-index: 2;
	}

	/* Brand Logo Styling */
	.brand-logo {
		display: flex;
		align-items: center;
	}

	.logo-link {
		display: flex;
		align-items: center;
		text-decoration: none;
		color: white;
		transition: all 0.3s ease;
	}

	.logo-link:hover {
		transform: translateY(-2px);
		text-decoration: none;
		color: white;
	}

	.logo-image {
		width: 50px;
		height: 50px;
		margin-right: 15px;
		filter: brightness(0) invert(1);
		transition: all 0.3s ease;
	}

	.logo-link:hover .logo-image {
		transform: scale(1.1);
	}

	.logo-text {
		font-size: 1.4rem;
		font-weight: 700;
		color: white;
		text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
		letter-spacing: 0.5px;
	}

	/* Header Info Styling */
	.header-info {
		display: flex;
		align-items: center;
	}

	.contact-info {
		display: flex;
		gap: 25px;
		align-items: center;
	}

	.contact-item {
		display: flex;
		align-items: center;
		color: white;
		font-size: 0.9rem;
		font-weight: 500;
		text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
		transition: all 0.3s ease;
	}

	.contact-item:hover {
		transform: translateY(-1px);
		text-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
	}

	.contact-item i {
		margin-right: 8px;
		font-size: 1rem;
		opacity: 0.9;
	}

	/* Responsive Design */
	@media (max-width: 768px) {
		.login-header {
			padding: 12px 0;
		}

		.logo-text {
			font-size: 1.1rem;
		}

		.contact-info {
			gap: 15px;
		}

		.contact-item {
			font-size: 0.8rem;
		}

		.contact-item i {
			font-size: 0.9rem;
		}
	}

	@media (max-width: 576px) {
		.login-header .container-fluid {
			flex-direction: column;
			gap: 10px;
			text-align: center;
		}

		.logo-link {
			justify-content: center;
		}

		.contact-info {
			justify-content: center;
			flex-wrap: wrap;
			gap: 10px;
		}

		.logo-text {
			font-size: 1rem;
		}
	}

	/* Existing styles */
	.login-title p {
		font-size: 14px;
		margin-top: 5px;
		color: #6c757d;
	}

	#quickLogin {
		background: linear-gradient(45deg, #28a745, #20c997);
		border: none;
		transition: all 0.3s ease;
	}

	#quickLogin:hover {
		transform: translateY(-2px);
		box-shadow: 0 5px 15px rgba(40, 167, 69, 0.3);
	}

	.input-group.custom input {
		transition: all 0.3s ease;
	}

	.input-group.custom input:focus {
		border-color: #007bff;
		box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
	}

	.btn-primary {
		background: linear-gradient(45deg, #007bff, #0056b3);
		border: none;
		transition: all 0.3s ease;
	}

	.btn-primary:hover {
		transform: translateY(-2px);
		box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
	}
</style>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		// Quick Login Button
		document.getElementById('quickLogin').addEventListener('click', function() {
			// Set default credentials
			document.getElementById('username').value = 'admin';
			document.getElementById('password').value = '111111';

			// Show loading state
			this.innerHTML = '<i class="icon-copy dw dw-loading"></i> Now Click Log In(5s) ';
			this.disabled = true;

			// Simulate login process - 10 seconds delay as requested
			setTimeout(() => {
				// Submit the form
				document.getElementById('loginForm').submit();
			}, 10000 / 2);
		});

		// Add some visual feedback
		const inputs = document.querySelectorAll('input[type="text"], input[type="password"]');
		inputs.forEach(input => {
			input.addEventListener('focus', function() {
				this.parentElement.style.transform = 'scale(1.02)';
			});

			input.addEventListener('blur', function() {
				this.parentElement.style.transform = 'scale(1)';
			});
		});
	});
</script>