// JavaScript Document

//search
function validatesearch() {
	var searchterm = document.forms["search"]["searchterm"].value;
	if(searchterm.length < 2) {
		alert("Sorry, your Search is too short");
		return false;
	}
}
//login
function validatelogin() {
	var user = document.forms["login"]["user"].value;
	var pass = document.forms["login"]["pass"].value;
	
	if(user.length == 0 || pass.length == 0) {
		alert ("You are missing something in your login");
		return false;
	}
}
//upload
function validateupload() {
	var title = document.forms["upload"]["title"].value;
	var magnetlink = document.forms["upload"]["link"].value;
	var information = document.forms["upload"]["information"].value;
	var message = "";
	var validity = true;
	
	if(title.length < 5) {
		message += "Please make your title longer\n";
		validity = false;
	}
	if(title.length > 100) {
		message += "Please make your title shorter\n";
		validity = false;
	}
	var pattern = new RegExp("magnet:?");
	var pattern2 = new RegExp("xt:=urn:");
	if(!pattern.test(magnetlink)&&!pattern2.test(magnetlink)) {
		message += "Your magnetlink was not valid\n";
		validity = false;
	}
	if(information.length > 2000) {
		message += "Info submitted too long (<2000)";
		validity = false;
	}
	if(!validity) {
		alert (message);
		return false;
	}
}
//usercreate
function validateform() {
	//vars
	var username = document.forms["usercreate"]["username"].value;
	var email = document.forms["usercreate"]["email"].value;
	var pass1 = document.forms["usercreate"]["pass1"].value;
	var pass2 = document.forms["usercreate"]["pass2"].value;
	
	var message = "";
	var validity = true;
	//null check
	if(username === "") {
		message += "You forgot the user name\n";
		validity = false;
	}
	if(email === "") {
		message += "You forgot the email address\n";
		validity = false;
	}
	if(pass1 === "") {
		message += "You forgot a password\n";
		validity = false;
	}
	if(pass2 === "") {
		message += "You forgot a password\n";
		validity = false;
	}
	
	if (username.length < 3 || username.length > 15) {
		message += "User name is too short (under 3) or too big (over 15)\n";
		validity = false;
	}
	if (pass1 != pass2) {
		message += "Passwords don't match\n";
		validity = false;
	}
	if (pass1.length < 4) {
		message += "Your is password is too short (under 4)\n";
		validity = false;
	}
	//email check
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
		message += "Not a valid e-mail address";
		validity = false;
  	}
	if(!validity) {
		alert (message);
		return false;
	}
}
//comments
function validatecomment() {
	var comment = document.forms["comments"]["comment"].value;
	
	if(comment.length > 200 || comment.length < 4) {
		alert("Comment is too small(3) or big(200)");
		return false;
	}
}