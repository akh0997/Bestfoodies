
function checkValidations()
{
	a=true;
	userVar=document.getElementById("userNameText");
	passVar=document.getElementById("passwordText");
	
	userErr=document.getElementById("emailErr");
	passErr=document.getElementById("passErr");
	
	if(userVar.value=="")
	{
		userErr.innerHTML="Username is required!";
		userErr.style.color="red";
		a=false;
	}
	else
	{
		userErr.innerHTML="";
	}
	
	if(passVar.value=="")
	{
		passErr.innerHTML="Password is required!";
		passErr.style.color="red";
		a=false;
	}
	else
	{
		passErr.innerHTML="";
	}
	return a;
		
}

function checkBannerValidations()
{
	b=true;
	banVar=document.getElementById("Banner");
	imgVar=document.getElementById("BImage");
	
	banE=document.getElementById("BannerErr");
	imgE=document.getElementById("ImageErr");
	
	if(banVar.value=="")
	{
		banE.innerHTML="Banner text is required!";
		banE.style.color="red";
		b=false;
	}
	else
	{
		banE.innerHTML="";
	}
	
	if(imgVar.value=="")
	{
		imgE.innerHTML="Image is required!";
		imgE.style.color="red";
		b=false;
	}
	else
	{
		imgE.innerHTML="";
	}
	return b;
		
}

function manageMealValidation()
{
	b=true;
	nameVar=document.getElementById("Name1");
	qtyVar=document.getElementById("Name2");
	unitVar=document.getElementById("Name3");
	priceVar=document.getElementById("Name4");
	imgVar=document.getElementById("Name5");
	desVar=document.getElementById("Name6");
	
	nameE=document.getElementById("NameErr");
	qtyE=document.getElementById("QuantityErr");
	unitE=document.getElementById("UnitErr");
	priceE=document.getElementById("PriceErr");
	imgE=document.getElementById("ImageErr");
	desE=document.getElementById("DescriptionErr");
	
	if(nameVar.value=="")
	{
		nameE.innerHTML="Name is required!";
		nameE.style.color="red";
		b=false;
	}
	else
	{
		nameE.innerHTML="";
	}
	
	if(qtyVar.value=="")
	{
		qtyE.innerHTML="Quantity is required!";
		qtyE.style.color="red";
		b=false;
	}
	else
	{
		qtyE.innerHTML="";
	}
	
	if(unitVar.value=="")
	{
		unitE.innerHTML="unit is required!";
		unitE.style.color="red";
		b=false;
	}
	else
	{
		unitE.innerHTML="";
	}
	
	if(priceVar.value=="")
	{
		priceE.innerHTML="Price is required!";
		priceE.style.color="red";
		b=false;
	}
	else
	{
		priceE.innerHTML="";
	}
	
	if(imgVar.value=="")
	{
		imgE.innerHTML="Image is required!";
		imgE.style.color="red";
		b=false;
	}
	else
	{
		imgE.innerHTML="";
	}
	
	if(desVar.value=="")
	{
		desE.innerHTML="Description is required!";
		desE.style.color="red";
		b=false;
	}
	else
	{
		desE.innerHTML="";
	}
	
	return b;
}

function changePasswordValidate()
		{
			a=true;
			passC=document.getElementById("CurrentPass");
			newC=document.getElementById("NewPass");
			conC=document.getElementById("ConfirmPass");

			passE=document.getElementById("passErr");
			newE=document.getElementById("newPassErr");
			conE=document.getElementById("conPassErr");

			if(passC.value=="")
			{
				passE.innerHTML="Current Password is required!";
				passE.style.color="red";
				a=false;
				
			}
			else
			{
				passE.innerHTML="";
			}

			if(newC.value=="")
			{
				newE.innerHTML="New Password is required!";
				newE.style.color="red";
				a=false;								
			}
			else
			{
				newE.innerHTML="";
			}

			if(conC.value=="")
			{
				conE.innerHTML="Confirm Password is required!";
				conE.style.color="red";
				a=false;								
			}
			else
			{
				conE.innerHTML="";
			}
			return a;
}

