
<?php
include 'user.php';
class User_address extends User{
public $idAddress;
public $user_id;
public $address;
public $country;
public $city;
public $postal_code;

function __construct($idAddress,$user_id,$address,$country,$city, $postal_code)
{
    $this->$idAddress=$idAddress;
    $this->$id=$user_id;
    $this->$address=,$address;
    $this->country=$country;
    $this->city=$city;
    $this->$postal_code=$postal_code;
}

public static function registerAddress($user){
    $db=Database::getConnect();
    $insert=$db->prepare('INSERT INTO user_address VALUES(:idAddress,:user_id,:address,:country,:city,:postal_code)');
    $insert->bindValue('idAddress',$user->idAddress);
    $insert->bindValue('user_id',$user->$id);
    $insert->bindValue('address',$user->$address);
    $insert->bindValue('country',$user->$country);
    $insert->bindValue('city',$user->$city);
    $insert->bindValue('postal_code',$user->$postal_code);
    $insert->execute();
}

public static function updateAddress($user){
    $db=Database::getConnect();
    $update=$db->prepare('UPDATE  user_address SET idAddress:idAddress,user_id:user_id,address:address,country:country,city:city,postal_code:postal_code');
    $update->bindValue('idAddress',$user->idAddress);
    $update->bindValue('user_id',$user->$id);
    $update->bindValue('address',$user->$address);
    $update->bindValue('country',$user->$country);
    $update->bindValue('city',$user->$city);
    $update->bindValue('postal_code',$user->$postal_code);
    $update->execute();
}

public static function delete_address($id){
    $db=Database::getConnect();
    $delete=$db->prepare('DELETE FROM user_address WHERE id=:id');
    $delete->bindValue('id',$id);
    $delete->execute();
}

}
?>