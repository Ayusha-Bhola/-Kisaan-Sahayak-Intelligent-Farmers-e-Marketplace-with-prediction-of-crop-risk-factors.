window.onload=function () {
  render();
};
function render() {
    window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container',
	{size: "invisible",
    callback: function(response) {
      // reCAPTCHA solved - will proceed with submit function
      console.log(response);
    },
    "expired-callback": function() {
      // Reset reCAPTCHA?
    }
  });
    //recaptchaVerifier.render();
}
function phoneAuth(number) {
    //get the number
	//var oForm = document.forms["first"]; 
	//var number = oForm.elements[0].value;
	
	
	
	
    var number=document.getElementById('number').value;
    //console.log(typeof number);
    var appVerifier = window.recaptchaVerifier;
    //phone number authentication function of firebase
    //it takes two parameter first one is number,,,second one is recaptcha
	
	
    firebase.auth().signInWithPhoneNumber(number,appVerifier).then(function (confirmationResult) {
        //s is in lowercase
        window.confirmationResult=confirmationResult;
        coderesult=confirmationResult;
        console.log(coderesult);
        alert("OTP successfully sent..");
        document.getElementById('sendotp').value='RESEND CODE';
       $( "#otpenter" ).toggle();
    }).catch(function (error) {
        console.log(error);
        if(error.message=="We have blocked all requests from this device due to unusual activity. Try again later."){
            const el = document.createElement('div')
            el.innerHTML = "<a href='contact.php'>contact us</a>";
           
            swal({
                title: "Please use other mobile number or",
                content: el,
            });
            //swal("Please use other");
        }
        else{
            alert(error.message);
        
    }
    });	
}
function codeverify() {
    var code=document.getElementById('verificationCode').value;
    if(code.length==0){
        alert("please first enter otp");
    }
    else{
    coderesult.confirm(code).then(function (result) {
        
        alert("Congratulation, Your mobile number is verified.");
        
    $("#nextpage").toggle();
        
        var user=result.user;
        console.log(user);
        console.log(code)
    }).catch(function (error) {
        //alert(error.message);
        alert("Incorrect OTP");
    });    
    }
    
}

