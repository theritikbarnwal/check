function valid()
{
  let username = document.getElementById("username").value;
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;

  let validusername = /^[a-zA-Z0-9]{5,}$/
  let validemail = /^[\w.-]+@[\w.-]+\.\w+$/
  let validpassword = /^.{8,}$/
	
  if(!username || !email || !password)
	{
		alert("All fields required!!");
		return false;
	}

  if(!validusername.test(username))
	{
		alert("username must be at least 5 char!!")
		return false;
	}
 
  if(!validemail.test(email))
	{
		alert("email formart must be valid!!")
		return false;
	}
	
  if(!validpassword.test(password))
	{
		alert("password must be at least 8 char!!")
		return false;
	}
  alert("Form submitted Successfully!!")
  return true;
}