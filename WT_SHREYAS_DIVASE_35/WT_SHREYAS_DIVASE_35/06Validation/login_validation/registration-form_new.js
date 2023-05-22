function validateForm() {
    // Get form elements
    var name = document.forms["registration-form"]["name"].value;
    var email = document.forms["registration-form"]["email"].value;
    var password = document.forms["registration-form"]["password"].value;

    // Check if name is empty
    if (name != /^[a-zA-Z ]{2,30}$/) {
        alert("Invalid Name");
        return false;
    }

    // Check if email is empty and if it is in a valid format
    if (email == "") {
        alert("Email must be filled out");
        return false;
    } else if (!/\S+@\S+\.\S+/.test(email)) {
        alert("Invalid email address");
        return false;
    }

    // Check if password is empty and if it meets the criteria
    if (password == "") {
        alert("Password must be filled out");
        return false;
    } else if (password.length < 8) {
        alert("Password must be at least 8 characters long");
        return false;
    } else if (!/[A-Z]/.test(password)) {
        alert("Password must contain at least one uppercase letter");
        return false;
    } else if (!/[a-z]/.test(password)) {
        alert("Password must contain at least one lowercase letter");
        return false;
    } else if (!/\d/.test(password)) {
        alert("Password must contain at least one number");
        return false;
    }

    // If all validations pass, return true
    return true;
}

