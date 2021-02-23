<?php
require_once './vue.php';


$addPicturePost = new AddPicture;
$addPicturePost->add();

// ---------------------------------CLASS ADD PICTURE--------------------------------

class AddPicture{

    public function add () {
        try {
            
            if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0) {
                
                if ($_FILES['picture']['size'] <= 3000000) {

                    $informationPicture = pathinfo($_FILES['picture']['name']);
                    $arrayExtension = array('jpg', 'JPEG', 'gif', 'png');
                    $extensionPicture = $informationPicture['extension'];
                    

                    if (in_array($extensionPicture, $arrayExtension)) {
                        
                        $time = time();
                        $random = rand();
                        $lien = 'uploads/' . $time . $random . '.' . $extensionPicture;
                        move_uploaded_file($_FILES['picture']['tmp_name'], 'uploads/' . $time . $random . '.' . $extensionPicture);

                        $affichage = new Display;
                        $affichage->displayHtml($lien);
                    
                    } else {
                        throw new Exception("Error format picture"); 
                    }  
                }else{
                throw new Exception("Error size picture"); 
                }
                
            }else{
            throw new Exception('picture no found or error'); 
            }

        } catch (Exception $error) {
            echo $error->getMessage();
        }    
    }

}        

        




