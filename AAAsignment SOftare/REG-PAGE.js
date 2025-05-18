document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();  // Stop default form submission for validation

    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    const errorMsg = document.getElementById("errorMsg");

    // Check password length
    if (password.length !== 8) {
        errorMsg.textContent = "Password must be exactly 8 characters long!";
        return;
    }

    // Check if passwords match
    if (password !== confirmPassword) {
        errorMsg.textContent = "Passwords do not match!";
        return;
    }

    // Clear error and submit the form
    errorMsg.textContent = "";
    this.submit(); // Submits form to register.php
});
