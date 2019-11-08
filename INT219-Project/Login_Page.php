<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="css/LoginCss.css">
    <link rel="stylesheet" href="Css/Homepage_CSS.css">
    <link rel='icon' href='music.png' type='image/jpg'>
<script src="JavaScript/Login.js"></script>
</head>
<script>
    function validate(form)
{
    fail=validateEmail(form.email.value)
    fail+=validatePassword(form.password.value)
    fail+=preDefined(form,form.email.value,form.password.value)
    if(fail=="") return true
    else
    {
       alert(fail)
       return false
    }
}


function validateEmail(field)
{
    if(field=="")
        return "Email is Required.\n"
     else if(!((field.indexOf(".")>0)&&(field.indexOf("@")>0))||/[^a-zA-Z0-9.@_-]/.test(field))
             return "Invalid Email!!\n"
     return ""
}
function validatePassword(field)
{
if (field == "")
    return "No Password was entered.\n"
else if (field.length < 6)
    return "Passwords must be at least 6 characters.\n"
else if (!/[a-z]/.test(field) || !/[0-9]/.test(field))
    return "Invalid Password\n"
return ""
}
function preDefined(form,email,password)
{
    if(email=="tango@gmail.com")
    {
        if(password==="12345a")
           {
               form.action="homepage.html"
               return ""
           }
    }
    else if(email=="arnavthakur@gmail.com")
    {
        if(password==="arnav12345")
           {
               form.action="ArnavHomepage.html"
               return ""
           }
        else
            return("Incorrect Username and Password combination")
    }
    else if(email=="ankitsaini@gmail.com")
    {
        if(password="ankit12345")
            {
                form.action="AnkitHomepage.html"
                return ""
            }
        else
                return("Incorrect Username and Password combination")
    }
    else if(email=="arnavthakur13456@gmail.com")
    {
        if(password=="13456abc")
            {
                form.action="Homepage_user4.htm"
                return ""
            }
         else
                return("Incorrect Username and Password combination")
    }
    else
        alert("Incorrect Username and Password combination")

}
</script>
<body class="body">
    <div class="main" >
        <div class="row1">
                <div class="r1logo">
                    <img src="images/logo.png" width="60" height="70">
                </div>
                <div class="r1text">-ACRES</div>
                <div class="r1menu"><a href="index.php" class="a">Home</a></div>
                <div class="r1menu"><a href="about.php" class="a">About Us</a></div>
                <div class="r1menu"><a href="property.php" class="a">Property</a></div>
                <div class="r1menu"><a href="agents.php" class="a">Agents</a></div>
                <div class="r1menu"><a href="login.php" class="a"></a>Login</div>
        </div>
            <div class="clear"></div>
            <div class="row2">
            
                    <div class="loginBox">
                        <img src="Avatar.jpg" class="user">
                        <h2>LOG IN</h2>
                        <form id="form" onsubmit="return validate(this)">
                                <p>Email</p>
                                <input type="email" name="email" placeholder=" Enter Email" required>
                                <p>Password</p>
                                <input type="password" name="password" placeholder="********" required>
                                <center><input style="width:50%;height:35px;" type="submit" name="" value="Log In"></center><br>
                                <a href="#">Forget Password?</a>
                                <p style="font-size:13px;">Not a User Yet?<a href="Sign_Up.html" title="Sign Up"> Join Now</a></p>
                        </form>
                    </div>
            </div>
        </div>

            <div class="footer">
                <div class="footerc1">
                    <h2>Menu</h2>
                    <h5><a href="index.php" class="ab">Home</a></h5>
                    <h5><a href="about.php" class="ab">About Us</a></h5>
                    <h5><a href="property.php" class="ab">Property</a></h5>
                    <h5><a href="agents.php" class="ab">Agents</a></h5>
                    <h5>LOGIN|SIGNUP</h5>
                </div>
                <div class="footerc2">
                    <h2>Contact Us</h2>
                    <h5> +1234567890</h5>
                    <h5>kacres.Com</h5>
                    <h5> mail@kacres.Com</h5>
                    <h5> 60 B K-Acres, Del Jodhpur, 21548, US</h5>
                </div>

                <div class="footerc3">
                    <h2>Blog Post</h2>
                    <div class="footimg">
                        <img src="images/Index_03.jpg">
                    </div>

                    <h5 class="foot"> K-ACRES Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiusmod Tempor Incididunt Ut. <br/>1 Day Ago</h5>
                    <div class="footimg">
                        <img src="images/Index_06.jpg">
                    </div>
                    <h5 class="foot">Ut Enim Ad Minim Veniam, Quis Nostrud Exercitationadipisicing Elit, Sed Do Eiusmod Tempor Incididunt Ut. <br/>247 Years Ago</h5>
                </div>

                <div class="footerc4">
                    <h2>Subscribe</h2>
                    <h5 class="foot">Be aware for news</h5>
                    <div class="footmail">
                        <input type="text" name="mail" placeholder="    Your Email" >
                    </div>
                    <div class="btn">Send</div>
                    <h2>Follow Us</h2>
                    <div class="link">
                        <img src="images/facebook.png">
                    </div>
                    <div class="link">
                        <img src="images/in.png">
                    </div>
                    <div class="link">
                        <img src="images/twitter.png">
                    </div>
                    <div class="link">
                        <img src="images/shaare.png">
                    </div>
                </div>

            </div>
            </div>

        </div>
    </div>

</body>
</html>

  
 
