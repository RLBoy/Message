<section >
			<h2>Accueil</h2>
            <form action="index.php?action=accueil" method="post" name="sendMessage">
			<label for="message">Entrez votre message :</label>
            <input type="text" id="message" name="message">
            <input type="submit" value="envoyer" name="send">
            </form>
            <p><?php echo $notification ?></p>
		</section>
