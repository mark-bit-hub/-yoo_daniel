function showRegistrationForm() {
    document.getElementById('login-form').style.display = 'none';
    document.getElementById('registration-form').style.display = 'block';
}

function showLoginForm() {
    document.getElementById('registration-form').style.display = 'none';
    document.getElementById('login-form').style.display = 'block';
}

function validateRegistration() {
    let password = document.forms["regForm"]["password"].value;
    let confirmPassword = document.forms["regForm"]["confirm_password"].value;

    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }

    if (password.length < 8) {
      alert("Password must be at least 8 characters.");
      return false;
    }

    return true;
}

function checkLoginStatus() {
    if (document.cookie.indexOf("logged=true") > -1) {
        document.getElementById('auth-forms').style.display = 'none';
        document.getElementById('form-submission').style.display = 'block';

        let formSubmissionDiv = document.getElementById('form-submission');
        formSubmissionDiv.innerHTML = `
            <h2>Submit Form</h2>
            <form id="myForm" action="submit_form.php" method="post">
                <input type="text" name="data1" placeholder="Data 1" required><br>
                <textarea name="data2" placeholder="Data 2" required></textarea><br>
                <button type="submit">Submit</button>
            </form>
        `;
    }
}

checkLoginStatus();