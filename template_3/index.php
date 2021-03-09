	<?php
# Ad Image 
$image = <<< IMAGE_END
fbf.jpg
IMAGE_END;

# Headline
$headline = <<< HEADLINE_END
SIMPLE MORNING RITUAL MELTS UNWANTED BELLY FAT FAST?
HEADLINE_END;

# Ad Text - leave a blank line between paragraphs
$adText = <<< ADTEXT_END
	<p>Experienced researcher Thomas Spear discovered the real root cause of obesity that has nothing to do with dieting or exercising.</p>
<p>His simple method works so well that the weight loss industry has been threatening him ever since he started sharing his solution.</p>
<p>This will only be available for limited time because of the pressure from US Weight Loss Industry.</p>
<h2 style="font-size: 1.2em;">Complete the quiz below:</h2>
ADTEXT_END;

$total_num_questions = 4;

# Question 1 
$question[1] = <<< QUESTION1_END
Do you or anyone you know work in the Diet or Weight Loss Industry?
QUESTION1_END;
$answer_type[1] = "Buttons"; // "Buttons" or "Checkboxes" allowed
// Specify the question answers below, one answer per line
$answers[1] = <<< QUESTIONANSWERS1_END
Yes 
No
QUESTIONANSWERS1_END;

# Question 2 
$question[2] = <<< QUESTION2_END
Are you a person over 30 years old?
QUESTION2_END;
$answer_type[2] = "Buttons"; // "Buttons" or "Checkboxes" allowed
// Specify the question answers below, one answer per line
$answers[2] = <<< QUESTIONANSWERS2_END
Yes
No
QUESTIONANSWERS2_END;

# Question 3 
$question[3] = <<< QUESTION3_END
Have you tried strict diets and struggled to lose weight in the past?
QUESTION3_END;
$answer_type[3] = "Buttons"; // "Buttons" or "Checkboxes" allowed
// Specify the question answers below, one answer per line
$answers[3] = <<< QUESTIONANSWERS3_END
Yes
No
QUESTIONANSWERS3_END;

# Question 4 
$question[4] = <<< QUESTION4_END
Do You want to lose 20 pounds or more quickly and safely?
QUESTION4_END;
$answer_type[4] = "Buttons"; // "Buttons" or "Checkboxes" allowed
// Specify the question answers below, one answer per line
$answers[4] = <<< QUESTIONANSWERS4_END
Yes
No
QUESTIONANSWERS4_END;

# Smart Match System Titles and Text
# Smart Match Lead In (Before Question Validations)
$smartMatchTitle[0] = <<< SMARTMATCHTITLE0_END
Checking against our proprietary Smart Match System<sup>TM</sup>
SMARTMATCHTITLE0_END;

$smartMatchText[0] = <<< SMARTMATCHTEXT0_END
Thank you. We are evaluating your answers.
SMARTMATCHTEXT0_END;

# Smart Match 1
$smartMatchTitle[1] = <<< SMARTMATCHTITLE1_END
Question 1: Processing..
SMARTMATCHTITLE1_END;

$smartMatchText[1] = <<< SMARTMATCHTEXT1_END
Checking our proprietary Smart Match System<sup>TM</sup>
SMARTMATCHTEXT1_END;

# Smart Match 2
$smartMatchTitle[2] = <<< SMARTMATCHTITLE2_END
Question 2: Processing..
SMARTMATCHTITLE2_END;

$smartMatchText[2] = <<< SMARTMATCHTEXT2_END
Checking...
SMARTMATCHTEXT2_END;

# Smart Match 3
$smartMatchTitle[3] = <<< SMARTMATCHTITLE3_END
Question 3: Processing..
SMARTMATCHTITLE3_END;

$smartMatchText[3] = <<< SMARTMATCHTEXT3_END
Checking...
SMARTMATCHTEXT3_END;

# Smart Match 4
$smartMatchTitle[4] = <<< SMARTMATCHTITLE4_END
Question 4: Processing..
SMARTMATCHTITLE4_END;

$smartMatchText[4] = <<< SMARTMATCHTEXT4_END
<h4>You are a match! <span style="color:#021f38;">You are approved to view the presentation.</span></h4>
SMARTMATCHTEXT4_END;

# Congratulations Statement 
$congratulationsStatement = <<< CONGRATS_END
Congratulations! Before you watch the presentation where Thomas will share his discoveries with you, our lawyers have asked us to require that each person agrees to the following guidelines:
CONGRATS_END;

# Rule 1
$rule[1] = <<< RULE1_END
You must NOT talk about the details of this presentation with ANYONE due to the Oral Care Industry secrets contained within.
RULE1_END;

# Rule 2
$rule[2] = <<< RULE2_END
Do NOT use Todd Lamb's suggestions to lose too much weight, too fast. This powerful secret can help average women over 30 quickly shed pounds and must be used responsibly.
RULE2_END;

