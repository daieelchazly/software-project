
document.getElementById("loginForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const dept = document.getElementById("department").value.trim();
  const pass = document.getElementById("password").value.trim();
  const msg = document.getElementById("errorMsg");

  if (dept === "purchasing" && pass === "admin123") {
    msg.style.color = "green";
    msg.textContent = "Login successful!";
    // Redirect or proceed
  } else {
    msg.textContent = "Invalid credentials. Try again.";
  }
  document.getElementById("loginForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const dept = document.getElementById("department").value.trim();
  const pass = document.getElementById("password").value.trim();
  const msg = document.getElementById("errorMsg");

  if (dept === "purchasing" && pass === "admin123") {
    msg.style.color = "green";
    msg.textContent = "Login successful!";
    // Redirect or proceed
  } else {
    msg.textContent = "Invalid credentials. Try again.";
  }
});

});
