<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();
echo "<script type='text/javascript'>"; 
      echo "alert('User logged off!')"; 
      echo "</script>";  

// destroy the session
//session_destroy();
?>

</body>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.23821" type="text/javascript"></script>
<script type="text/javascript">
	JotForm.init(function(){
	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.newPaymentUI = true;
    /*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,null,null,null,null,{"name":"successfullyLogged","qid":"5","text":"Successfully logged out","type":"control_head"},null,null,{"name":"home","qid":"8","text":"Home","type":"control_button"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,null,null,null,null,{"name":"successfullyLogged","qid":"5","text":"Successfully logged out","type":"control_head"},null,null,{"name":"home","qid":"8","text":"Home","type":"control_button"}]);}, 20); 
</script>
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.23821" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f7ed99c2c2c7240ba580251"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_styles.css?3.3.23821" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.23821" />
<form class="jotform-form" action="home.php" method="post" name="form_210691364204449" id="210691364204449" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="210691364204449" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_5" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httac htvam">
            <h1 id="header_5" class="form-header" data-component="header">
              Successfully logged out
            </h1>
            <div id="subHeader_5" class="form-subHeader">
              login again?
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_8">
        <div id="cid_8" class="form-input-wide" data-layout="full">
          <div data-align="center" class="form-buttons-wrapper form-buttons-center   jsTest-button-wrapperField">
            <button id="input_8" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Home
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="210691364204449" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='210691364204449'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "210691364204449-210691364204449";
}
  </script>
  
</form>
<script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.23821"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.23821"></script>
</html>
