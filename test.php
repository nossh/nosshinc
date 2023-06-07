<!DOCTYPE html>
<html>
<head>
    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <meta charset="utf-8">
	<title>Register</title>
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
	<form id="register" name="register" method="post">
		<input type="email" name="email" placeholder="email address"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<input type="text" name="firstname" placeholder="First Name"><br>
		<input type="text" name="surname" placeholder="Surname"><br>
		<input type="text" name="sex" placeholder="Sex"><br>
		<input type="text" name="tel" placeholder="Phone"><br>
		<input type="submit" name="submit" value="Submit" id="submitButton">

	</form>

	<script type="text/javascript">
		
		 // $("#submitButton").click(function () {
   //          var str = $("#register").serialize();

   //                 $.ajax({
   //                  url: "http://rideitng.com/api/v1/register",
   //                  data: str,
   //                  type: 'post',
   //                  success: function (response)
   //                  {
   //                      var response = JSON.parse(response);
   //                      alert(response);
   //                  }
   //              }); 
            
   //      });

		   const registerForm = document.getElementById('register');
		registerForm.addEventListener('submit', async function (e) {
		    e.preventDefault();
		    const formData = new FormData(registerForm).entries()
		    console.log('Begin');
    fetch('http://rideitng.com/api/v1/register', {
        method: 'POST',
        mode: 'no-cors',
        headers: {
            'Authorization': 'Bearer BXBZxr3zFlYlECnC0eM_FKHqSsWRdYkDwcoVDyANUg8LWrKTxPe8K1sryIYZU4DAGgcb4DV_L-TvOygrfyEoe2T9WWEZ_4tKZ0V_DmWPp2P3-HMYEexqR5sfv9LnpY6JExEDN2CSFqJH0L6hR-ngBKMg3eH7Ms2iSFHkAlmwdHBbwJiAWzi78YSy',
            'Content-type': 'application/json',
        },
        body: {
        email: document.register.email.value,
        password: document.register.email.value,
        firstname: document.register.email.value,
        surname: document.register.email.value,
        sex: document.register.email.value,
        tel: document.register.email.value
      }//JSON.stringify(Object.fromEntries(formData))
    })
    .then(function(resp) {
        if (resp.status == 200) {
            console.log('OK');
            return resp.json();
        } else {
            console.log('Network failure: ' + resp.status + document.register.email.value);
        }
    })
    .then(function(json) {
        console.log('JSON:');
        console.log(JSON.stringify(json));
    })
    .catch(function(err) {
        console.log('Error');
        console.log(JSON.stringify(err));
    });
		});
	</script>
	<!-- BXBZxr3zFlYlECnC0eM_FKHqSsWRdYkDwcoVDyANUg8LWrKTxPe8K1sryIYZU4DAGgcb4DV_L-TvOygrfyEoe2T9WWEZ_4tKZ0V_DmWPp2P3-HMYEexqR5sfv9LnpY6JExEDN2CSFqJH0L6hR-ngBKMg3eH7Ms2iSFHkAlmwdHBbwJiAWzi78YSy -->

	<!-- 'Content-Type': 'application/json', -->
</body>
</html>