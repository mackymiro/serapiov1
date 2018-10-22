@extends('layouts.app')
@section('title', 'Serapio.ph')
@section('content')
<!-- HERO UNIT -->
	<section class="hero-unit-slider slider-responsive no-margin">
		<div id="carousel-hero" class="slick-carousel">
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="{{ asset('images/sliders/serapio-slide.jpeg') }}" class="img-responsive" alt="Slider Image">
					<div class="carousel-caption">
						<h2 class="hero-heading" style="margin-top:-80px;">Search Here</h2>
						<form action="" method="post">
							<p class="lead">
							<label>Category</label>
							<select name="category" id="category1" class="form-control">
								
							</select>
							<div id="trainingCourse1">
								<select class="form-control" name="trainingCourse">
									<option value="0">Please Select</option>
									<option value="Basic Training (BT)">Basic Training (BT)</option>
									<option value="Basic Training Updating (BTU)">Basic Training Updating (BTU)</option>
									<option value="Basic Training Updating & Refresher(BT-UR)">Basic Training Updating & Refresher(BT-UR)</option>
									<option value="Advanced Fire Fighting (AFF)">Advanced Fire Fighting (AFF)</option>
									<option value="Medical Care (MECA)">Medical Care (MECA)</option>
									<option value="Marine Pollution I-VI (MARPOL CONSOLIDATED)">Marine Pollution I-VI (MARPOL CONSOLIDATED)</option>
									<option value="Ship Security Officer (SSO)">Ship Security Officer (SSO)</option>
									<option value="Ship Security Awareness Training and Seafarers with Designated Security Duties (SSATSDSD)">Ship Security Awareness Training and Seafarers with Designated Security Duties (SSATSDSD)</option>
									<option value="Ratings Forming Part of a Navigational Watch (RFPNW)">Ratings Forming Part of a Navigational Watch (RFPNW)</option>
									<option value="Ratings Forming Part of an Engineering Watch (RFPEW)">Ratings Forming Part of an Engineering Watch (RFPEW)</option>
									<option value="Proficiency in Fast Rescue Boat (PFRB)">Proficiency in Fast Rescue Boat (PFRB)</option>
									<option value="Proficiency in Survival Craft and Rescue Boat (PSCRB)">Proficiency in Survival Craft and Rescue Boat (PSCRB)</option>
									<option value="Basic Training for Oil and Chemical Tankers Cargo Operation (BTOC)">Basic Training for Oil and Chemical Tankers Cargo Operation (BTOC)</option>
									<option value="Basic Training for Liquified Gas Tankers Cargo Operation (BTLGT)">Basic Training for Liquified Gas Tankers Cargo Operation (BTLGT)</option>
									<option value="Crisis Management INTERNATIONAL (CriM)">Crisis Management INTERNATIONAL (CriM)</option>
									<option value="Crowd Management INTERNATIONAL (CroM)">Crowd Management INTERNATIONAL (CroM)</option>
									<option value="Crowd &amp; Crisis Management DOMESTIC (CCM)">Crowd &amp; Crisis Management DOMESTIC (CCM)</option>
									<option value="Refresher Training for Advanced Fire Fighting (RAFF)">Refresher Training for Advanced Fire Fighting (RAFF)</option>
									<option value="Refresher Training for Proficiency in Fast Rescue Boat (RPFRB)">Refresher Training for Proficiency in Fast Rescue Boat (RPFRB)</option>
									<option value="Refresher Training for Proficiency in Survival Craft and Rescue Boat (RPSCRB)">Refresher Training for Proficiency in Survival Craft and Rescue Boat (RPSCRB)</option>
									<option value="Electronic Chart Display and Information System (ECDIS)">Electronic Chart Display and Information System (ECDIS)</option>
									<optgroup label="UPDATING TRAINING FOR OFFICERS IN CHARGE OF A NAVIGATIONAL WATCH">
									   <option value="Part A with ECDIS">Part A with ECDIS</option>
									   <option value="Part A w/out ECDIS">Part A w/out ECDIS</option>
									   <option  value="Part B">Part B</option>
									 </optgroup>
									<optgroup label="UPDATING TRAINING FOR OFFICERS IN CHARGNE OF AN ENGINEERING WATCH">
									   <option value="Part A">Part A </option>
									   <option  value="Part B">Part B</option>
									 </optgroup>
									
								</select>
							</div>
							<div id="reviewCourse1" style="display:none;">
								<select class="form-control" name="reviewCourse">
									<option value="0">Please Select</option>
									<option value="Deck(OIC)">Deck(OIC)</option>
									<option value="Deck Management Level">Deck Management Level</option>
									<option value="Engine OIC">Engine OIC</option>
									<option value="Engine Management Level">Engine Management Level</option>
									<option value="GOC">GOC</option>
								</select>
							</div>
							<div id="shipboardTraining1" style="display:none;">
								<select class="form-control" name="shipboardTraining">
									<option value="0">Please Select</option>
									<option value="Engine Cadet">Engine Cadet</option>
									<option value="Deck Cadet">Deck Cadet</option>
									
								</select>
							</div>
							<div id="manning1" style="display:none;">

								<select name="manning" class="form-control" >
									<optgroup label="DECK">
										<optgroup label="OFFICER">
											<option value="0">Please Select</option>
											<option value="Master">Master</option>
											<option value="Chief Officer">Chief Officer</option>
											<option value="Second Officer">Second Officer</option>
											<option value="Third Officer">Third Officer</option>
										</optgroup>
										<optgroup label="SUPPORT">
											<option value="Bosun">Bosun</option>
											<option value="Able-Bodied Seaman">Able-Bodied Seaman</option>
											<option value="Ordinary Seaman">Ordinary Seaman</option>
											
										</optgroup>
									 </optgroup>
									 <optgroup label="ENGINE">
										<optgroup label="OFFICER">
											<option value="Chief Engineer">Chief Engineer</option>
											<option value="2nd Engineer">2nd Engineer</option>
											<option value="3rd Engineer">3rd Engineer</option>
											<option value="4th Engineer">4th Engineer</option>
											<option value="JR 4th Engineer">JR 4th Engineer</option>
										</optgroup>
										<optgroup label="SUPPORT">
											<option value="Fitter">Fitter</option>
											<option value="Pumpman">Pumpman</option>
											<option value="Oiler">Oiler</option>
											<option value="Wiper">Wiper</option>								
										</optgroup>
									 </optgroup>
									<optgroup label="GALLEY">
										<option value="Chief Cook">Chief Cook</option>
										<option value="Messman">Messman</option>
									 </optgroup>
								
								</select>
							</div>
							<div id="others1" style="display:none;">
								<select name="others" class="form-control">
								<optgroup label="FINANCIAL SERVICES">
										<option value="0">Please Select</option>
										<option value="Investment">Investment</option>
										<option value="Loan">Loan</option>
										<option value="Assistance">Assistance</option>
								 </optgroup>
								 <optgroup label="Psychological Services">
										<option value="Perosonal">Personal</option>
										<option value="Interpersonal">Interpersonal</option>
										<option value="Intrapersonal">Intrapersonal</option>
										<option value="Organizational">Organizational</option>
								 </optgroup>
								<optgroup label="Real Estate">
										<option value="Buy">Buy</option>
										<option value="Sell">Sell</option>
										<option value="Rent">Rent</option>
										<option value="Property Management">Property Management</option>
								 </optgroup>
								 <optgroup label="Academics">
										<option value="Graduate Studies">Graduate Studies</option>
										<option value="Research Advisory">Research Advisory</option>
										
								 </optgroup>
							 </select>
							</div>
							<label>Province</label>
							<select name="province" class="form-control">
							
							</select>
							</p>
							
							<input type="submit" class="btn btn-lg btn-primary" value="Search" />
							<a href="" class="btn btn-success btn-lg">COME ABOARD!</a>
						</form>
					</div>
				</div>
				<div class="item">
					<img src="{{ asset('images/sliders/serapio-slide2.jpeg') }}" class="img-responsive" alt="Slider Image">
					<div class="carousel-caption">
						<h2 class="hero-heading" style="margin-top:-80px;">Search Here</h2>
						<form action="" method="post">
							<p class="lead">
							<label>Category</label>
							<select id="category2" name="category" class="form-control">
								
							</select>
							<div id="trainingCourse2">
								<select class="form-control" name="trainingCourse">
									<option value="0">Please Select</option>
									<option value="Basic Training (BT)">Basic Training (BT)</option>
									<option value="Basic Training Updating (BTU)">Basic Training Updating (BTU)</option>
									<option value="Basic Training Updating & Refresher(BT-UR)">Basic Training Updating & Refresher(BT-UR)</option>
									<option value="Advanced Fire Fighting (AFF)">Advanced Fire Fighting (AFF)</option>
									<option value="Medical Care (MECA)">Medical Care (MECA)</option>
									<option value="Marine Pollution I-VI (MARPOL CONSOLIDATED)">Marine Pollution I-VI (MARPOL CONSOLIDATED)</option>
									<option value="Ship Security Officer (SSO)">Ship Security Officer (SSO)</option>
									<option value="Ship Security Awareness Training and Seafarers with Designated Security Duties (SSATSDSD)">Ship Security Awareness Training and Seafarers with Designated Security Duties (SSATSDSD)</option>
									<option value="Ratings Forming Part of a Navigational Watch (RFPNW)">Ratings Forming Part of a Navigational Watch (RFPNW)</option>
									<option value="Ratings Forming Part of an Engineering Watch (RFPEW)">Ratings Forming Part of an Engineering Watch (RFPEW)</option>
									<option value="Proficiency in Fast Rescue Boat (PFRB)">Proficiency in Fast Rescue Boat (PFRB)</option>
									<option value="Proficiency in Survival Craft and Rescue Boat (PSCRB)">Proficiency in Survival Craft and Rescue Boat (PSCRB)</option>
									<option value="Basic Training for Oil and Chemical Tankers Cargo Operation (BTOC)">Basic Training for Oil and Chemical Tankers Cargo Operation (BTOC)</option>
									<option value="Basic Training for Liquified Gas Tankers Cargo Operation (BTLGT)">Basic Training for Liquified Gas Tankers Cargo Operation (BTLGT)</option>
									<option value="Crisis Management INTERNATIONAL (CriM)">Crisis Management INTERNATIONAL (CriM)</option>
									<option value="Crowd Management INTERNATIONAL (CroM)">Crowd Management INTERNATIONAL (CroM)</option>
									<option value="Crowd &amp; Crisis Management DOMESTIC (CCM)">Crowd &amp; Crisis Management DOMESTIC (CCM)</option>
									<option value="Refresher Training for Advanced Fire Fighting (RAFF)">Refresher Training for Advanced Fire Fighting (RAFF)</option>
									<option value="Refresher Training for Proficiency in Fast Rescue Boat (RPFRB)">Refresher Training for Proficiency in Fast Rescue Boat (RPFRB)</option>
									<option value="Refresher Training for Proficiency in Survival Craft and Rescue Boat (RPSCRB)">Refresher Training for Proficiency in Survival Craft and Rescue Boat (RPSCRB)</option>
									<option value="Electronic Chart Display and Information System (ECDIS)">Electronic Chart Display and Information System (ECDIS)</option>
									<optgroup label="UPDATING TRAINING FOR OFFICERS IN CHARGE OF A NAVIGATIONAL WATCH">
									   <option value="Part A with ECDIS">Part A with ECDIS</option>
									   <option value="Part A w/out ECDIS">Part A w/out ECDIS</option>
									   <option  value="Part B">Part B</option>
									 </optgroup>
									<optgroup label="UPDATING TRAINING FOR OFFICERS IN CHARGNE OF AN ENGINEERING WATCH">
									   <option value="Part A">Part A </option>
									   <option  value="Part B">Part B</option>
									 </optgroup>
									
								</select>
							</div>
							<div id="reviewCourse2" style="display:none;">
								<select class="form-control" name="reviewCourse">
									<option value="0">Please Select</option>
									<option value="Deck(OIC)">Deck(OIC)</option>
									<option value="Deck Management Level">Deck Management Level</option>
									<option value="Engine OIC">Engine OIC</option>
									<option value="Engine Management Level">Engine Management Level</option>
									<option value="GOC">GOC</option>
								</select>
							</div>
							<div id="shipboardTraining2" style="display:none;">
								<select class="form-control" name="shipboardTraining">
									<option value="0">Please Select</option>
									<option value="Engine Cadet">Engine Cadet</option>
									<option value="Deck Cadet">Deck Cadet</option>
									
								</select>
							</div>
							<div id="manning2" style="display:none;">
								<select name="manning" class="form-control" >
									<optgroup label="DECK">
										<optgroup label="OFFICER">
											<option value="0">Please Select</option>
											<option value="Master">Master</option>
											<option value="Chief Officer">Chief Officer</option>
											<option value="Second Officer">Second Officer</option>
											<option value="Third Officer">Third Officer</option>
										</optgroup>
										<optgroup label="SUPPORT">
											<option value="Bosun">Bosun</option>
											<option value="Able-Bodied Seaman">Able-Bodied Seaman</option>
											<option value="Ordinary Seaman">Ordinary Seaman</option>
											
										</optgroup>
									 </optgroup>
									 <optgroup label="ENGINE">
										<optgroup label="OFFICER">
											<option value="Chief Engineer">Chief Engineer</option>
											<option value="2nd Engineer">2nd Engineer</option>
											<option value="3rd Engineer">3rd Engineer</option>
											<option value="4th Engineer">4th Engineer</option>
											<option value="JR 4th Engineer">JR 4th Engineer</option>
										</optgroup>
										<optgroup label="SUPPORT">
											<option value="Fitter">Fitter</option>
											<option value="Pumpman">Pumpman</option>
											<option value="Oiler">Oiler</option>
											<option value="Wiper">Wiper</option>								
										</optgroup>
									 </optgroup>
									<optgroup label="GALLEY">
										<option value="Chief Cook">Chief Cook</option>
										<option value="Messman">Messman</option>
									 </optgroup>
								
								</select>
							</div>
							<div id="others2" style="display:none;">
								<select name="others" class="form-control">
								<optgroup label="FINANCIAL SERVICES">
										<option value="0">Please Select</option>
										<option value="Investment">Investment</option>
										<option value="Loan">Loan</option>
										<option value="Assistance">Assistance</option>
								 </optgroup>
								 <optgroup label="Psychological Services">
										<option value="Perosonal">Personal</option>
										<option value="Interpersonal">Interpersonal</option>
										<option value="Intrapersonal">Intrapersonal</option>
										<option value="Organizational">Organizational</option>
								 </optgroup>
								<optgroup label="Real Estate">
										<option value="Buy">Buy</option>
										<option value="Sell">Sell</option>
										<option value="Rent">Rent</option>
										<option value="Property Management">Property Management</option>
								 </optgroup>
								 <optgroup label="Academics">
										<option value="Graduate Studies">Graduate Studies</option>
										<option value="Research Advisory">Research Advisory</option>
										
								 </optgroup>
							 </select>
							</div>
							<label>Province</label>
							<select name="province" class="form-control">
								
							</select>
							</p>
							<input type="submit" class="btn btn-lg btn-primary" value="Search" />
							<a href="" class="btn btn-success btn-lg">COME ABOARD!</a>
						</form>
					</div>
				</div>
				<div class="item">
					<img src="{{ asset('images/sliders/serapio-slide3.jpeg')}}" class="img-responsive" alt="Slider Image">
					<div class="carousel-caption">
						<h2 class="hero-heading" style="margin-top:-80px;">Search Here</h2>
						<form action="" method="post">
							<p class="lead">
							<label>Category</label>
							<select id="category3" name="category" class="form-control">
								
							</select>
							<div id="trainingCourse3">

								<select class="form-control" name="trainingCourse">
									<option value="0">Please Select</option>
									<option value="Basic Training (BT)">Basic Training (BT)</option>
									<option value="Basic Training Updating (BTU)">Basic Training Updating (BTU)</option>
									<option value="Basic Training Updating & Refresher(BT-UR)">Basic Training Updating & Refresher(BT-UR)</option>
									<option value="Advanced Fire Fighting (AFF)">Advanced Fire Fighting (AFF)</option>
									<option value="Medical Care (MECA)">Medical Care (MECA)</option>
									<option value="Marine Pollution I-VI (MARPOL CONSOLIDATED)">Marine Pollution I-VI (MARPOL CONSOLIDATED)</option>
									<option value="Ship Security Officer (SSO)">Ship Security Officer (SSO)</option>
									<option value="Ship Security Awareness Training and Seafarers with Designated Security Duties (SSATSDSD)">Ship Security Awareness Training and Seafarers with Designated Security Duties (SSATSDSD)</option>
									<option value="Ratings Forming Part of a Navigational Watch (RFPNW)">Ratings Forming Part of a Navigational Watch (RFPNW)</option>
									<option value="Ratings Forming Part of an Engineering Watch (RFPEW)">Ratings Forming Part of an Engineering Watch (RFPEW)</option>
									<option value="Proficiency in Fast Rescue Boat (PFRB)">Proficiency in Fast Rescue Boat (PFRB)</option>
									<option value="Proficiency in Survival Craft and Rescue Boat (PSCRB)">Proficiency in Survival Craft and Rescue Boat (PSCRB)</option>
									<option value="Basic Training for Oil and Chemical Tankers Cargo Operation (BTOC)">Basic Training for Oil and Chemical Tankers Cargo Operation (BTOC)</option>
									<option value="Basic Training for Liquified Gas Tankers Cargo Operation (BTLGT)">Basic Training for Liquified Gas Tankers Cargo Operation (BTLGT)</option>
									<option value="Crisis Management INTERNATIONAL (CriM)">Crisis Management INTERNATIONAL (CriM)</option>
									<option value="Crowd Management INTERNATIONAL (CroM)">Crowd Management INTERNATIONAL (CroM)</option>
									<option value="Crowd &amp; Crisis Management DOMESTIC (CCM)">Crowd &amp; Crisis Management DOMESTIC (CCM)</option>
									<option value="Refresher Training for Advanced Fire Fighting (RAFF)">Refresher Training for Advanced Fire Fighting (RAFF)</option>
									<option value="Refresher Training for Proficiency in Fast Rescue Boat (RPFRB)">Refresher Training for Proficiency in Fast Rescue Boat (RPFRB)</option>
									<option value="Refresher Training for Proficiency in Survival Craft and Rescue Boat (RPSCRB)">Refresher Training for Proficiency in Survival Craft and Rescue Boat (RPSCRB)</option>
									<option value="Electronic Chart Display and Information System (ECDIS)">Electronic Chart Display and Information System (ECDIS)</option>
									<optgroup label="UPDATING TRAINING FOR OFFICERS IN CHARGE OF A NAVIGATIONAL WATCH">
									   <option value="Part A with ECDIS">Part A with ECDIS</option>
									   <option value="Part A w/out ECDIS">Part A w/out ECDIS</option>
									   <option  value="Part B">Part B</option>
									 </optgroup>
									<optgroup label="UPDATING TRAINING FOR OFFICERS IN CHARGNE OF AN ENGINEERING WATCH">
									   <option value="Part A">Part A </option>
									   <option  value="Part B">Part B</option>
									 </optgroup>
									
								</select>
							</div>
							<div id="reviewCourse3" style="display:none;">
								<select class="form-control" name="reviewCourse">
									<option value="0">Please Select</option>
									<option value="Deck(OIC)">Deck(OIC)</option>
									<option value="Deck Management Level">Deck Management Level</option>
									<option value="Engine OIC">Engine OIC</option>
									<option value="Engine Management Level">Engine Management Level</option>
									<option value="GOC">GOC</option>
								</select>
							</div>
							<div id="shipboardTraining3" style="display:none;">
								<select class="form-control" name="shipboardTraining">
									<option value="0">Please Select</option>
									<option value="Engine Cadet">Engine Cadet</option>
									<option value="Deck Cadet">Deck Cadet</option>
									
								</select>
							</div>
							<div id="manning3" style="display:none;">
								<select name="manning" class="form-control" >
									<optgroup label="DECK">
										<optgroup label="OFFICER">
											<option value="0">Please Select</option>
											<option value="Master">Master</option>
											<option value="Chief Officer">Chief Officer</option>
											<option value="Second Officer">Second Officer</option>
											<option value="Third Officer">Third Officer</option>
										</optgroup>
										<optgroup label="SUPPORT">
											<option value="Bosun">Bosun</option>
											<option value="Able-Bodied Seaman">Able-Bodied Seaman</option>
											<option value="Ordinary Seaman">Ordinary Seaman</option>
											
										</optgroup>
									 </optgroup>
									 <optgroup label="ENGINE">
										<optgroup label="OFFICER">
											<option value="Chief Engineer">Chief Engineer</option>
											<option value="2nd Engineer">2nd Engineer</option>
											<option value="3rd Engineer">3rd Engineer</option>
											<option value="4th Engineer">4th Engineer</option>
											<option value="JR 4th Engineer">JR 4th Engineer</option>
										</optgroup>
										<optgroup label="SUPPORT">
											<option value="Fitter">Fitter</option>
											<option value="Pumpman">Pumpman</option>
											<option value="Oiler">Oiler</option>
											<option value="Wiper">Wiper</option>								
										</optgroup>
									 </optgroup>
									<optgroup label="GALLEY">
										<option value="Chief Cook">Chief Cook</option>
										<option value="Messman">Messman</option>
									 </optgroup>
								
								</select>
							</div>
							<div id="others3" style="display:none;">
								<select name="others" class="form-control">
								<optgroup label="FINANCIAL SERVICES">
										<option value="0">Please Select</option>
										<option value="Investment">Investment</option>
										<option value="Loan">Loan</option>
										<option value="Assistance">Assistance</option>
								 </optgroup>
								 <optgroup label="Psychological Services">
										<option value="Perosonal">Personal</option>
										<option value="Interpersonal">Interpersonal</option>
										<option value="Intrapersonal">Intrapersonal</option>
										<option value="Organizational">Organizational</option>
								 </optgroup>
								<optgroup label="Real Estate">
										<option value="Buy">Buy</option>
										<option value="Sell">Sell</option>
										<option value="Rent">Rent</option>
										<option value="Property Management">Property Management</option>
								 </optgroup>
								 <optgroup label="Academics">
										<option value="Graduate Studies">Graduate Studies</option>
										<option value="Research Advisory">Research Advisory</option>
										
								 </optgroup>
							 </select>
							</div>
							<label>Province</label>
							<select name="province" class="form-control">
								
							</select>
							</p>
							<input type="submit" class="btn btn-lg btn-primary" value="Search" />
							<a href="" class="btn btn-success btn-lg">COME ABOARD!</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- END HERO UNIT -->
