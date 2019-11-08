<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<script src="JavaScript/Sign_Up_JS.js"></script>
<link rel="stylesheet" type="text/css" href="css/SignUp_Css.css"></link>
</head>
<body>
<div class="signupbox">
<center>
<form class="fo" method="post" action="Homepage.html"onsubmit="return validate(this)">
<h1 id="i1"><center> Sign Up</center></h1>
<input class="input_box" style="width:40%;" type="text" name="FirstName" placeholder="First Name"  required> &nbsp &nbsp &nbsp &nbsp
<input class="input_box" style="width:40%;" type="text" name="LastName" placeholder="Last Name" required maxlength="10"><br><br>
<input class="input_box" type="Username" name="Username" placeholder="Username" required><br><br>
<input class="input_box" type="email" name="Email" placeholder="Email" required><br><br>
<input class="input_box" type="text" name="MobileNo"  placeholder="Mobile No." required><br><br>
<input class="input_box"  type="password" name="Password" id="password" placeholder="Password" required><br><br>
<input class="input_box" type="password" name="ConfirmPassword" id="confirm" placeholder="Confirm Password" min="8" required><br><br>
<center style="padding-right:45px;">
  <input type="submit" value="Sign Up"> &nbsp &nbsp
  <input type="reset" value="Reset">
</center>
<br>
<center style="padding-right:45px;"><p style="color:white"> Already Registered <white>||</white> <a href="Login_Page.html" title="Login"> Login</a></p></center>
<p class="terms">By signing up you agree to Padalgal's Terms of Service and Privacy Policy.</p>
 </form>
</center>
</div>

<script>
  function validate(form)
{
    fail=validateUserName(form.Username.value)
    fail+=validateEmail(form.Email.value)
    fail+=validateMobileNo(form.MobileNo.value)
    fail+=validatePassword(form.Password.value)
    fail+=confirmPassword(form.ConfirmPassword.value,form.Password.value)
    if(fail=="") return true
    else
    {
       alert(fail)
       return false
    }
}
function validateUserName(field)
{
    if(field.length<5)
        return "Username must be at least 5 characters\n"
    else if(/[^a-zA-Z0-9_]/.test(field))
    return "Only a-z,0-9 and _ is allowed in Usernames.\n"
    return ""
}
function validateEmail(field)
{
    if(!((field.indexOf(".")>0)&&(field.indexOf("@")>0))||/[^a-zA-Z0-9.@_]/.test(field))
        return "Email is invalid\n"
     return ""
}
function validateMobileNo(field)
{
    if(field.length!=10)
        return "Incorrect Mobile Number\n"
    else if(!/[0-9]/.test(field))
        return "Incorrect Mobile Number\n"
    return ""
}
function validatePassword(field)
{
    if(field.length<8)
      return "Password strength must be above 8\n"
     return ""
}
function confirmPassword(field1,field2)
{
	if(field1!=field2)
        return "Incorrect password\n"
    return ""
}

</script>
</body>
</html>
