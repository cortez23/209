<div class="container-fluid galeria">
  <section class="container galeria">
  	<div class="box-title">
  		<h2 class='title-text'>Galeria</h2>
  	</div>
  	<div class="galeria-img">
             <!-- Item container (doesn't need to be an UL) -->
            <ul id="panel-page">
            <!-- Items -->
                
                    <?php
                    $directory="img/clases";
                    $dirint = dir($directory);
                    while (($archivo = $dirint->read()) !== false)
                    {
                        
                        if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
                            echo '<li><a href="'.$directory."/".$archivo.'" target="galeria-alumnas" data-fancybox="images">
                            <figure class="galeria-img" data-target="#galeria-alumnas" rel="shadowbox" >
                            <img src="'.$directory."/".$archivo.'" class="thumb"  >
                            </figure></a></li>'."\n";
                        }
                    }
                    $dirint->close();            
                    ?>
                
            </ul>
            <!-- navigation panel -->
            <div class="holder">
            </div>   	    
    </div>
  </section>
</div>
