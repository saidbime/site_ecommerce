<?php include 'db.php'; ?>
<?php 
//    require 'Admin/session.php';
//    Session::start();
    /**Traitement du formulaire */
     
   
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {   
        try{
            if(isset($_POST['user']) && isset($_POST['pass'])){
                $username = $db->quote($_POST['user']);
                $password = $db->quote($_POST['pass']);
                $select = $db->query("select * from login where username = $username and password = $password");
                
                if($select->rowCount() > 0){
                    Session::set('auth',$select->fetch());
                    header('Location:view.php');
                    die;
                }
            }
        }catch(Exception $e){
            // echo('Exception');
        }
       
    }  
    else{
        // echo('Erreur GET');
    }
?>