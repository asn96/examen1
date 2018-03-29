<!-- <?php
echo Bonjour;


?> -->

<! DOCTYPE html>
<html>
    <head>
        <title> Adresse client </title>
        <META charset = "utf-8">
    </head>
    <style type="text/css">
    body{
    	/*background-color: #edcdff;*/
    }
    	input[type=text]{
    		padding-right: 20%;
    		padding: 7px;

    	}
    	fieldset{
    		/*background-color: #fffdd9;*/
    		border-radius: 20px;
    		width: 20%;
    		height: 50%;

    	}
    	label{
        
         text-align: left;
         
    	}
    	
    	input{
    		border-radius: 5px 5px 5px 5px;
    		padding: 10px;
    	}
    	


    </style>
    <body>
    	<center>
	        <h1> Veuillez renseigner les informations suivantes </h1>
	        <form method = "POST" action = "traitement.php" >
	            <fieldset>
	                <legend>Vos informations</legend>
	                <table >
	                	<p>
	                		<tr>
	                			<th>
	                				<label >Prenom </label>
	                			</th>
	                			<th>
	                				<input type="text" id="prenom" name="prenom" required="*" >
	                			</th>
	                		</tr>
	                	</p>
	                	<p >
	                		<tr>
	                			<th>
	                				<label >Nom</label>
	                			</th>
	                			<th>
	                				<input type="text" id="nom" name="nom" required="*" >
	                			</th>
	                		</tr>
	                	</p>
	                	<p>
	                		<tr>
	                			<th>
	                				<label>Ville</label>
	                			</th>
	                			<th>
	                				<input type="text" id="ville" name="adresse" required="*" ">
	                			</th>
	                		</tr>
	                	</p>
	                	<p">
	                		<tr>
	                			<th>
	                				<label>Adresse</label>
	                			</th>
	                			<th>
	                				<input type="text" id="adresse" name="ville" required="*" >
	                			</th>
	                		</tr>
	                	</p>
	                	<p>
	                		<tr>
	                			<th>
	                				<label>Code postal</label>
	                			</th>
	                			<th>
	                				<input type="text" id="codepostal" name="codepostal" required="*" >
	                			</th>
	                		</tr>
	                	</p>
	                </table>
	                 
	            </fieldset>
	          <p><input type = "submit" value = "Enregistrer" id = "save" name="save" /></p>
	        </form>
        </center>
    </body>
</html>

