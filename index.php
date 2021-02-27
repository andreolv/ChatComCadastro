<?php
session_start();
?>

<!DOCTYPE html>
<html>
<?php
if(isset($_SESSION['usunome'])){
    include_once 'chatAvaliacao.php';
}else{
    include_once 'login.php';
}

?>
</html>

<?php
include_once 'config/bootstrapJs.php';
?>