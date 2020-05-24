function formValidation() {
  var name = document.getElementById("name")
  var email = document.getElementById("emailAddress")
  var message = document.getElementById("message")

  var nameError = document.getElementById("name-error")
  var emailError = document.getElementById("email-error")
  var messageError = document.getElementById("message-error")
  var errorColor = "#EA2D2E"

  var re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i

  var emailRegex = new RegExp(re)

  var valid = true

  if (name.value == "") {
    nameError.innerHTML = "Name is a required field"
    name.style.border = `3px solid ${errorColor}`
    valid = false
  }

  if (email.value == "") {
    emailError.innerHTML = "Email is a required field"
    email.style.border = `3px solid ${errorColor}`
    valid = false
  } else if (!emailRegex.test(email.value)) {
    emailError.innerHTML = "Please enter a valid email"
    email.style.border = `3px solid ${errorColor}`
    valid = false
  }

  if (message.value == "") {
    messageError.innerHTML = "Message is a required field"
    message.style.border = `3px solid ${errorColor}`
    valid = false
  }

  return valid
}
