<?php
class UserPadel {
    //Atributos de la clase usuario
    public $id;
    public $username;
    public $password;
    public $firtname;
    public $lastname;
    public $mail;
    public $phone;

    function __construct($datos)
	{
        $this->$id=$datos['dni'];
        $this->$username=$datos['username'];
        $this->$password=$datos['password'];
        $this->firtname=$datos['firtname'];
        $this->lastname=$datos['lastname'];
        $this->$mail=$datos['mail'];
        $this->phone=$datos['phone'];
	}

    public static function save($dni,$username,$password,$firtname,$lastname,$mail,$phone)
    {
       // var_dump($dni);
        $db=Database::getConnect();
        $insert=$db->prepare('INSERT INTO user VALUES(:id,:username,:password,:firtname,:lastname, :mail,:phone)');
        $insert->bindValue('id',$dni);
        $insert->bindValue('username',$username);
        $insert->bindValue('password',$password);
        $insert->bindValue('firtname',$firtname);
        $insert->bindValue('lastname',$lastname);
        $insert->bindValue('mail',$mail);
        $insert->bindValue('phone',$phone);
        $insert->execute();
    }

    public static function update($user)
    {
        $db=Database::getConnect();
        $update=$db->prepare('UPDATE  user SET  id:id,username:username,password:password,firtname:firtname,lastname:lastname, mail:mail,phone:phone');
        $update->bindValue('id',$user->id);
        $update->bindValue('login',$user->$username);
        $update->bindValue('password',$user->$password);
        $update->bindValue('firtname',$user->$firtname);
        $update->bindValue('lastname',$user->$lastname);
        $update->bindValue('mail',$user->$mail);
        $update->bindValue('phone',$user->$phone);
        $update->execute();
    }

    public static function delete($id)
    {
		$db=Database::getConnect();
		$delete=$db->prepare('DELETE FROM user WHERE id=:id');
		$delete->bindValue('id',$id);
		$delete->execute();
	}

}


?>