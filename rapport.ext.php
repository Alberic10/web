<?php

            require 'dbh.ext.php';

            $date= $_POST["trip-start"];
            $nomcommercial= $_POST["comterrain"];
            $nometabliss= $_POST["etablissvisite"];
            $nompersrencontre= $_POST["persrenc"];
            $titreprofessionnel= $_POST["titre"];
            $tel= $_POST["contact"];
            $convention= $_POST["convention"];
            $observation= $_POST["observation"];
                
            if(isset($_FILES['fichier']) && isset($_POST["signup-submited"])){
                $fichier = htmlentities($_FILES['fichier']['name']);
                $sql = "INSERT INTO commercial(date, nom_du_commercial, nom_etablissement_visite, nom_personne_rencontree, titre_professionnel, numero_telephone, convention_signee, nomfich, observation) VALUES ('".$date."','".$nomcommercial."','".$nometabliss."','".$nompersrencontre."','".$titreprofessionnel."','".$tel."','".$convention."','".$fichier."','".$observation."');";
                $res = mysqli_query($conn,$sql);
                
                if($res == true){
                    move_uploaded_file($_FILES['fichier']['tmp_name'], 'telechargements/'.$fichier);
                    header("Location: validation.php?validation=succes");
                    exit();
                }else{
                    
                    header("Location: validation.php?erreur=sqlerreur");
                    exit();
                }
            }
?>