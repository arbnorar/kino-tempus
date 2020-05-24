function validateRegister() {
  var email = document.getElementById("email")
  var password = document.getElementById("password")
  var passwordConfirm = document.getElementById("password-confirm")
  var emailError = document.getElementById("email-error")
  var passwordError = document.getElementById("password-error")
  var errorColor = "#EA2D2E"

  var emailRe = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i
  var emailRegex = new RegExp(emailRe)

  var passwordRe = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/
  var passwordRegex = new RegExp(passwordRe)

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
    valid = false
  } else if (!passwordRegex.test(password.value)) {
    passwordError.innerHTML =
      "Password must contain: Min. 6 characters, uppercase and lowercase letters, and at least one number."
    password.style.border = `3px solid ${errorColor}`
    valid = false
  } else if (password.value !== passwordConfirm.value) {
    passwordError.innerHTML = "Passwords do not match"
    passwordConfirm.style.border = `3px solid ${errorColor}`
    valid = false
  }
  return valid
}
