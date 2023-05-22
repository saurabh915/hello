function validateForm() {
	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;
	//var nameRegex = /^[a-zA-Z ]{2,30}$/;
	//var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	//var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;
	var isValid = true;
	

	if (!/^[a-zA-Z ]{3,30}$/.test(name)) {
		alert("Invalid Name");
		return false;
	}
	

    if (!/\S+@\S+\.\S+/.test(email)) {
        alert("Invalid email address");
        return false;
    }
	

    if (password.length < 8) 
    {
        alert("Password must be at least 8 characters long");
        return false;
    } 
    else if (!/[A-Z]/.test(password)) 
    {
        alert("Password must contain at least one uppercase letter");
        return false;
    } 
    else if (!/[a-z]/.test(password)) 
    {
        alert("Password must contain at least one lowercase letter");
        return false;
    } 
    else if (!/\d/.test(password)) 
    {
        alert("Password must contain at least one number");
        return false;
    }

	return isValid;
}

