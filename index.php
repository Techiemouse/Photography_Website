    <?php include('includes/header.php');?>
    <?php include('includes/header.php');?>
    <body>
    <div id ="allcontainer">
        <a href="/"><div id="name"></div></a>
        
        <div id="group">
            <a href="/urban" class="outer" id = "col1">
                <div class="colour">
                    <div class="categ">Urban</div>
                </div>
               
            </a>
            <a href="/nature" class="outer" id = "col2">
                <div class="colour">
                    <div class="categ">Nature</div>
                </div>
                
            </a>
            <a href="/portraits" class="outer" id = "col3">
                <div class="colour">
                    <div class="categ">Portraits</div>
                </div>
                
            </a>
            <a href="/closeup" class="outer" id = "col4">
                <div class="colour">
                    <div class="categ">Closeup</div>
                </div>
                
            </a>
            <a href="/night" class="outer" id = "col5">
                <div class="colour">
                    <div class="categ" >Night</div>
                </div>
               
            </a>
            <a href="/abouts" class="outer" id = "col6">
                <div class="colour">
                    <div class="categ">About</div>
                </div>
                
            </a>
        </div>
        <?php include('includes/social.php');?>
        
    </div>
    
    <script>
        //we want mouseenter and mouseleave rather than in and out, otherwise it refires when hovering over a child

        //fade in when we enter
        $('.outer').mouseenter(function() {
            //animate opacity (could use jquery fadein)
            //console.log("works1");
            $(this).children('.colour').stop(true,false).animate({
                opacity: 1}, 500);
        });
        
        //fade out when we leave
        $('.outer').mouseleave(function() {
              //console.log("works2");
            $(this).children('.colour').stop(true,true).animate({
                opacity: 0}, 500);    
        });


        
    </script>
    
    
    </body>



</html>