<?php
include 'user.php';
class User_cards extends User{
    public $idCards;
    public $user_id;
    public $card_number;
    public $ping;
    public $data_exp;

    function __construct($idCards,$user_id,$card_number,$ping, $data_exp)
{
    $this->$idCards=$idCards;
    $this->$id=$user_id;
    $this->$card_number=,$card_number;
    $this->ping=$ping;
    $this->data_exp=$data_exp;
}

public static function registerCard($user){
    $db=Database::getConnect();
    $insert=$db->prepare('INSERT INTO user_cards VALUES(:idCards,:user_id,:card_number,:ping,:data_exp)');
    $insert->bindValue('idCards',$user->idCards);
    $insert->bindValue('user_id',$user->$id);
    $insert->bindValue('card_number',$user->$card_number);
    $insert->bindValue('ping',$user->$ping);
    $insert->bindValue('data_exp',$user->$data_exp);
    $insert->execute();
}

public static function updateCard($user){
    $db=Database::getConnect();
    $update=$db->prepare('UPDATE user_cards SET idCards:idCards,user_id:user_id,card_number:card_number,ping:ping,data_exp:data_exp');
    $update->bindValue('idCards',$user->idCards);
    $update->bindValue('user_id',$user->$id);
    $update->bindValue('card_number',$user->$card_number);
    $update->bindValue('ping',$user->$ping);
    $update->bindValue('data_exp',$user->$data_exp);
    $update->execute();
}

public static function delete_card($id){
    $db=Database::getConnect();
    $delete=$db->prepare('DELETE FROM user_cards WHERE id=:id');
    $delete->bindValue('id',$id);
    $delete->execute();
}

}
?>