# Rule 3
$rule[3] = <<< RULE3_END
This presentation is ONLY being made available to a select group of people and will be REMOVED if Thomas comes under too much pressure from the US Weight Loss industry. If you do not want to discover these industry secrets, please CLOSE THIS WINDOW IMMEDIATELY to free up your slot for the next person in line.
RULE3_END;

# Footer Disclaimer
$disclaimer = <<< DISCLAIMER_END
This site is not a part of the Facebook website or Facebook Inc. Additionally, 
this site is NOT endorsed by Facebook in any way.

FACEBOOK is a trademark of FACEBOOK, Inc.
DISCLAIMER_END;

// Affiliate Links - Non-empty "link" settings will be activated. If multiple links are
//                   activated (non-empty) below, then the 1st one encountered will be
//                   considered the default link, meaning it will be used if no "n=xx"
//                   tracking parameter is set in your Facebook Ad "URL Parameters".

# Clickbank Affiliate Link
$affInfo["cb"]["link"] = <<< AFFILIATELINK_END
http://rblanch586.fbfix.hop.clickbank.net/?w=robby
AFFILIATELINK_END;

# Clickbank Tracking Tag
$affInfo["cb"]["trackingTag"] = <<< TRACKINGTAG_END
tid
TRACKINGTAG_END;

# Software Projects Affiliate Link
$affInfo["sp"]["link"] = <<< AFFILIATELINK_END

AFFILIATELINK_END;

# Software Projects Tracking Tag
$affInfo["sp"]["trackingTag"] = <<< TRACKINGTAG_END
subid
TRACKINGTAG_END;

// SOME FUTURE AFFILIATE NETWORK (With Tracking Tag "trk" and URL Parameter: n=fan for example)
# Future Affiliate Network Affiliate Link
# $affInfo["fan"]["link"] = <<< AFFILIATELINK_END
# http://futureaffnetwork.com/?aid=xxx
# AFFILIATELINK_END;
#
# Future Affiliate Network Tracking Tag
# $affInfo["fan"]["trackingTag"] = <<< TRACKINGTAG_END
# trk
# TRACKINGTAG_END;

// Facebook ad "URL Parameters" examples:
//   To have this page use your Clickbank affiliate link.......: n=cb&t=my_tracking_info
//   To have this page use your Software Projects affilate link: n=sp&t=my_tracking_info
//   To use your default affiliate link........................: t=my_tracking_info 

// Facebook Pixel Code - Below, you must either:
//      1. Remove the lines from "<!-- Facebook Pixel Code -->" thru 
//         "<!-- End Facebook Pixel Code -->" below if you aren't ready 
//         to use Facebook Pixel tracking yet, or
//      2. Paste over the lines from "<!-- Facebook Pixel Code -->" thru
//         "<!-- End Facebook Pixel Code -->" to replace it with your own
//         Facebook Pixel (including the PageView event), or
//      3. Replace [FB_PIXEL_ID] in 2 places below with your own Facebook Pixel ID

# Facebook Pixel Code
$facebookPixelCode = <<< FACEBOOKPIXELCODE_END
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '899132453758699');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=899132453758699&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
FACEBOOKPIXELCODE_END;

// You can change the following Facebook Lead Event Name if you'd like to use
// a custom lead event rather than the default "Lead" event.  This is the
// event that will be fired when the "I Agree" button is clicked.

# Facebook Lead Event Name
$facebookLeadEventName = <<< LEADEVENTNAME_END
Lead
LEADEVENTNAME_END;

// Click location tracking - values appended to tracking id
// to let you know where the click-thru to the VSL occured
// (Image, Headline, or Button).

# Image Click Tracking Suffix
$imageClickTrackingSuffix = <<< IMAGECLICK_END
i
IMAGECLICK_END;

# Headline Click Tracking Suffix
$headlineClickTrackingSuffix = <<< HEADLINECLICK_END
h
HEADLINECLICK_END;

# Button Click Tracking Suffix
$buttonClickTrackingSuffix = <<< BUTTONCLICK_END

BUTTONCLICK_END;

// URL Passphrase - any phrase will do, used to
// encode/decode your affiliate link URLs.

# URL Passphrase
$urlPassphrase = <<< PASSPHRASE_END
A man, a plan, a canal, Panama
PASSPHRASE_END;

