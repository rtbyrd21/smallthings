
<div id="myModal" class="reveal-modal" data-reveal>
  <div class="panel">
              <h5>WHAT'S YOUR STORY?</h5>
			  <p>We would love to hear your story and how you ended up here.</p>
           <p>Your name and email are completely optional, if you include them we won't share, sell or spam your address. Oh, and if you have a question or want more information about us please include a way we can get in touch.</p>
           
      <form action="includes/formsubmission.php" method="post">
            
                <input type="text" name="name" placeholder="name" value="<?php if(isset($name)) {echo htmlspecialchars($name);}?>" />
            
                <input type="text" name="email" placeholder="email" value="<?php if(isset($email)) {echo htmlspecialchars($email);}?>" />
           
                <textarea placeholder="story" name="story" value="<?php if(isset($story)) {echo htmlspecialchars($story);}?>"></textarea>
      <div style="display: none;">
        <input type="text" name="address" id="address" />
      </div>
            <input class="specialbtn" type="submit" value="submit" />
      </form>
  <a class="close-reveal-modal">&#215;</a>
</div>
			</div>	  