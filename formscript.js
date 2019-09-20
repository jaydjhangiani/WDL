function validate()
{
	var phoneNumber = document.getElementById(".phno").value;
	var phoneRGEX = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
	var phoneResult = phoneRGEX.test(phno);
	alert("phone:"+phoneResult );
}
