<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "canada_go";
	
	$connection = mysqli_connect($servername, $username, $password, $dbname);

	if(!$connection)
	die("Connection failed ".mysqli_connect_error());

	//else
		//echo "Connection established.";
	
?>
<!DOCTYPE html>
<html>

<head>

	<title>Canada Go</title>
	<link href = "style.css" rel = "stylesheet">
	<link href = "style_faq.css" rel = "stylesheet">
	
</head>

<body>

	<section>
	<?php include 'navigation-bar.php' ?>
</section>

	<img src = "images/question mark.jpg" class = "banner-img">
		
	<div style = "width: 100%; color: white; background-color: black; height: 50px; line-height: 50px; font-size: 35px; text-align: center;">
			Frequently Asked Questions
	</div>
	
	<br>
	
	<div class = "col-12">
		<h1>We would love to hear from you! Please post your question here.</h1>
		<br>
		<form action = "faq.php" method = "post">
			<label class = "label" >First Name: </label>
			<input type = "text" placeholder = "Please enter your first name here" name = "first_name" required>
			
			<br><br>
			
			<label class = "label"> Last Name: </label>
			<input type = "text" placeholder = "Please enter your last name here" name = "last_name">
			
			<br><br>
			
			<label class = "label"> Email ID: </label>
			<input type = "email" placeholder = "abc@gmail.com" name = "email" required>
			
			<br><br>
			
			<label class = "label">Question: </label>
			<textarea name = "question" cols = "50" rows = "5" placeholder = "Enter your question here. (Max. 200 words)" required></textarea>
			
			<br><br>
			
			<input type = "submit" name = "post" value = "Post Question">
		</form>
	</div>

	<?php
	if(isset($_POST['post']))
	{
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$email=$_POST['email'];
		$question = $_POST['question'];
			
			
			$query="INSERT INTO questions(firstname, lastname, email, question) VALUES ('$first_name', '$last_name', '$email', '$question')";
		
				if(mysqli_query($connection, $query))
				{
					//header("login.php");
					echo "<script>alert('Your question has been sent. You will receive a reply on your email shortly.')</script>";
				}
				else
				{
					echo "<script>alert('Unsuccessful attempt! Please try again.')</script>";
				}
		}
	
	?>

	
	
	<div class = "row">
		<div class = "col-12">
			<h1 class = "main-heading">Housing</h1>
		</div>
	</div>
	
	<div class = "row">
	
		<div class = "col-4">
			<!--<h2>Housing and Rentals</h2>-->
			<img src = "images/housing-faq2.png" class = "logo">
		</div>
		
		<div class = "col-8">
			
			
			<button class="collapsible">What is a rental agreement ( aka Tenancy Agreement ) ?</button>
			<div class="content">
			  <p>The Residential Tenancy Act refers to a landlord and resident relationship as a rental agreement.  The agreement must be written and is a legal binding contract between the parties.  The tenancy agreement will contain terms that outline the rights and responsibilities of both parties, including standard terms that are required under the tenancy laws.</p>
			</div>
			
			<button class="collapsible">Can my landlord ask for my credit information?</button>
			<div class="content">
			  <p>Yes. A landlord can obtain a credit report for a person entering into or renewing a tenancy agreement, with the tenant's written consent. If the person does not consent to us obtaining a credit report, the property agent may choose not to enter into a tenancy agreement with that person.</p>
			</div>
			
			<button class="collapsible">What is a security deposit?</button>
			<div class="content">
			  <p>A security deposit is a sum of money given to the landlord that is in addition to the rent paid in respect of the residential premises, and is held as security for the performance of an obligation or liability of the resident.  The security deposit for a Kelson Group apartment will not exceed one half of the monthly rent in British Columbia and one month's rent in Alberta,  payable for the rental suite upon acceptance of the application.</p>
			</div>
			
			<button class="collapsible">What is a rental condition inspection report?</button>
			<div class="content">
			  <p>A condition inspection report form is completed, signed and dated by the resident and landlord to show the condition of the suite at the beginning and at the end of the tenancy agreement.  Both landlord and residents find that an inspection report is in their best interests.  A resident can use it to show there were damages before the resident moved in and a landlord can use it to show damages which were not there before a resident moved in.  The landlord and resident should inspect the premises together and write down any damages such as holes, scratches and burns.  The landlord and resident will sign and keep a copy of the report.</p>
			</div>
			
			<button class="collapsible">How do I pay my rent?</button>
			<div class="content">
			  <p>Ideally, we would like you to pay your rent by the following methods:

				Tenant Pay - Online Banking – Please contact your manager for your account number

				Pre-Authorized Payment (PAD) – Rent is automatically paid to us on the first day of the month

				However, you can pay by cheque and / or post-dated cheques.  We store these cheques safely until they become due. Please ensure that all cheques are made out to KELSON GROUP. We do not accept Cash.</p>
			</div>
			
			<button class="collapsible">How do I request General Maintenance?</button>
			<div class="content">
			  <p>All maintenance requests must be completed in writing by completing a maintenance request form which can be provided from your building manager or from the online Maintenance Request form. We respond to general maintenance requests within two business days or less. 

				If an EMERGENCY REPAIR is required, please contact by phone the building manager immediately.

				Emergency repairs are those that could cause injury to residents or damage to the property, and may include:</p>
				<ul>
					<li>Roof leaks</li>
					<li>Flooding, broken or burst water pipes, a broken toilet</li>
					<li>Failure or breakdown of the gas, electricity or water supply</li>
					<li>Faults or damages that makes the premises unsafe or insecure</li>
					<li>Faults likely to injure a person, cause damage or extreme inconvenience</li>
				</ul>
			</div>
		</div>
	</div>
	
	<br><br>
	
	<div class = "row" style = "margin-top: 20px;">
		<div class = "col-12">
			<h1 class = "main-heading">Student GIC Account (Scotiabank)</h1>
		</div>
	</div>
	
	<div class = "row">
	
		<div class = "col-4">
			<!--<h2>Housing and Rentals</h2>-->
			<img src = "images/banking-logo.jpg" class = "logo">
		</div>
		
		<div class = "col-8">
			
			
			<button class="collapsible">What is a GIC? </button>
			<div class="content">
			  <p>A Guaranteed Investment Certificate or GIC is a Canadian investment that offers a
			guaranteed rate of return over a fixed period of time</p>
			</div>
			
			<button class="collapsible"> Is it mandatory to purchase a GIC? </button>
			<div class="content">
			  <p> The Canadian Embassy in China advises as follows:
			Yes. A GIC is mandatory for applying under the streamlined study permit programs including the
			Study Direct Stream (SDS) and Student Partners Program (SPP). Other study permit applications
			are not required to submit a GIC, but may do so to help demonstrate that sufficient funds are
			available for the intended period of studies in Canada.</p>
			</div>
			
			<button class="collapsible">Where can I get the application form? </button>
			<div class="content">
			  <p> The form is available on the Scotiabank website. Please follow the link:
			http://www.scotiabank.com/ca/en/0,,4361,00.html
			It is located under the “How to apply" tab.</p>
			</div>
			
			<button class="collapsible">How do I transfer funds into my account? </button>
			<div class="content">
			  <p>Once your branch officer has received the secured email containing your Investment Account Number,
			they will contact you with the following information for your use to send us your wire transfer: </p>
			
			<img src = "images/transfer-funds.png">
			
			<p>For bank officers: Please DO NOT send a follow-up email to any Scotiabank email on behalf of your
			clients. Once the GIC account has been funded, a confirmation of the GIC details (such as issue amount,
			date, maturity date, and interest rate) will be sent to you via secured email. 
			</p>
			</div>
			
			<button class="collapsible">Can the GIC be deposited by anyone other than the student? </button>
			<div class="content">
			  <p>
				No. Funds must be deposited in the GIC by the student. In this case the funds must originate from a
				bank account under the name of the student/applicant in China (only funds with a matching sender and
				beneficiary name will be accepted) else the money will be returned to your bank account at the bank
				where the original remittance was made and the GIC will not be processed.
				In the event of a refund, the money will be returned only to the student’s bank account at the bank where
				the original remittance was made. 
			  </p>
			</div>
			
			<button class="collapsible"> How will I access my GIC when I arrive in Canada? </button>
			<div class="content">
			  <p> Upon arrival in Canada, you will need to visit a Scotiabank branch of your choice to open a personal
				deposit account and to activate the GIC. At the Scotiabank branch you will be required to provide an
				ORIGINAL valid passport, Letter of Acceptance to a Canadian educational institution (or student ID) and
				Welcome Package (sent with GIC certificate). Copies of these documents are NOT ACCEPTABLE.
				All payments of principal and interest will be paid to your Scotiabank personal deposit account
				that you must open at a Scotiabank branch after your arrival in Canada* in accordance with the
				following schedule: </p>

				<ul>
					<li> Initial principal payment of $2,000 CAD on the day the Scotiabank personal deposit account is
						opened. </li>
					<li>Four (4) subsequent principal payments of $2,000 CAD will be made every two (2) months
						beginning two months after the initial payment is made. Any principal balance remaining on the
						Maturity Date will be paid to you on the Maturity Date. </li>
					<li>Any outstanding amounts left in your account will be paid to you on your final scheduled
						disbursement payout date. </li>
					<li>You must present identification acceptable to Scotiabank’s account opening policy in order to
						open the personal deposit account. </li>
				</ul>
			</div>
			
			<button class="collapsible">Will I receive interest on the $10,000 CAD that I wire Scotiabank? </button>
			<div class="content">
			  <p> Yes, you will receive interest on your investment. The current rate for Scotia Investment Account (Investment
				Cash) can be found on our Savings Account Interest Rates page. The Interest Rate is Scotiabank’s posted rate for
				Scotia Investment Account on the Issue Date. </p>
			</div>
			
			<button class="collapsible"> How do I communicate with Scotiabank? </button>
			<div class="content">
			  <p> All electronic communications with Scotiabank must be through the Scotiabank Secure Email Service. You may
				contact our Scotiabank Student GIC Program Customer Service department for assistance by collect call at: 416-
				288-4119. (Note: Dialing Direct- Long distance charges will apply if dialing direct (using international dialing code
				001)). Our representatives are available to speak with you Monday to Friday, 9 a.m. to 9 p.m. Eastern Time in
				Canada (excluding Canadian Public Holidays).</p>
			</div>
			
		</div>
	</div>
	
	<br><br>
	
	<div class = "row" style = "margin-top: 20px;">
		<div class = "col-12">
			<h1 class = "main-heading">Kamloops Transportation System (BC Transit)</h1>
		</div>
	</div>
	
	<div class = "row">
	
		<div class = "col-4">
			<img src = "images/bctransit-logo.jpg" class = "logo" style = "border: 1px solid grey; height: 270px;">
		</div>
	
		<div class = "col-8">
				
				
			<button class="collapsible">What is Kamloops Transit 101? </button>
			<div class="content">
				  <p>
					From time to time bus routes are impacted due to construction, traffic accidents or other unforeseen incidents. The City and BC Transit do their best to communicate and understand that a late bus has implications to ridership and each individual's personal schedules. 

					The answer as to why buses are late is actually complicated. There are some common reasons as to why:

					Road traffic can be difficult to predict. Traffic accidents, road construction and large public events can lead to unexpected traffic jams.
					We don't want buses to be early. Ideally, the City's bus operator strives to have a bus arrive just in time, but this is not always possible due to road traffic. A bus arriving early is actually much worse than a bus arriving late. When a bus arrives early, riders miss the bus as it is out of schedule and this results in riders having to wait for the next scheduled bus. 
					Buses need schedules. Not only does this allow riders to know when to expect a bus, it allows for planning not only for a rider but also for the operating company. Believe it or not, the City works closely with the operating company to review route schedules, timing, and capacity at multiple times throughout the year to make adjustments based on ridership demand.
				  
				  </p>
			</div>
			
			
			<button class="collapsible">Why is my bus late?</button>
			<div class="content">
				  <p>
					Late buses occur because bus routes are inherently unstable. When the buses are on schedule, everything seems to work fine. They travel from stop to stop, waiting at each for passengers to board or alight; however, once a bus gets behind schedule (i.e. construction delays, traffic accidents, etc.), its nearly impossible for it to get back on track (affecting the entire system, because – interlining).

					When something like a construction project is going on, it’s best to compare the bus to a car, rather than a train. When one bus is experiencing delays because of traffic, there is very little that the driver can do to make up time – compared to a rapid or train line which is entirely removed from the situation because they are travelling along an entirely different transportation network.
				  </p>
				  
			</div>
			
			<button class = "collapsible">What Is Interlining?</button>
			<div class = "content">
				<p>
					Interlining combines two or more independent transit routes into one operational schedule. Buses are interlined for a number of different reasons, but one of the main reasons is scheduling efficiencies – interlining buses help us minimize the footprint we use; a bus can arrive downtown as one route and sit for just a few minutes and then leave as the next scheduled trip on another route.
				</p>
			</div>
			
			<button class = "collapsible">Wouldn’t it be most efficient if the buses ran nonstop?</button>
			<div class = "content">
				<p>
					Wouldn’t it be most efficient if the buses ran nonstop – an operator drives his route and immediately goes back the opposite direction? Unfortunately, no.

					If you run buses nonstop you would no longer have a fixed schedule; riders require a schedule so they can make transfers to other services and have some idea of bus arrival at their stop. Without a schedule riders wouldn’t know when to expect the buses.

					One of the challenges of interlining is that incidents or construction delays, for example, the slowing down Route 1 could result in a delay in service on route 9. However, with any serious delay, the operating company is involved from the beginning and is in communication with the City to makes adjustments on the road to ensure that service interruptions are minimal.
				</p>
			</div>
			
			<button class = "collapsible">What is bus bunching?</button>
			<div class = "content">
				<p>
					Bus bunching happens because, if a bus gets delayed, then there will be more people waiting at the next stop than anticipated. The extra passengers’ boarding time makes the bus even later, and so on in a vicious cycle.

					To combat bus bunching, bus systems have to build slack into the system, but that slack involves extra buses and labour and longer travel times.
					
				</p>
			</div>

	</div>
	
	<br><br>
	
	<div class = "row">
		<div class = "col-12">
			<h1 class = "main-heading">Provincial IDs (BC Identity Card)</h1>
		</div>
	</div>
	
	<div class = "row">
		<div class = "col-4">
			<img src = "images/bc-logo.png" class = "logo">
		</div>
		
		<div class = "col-8">
		<button class = "collapsible"> What is a BCID card?</button>
		<div class = "content">
			<p>
				The British Columbia identification card (BCID) is a piece of government photo ID that will help you access services or situations that will require identification in Canada, as it is recognized as a Government ID. 
			</p>
		</div>

		<button class = "collapsible">Do I have to get a BCID if I will only be in Canada temporarily?</button>
		<div class = "content">
			<p>
				NO, it is not mandatory to get a BCID if you have other photo ID from your country, but it is useful if you don’t want to carry your passport or country’s ID around with you during time studying or working in Canada. 

				You can keep on using your country’s ID and this will be accepted in many places, as it is a government piece of ID, but if you want to make sure you don’t lose it, you can easily get a BCID card instead. Remember that in Canada you will be asked to show ID for things like having a beer with friends, buying a bottle of wine at a restaurant, etc… so you MUST have a valid ID with you.
			</p>
		</div>
		
		<button class = "collapsible">Where do I go to get my BCID? </button>
		<div class = "content">
			<p>
				Go to any ICBC Driver licensing office to apply for your BCID. Even though it is the driver licensing office, they are the ones providing the BCID Cards. You do not need to have a previous driving license in your country to get your BCID.
			</p>
		</div>
		
		<button class = "collapsible">What documents do I need when getting my BCID if I am a student or working holiday holder? </button>
		<div class = "content">
			<p>
				Bring the following documents:
				<ul>
					<li>Original study or work permit (or both if you have them)</li>
					<li>Original passport </li>
					<li>Original Second piece of ID from your home country, like your country’s ID or driving license. This second ID must show your name, signature and/or photo</li>
				</ul>
				
				Ah! and also remember that they will take your picture there as well as part of the application process, so be ready for it!
			</p>
		</div>
		
		<button class = "collapsible">I am working holiday or student in BC for less than 6 months, can I get my BCID card?</button>
		<div class = "content">
			<p>
				For you to get your BCID card you must have at least 6 months or more in your work or study permit, so if your permits have less than that duration when you go to request your BCID card, unfortunately you will not be able to get one.
			</p>
		</div>
		
		<button class = "collapsible">How much does the BC ID cost? </button>
		<div class = "content">
			<p>
				It costs $35 to get your BCID and you will pay right away once you request it at the ICBC offices. 
			</p>
		</div>
		
		<button class = "collapsible">Will I get my BC ID card right away?</button>
		<div class = "content">
			<p>
				No, you will need to provide an address where the BCID Card will be mailed to, so you will go to the office to request the card only.
			</p>
		</div>
		
		<button class = "collapsible">I just arrived to Canada and I don’t have a permanent address yet, where do I mail my BCID to?</button>
		<div class = "content">
			<p>
			If you are one of our clients and you don’t have a permanent address, you can mail your BCID card to our office: Stepwest 525 Seymour St #812, Vancouver, BC V6B 3H7

			Email us if you do, and we’ll let you know when to pick it up!
			</p>
			<p>
				IMPORTANT: We will only accept BCID Cards for  Stepwest participants, either during your Working Holiday, Internship, or Study and Work program in Canada. If you are not a Stepwest client, please do not request your BCID card be mailed to our office.
			</p>
		</div>
		
		<button class = "collapsible">How long does it take to receive my BCID?</button>
		<div class = "content">
			<p>
				Your BCID should arrive in about 4-6 weeks.
			</p>
		</div>
		
		<button class = "collapsible"></button>
		<div class = "content">
			<p>
			</p>
		</div>
		
	</div>
	
	<script>
		var coll = document.getElementsByClassName("collapsible");
		var i;

		for (i = 0; i < coll.length; i++) {
		  coll[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var content = this.nextElementSibling;
			if (content.style.maxHeight){
			  content.style.maxHeight = null;
			} else {
			  content.style.maxHeight = content.scrollHeight + "px";
			} 
		  });
		}																			
	</script>
		

</body>

</html>