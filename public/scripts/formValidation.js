let frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your full-name");
frmvalidator.addValidation("email","req","Please provide your email");
frmvalidator.addValidation("email","email",
"Please enter a valid email address");