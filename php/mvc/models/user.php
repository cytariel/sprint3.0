<?php
class UserModel extends Model{

	public function login(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);
		
		if($post['submit']){
			// Compare Login
			$this->query('SELECT * FROM users WHERE email = :email AND password = :password');
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			
			$row = $this->single();
			//reCAPTCHA
			$secret="6Ldd9kIUAAAAAJXoa9wV78_Ifoj2wgAA20sunO9W";
			$check=file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
			$botornot=json_decode($check);
			if($botornot->success==false){
				unset($_SESSION['is_logged_in']);
				unset($_SESSION['user_data']);
				session_destroy();
				// Redirect
				header('Location: '.ROOT_URL);
				exit;
			}
			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"id"	=> $row['id'],
					"name"	=> $row['name'],
					"email"	=> $row['email']
				);
				header('Location: '.ROOT_URL.'shares');
			} else {
				echo 'Błędny mail/hasło';
			}
		}
		return;
	}
}