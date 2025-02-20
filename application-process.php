<style>
	.aboutProgram {
		margin-bottom: 30px;
	}

	.aboutProgram.main h1,
	.aboutProgram h2 {
		font-size: 26px;
		/* Adjust based on screen size below */
		line-height: 26px;
		margin-bottom: 15px;
		margin-top: 15px;
		vertical-align: bottom;
	}

	.aboutProgram h3 {
		font-size: 20px;
		/* Adjust based on screen size below */
		line-height: 20px;
		margin: 20px 0 10px;

	}

	.aboutProgram h3.af-title {
		font-size: 22px;
		/* Adjust based on screen size below */
		line-height: 22px;
		margin-bottom: 20px;
	}

	.steps ul,
	.title-number {
		display: flex;
	}

	.steps ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
	}

	.steps {
		padding: 40px 20px 10px;
		position: relative;
		z-index: 1;
	}

	.steps ul {
		justify-content: space-between;
		position: relative;
	}


	.stepss span:after {
		position: absolute;
		content: "";
		height: 2px;
		width: 130%;
		left: 135%;
		transform: translateX(-50%);
		background: #9999993d;
		z-index: 9;
		top: 22px;
	}

	.steps ul li {
		position: relative;
		z-index: 99;
		text-indent: unset !important;
		opacity: 1 !important;
		width: auto !important;
		height: auto !important;
		background-color: transparent !important;
		border-top: 0 !important;
		border-bottom: 0 !important;
	}

	.steps ul li a {
		cursor: pointer;
	}

	.steps ul .active .title-number {
		color: var(--text-color-white);
		background: rgb(3 175 255);
	}

	.title span {
		text-align: center;
	}

	.title-text {
		display: block;
		font-size: 12px;
		line-height: 18px;
		padding-bottom: 5px;
		color: black;
		margin-top: 10px;
		white-space: nowrap;
		font-weight: bold;
	}

	.title p {
		font-size: 16px;
		line-height: 18px;
		padding-bottom: 8px;
		color: var(--text-color-dark);
		font-family: var(--secondary-font);
		text-align: center;
	}

	.title p small {
		font-size: 12px;
		font-family: var(--secondary-sub-font);
	}

	.title-number {
		font-size: 14px;
		width: 44px;
		height: 44px;
		border-radius: 50%;
		border: 4px solid var(--bgcolor-offgray);
		background: var(--bgcolor-lgray);
		color: var(--bgcolor-darkGray);
		align-items: center;
		justify-content: center;
		margin: 0 auto;
		transition: all 0.2s ease-in-out;
	}

	/* Basic button styling */
	a.bfit-btn {
		display: inline-block;
		padding: 15px 30px;
		text-decoration: none;
		color: white;
		font-weight: bold;
		border-radius: 5px;
		text-align: center;
		transition: all 0.3s ease;
	}

	/* Specific styling for red-bg class */
	a.bfit-btn.red-bg {
		background-color: rgb(3 175 255);
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
	}

	/* Hover effect */
	a.bfit-btn.red-bg:hover {
		background-color: rgb(251 123 28);
		box-shadow: 0 6px 12px rgb(3 175 255);
		transform: translateY(-2px);
	}

	/* Adjust margin-bottom */
	a.bfit-btn.mb-4 {
		margin-bottom: 1.5rem;
	}

	@media (max-width: 768px) {

		.aboutProgram.main h1,
		.aboutProgram h2,
		.aboutProgram h3 {
			font-size: 16px;
			line-height: 18px;
		}

		.title-number {
			width: 32px;
			height: 32px;
		}

		.steps {
			padding: 20px 10px;
		}

		.steps ul:after {
			width: 100%;
		}

		.bfit-btn {
			padding: 10px 20px;
		}

		.title p {
			font-size: 14px;
			line-height: 18px;

		}

		.stepss span:after {
			position: absolute;
			content: "";
			height: 2px;
			width: 110%;
			left: 126%;
			z-index: 9;
			top: 12px;
		}
	}

	@media (max-width: 480px) {

		.aboutProgram.main h1,
		.aboutProgram h2,
		.aboutProgram h3.af-title {
			font-size: 16px;
			line-height: 18px;
		}

		.aboutProgram h3 {
			font-size: 14px;
			line-height: 16px;
		}

		.title-number {
			width: 24px;
			height: 24px;
			font-size: 12px;
		}

		.steps ul {
			align-items: center;
			vertical-align: middle;
		}


		.bfit-btn {
			padding: 8px 16px;
			font-size: 14px;
		}
	}
</style>
<section class="white-bg pb-9" style="margin-bottom: 10px;">
	<div class="container patent-section pt-0">
		<div class="row pt-4 apply-section">
			<div class="col-lg-6">
				<div class="row">
					<div class="col-12 text-center">
						<div class="aboutProgram">
							<h2>How to Apply?</h2>
						</div>
					</div>
					<div class="col-12">
						<div id="myCarousel5" class="carousel slide" data-bs-ride="carousel">
							<div class="steps">
								<ul class="carousel-indicators">
									<li data-bs-target="#myCarousel5" data-bs-slide-to="0" class="active">
										<div class="title stepss active">
											<span class="title-number">
												<i class="fa fa-sign-in" aria-hidden="true"></i>
											</span>
											<span class="title-text">Step 1</span>
											<p>Registration Form</p>
										</div>
									</li>
									<li data-bs-target="#myCarousel5" data-bs-slide-to="1">

										<div class="title stepss">
											<span class="title-number">
												<i class="fa fa-check fa-1-5x"></i>
											</span>
											<span class="title-text">Step 2</span>
											<p>Application Form</p>
										</div>

									</li>
									<li data-bs-target="#myCarousel5" data-bs-slide-to="2">
										<div class="title">
											<span class="title-number">
												<i class="fa fa-check fa-1-5x"></i>
											</span>
											<span class="title-text">Step 3</span>
											<p>Verification &amp; Admission</p>
										</div>
									</li>
								</ul>
							</div>
							<div class="carousel-inner">
								<div class="carousel-item active" data-bs-interval="3500">
									<div class="aboutProgram mb-5">
										<h3 class="af-title">Step 1 - Registration Form</h3>
										<p>Apply now and register to secure your spot for an exciting opportunity.</p>
									</div>
								</div>
								<div class="carousel-item" data-bs-interval="3500">
									<div class="aboutProgram mb-5">
										<h3 class="af-title">Step 2 - Application Form</h3>
										<p>Fill out the information and upload documents for the application processing and verification.</p>
									</div>
								</div>
								<div class="carousel-item" data-bs-interval="3500">
									<div class="aboutProgram mb-5">
										<h3 class="af-title">Step 3 - Document Verification &amp; Admission</h3>
										<p>Wait for the approval, pay the program fee, and begin your journey with us!</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="offset-lg-1 col-lg-5" style="background-image: url(upload/infra/apply.webp);">
				<div class="row">
					<div class="col-12">
						<div class="aboutProgram text-white">
							<h2 style="color:white;">Aspire to Inspire:<br> Master Your Field <br>at Guru Nanak College!</h2>
							<p>Take the first step towards a bright future at Guru Nanak <br>College Dehradun. Apply Now and join a community <br>dedicated to academic excellence and personal growth!</p>
						</div>
						<a href="#" class="bfit-btn red-bg mb-4">Apply Today</a>
						<a href="# " class="bfit-btn red-bg mb-4">Download Brochure</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>