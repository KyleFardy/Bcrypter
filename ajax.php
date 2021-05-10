<?php
	if(isset($_GET['action']) && !empty($_GET['action'])){
		switch(strip_tags($_GET['action'])){
			case "encrypt":
				if(empty($_POST['string'])){
					echo '<div class="alert alert-danger bg-danger text-white text-center">Please Enter A String To Encrypt!</div>';
				}
				else{
					$options = [
					  'cost' => (is_numeric($_POST['rounds']) ? $_POST['rounds'] : 8)
					];
					echo '<div class="alert alert-success bg-success text-white text-center" id="response">String : '.htmlspecialchars($_POST['string']).'<br>Encrypted : '.password_hash($_POST['string'], PASSWORD_BCRYPT, $options).'</div>';
				}
			break;
			case "check":
				if(empty($_POST['hash'])){
					echo '<div class="alert alert-danger bg-danger text-white text-center">Please Enter A Hash To Check Against!</div>';
				}
				else if(empty($_POST['string'])){
					echo '<div class="alert alert-danger bg-danger text-white text-center">Please Enter A String To Check!</div>';
				}
				else{
					if(password_verify($_POST['string'], $_POST['hash']))
						echo '<div class="alert alert-success bg-success text-white text-center" id="response">The String And Hash Both Match!</div>';
					else
						echo '<div class="alert alert-danger bg-danger text-white text-center">The String And Hash Provided Do Not Match!</div>';
				}
			break;
			default:
				echo '<div class="alert alert-danger bg-danger text-white text-center">Please Select A Valid Method!</div>';
			break;
		}
	}
	else
		echo '<div class="alert alert-danger bg-danger text-white text-center">Please Select A Valid Method!</div>';
?>