################################################
### DO NOT MAKE ANY CHANGES BELOW THIS LINE! ###
################################################
require_once("mobile/include/check-all.php");
require_once("mobile/include/universal-tracking.php");
require_once("mobile/include/aeslib.php");
$agreeLink = cryptoJsAesEncrypt($urlPassphrase, $agreeLink);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>     <html class="no-js lt-ie9 lt-ie8 lt-ie7" xmlns:fb="http://ogp.me/ns/fb#"><![endif]-->
<!--[if IE 7]>        <html class="no-js lt-ie9 lt-ie8" xmlns:fb="http://ogp.me/ns/fb#"><![endif]-->
<!--[if IE 8]>        <html class="no-js lt-ie9" xmlns:fb="http://ogp.me/ns/fb#"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" xmlns:fb="http://ogp.me/ns/fb#"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $headline; ?></title>
    <meta name="description" content="<?php echo $headline; ?>">
	<meta name="keywords" content="<?php echo $headline; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="mobile/css/normalize.min.css" type='text/css'>
	<link rel="stylesheet" href="mobile/css/presell.min.css" type='text/css'>
    <link rel="stylesheet" href="mobile/css/mobile.css" type='text/css'>
	<link rel="stylesheet" href="mobile/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href='//fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>        

    <script src="mobile/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<?php echo $facebookPixelCode; ?>
	<?php echo $sAnswerVariablesJavascript; ?>
	<script src="mobile/js/aes.js" type="text/javascript"></script>
	<script src="mobile/js/aeslib.js" type="text/javascript"></script>
	<?php
	require_once("mobile/include/iagree.php");
	?>
		</script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>
or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<div class="site">
<div class="wrapper main clearfix">
	<div id="headerBox" class="clearfix">
		<header id="headerTitle">
			<h2><a href="#" id="headline" data-tracking-suffix="<?php echo $headlineClickTrackingSuffix; ?>" onclick="<?php echo $onclick; ?>"><?php echo $headline; ?></a></h2>
		</header>
		<aside id="imageBox">
			<a href="#" id="image" data-tracking-suffix="<?php echo $imageClickTrackingSuffix; ?>" onclick="<?php echo $onclick; ?>"><img style="border:0px solid #222;margin:16px 0px 17px;0px;" src="<?php echo $image; ?>" id="q1-image" class="headerImage" data-step="1"></a>
		</aside>
		<section id="headerContent">
			<section id="headerText">
				<?php echo $adText; ?>
			</section>
		</section>
		<div class="clearfix"></div>
	</div>
	<div id="surveyBox" class="clearfix">
		<div id="questionBox" class="clearfix">
<?php echo $sQuestionHTML; ?>
		</div>
		<div id="surveyEval" class="clearfix">
<?php echo $sSMSTitleHTML; ?>
			<img src="mobile/img/loading.gif" alt="loading" id="loadingImage" class="loading">
<?php echo $sSMSTextHTML; ?>
		</div>
		<div id="congratsBox" class="clearfix">
			<article id="surveyEnd2">
				<header>
					<h4><?php echo $congratulationsStatement; ?></h4>
				</header>
				<section>
					<div style="color:#FFFFFF;font-size:16px;text-align:left;">
						<span><p><img src="1.png" style="vertical-align:middle;padding-left:5px;padding-right:5px;"><?php echo $rule[1]; ?></p></span>
						<span><p><img src="2.png" style="vertical-align:middle;padding-left:5px;padding-right:5px;"><?php echo $rule[2]; ?></p></span>
						<span><p><img src="3.png" style="vertical-align:middle;padding-left:5px;padding-right:5px;"><?php echo $rule[3]; ?></p></span>
						<p id="ifyouagree" style="padding-left:60px;color:#000000;">If you agree to all the above, click the "I Agree" button below to proceed to the following private presentation.</p>
					</div>
				</section>
			                                                           <button id="surveyAgree" data-tracking-suffix="<?php echo $buttonClickTrackingSuffix; ?>" class="stepButton yesBtn" onclick="<?php echo $onclick; ?>">I AGREE - SHOW ME THE VIDEO!</button>
			</article>
		</div>
	</div>
</div>

	<style>
	#myFrame{
	display:none;}
	</style>
	<div class="accor"></div>
	<div id="footer">
		<div class="footer-container">
		<p style="text-align: center;">&copy; <script type="text/javascript">var cur = 2019; var year = new Date(); if(cur == year.getFullYear()) year = year.getFullYear(); else year = cur + ' - ' + year.getFullYear(); document.write(year);</script> <span style="font-size: x-small;"><a href="privacy-policy.html">Privacy</a> | <a href="terms-of-service.html">Terms</a> | <a href="disclosure-agreement.html">Earnings</a> | <a href="contact.php">Contact</a> | <a href="DMCA.html">DMCA</a> | <a href="https://Facebook.com">Fanpage</a></span></p>
		<?php echo $disclaimer; ?>
		</div>
	</div>
</div>
	<script>
		var noTimeLeft  = "a few seconds";
		var minutesTxt  = " minutes and ";
		var secondsTxt  = " seconds";
		var redirTime   = "28800";
		var trackEvents = "1";
	</script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="mobile/js/presell.min.js"></script>
	<script>
	jQuery(document).one('ready',function(){

	if ( window.location !== window.parent.location ) {

	}else{ 

	 jQuery('<iframe>', {
	   src: 'https://hop.clickbank.net/?affiliate=<?php echo $_GET['a']; ?>&vendor=rblanch&tid=<?php echo $_GET['tid']; ?>&x=auto',
	   id:  'myFrame',
	   frameborder: 0,
	   scrolling: 'no'
	   }).appendTo('.accor');

	}

	});
	</script>
</body>
</html>
