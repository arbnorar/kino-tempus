function formValidation() {
  var name = document.getElementById("name")
  var email = document.getElementById("emailAddress")
  var message = document.getElementById("message")

  var nameError = document.getElementById("name-error")
  var emailError = document.getElementById("email-error")
  var messageError = document.getElementById("message-error")

  var valid = true

  if (name.value == "") {
    nameError.innerHTML = "Name is a required field"
    name.style.border = "2px solid red"
    valid = false
  }

  if (email.value == "") {
    emailError.innerHTML = "Email is a required field"
    email.style.border = "2px solid red"
    valid = false
  } else if (!email.value.includes("@") || !email.value.includes(".")) {
    emailError.innerHTML = "Please enter a valid email"
    email.style.border = "2px solid red"
    valid = false
  }

  if (message.value == "") {
    messageError.innerHTML = "Message is a required field"
    message.style.border = "2px solid red"
    valid = false
  }

  return valid
}
