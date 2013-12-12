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


<html>
    <head>
        <title>Beware of little kittens</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        
        <div id='menu'>
            <ul>
            <li>  
                <a href="index.php">Home</a>
				</li>
                <li>  
                <a href="">Gallery</a>
                    <ul>
                        <li>
                            <a href="portraits.php">Portraits</a>
                        </li>
						<li>
                            <a href="nature.php">Nature</a>
                        </li>
						<li>
                            <a href="urban.php">Urban</a>
                        </li>
                        <li>
                            <a href="night.php">Night</a>
                        </li>
                        
                        <li>
                            <a href="closeup.php">Close-up</a>
                        </li>
						
						<li>
                 <a href="retouching.php">Retouching</a>
                 
                </li>
                    </ul>
                </li>
                
                <li>
                 <a href="abouts.php">About</a>
                 <ul>
                        <li>
                            <a href="abouts.php">About Silvia D.</a>
                        </li>
                        <li>
                            <a href="contacts.php">Contact Silvia D.</a>
                        </li>
			<li>   
                           <a href="blog.php">Blog</a>
                            </li>
                 </ul>
                </li>
                
             
                
                
            </ul>
        </div>    
           
            <div id='web'></div>
            <div id='other'></div>
            
            <div id='wrap3'>
            <div id='photo'>
               <img id='image1' src="gal1/p (1).jpg" alt="" />
              
  
            </div>
            <div class='button' id='next'></div>
            <div class='button' id='prev'></div>
            
            
              <script>
                //windows position or use javascript event to take you to the link in the bar (the id).
                //var photos = <?php echo $j_photos;?>;
                var photos = <?php echo read_dir("gal1");?>;
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
                    
                /*  document.getElementById('prev').onclick = function(){
                     
                     
                     
                    
                     
                        
                  if (i >1){
                        i--;    
                              
                    }
                    else {
                        i=photos.length;
                    }
                    console.log("prev "+i);
                        //alert('test prev');
                    document.getElementById('image1').src = photos[i-1]; 
                    }
                document.getElementById('next').onclick = function(){
                        
                    if (i < photos.length){
                        i++;
                               
                     }
                        
                    else{
                        i = 1;
                    }
                    console.log("next "+i);
                    document.getElementById('image1').src =photos[i-1]; 
                        //alert('test next');
                    }*/
                    
                </script>
            </div>
                

         
   
        
    </body>
<footer>
    <a href="http://www.facebook.com/SilviaD.photography" alt = "Like my Facebook Page"></a>
    <a href="http://twitter.com/silviaddot" alt = "Follow on Twitter"></a>
    <a href="http://instagram.com/silviaddot" alt = "Follow on Instagram"></a>
    <a href="http://pinterest.com/silvia_d/" alt = "Follow on Pinterest"></a>
    
</footer>

</html>