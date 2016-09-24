<aside class="hidden-xs hidden-sm col-md-3">

	<div>
        <h4>Mis Redes Sociales</h4>

		<a href="https://plus.google.com/u/0/+JonathanMoralesSalazar" target="_blank" title="Mi perfil en Google+">
			<img src="<?php echo base_url() . 'public/img/google-plus-c.png' ?>" alt="Mi perfil en Google+" class="img-thumbnail" width="50">
		</a>

		<a href="https://twitter.com/blonder413" target="_blank" title="Mi perfil en Twitter">
			<img src="<?php echo base_url() . 'public/img/twitter-c.png' ?>" alt="Mi perfil en Twitter" class="img-thumbnail" width="50">
		</a>

		<a href="https://www.facebook.com/blonder413" target="_blank" title="Mi perfil en Facebook">
			<img src="<?php echo base_url() . 'public/img/facebook-c.png' ?>" alt="Mi perfil en Facebook" class="img-thumbnail" width="50">
		</a>

		<a href="https://www.youtube.com/blonder413" target="_blank" title="Mi perfil en Youtube">
			<img src="<?php echo base_url() . 'public/img/youtube-c.png' ?>" alt="Mi perfil en Youtube" class="img-thumbnail" width="50">
		</a>

		<br>

		<a href="https://vimeo.com/blonder413" target="_blank" title="Mi perfil en Vimeo">
			<img src="<?php echo base_url() . 'public/img/vimeo-c.png' ?>" alt="Mi perfil en Vimeo" class="img-thumbnail" width="50">
		</a>

		<a href="https://github.com/blonder413/" target="_blank" title="Mi repositorio en Github">
			<img src="<?php echo base_url() . 'public/img/github-c.png' ?>" alt="Mi repositorio en Github" class="img-thumbnail" width="50">
		</a>

		<a href="https://www.linkedin.com/in/blonder413" target="_blank" title="Mi perfil en LinkedIn">
			<img src="<?php echo base_url() . 'public/img/linked-in-c.png' ?>" alt="Mi perfil en LinkedIn" class="img-thumbnail" width="50">
		</a>

		<a href="https://delicious.com/blonder413" target="_blank" title="Mi enlaces en Delicious">
			<img src="<?php echo base_url() . 'public/img/delicious-c.png' ?>" alt="Mi enlaces en Delicious" class="img-thumbnail" width="50">
		</a>
    </div>

	<div class="list-group">
	    <h4>Categorías</h4>
		<?php foreach( $categories as $key => $value ): ?>
		<a href="categoria/<?php echo $value->slug; ?>" title="<?php echo $value->category; ?>" class="list-group-item">
			<img src="<?php echo base_url() . 'public/img/categories/' . $value->slug . '.png' ?>" alt="<?php echo $value->category ?>" width="40"> <?php echo $value->category ?></a>
		<?php endforeach; ?>
	</div>

	<div class="list-group">
		<h4>Chat</h4>

    	<script id="sid0010000038030679890">(function() {
                    function async_load() {
                        s.id = "cid0010000038030679890";
                        s.src = 'http://st.chatango.com/js/gz/emb.js';
                        s.style.cssText = "width:100%;height:500px;";
                        s.async = true;
                        s.text = '{"handle":"Blonder413Hall","styles":{"a":"ffffff","b":60,"c":"4E4B58","d":"002255","f":50,"l":"AAAACC","m":"002255","n":"FFFFFF","q":"999999","r":100,"s":1,"w":0}}';
                        var ss = document.getElementsByTagName('script');
                        for (var i = 0, l = ss.length; i < l; i++) {
                            if (ss[i].id == 'sid0010000038030679890') {
                                ss[i].id += '_';
                                ss[i].parentNode.insertBefore(s, ss[i]);
                                break;
                            }
                  }
              }
              var s = document.createElement('script');
              if (s.async == undefined) {
                  if (window.addEventListener) {
                      addEventListener('load', async_load, false);
                  } else if (window.attachEvent) {
                      attachEvent('onload', async_load);
                  }
              } else {
                  async_load();
              }
    	})();</script>
  </div>

	<div class="list-group">
		<h4>Webs Amigas</h4>
		<div class="list-group">

			<a href="http://asieslinux.blogspot.com/" class="list-group-item" target="_blank">
				<img src="<?php echo base_url() . 'public/img/webs/asieslinux.png' ?>" alt="Así es Linux" width="35"> Así es Linux
			</a>

			<a href="http://www.cesarcancino.com/" class="list-group-item" target="_blank">
				<img src="<?php echo base_url() . 'public/img/webs/cesarcancino.png' ?>" alt="WebMaster César Cancino" width="35"> WebMaster César Cancino
			</a>

			<a href="http://www.oscar-gomez.net" class="list-group-item" target="_blank">
				<img src="<?php echo base_url() . 'public/img/webs/oscar-gomez.png' ?>" alt="Oscar Gómez" width="35"> Oscar Gómez
			</a>

			<a href="http://www.keyphercom.com/" class="list-group-item" target="_blank">
				<img src="<?php echo base_url() . 'public/img/webs/keyphercom.png' ?>" alt="Keyphercom" width="35"> Keyphercom
			</a>

			<a href="http://www.tecnodidactas.com/" class="list-group-item" target="_blank">
				<img src="<?php echo base_url() . 'public/img/webs/tecnodidactas.png' ?>" alt="Tecnodidactas" width="35"> Tecnodidactas
			</a>

			<a href="http://midasingenieria.com/" class="list-group-item" target="_blank">
				<img src="<?php echo base_url() . 'public/img/webs/midas-ingenieria.png' ?>" alt="Midas Ingeniería" width="35"> Midas Ingeniería
			</a>

			<a href="http://www.directorioladorada.com/" class="list-group-item" target="_blank">
				<img src="<?php echo base_url() . 'public/img/webs/directorio-ladorada.png' ?>" alt="Directorio La Dorada" width="35"> Directorio La Dorada
			</a>

			<a href="http://www.capa8.tv/" class="list-group-item" target="_blank">
				<img src="<?php echo base_url() . 'public/img/webs/capa8.png' ?>" alt="Capa8 tv" width="35"> Capa8 tv
			</a>
	    </div>
	</div>

	<div class="list-group">
	    <h4>Twitter @blonder413</h4>
	    <div class="list-group">
	        <a class="twitter-timeline"  href="https://twitter.com/blonder413" data-widget-id="245510889955008512">Tweets por el @blonder413.</a>
	        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	    </div>
	</div>

</aside>
