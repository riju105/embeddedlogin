<!DOCTYPE html>
<Changes made by Supriyo>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FIX, curated coffee components</title>

    <link href="reset.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,600" type="text/css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
	
    <meta name="salesforce-community" content="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>">
    <meta name="salesforce-client-id" content="3MVG9llQY5kM9T6ft1Y9n7M2VbT.Xl_gL5w5HQpnK2Joxkfjw8ni5wFBsgYqrPEh3BQJRgMFPRnHzMOJnZhOh">
    <meta name="salesforce-redirect-uri" content="https://tranquil-caverns-97361.herokuapp.com/_callback.php">
    <meta name="salesforce-mode" content="<?php echo getenv('SALESFORCE_MODE');?>">
    <meta name="salesforce-namespace" content="<?php echo getenv('SALESFORCE_NAMESPACE');?>">
    <meta name="salesforce-target" content="#sign-in-link">
    <meta name="salesforce-save-access-token" content="true">
    <meta name="salesforce-forgot-password-enabled" content="<?php echo getenv('SALESFORCE_FORGOT_PASSWORD_ENABLED');?>">
    <meta name="salesforce-self-register-enabled" content="<?php echo getenv('SALESFORCE_SELF_REGISTER_ENABLED');?>">
    <meta name="salesforce-login-handler" content="onLogin">
    <meta name="salesforce-logout-handler" content="onLogout">
    
	<meta name="salesforce-cache-max-age" content="15">
	<link href="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>/servlet/servlet.loginwidgetcontroller?type=css" rel="stylesheet" type="text/css" />
    <script src="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>/servlet/servlet.loginwidgetcontroller?type=javascript_widget&locale=en" async defer></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  
	  
<style>
	
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}


@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
	
	
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}


</style>
  </head>
  
  
  <body>
	  <!-- CUSTOM CODE TO SHOW THE LOADING IMAGE -- START -->
	 <div id="login-loader" style="position: absolute; top: 20px;right: 20px;display:none;"></div>
	 <!-- CUSTOM CODE TO SHOW THE LOADING IMAGE -- END -->
  	<div id="sign-in-link" style="position: absolute; top: 20px;right: 20px;"></div>
	  <div id="sfdc-redirect" class="modal" style="display:none;">

	  <!-- Modal content -->
	  <div class="modal-content">	    
	    <p id="sfdc-redirect-message"></p>
	  </div>

	</div>
    <header>
      <div class="masthead-elements-row-1">
        <div class="element-left"></div>
        <div class="element-middle">
          <img class="logo" src="images/fix-logotype.png" alt="Fix">
          <br>
          <span class="logo-text">Fine Coffee Kits</span>
        </div>
        <div class="element-right">
        </div>
      </div>
    </header>
    <section class="textured-section">
      <h1>Curated Coffee Components</h1>
      

      <ul class="products">
        <li>
          <img class="product-image" src="images/products/071715_Heroku_3270-.jpg" alt="">
          <h3 class="product-name">AeroPress Coffee Maker</h3>
          <div class="product-button"><a id="aero_link" class="btn btn-hot" href="#" onclick="SFIDWidget.login()">Login for more info</a></div>
        </li>
        <li>
          <img class="product-image" src="images/products/071715_Heroku_3263-.jpg" alt="">
          <h3 class="product-name">MSR Reactor 2.5L Stove System</h3>          
          <div class="product-button"><a id="reactor_link" class="btn btn-hot" href="#" onclick="SFIDWidget.login()">Login for more info</a></div>
        </li>
        <li>
          <img class="product-image" src="images/products/071715_Heroku_3302.jpg" alt="">
          <h3 class="product-name">Chemex Classic 6-cup Coffee Maker</h3>
          <div class="product-button"><a id="chemex_link" class="btn btn-hot" href="#" onclick="SFIDWidget.login()">Login for more info</a></div>
        </li>
      </ul>

    </section>
    <section>

      <h1>Complete Brewing Kits</h1>

      <ul class="kits">
        <li>
          <img class="kit-image" src="images/kits/071715_Heroku_3338-Edit-.jpg" alt="">
          <h3 class="kit-name">The Chemex Kit</h3>
        </li>
        <li>
          <img class="kit-image" src="images/kits/071715_Heroku_3353-Edit-.jpg" alt="">
          <h3 class="kit-name">The Pour Over Kit</h3>
        </li>
        <li>
          <img class="kit-image" src="images/kits/071715_Heroku_3346-.jpg" alt="">
          <h3 class="kit-name">The Camper’s Kit</h3>
        </li>
        <li>
          <img class="kit-image" src="images/kits/071715_Heroku_3376-Edit-.jpg" alt="">
          <h3 class="kit-name">The French Press Kit</h3>
        </li>
        <li>
          <img class="kit-image" src="images/kits/071715_Heroku_3385-.jpg" alt="">
          <h3 class="kit-name">The Cold Brew Kit</h3>
        </li>
      </ul>

    </section>
    <footer>

      <div class="trailer-logo">
        <img class="logo" src="images/fix-logotype.png" alt="Fix">
        <br>
        <span class="logo-text">Fine Coffee Kits</span>
      </div>

      <div class="trailer-links">
        <ul class="internal-links">
          <li><a href="https://heroku.github.io/fix">About</a></li>
          <li><a href="https://heroku.github.io/fix">Support</a></li>
          <li><a href="https://heroku.github.io/fix">Contact Us</a></li>
        </ul>
        <ul class="social-links">
          <li><a href="#">
            <img class="social-logo" src="images/social/twitter.png" alt="">
            <span class="social-verb">Follow on</span>
            <span class="social-name">Twitter</span></a></li>
          <li><a href="#">
            <img class="social-logo" src="images/social/facebook.png" alt="">
            <span class="social-verb">Like Us on</span>
            <span class="social-name">Facebook</span></a></li>
          <li><a href="#">
            <img class="social-logo" src="images/social/instagram.png" alt="">
            <span class="social-verb">Follow on</span>
            <span class="social-name">Instagram</span></a></li>
        </ul>
      </div>

    </footer>
	

	
	<script>

