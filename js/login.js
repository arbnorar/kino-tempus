function validateForm() {
  var email = document.getElementById("email")
  var password = document.getElementById("password")

  var emailError = document.getElementById("email-error")
  var passwordError = document.getElementById("password-error")
  var errorColor = "#EA2D2E"

  var re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i
  var emailRegex = new RegExp(re)

  var valid = true

  if (email.value == "") {
    emailError.innerHTML = "Please enter an email"
    email.style.border = `3px solid ${errorColor}`
    valid = false
  } else if (!emailRegex.test(email.value)) {
    emailError.innerHTML = "Please enter a valid email"
    email.style.border = `3px solid ${errorColor}`
    valid = false
  }

  if (password.value == "") {
    passwordError.innerHTML = "Please enter a password"
    password.style.border = `3px solid ${errorColor}`
    valid = false
  }

  return valid
}
