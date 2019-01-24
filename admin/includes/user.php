
<?php




class User extends db_object {

    protected static $db_table="users";
    protected static $db_table_fields=array('id','username','email','password');
	public $id;
	public $username;
	public $email;
	public $password;
}












