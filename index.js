function displaypopup(){
    document.getElementById("pop-up").classList.toggle("show")
    document.getElementsByClassName("login-container")[0].classList.toggle("pop-up")
}

function formCheck(evt)
{
	if(!validateForm())
	{
		evt.preventDefault();
	}
	else {
		document.getElementById("subButton").removeEventListener("click",formCheck);
	}
}



function validateForm() {
    var custname = document.getElementById("custname")?.value;
    var contact = document.getElementById("contact").value;
    var email = document.getElementById("mail").value;
    var password = document.getElementById("password").value;
    var cpassword = document.getElementById("cpassword").value;
    
    if (custname === "" || contact === "" || email === "" || password === "" || cpassword === "") {
        alert("All fields are required");
        return false;
    }


    if (custname && !validateName(custname)) {
        alert("Invalid Name");
        return false;
    }
    
    if (!validateContact(contact)) {
        alert("Invalid contact number");
        return false;
    }

    if (!validateEmail(email)) {
        alert("Invalid email address");
        return false;
    }

    if (password !== cpassword) {
        alert("Passwords do not match");
        return false;
    }

    return true;
}

function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

function validateContact(contact) {
    var re = /^\d{10}$/; // Assumes a 10-digit phone number
    return re.test(contact);
}
function validateName(name){
    var re = /^[A-Za-z\s]+$/;
    return re.test(name);
}
