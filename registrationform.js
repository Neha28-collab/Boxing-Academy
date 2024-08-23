function validateForm() {
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var age = document.getElementById("age").value;
    var email = document.getElementById("email").value;
    var number = document.getElementById("number").value;
    var genderMale = document.getElementById("male").checked;
    var genderFemale = document.getElementById("female").checked;
    var genderOther = document.getElementById("other").checked;
    var address = document.getElementById("address").value;

    if (fname === "" || lname === "" || age === "" || email === "" || number === "" ||
        (!genderMale && !genderFemale && !genderOther) || address === "") {
        alert("Please fill in all required fields.");
        return false;
    }
    
    // Display success message
    document.getElementById("message").style.display = "block";
    return true;
}
