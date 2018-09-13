<section>
			<h2>Accueil</h2>
            <form action="index.php?action=accueil" method="post" name="sendMessage">
			<label for="message">Entrez votre message :</label>
            <input type="text" id="message" name="message">
            <input type="submit" value="envoyer" name="send">
            </form>
            <p><?php echo $notification ?></p> 
    
            <?php foreach($messag as $sms) { ?> 
          
            <?php echo $sms->sid ; ?>
            <?php echo $sms->from ; ?>
            <?php echo $sms->to ; ?>
            <?php echo $sms->dateSent->format('Y-m-d H:i:s') ; ?>
            <?php echo $sms->status ; ?>
            <?php echo $sms->direction ; ?>
            <?php echo $sms->price ; ?>
            <p><?php echo $sms->body ?></p>
        
          
            <?php } ?>
</section>