var loginSuccess = false;
	function onLogin(identity) {
		/* CUSTOM JAVASCRIPT CODE - START */
		console.log('111');
		$("#login-loader").hide();
		$("#sign-in-link").show();
		loginSuccess = true;
		/* CUSTOM JAVASCRIPT CODE - END */
		var targetDiv = document.querySelector(SFIDWidget.config.target);	
		
		var avatar = document.createElement('a'); 
	 	avatar.href = "javascript:showIdentityOverlay();";
		
		
		var img = document.createElement('img'); 
	 	img.src = identity.photos.thumbnail; 
		img.className = "sfid-avatar";
	
		var username = document.createElement('span'); 
		username.innerHTML = identity.username;
		username.className = "sfid-avatar-name";
		console.log('222');
		var iddiv = document.createElement('div'); 
	 	iddiv.id = "sfid-identity";
		
		avatar.appendChild(img);
		avatar.appendChild(username);
		iddiv.appendChild(avatar);		
	
		targetDiv.innerHTML = '';
		targetDiv.appendChild(iddiv);	
		
		var aero = document.getElementById("aero_link");
		aero.href = "/datasheets/AeroPress-Instr-English-Rev.-D2.pdf";
		aero.innerHTML = 'Datasheet';

		var reactor = document.getElementById("reactor_link");
		reactor.href = "/datasheets/Reactor_StovInst_EURO_EN.pdf";
		reactor.innerHTML = 'Datasheet';

		var chemex = document.getElementById("chemex_link");
		chemex.href = "/datasheets/2014_ChemexBrewGuide.pdf";
		chemex.innerHTML = 'Datasheet';
		console.log('333');
	}
	
	
	function showIdentityOverlay() {

		var lightbox = document.createElement('div'); 
	 	lightbox.className = "sfid-lightbox";
	 	lightbox.id = "sfid-login-overlay";
		lightbox.setAttribute("onClick", "SFIDWidget.cancel();");
		
		var wrapper = document.createElement('div'); 
	 	wrapper.id = "identity-wrapper";
		wrapper.onclick = function(event) {
		    event = event || window.event // cross-browser event
    
		    if (event.stopPropagation) {
		        // W3C standard variant
		        event.stopPropagation()
		    } else {
		        // IE variant
		        event.cancelBubble = true
		    }
		}
		
		var content = document.createElement('div'); 
	 	content.id = "sfid-content";

		var community = document.createElement('a');
		var commURL = document.querySelector('meta[name="salesforce-community"]').content;
		community.href = commURL;
		community.innerHTML = "Go to the Community";
		community.setAttribute("style", "float:left");
		content.appendChild(community);


		var logout = document.createElement('a'); 
	 	logout.href = "javascript:SFIDWidget.logout();SFIDWidget.cancel();";
		logout.innerHTML = "logout";
		logout.setAttribute("style", "float:right");
		content.appendChild(logout);
		
		var t = document.createElement('div'); 
	 	t.id = "sfid-token";
		t.className = "sfid-mb24";
		
		var p = document.createElement('pre'); 
	 	p.innerHTML = JSON.stringify(SFIDWidget.openid_response, undefined, 2);
		t.appendChild(p);
		
		content.appendChild(t);

		
		wrapper.appendChild(content);
		lightbox.appendChild(wrapper);
		
		document.body.appendChild(lightbox);	
		
	}
	
	
	function onLogout() {
		SFIDWidget.init();
		
		var aero = document.getElementById("aero_link");
		aero.href = "#";
		aero.innerHTML = 'Login for more info';

		var reactor = document.getElementById("reactor_link");
		reactor.href = "#";
		reactor.innerHTML = 'Login for more info';

		var chemex = document.getElementById("chemex_link");
		chemex.href = "#";
		chemex.innerHTML = 'Login for more info';
		registered = false;
		/* CUSTOM JAVASCRIPT CODE - START */
		hookUpLogin();
		/* CUSTOM JAVASCRIPT CODE - END */
	}


	</script>
	 
	<script>
		 /* CUSTOM JAVASCRIPT CODE - START */
		var username = '';
		var registered = false;
		console.log("sucess");
		console.log($("#sign-in-link"));
		
		console.log('Clicked login');
		
		
		function hookUpLogin() {
			console.log('Registering');
			$("#sign-in-link").click(function(){
			if (!registered) {
				registered = true;
				$("#sfid-username").blur(function() {
					console.log($("#sfid-username").val());
					username = $("#sfid-username").val();

				});

				$("#sfid-submit").click(function(){
					$("#login-loader").show().addClass("loader");
					$("#sign-in-link").hide();
					var settings = {
						"async": true,						
						"url": "https://allegisgroup--load.cs108.my.salesforce.com/services/apexrest/CommunityMembership?email_address="+username,
						"method": "GET",
						"headers": {
							"Authorization": "Bearer 00D1l0000008aOh!AQUAQIqJnKy_0d__vo8RqpEVUtgfjIKdL8l6LIBDGAqNwOEpNTwQgu2MRTrc5DXsR3uhbGn7XrcIhr_XOKlZ11jzuZXJhfQb"", 
							"cache-control": "no-cache"
						}
					}

					$.ajax(settings).done(function (response) {
						console.log(response.url);
						var message = response.url;
						setTimeout(function() {
							console.log(loginSuccess);
							//if (loginSuccess) {
								$("#login-loader").hide();								
								$("#sfdc-redirect-message").html(message);
								$("#sfdc-redirect").show();
								//alert("we have updated the security. Click here to proceed!!");
							//}
						}, 1500);

					});
					$.ajax(settings).fail(function (response) {						
						$("#login-loader").hide();
						$("#sign-in-link").show();
					});

				});
			}

			});
		}
		hookUpLogin();
		 /* CUSTOM JAVASCRIPT CODE - END */
  </script>
  </body>
</html>
