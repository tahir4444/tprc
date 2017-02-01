<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<title>Handling Cookies</title>
<style>
input { border: 1px solid #ccc; padding: 5px; }
input:focus{ border: 1px solid blue;}
</style>
</head>
<body>
<div class="fnm_form">
	<input type="text" name="name" id="name" />
	<input type="submit" name="submit" value="Submit" onclick="javascript: createUser();" />
</div>
<button onclick="setTimeout(myFunction, 3000)">Try it</button>
<div class="demo" id="demo"></div>
<script type="text/javascript">

window.addEventListener('load',function() {

	if (getCookie('welcome')) {
		//checkCookie('welcome');
		 document.getElementById("demo").innerHTML = "Hello " + getCookie('welcome') + "! How are you today?";
	} else {
		
		var person = prompt("Please enter your name", "Harry Potter");
		
		if (person != null) {
			document.getElementById("demo").innerHTML = "Hello " + person + "! How are you today?";
			setCookie('welcome', person, 1);
		}
		
	}

});

function createUser () {
	
	var name	=	document.getElementById('name');

	console.log(document.cookie);
	/* setCookie('name',name.value,1);
	//console.log(name.value);

	name.value	=	''; */
	return;
}


function setCookie(cname, cvalue, exdays) {
	var d = new Date();
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
	var expires = "expires="+d.toUTCString();
	document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i<ca.length; i++) {
	var c = ca[i];
	while (c.charAt(0)==' ') c = c.substring(1);
		if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
	}
	
	return "";
}

function deleteCookie(name) {
    setCookie(name,"",-1);
}

function checkCookie(cname) {
	
	var user = getCookie(cname);
		if (user != "") {
			alert("Welcome again " + user);
		} else {
		user = prompt("Please enter your name:", "");
		if (user != "" && user != null) {
			setCookie(cname, user, 365);
		}
	}
}




function myFunction() {
    // alert('Hello');
	 deleteCookie('welcome');
	 
}
</script>
</body>
</html>