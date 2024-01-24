<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scripting language</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="full-page">
        <div class="navbar">
            <div>
                    <div class="logo"></div>
                    
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='#'>Home</a></li>
                    <li><a href='#'>About Us</a></li>
                    <li><a href='#'>Services</a></li>
                    <li><a href='#'>Contact</a></li>
                    <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                    <li><button class='adminloginbtn' onclick="document.getElementById('-form').style.display='block'" style="width:auto;">Login Admin</button></li>
                    
                    <!-- <div class="search"><input style="border: none;" type="search" id="search-box" placeholder="Search"  ></div>
                    <div class="search-icon"><svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 512 512">!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.<path opacity="1" fill="#1E3050" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></div> -->
               
             </ul>
            </nav>
        </div>
        <div class="adminlogin">
            <p id="text">Admin Login</p>
        <form id='loginadmin' class='input-group-loginadmin' method="post" action="loginadmin.php">
            
            <input type='email'pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"class='input-field'placeholder='Email Id'name ="email" required >
		    <input type='password' class='input-field'placeholder='Enter Password' name="password" required>
		    <input type='checkbox'class='check-box'><span>Remember Password </span>
		    <button type='submit'class='submit-btn'>Log in</button>
		</form>

        </div>
        <div id='login-form' class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                    
                    <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                </div>
                <form id='login' class='input-group-login' method="post" action="loginuser.php">
                    <input type='email'pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"class='input-field'placeholder='Email Id'name ="email" required >
		            <input type='password' class='input-field'placeholder='Enter Password' name="password" required>
		            <input type='checkbox'class='check-box'><span>Remember Password</span>
		            <button type='submit'class='submit-btn'>Log in</button>
		            </form>

                <form id='register' class='input-group-register' method="post" action="register.php">
		            <input id="name" name="name" type='text' class='input-field' pattern="[A-Za-z ]+" placeholder='id' required>
                    <input id="email" name="email" type='email' pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" class='input-field' placeholder='Email Id' required>
                    <input id="phone_no" name="phone_no" type="tel" pattern="9[0-9]{9}" placeholder="Phone no" maxlength="10" class="input-field" required>
                    <input id="password" name="password" type='password' class='input-field' placeholder='Enter Password' required>

		            <!-- <input type='password' class='input-field' placeholder='Confirm Password'  required> -->
		            <input type='checkbox' class='check-box'><span>I agree to the terms andconditions</span> 
                    <button type='submit' name='submit' class='submit-btn'>Register</button>
                
	             </form>
                </div>
            </div>
         </div>
    
    <script>
        var x=document.getElementById('login');
        
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
        
		function register()

		{
            
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';

		}
		function login()
        
		{
            
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}

	</script>
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 

        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
        
        var modal = document.getElementById('loginadmin-form');
        window.onclick = function(event) 

        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }

        function openForm() {
  document.getElementById("adminlogin").style.display = "block";
}
        
  
    </script>
</body>
</html>