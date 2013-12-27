	<?php
	$validate = ""; //this is to keep it clean so you don't get warnings in the apache error log.
	//so it won't try to echo a variable that it hasn't been set;
	$name = "";
	$email = "";
	$message = "";
	//print_r($_POST); //prints the whole POST array from the form
		//isset checks if the button has been pressed, the action, and variable attribution will be done only
		// if the send button was pressed
	if (isset($_POST['button'])){
	    
		
	    $name = $_POST['name'];
	    $email = $_POST['email'];
	    $message = $_POST['mess'];
		
	    if ((strlen($name)>20)||(strlen($name)<2)){ //if there are too few or to many characters in the name
		    $validate = "name is bad bad bad";
		}
	    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) //this validates the email
	     {
		  $validate = "E-mail is bad bad bad";
		}
	    if (strlen($message)<5){
		    $validate = "that's not a message!";
	    }
		$the_message =  "A contact from: $name\nEmail: $email\nMessage reads:\n\n$message";
	    if ($validate == ""){
		if (mail('fireflyangerona@gmail.com', 'photography website', $the_message, "From: photo website", '-fserver@techiemouse.com')){
		    header('Location: emailsent.php');
		    //never put input variables in the headers (the last two variables in the mail function) < header injection
		}
		
	    }
		
		
	}
		
		?>
<?php include('includes/header.php');?>
<?php include('includes/navig.php');?>
	            
	
            <img id="myphoto" src="image/me.jpg" alt="Behind the camera">
            
                <div id="contact">
            
                <p>Best advice I have received:<br>
                 "Canon ? Nikon? Who cares? Buy the camera brand your friends have"<br>
                 "Always shoot raw"<br>
                 "Learn to use manual mode"
                 
            </p>
                
            <p>Have more? Drop me a line! </p>
                
            <p>I'm open to colaborations or helping beginner models building their portfolio
            </p>
                </div>
               <form id="contactform" action = "" method="post">
		    <p>
                <input type="text" id="contactname" name="name" placeholder="Name" title ="name" value = "<?php echo $name;?>"/>
		
               
                <input type="text" id="email" name="email" placeholder="Email" title="email" value = "<?php echo $email; //this php line will remember the data in the input so person will still see it after pressing the button?>"/>
				
                
                <textarea type="text" id="mess" name="mess" placeholder="Message" title= "mess" rows= "10"  cols="30"><?php echo $message;?></textarea>
				<div id="error" style= "clear:both;">
				<?php
				echo $validate; //here the message will show if the input is validated
				?>
				</div>
                <input id = "sendb" type="submit" name="button" value = "Send"/>
                
            </form>
                
                
              
	
	</div>
		
	    <script>
		//internet explorer doesn't support place holders => need to create them with diff methods
		var elem=document.createElement('input');
		var supported;
		if ('placeholder' in elem) supported=true;
		if (!supported){
		    //applying the equivalent of a placeholder to each input tag, calling them by id
		    setPlace('contactname');
		    setPlace('email');
		    setPlace('mess');
		    
		}
		
		function setPlace(id){
		    var el=document.getElementById(id);
		    el.value=el.getAttribute('placeholder');
		    el.className='placeholder';
		    
		    el.onfocus = function(){
			if (this.className=='placeholder') {
			this.value='';
			this.className='';
			}
		    }
		    el.onblur = function (){
			if (this.value==''){
			    setPlace(this.id);
			    
			    
			}
			
		    }
		    
		    
		}
		
	    </script>
		    
        </body>