
                 function validate() {
                    var name=document.forms['myform']['name'].value;
                    var email=document.forms['myform']['email'].value;
                    var select=document.forms['myform']['issue'].value;
                    var comment=document.forms['myform']['comment'].value;
                    if (name=="") {
                        alert("Enter the name");
                        document.forms['myform']['name'].focus();
                    }
                    else if(email==""){
                        alert("Enter the email");
                        document.forms['myform']['email'].focus();
                    }
                    else if (select=="") {
                        alert("Enter this field");
                        document.forms['myform']['issue'].focus();
                    }
                    else if (comment=="") {
                        alert("Enter this field");
                        document.forms['myform']['comment'].focus();
                    }
                    else{
                        alert("submit");
                    }
                }