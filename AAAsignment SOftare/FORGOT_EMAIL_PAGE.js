// Open modal for forgot email
document.querySelector('.forgot-email').addEventListener('click', function(e) {
  e.preventDefault();
  document.getElementById('forgotEmailModal').style.display = 'block';
});

// Close modal
function closeModal() {
  document.getElementById('forgotEmailModal').style.display = 'none';
}

// Mock email recovery function
function recoverEmail() {
  var username = document.getElementById('usernameForEmail').value;
  if (username) {
    document.getElementById('emailRecoveryMessage').textContent = "Check your inbox for instructions to recover your email!";
  } else {
    document.getElementById('emailRecoveryMessage').textContent = "Please enter a valid username.";
  }
}

function recoverEmail() {
  var username = document.getElementById('usernameForEmail').value.trim();
  var messageEl = document.getElementById('emailRecoveryMessage');

  if (username !== "") {
    messageEl.style.color = 'green';
    messageEl.textContent = "Check your inbox for instructions to recover your email!";
    
    // Redirect to login page after 2 seconds
    setTimeout(function () {
      window.location.href = 'LOGIN_PAGE.html';
    }, 2000);
  } else {
    messageEl.style.color = 'red';
    messageEl.textContent = "Please enter a valid username.";
  }
}


function recoverEmail() {
  const username = document.getElementById('usernameForEmail').value.trim();
  const messageEl = document.getElementById('emailRecoveryMessage');

  if (username === "") {
    messageEl.style.color = 'red';
    messageEl.textContent = "Empty placeholder, please try again.";
    return;
  }

  // Call the backend PHP script to check username
  fetch('recover_email.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: `username=${encodeURIComponent(username)}`
  })
  .then(response => response.json())
  .then(data => {
    if (data.status === "success") {
      messageEl.style.color = 'green';
      messageEl.textContent = `Your email is: ${data.email}. Redirecting to login...`;

      setTimeout(() => {
        window.location.href = "LOGIN_PAGE.html";
      }, 2000);
    } else {
      messageEl.style.color = 'red';
      messageEl.textContent = data.message || "Username not found.";
    }
  })
  .catch(error => {
    messageEl.style.color = 'red';
    messageEl.textContent = "Something went wrong. Please try again.";
    console.error("Error:", error);
  });
}



