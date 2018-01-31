<?php
class ShareModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM shares ORDER BY create_date DESC');
		$rows = $this->resultSet();
		return $rows;
	}

	public function add(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		if($post['add']){
			// Insert into MySQL
			$this->query('INSERT INTO shares (title, body, image, link) VALUES(:title, :body, :image, :link)');
			$this->bind(':title', $post['title']);
			$this->bind(':body', $post['body']);
			$this->bind(':image', $post['image']);
			$this->bind(':link', $post['link']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'shares');
			}
		}
		return;
	}
	public function edit(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$id=$_GET['id'];
		if($post['edit']){
			// Insert into MySQL
			$sql="UPDATE shares SET title=:title, body=:body, image=:image, link=:link WHERE id=:id";
			$this->query($sql);
			$this->bind(':id', $id);
			$this->bind(':title', $post['title']);
			$this->bind(':body', $post['body']);
			$this->bind(':image', $post['image']);
			$this->bind(':link', $post['link']);
			$this->execute();
				// Redirect
				header('Location: '.ROOT_URL.'shares');
			
		}
		return;
	}
}