<?php
               function read_dir($dir){
                $count=0;
                $photos=array();
                //Open images directory
                $dir1 = opendir($dir);
                //read files in the dir
                while (($file = readdir($dir1)) !== false){
                    if ($file != "." && $file != ".."){
                        
                        $count=$count+1;
                        array_push($photos, $dir."/".$file );
                        //echo "<img src='gal1/$file' \">";
                    }
    
                }
                //echo" jason stuff: ".json_encode($photos). " the end";
                //print_r($photos);
                $j_photos= json_encode($photos);
                
                closedir($dir1);
                return $j_photos;
               }
?>
 <?php include('includes/header.php');?>
 <?php include('includes/navig.php');?>
	    <div id='web'></div>
            <div id='other'></div>
            
            <div id='wrap3'>
            <div id='photo'>
               <img id='image1' src="urba11/u (1).jpg" alt="" />
              
  
            </div>
            <div class='button' id='next'></div>
            <div class='button' id='prev'></div>
            
            
              <script>
                //windows position or use javascript event to take you to the link in the bar (the id).
                //var photos = <?php echo $j_photos;?>;
                var photos = <?php echo read_dir("urba11");?>;
                var i=0;
                var l = photos.length;
                
                console.log(photos);
                console.log(photos.length);
                 document.getElementById('next').onclick = function(){
                   i = (i+1)%l;  
                    
                    document.getElementById('image1').src = photos[i];
                    
                    
                 }
                  document.getElementById('prev').onclick = function(){
                    i = (i+l-1)%l;
		    document.getElementById('image1').src = photos[i];
                  }
		  
                </script>
	      <?php include('includes/social.php');?>
        </div>
        </body>
</html>