<!-- MAIN FEATURES -->
<div class="main-features ">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6"><i class="fa fa-university"></i>
				<h3 class="feature-heading">GOOD GOVERNANCE</h3></div>
			<div class="col-md-3 col-sm-6"><i class="fa fa-map"></i>
				<h3 class="feature-heading">GENUINE SERVICE</h3></div>
			<div class="col-md-3 col-sm-6"><i class="fa fa-stack-exchange"></i>
				<h3 class="feature-heading">PLANNED CHANGE</h3></div>
			<div class="col-md-3 col-sm-6"><i class="fa fa-cogs"></i>
				<h3 class="feature-heading">INCLUSIVE GROWTH</h3></div>
		</div>
	</div>
</div>
<!-- END MAIN FEATURES -->
<!-- INTRO -->
<section>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="section-heading">Notice to SERAPIO</h2>
				<p class="lead" style="text-align:justify">
					Serapio.ph is a platform dedicated and committed to provide every Serapio, with a virtual assistant that will accompany them on their journey as seafarers. The platform will allow Serapio, access to suitable training or review schedule, available promo, affordable rate, and other services that will benefit each seafarer.
				</p>
				<p style="text-align:justify">
					Serapio is a typical Filipino who will do everything to chase for their dreams with noble intention of uplifting the economic status of their loved ones, through a challenging career of becoming a competent seafarer. Seafaring profession is a serious career, since it demands commitment, perseverance, patience, and the sacrifice of living away from loved ones in exchange of providing them better standard of living. In the process, most seafarers spend less time with their families ashore, than onboard oceangoing vessel dealing with all forms of challenges from emotional depression to tropical depression. 
				</p>
				<p style="text-align:justify">
				  Aggravating the circumstances that most seafarers have to endure is the reality that despite of their limited time for vacation supposedly spends quality time with their families, they have to allocate a number of days scouting for affordable, bearable, and accessible training provider or review center to upgrade their status as maritime professionals or able bodied seafarer. To mitigate the hardships and deprivation of enjoying work life balance, Serapio.ph, believed that nobody can understand and help Serapio cope up with all this challenges, but only Serapio, himself.
				</p>
				
			</div>
			<div class="col-md-6">
				<section class="hero-unit-slider slider-responsive no-margin">
					<div id="carousel-hero" class="slick-carousel">
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="{{ asset('images/sliders/notice-to-serapio.jpg') }}" class="img-responsive" alt="Notice To Serapio">
							</div>
							<div class="item active">
								<img src="{{ asset('images/sliders/notice-to-serapio1.jpg') }}" class="img-responsive" alt="Slider Image">
							</div>
							<div class="item active">
								<img src="{{ asset('images/sliders/notice-to-serapio2.jpg') }}" class="img-responsive" alt="Slider Image">
							</div>
							<div class="item active">
								<img src="{{ asset('images/sliders/notice-to-serapio3.jpg') }}" class="img-responsive" alt="Slider Image">
							</div>
						</div>
					</div>
				</section>
			
			</div>
		</div>
	</div>
</section>
<!-- END INTRO -->
<!-- OUR CLIENTS -->

<section class="clients">
	<div class="container">
		<h2 class="section-heading">PARTNERS</h2>
		<div class="multiple-pricing-table">
			<div class="row">
			
				<div class="col-md-4 col-sm-4">
					<div class="pricing-item">
						<img alt="" style="margin-left:50px; " class="img-responsive" src="" /> 
						
					</div>
				</div>
									
			</div>
		</div>
	</div>
</section>
<!-- END OUR CLIENTS -->


@endsection