
<!DOCTYPE html>
<html>
<head>
	<title> اكتب تعليقا</title>
	<link rel="stylesheet"  href="../css/form.css">
</head>
<body>
       <div id="for">
		<form   name="sfr" action="add.php" method="POST">
                <ul  id="form-input">
                    <li id="input">
                    Your Name:
				<input id="te" type="text" name="name"  placeholder="Enter Your Name " >
                    </li>
                
			
            <li id="input">
                  <span >Your Age:</span>
				<input id="te" type="text" name="age"  placeholder="Enter Your Age "/>
                    </li>  
            <li id="input">
               <span >Your Phone: </span>
          <input id="te" type="text" name="phone"  placeholder="Enter Your Phone " >

             </li>
            <li id="input">
                <span >Gender:</span><br>
				<input id="male" type="radio" name="gender" value="male">
                <!-- don't forget for="" to make male for male -->
                <label for="male">Male</label><br> 
                <input id="female" type="radio" name="gender" placeholder=""/>
                <label for="female">Female</label>
                    </li>
            <li id="input">
                Your E-Mail:
				<input id="te" type="text" name="email" placeholder="Enter Your E-Mail"/>	
                    </li>
				<li id="input">
                    Your Address:
                    <input id="te" type="text" name="address"  placeholder="Enter Your Address ">
			
			</li>
                    <li id="input">
                    Your Comment:
                    <textarea  name="comment" id="te" type="textbox" name="address" style="height:100px"  placeholder="Leave here your comment " ></textarea>
			
			</li>
                     <input type="submit" type="submit" value="Send" id="btn-submit" >

                </ul>
		</form>
      
    </div>
</body>
</html>
