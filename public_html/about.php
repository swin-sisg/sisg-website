<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Software Industry Student Group" />
		<title>SISG - About</title>
		<link rel="icon" href="images/favicon.ico" type="image/png">
		<link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<script>
		
		</script>
		<style type="text/css">
		

		</style>
	</head>
	<body>


		<!-- navigation bar -->
		<?php include('includes/navbar.include.php'); ?>

		
		<!-- main content -->	
		<main>
			<!-- title -->
			<div class="container-fluid">
				<h1 class="text-center">About SISG</h1>
			</div>
			
			<!-- notification -->
			<div class="container">
				<div class=".col-xs-6 .col-md-4 center-block">
				
					<div class="alert alert-info fade in">
						<i class="fa fa-cogs fa-3x fa-pull-left"></i>
						<strong>We're refreshing!</strong> 
						<p>Work is underway by student members to refresh the SISG website. 
							Are you are a Swinburne Student interested in helping us? Please join the 
							<a href="https://sisg.slack.com/x-15186476451-23690583750/signup"> SISG website discussion on Slack</a>.
							Content will be transitioned from <a href="http://v1.sisg.com.au">our original site</a>.
						</p>
					</div>
				</div>
			</div>
			
			<!-- site content -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Overview</h2>
						<p><i class="fa fa-thumbs-o-up fa-3x fa-pull-left"></i>We are group of like minded students who want to make the most of our time at
							<a href="www.swinburne.edu.au" target="_blank">Swinburne University</a>. Our focus is to foster networking opportunities by 
							promoting interaction between student members, and inviting industry partners to events at Hawthorn Campus. We have found that 
							getting involved and making the most of every opportunity is an excellent way to get job ready and contribute to the software industry.
							</p>
					</div>
					
					<div class="col-md-6">
						<h2>Vision and Missions</h2>
						
						<h3>Vision</h3>
						<p>We want to help fellow students to excel as IT professionals, accumulate and share software development knowledge 
							which would allow us to become a resource pool for IT projects and employers.</p>

						<h3>Missions</h3>
						<p>We seek to provide:</p>
						<ul>
							<li>scholarship opportunities to student members</li>
							<li>software development project opportunities (voluntary and employment) to student members</li>
							<li>regular leadership and technical training to student members</li>
							<li>a platforms to accumulate and share software development knowledge and experience</li>
							<li>opportunities to participate in activities such as competitions and networking</li>
						</ul>
					</div>

			
					<div class="col-md-6">
						<h2>Member benefits</h2>
						<p>Making connections is vital. Knowing the right people is an advantage to get ahead and excel. Therefore, involvement with SISG can result in the following benefits:</p>
						<ul>
							<li>Gain IT project experience through participation</li>
							<li>Learn technical and project skills</li>
							<li>Engage in different aspects of IT, including:
							<ul>
								<li>requirements and analysis</li>
								<li>project management</li>
								<li>contracting</li>
								<li>systems procurement</li>
								<li>solutions design and development</li>
								<li>quality assurance</li>
								<li>systems testing</li>
							</ul></li>
							<li>Learn from experts and experienced people</li>
							<li>Build up your professional networks</li>
							<li>Have something nice to say in your resume</li>
							<li>A taste of the real-world</li>
							<li>Opportunities to earn a salary</li>
						</ul>
					</div>
					
					<div class="col-md-6">
						<h2>Committee</h2>
						<p>Each year a committee is elected to administer the club and provide support to other members. Don't 
						hesitate to contact committee members.</p>
						<h3>Current Committee</h3>
						<ul>
							<li>George Gabriel - President</li>
							<li>Lee Trevena - Treasurer</li>
							<li>Dylan Lewis - Secretary</li>
						</ul>
						<h3>Previous Committees</h3>
						<ul>
							<li>2015
								<ul>
									<li>Ken Santoso - President</li>
									<li>Erik Vloothius - Treasurer</li>
									<li>Dylan Lewis - Secretary</li>
								</ul>
							</li>
							<li>2014
								<ul>
									<li>Kathy Tovar - President</li>
									<li>? - Treasurer</li>
									<li>? - Secretary</li>
								</ul>
							</li>
					</div>
					
					<div class="col-md-6">
						<h2>Advisary Board</h2>
						<p>Assisting SISG to meeting its goals, we appreciate the support and guidance from the following
						Swinburne staff:
						<ul>
							<li>Ms. Mary Appleby - Office of PVC Student Advancement</li>	
							<li>Prof. Glen Bates - Office of PVC Student Advancement</li>
							<li>Mr. James Berett - School of Design</li>
							<li>Dr. Andrew Cain - Computer Science and Software Engineering</li>
							<li>A/Prof. Antony Tang - Swinburne Software Innovation Laboratory</li>
							<li>Dr. Caslon Chua - Computer Science and Software Engineering</li>
							<li>Dr. James Hamlyn-Harris - Computer Science and Software Engineering</li>
							<li>Mr. John McPhee - Office of VP (Engagement)</li>
							<li>Mr. Andrew Roadknight - Vocational Education</li>
							<li>Ms Ruchi Sembey - Information Systems and Logistics</li>
						</ul>
						<p>
						Swinburnes' <a href="https://www.swin.edu.au/directory/" target="_blank">communications directory </a>
						will provide up-to-date phone and email details for the above advisory board members.</p>
					</div>
					
					
					<div class="col-md-6">
					<h2>Location</h2>
					<p>Most events and meetings hosted by us are usually held at Swinburne University of Technology - Hawthorn Campus. Check individual event or meeting details for more specific information.
					The university address is: <br /> 1 John St, Hawthorn  VIC  3122, AUSTRALIA</p>
					
					<div id="map">
						<script>
						  function initMap() {
							var mapDiv = document.getElementById('map');
							var swinburne = {lat: -37.821294, lng: 145.039165};
							var contentString = 
								'<div id="content"><h3>Hawthorn Campus</h3>' +
								'<p>Address: 1 John St, Hawthorn  VIC  3122, AUSTRALIA <br/>' +
								'Website: <a href="http://www.swinburne.edu.au" target="_blank">www.swinburne.edu.au</a></p></div>';
							var infowindow = new google.maps.InfoWindow({content: contentString});
							
							var map = new google.maps.Map(mapDiv, {
							  center: swinburne,
							  zoom: 14
							});
							
							var marker = new google.maps.Marker({
							position: swinburne,
							map: map,
							title: 'Swinburne University of Technology - Hawthorn Campus'
							});
							
							marker.addListener('click', function() {
							  infowindow.open(map, marker);
							});
						  }
						  
						</script>
					</div>
				</div>
			</div>

		</main>
		
		
		<!-- footer -->
		<?php include('includes/footer.include.php'); ?>

		<!-- scripts and styles -->
		<link rel="stylesheet" href="styles/style.css" type="text/css" >
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" />
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>

		
	</body>
</html>