function validateName(name)
{
    //var regex = /^[a-zA-Z ]{2,30}$/;
    var s=true;
		var regex = /^[A-Z][a-z]+\s[A-Z][a-z]+$/;
    if (name.value.match(regex)) {
		document.getElementById("farmernamelabel").innerHTML="";
        s= true;
    }
    else {
        document.getElementById("farmernamelabel").innerHTML="*Enter your name as per example given";
		s=false;
    }
	return s;
}


function validateMobile(mobile)
{
    
    //var phone=/^\d{10}$/;
	var phone = /^([0]|\+91)?[789]\d{9}$/;
		if(mobile.value.match(phone))
		{
			document.getElementById("phonenolabel").innerHTML="";
			s=true;

		}
		else
		{
			document.getElementById("phonenolabel").innerHTML="*Enter valid Mobile number";
			s=false;
		}
 return s;
}




function validateotp(otp)
{
        //var s=true;
         var ot=/^\d{6}$/;
		if(otp.value.match(ot))
		{
		 
			document.getElementById("otplabel").innerHTML="";
			//s=true;

		}
		else
		{
			document.getElementById("otplabel").innerHTML="*Enter valid OTP";
			//s=false;
		}
	//return s;
}



function validateN(n)
{
        var s=true;
         var nvalue= /^[0-9]{1,3}[:.,-]?$/;
		if(n.value.match(nvalue))
		{
		 
			document.getElementById("labeln").innerHTML="";
			s=true;
            //submit.disabled = false;

		}
		else
		{
			document.getElementById("labeln").innerHTML="Enter valid N value";
			s=false;
            //submit.disabled = true;
		}
	return s;
}
function validateP(p)
{
        var s=true;
         var pvalue=/^[0-9]{1,3}[:.,-]?$/;
		if(p.value.match(pvalue))
		{
		 
			document.getElementById("labelp").innerHTML="";
			s=true;
            //submit.disabled = false;

		}
		else
		{
			document.getElementById("labelp").innerHTML="Enter valid P value";
			s=false;
            //submit.disabled = true;
		}
	return s;
}
function validateK(k)
{
        var s=true;
         var kvalue=/^[0-9]{1,3}[:.,-]?$/;
		if(k.value.match(kvalue))
		{
		 
			document.getElementById("labelk").innerHTML="";
			s=true;
            //submit.disabled = false;

		}
		else
		{
			document.getElementById("labelk").innerHTML="Enter valid K value";
			s=false;
            //submit.disabled = true;
		}
	return s;
}

function validatePHMin(phmin)
{
        var s=true;
         //var phminvalue=/^[1-14]\d*(\.\d+)?$/;
		//var phminvalue =  /^\d{0,2}(\.\d{0,1})?$/;
		//var phminvalue =  /^(14|[1-9][0-4]?(\.\d{0,1})?)$/;
		var phminvalue = /^(14|14.0|[1-9][0-3]?(\.\d{0,1})?)$/;
		if(phmin.value.match(phminvalue))
		{
			var phMn = phmin.value;
			document.getElementById("labelphmin").innerHTML="";
            //submit.disabled = false;
			s=true;

		}
		else
		{
			document.getElementById("labelphmin").innerHTML="Enter valid PH value";
            //submit.disabled = true;
			s=false;
		}
	return s;
}
function validatePHMax(phmax)
{
        var s=true;
         //var phmaxvalue=/^(14|[1-9][0-4]?(\.\d{0,1})?)$/;
		 var phmaxvalue = /^(14|14.0|[1-9][0-3]?(\.\d{0,1})?)$/;
		if(phmax.value.match(phmaxvalue))
		{
            document.getElementById("labelphmax").innerHTML="";
			var phM = phmax.value;
            
            //submit.disabled = false;
			s=true;
        //var x=document.getElementById("myForm").getElementsByClassName('phvaluemin').item(0);
            //var arr = Array.from(x);
            //alert(x);
            //alert(arr);
            //alert(phM);
            

		}
		else
		{
			document.getElementById("labelphmax").innerHTML="Enter valid PH value";
            //submit.disabled = true;
			s=false;
		}
    
    
	return s;
}

function validateland(land)
{

        var s=true;
         var landarea=/^((?!(0))[0-9]{1,3})?((\.\d{0,2})?)$/;
		if(land.value.match(landarea))
		{
			
			document.getElementById("labelarea").innerHTML="";
            //submit.disabled = false;
			s=true;
			
		}
		else
		{
			document.getElementById("labelarea").innerHTML="*Enter valid number of Hectare";
            //submit.disabled = true;
			s=false;
		}
	return s;
}

function validateForm(form) { 
    var min=form.phvaluemin.value;
    var max=form.phvaluemax.value;
    if(Number(min)>Number(max)){
        document.getElementById("labelphmin").innerHTML="*Mininum pH should not be less than Maximum pH value";
        //alert("minPH should not be greater than ph max value");
        return false;
    }
    
    if (validateN(form.nvalue)) {
        if (validateP(form.nvalue)) {
            if (validateK(form.nvalue)) {
                if (validatePHMin(form.phvaluemin)) {
                    if (validatePHMax(form.phvaluemax)) {
                        if (validateland(form.land)) {
                            
                            if(!confirm('Do you really want to submit the form?')){
                                return false;
                            }
                            //confirm('Do you really want to submit the form?');
                            return true; 
                        }
                        
                    } 
                } 
            } 
        } 
    }
    
                        
    alert("please check invalid form details");
    return false; 
    
} 
function RegisterForm(form) { 
    
    if (validateName(form.farmer_name)) {
                            if(!confirm('Do you really want to submit the form?')){
                                return false;
                            }
                            return true; 
                        }
                        
    alert("please check invalid form details");
    return false; 
    
} 
