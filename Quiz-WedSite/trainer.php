<html>
<head>
	<head>
		<title>Register</title>
		<link rel="stylesheet" type="text/css" href="css3.css">  
		<style>
			label{
              display:inline-block;
              width:45%;
              padding-left:10px;
              text-align:left;
              font-size:large;
              line-height:45px;
			}
		</style>
		<script>
		 function formvali()
		 {
			 
			// User Name Validation
			
            var un=(document.form1.name.value).toString().trim();
				if(un.length<4)
				{
					alert( "Error: Invalid user name! Should have atleast 4 characters." );
					form1.name.focus();
					return false;
				}
				
			// Email Validation
			
			var mail=(document.form1.mail.value).toString().trim();
				atpos1=mail.indexOf("@");
				atpos2=mail.lastIndexOf("@");
				dotpos1=mail.indexOf(".");
				dotpos2=mail.lastIndexOf(".");
				
				if(atpos1==0 || atpos1==-1 || atpos1!=atpos2)			//not use the @ sign properly
				{
					alert("Error: Misusing of @ sign!");
					form1.mail.focus();
					return false;
				}
				
				if(atpos1>dotpos1)										// @ is placed after .
				{
					alert("Error: Invalid Mail Id!");
					form1.mail.focus();
					return false;
				}
             
				if((mail.length-dotpos2-1)<2)							//Domain Name check
				{
					alert("Error: Missing Domain Name!");
					form1.mail.focus();
					return false;
				}
				
				if((dotpos1-atpos1)<2)								//Server Name check
				{
					alert("Error: Missing Server Provider Name!");
					form1.mail.focus();
					return false;
				}
				if(dotpos1!=dotpos2)
				{
					if((dotpos2-dotpos1)<2)
					{
						alert("Error: Missing Server Provider Name!");
						form1.mail.focus();
						return false;
					}
				}	
				
                       
				alert("Form is Upload Successfully");
				return true;
			}
		</script>
	</head>
	<body>
		<div id="frm">  
		<center>
		<h2>REGISTRATION</h2>
		<hr/><br/>
		<form name="form1" action="data.php" method="post" onsubmit="return formvali();">
		
			<label>Enter Roll Number:</label>
				<input type="text" Name="number" />
				<br/>
			
			<label>Enter User Name: </label>						
				<input type="text" Name="name"/>
				<br/>
         
			<label>Enter Email.id:</label>
				<input type="text" Name="mail"/>
				<br/>
				<br/><br/>
			<input type="submit"/>
			<input type="reset"/>
			
			</center>
		 </form>
		</div>
	</body>
</html>
          