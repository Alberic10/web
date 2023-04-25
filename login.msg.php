
<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="login.msg.css">
    
    </head>
    
    <body>
        
       
        <h2>Renseignez le formulaire</h2><br/>
        
        <div class="FORM">

            <div class="form-text">

                <form action="rapport.ext.php" method="post" enctype="multipart/form-data">

                    <div class="rec">
                        <label for="start">Date</label>
                        <input type="date" id="start" name="trip-start" value="2023-02-24" min="2023-04-10" max="2023-12-31">
                    </div>
                            
                    <div class="reu">
                        <label>Nom complet</label>
                        <input type="text" name="comterrain" placeholder="Renseignez votre nom complet" required autocomplete="off" >    
                    </div>
                            
                    <div class="reb">
                        <label>Nom de l'établissement visité</label>
                        <input type="text" name="etablissvisite" placeholder="Renseignez le nom de l'établissement" required autocomplete="off" >    
                    </div>
                            

                    <div class="rev">
                        <label>Nom de la personne rencontrée</label>
                        <input type="text" name="persrenc" placeholder="Renseignez le nom de la personne" required autocomplete="off" >    
                    </div>
                            
                    <div class="rew">
                        <label>Titre professionnel</label>
                        <input type="text" name="titre" placeholder="Renseignez son titre professionnel" required autocomplete="off" >    
                    </div>
                                
                    <div class="rex">
                        <label>Contact téléphonique</label>
                        <input type="text" name="contact" placeholder="Renseignez son contact téléphonique" required autocomplete="off" >    
                    </div>
                            
                    <select name ="convention" class="conv">
                        <option value=""><strong>Convention signée ?</strong></option>
                        <option value="OUI">OUI</option>
                        <option value="NON">NON</option>
                    </select>   

                    <div class="rex">
                        <label>Télécharger le fichier</label>
                        <input type="file" name="fichier" class="fichia">    
                    </div>

                    <div class="req">
                        <textarea name="observation" id="observ" cols="54" rows="10">Donnez vos observations</textarea>
                    </div>

                    <button type="submit" name="signup-submited" class="btn">ENVOYEZ</button>
                            
                </form>

            </div>

        </div>
        

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    </body>

</html>



