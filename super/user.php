<?php

	require('config.php');

	require('message.php');
	//session_start();
	class User extends Config{


		public function __construct(){
			parent::__construct();
		}


		public function register(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);
        //var_dump($post);
        // die();
		if($post['submit']){
			if($post['name'] == '' || $post['email'] == '' || $post['password'] == '' || $post['contact']==''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}

			// Insert into MySQL
			$this->query('INSERT INTO super (name, email, password, contact, isSuper, can_view, can_insert, can_update, can_delete) VALUES(:name, :email, :password, :contact, :isSuper, :can_view, :can_insert, :can_update, :can_delete )');
			$this->bind(':name', $post['name']);
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
            $this->bind(':contact', $post['contact']);
            $this->bind(':isSuper', $post['isSuper']);
            $this->bind(':can_view', $post['can_view']);
            $this->bind(':can_insert', $post['can_insert']);
            $this->bind(':can_update', $post['can_update']);
            $this->bind(':can_delete', $post['can_delete']);
			// Verify
            $this->execute();

			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: index.php');
			}
		}
		return;
	}
	public function registerAdmin(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($post['submit']){
			// die(var_dump($post));

			// Insert into MySQL
			$this->query('INSERT INTO admin (name, email, password, employee_address, contact, company_name, designation, businesstype, company_contact, company_address, city, pincode, state, isAdmin, isActive,  can_view, can_insert, can_update, can_delete) VALUES(:name, :email, :password, :employee_address, :contact, :company_name, :designation, :businesstype, :company_contact, :company_address, :city, :pincode, :state, :isAdmin, :isActive, :can_view, :can_insert, :can_update, :can_delete)');

			$this->bind(':name', $post['name']);
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			$this->bind(':employee_address',$post['employee_address']);
			$this->bind(':contact',$post['contact']);
			$this->bind(':company_name',$post['company_name']);
			$this->bind(':designation',$post['designation']);
			$this->bind(':businesstype',$post['businesstype']);
			$this->bind(':company_contact',$post['company_contact']);
			$this->bind(':company_address',$post['company_address']);
			$this->bind(':city',$post['city']);
			$this->bind(':pincode',$post['pincode']);
			$this->bind(':state',$post['state']);
			$this->bind(':isAdmin',$post['isAdmin']);
			$this->bind(':isActive','1');
			$this->bind(':can_view',$post['can_view']);
			$this->bind(':can_insert',$post['can_insert']);
			$this->bind(':can_update',$post['can_update']);
			$this->bind(':can_delete',$post['can_delete']);

            try{
                $this->execute();
            }catch(PDOException $e){
                die(var_dump($e));
            }

			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: index.php');
			}
		}
		return;
	}

	public function login(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($post['submit']){
			// Compare Login
			$this->query('SELECT * FROM super WHERE email = :email AND password = :password');
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);

			$row = $this->single();

			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"id"	=> $row['id'],
					"name"	=> $row['name'],
					"email"	=> $row['email']
				);
				header('Location: index.php');
			} else {
				Messages::setMsg('Incorrect Login', 'error');
			}
		}
		return;
		}
	}
?>
