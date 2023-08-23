let clearbutton = getElementById("clear")

clearbutton.addEventListener("change", function () {
for (element  in document.getElementsByName(title, surname, firstname, middlename,email,username, password, secretcode,dateofbirth, placeofbirth,programme))
{
  element.value = ""
}
});


