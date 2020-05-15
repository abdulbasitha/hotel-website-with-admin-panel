function check()
{
	var name,p,p1,email,name1,name2;
	name=document.signupform.name.value;
     email=document.signupform.email.value;
	p1=document.signupform.password.value;
	p2=document.signupform.cpassword.value;
	name1=name;
	email2=email;
	if(p1!=p2)
	{
		alert("Password Not Match");
		
	}
	    document.signupform.name.value=name1;
        document.signupform.email.value=email2;
}
