 <?php 
//function AddUser(){
session_start();
   
        $UserMail=htmlspecialchars($_POST["UserMail"]);
		$UserName=htmlspecialchars($_POST["UserName"]);
		$UserMdpComfirm=sha1($_POST["UserMdpComfirm"]);
		$UserMdp=sha1($_POST["UserMdp"]);
        if ($UserMdp>=8) {
          $error1="";
        if ($UserMdp==$UserMdpComfirm) {
              $error1="";
              if (!empty($_FILES["PhotoUser"])) {
                $error1=""; 
                if ($_FILES["PhotoUser"]["size"]<=2000000 AND $_FILES["PhotoUser"]["error"]==0 ) {
                $infosfichier = pathinfo($_FILES['PhotoUser']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('JPG', 'PNG', 'GIF');
                   if (in_array($extension_upload,$extensions_autorisees))
                   {
                   include 'db_connecte.php'; 
                   $bdd=db();
                   $req1=$bdd->prepare('SELECT * FROM candidats WHERE UserMail=?');
                   $req1->execute(array($UserMail)); 
                   $verif=$req1->rowCount();
                   echo "$verif";
                   if ($verif<1) {
                     $bdd=new PDO('mysql:host=localhost;dbname=myjob','root','');
                      $req=$bdd->prepare("INSERT INTO candidats(UserMail,UserName,UserMdpComfirm,UserMdp,PhotoUser) VALUES(?,?,?,?,?)");
                      $req->execute(array($UserMail,$UserName,$UserMdpComfirm,$UserMdp,$PhotoUser
                       )); 
                       $reqs=$bdd->prepare('SELECT * FROM candidats WHERE UserMail=?');
                       $reqs->execute(array($UserMail)); 
                       $result=$reqs->fetch();
                       $IdCandidat=$result["IdCandidat"];   
                       $_SESSION["IdCandidat"]= $IdCandidat;
                       echo "rrrrr ". $result["IdCandidat"];
                        header('Location:../index.php?page=personalPage&IdCandidat='.$_SESSION["IdCandidat"]);
        
                       echo "string".$UserMail;
                    }
               else{
                        $error1="Ce mail est deja utilisé";
                        header('Location:../index.php?page=createCompte&error='.$error1);
                    }

                   }
                   else{
                    $error="L'Extension n'est pas autorisé les extension son Png,JPG,GIF";
                    header('Location:index.php?page=createCompte&error='.$error1);
                  }
                }
                else{
                   $error="La taille du fichier est trop grande.La taille maximum est 2Mo";
                   header('Location:index.php?page=createCompte&error='.$error1);
                } 
             }
             else{

             }
          }
         else{
            $error1="Vueillez entrer un mot de passe identiques";
            echo $error1;
            header('Location:../index.php?page=createCompte&error='.$error1);
        }
        }
        else{
            $error1="Vueillez entrer un mot de passe d'au moins huits lettre";
            echo $error1;
            header('Location:../index.php?page=createCompte&error='.$error1);
        }
                   