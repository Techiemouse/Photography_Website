<html>
<title>make me do things</title>
<head></head>
<style>
.button {  
    float:left;
    margin-left:5px;
    width: 110px;
    text-align: center;
    line-height: 110px;
    height:110px;     
    border-radius:3px;
    color:#EEE0E5;
    cursor: pointer;
}
#first_button{
   background-color: #6E6E6E; 
   
}

#first_button:hover{
   background-color:#7CCD7C;
   color:#6E6E6E;
}
#text{
     height: 60px;
     position: relative;
     top:50%;
     margin-top:-20px;
     line-height: 20px;
}
#second_button{
    background-color:#8c8c8c;   
    color:#EEE0E5; 
    
}

#second_button:hover{
   background-color: #90EE90;
   color:#8c8c8c;
}
#other_button{
     
    background-color:#8c8c8c;    
    color:#EEE0E5;        
}

#other_button:hover{
   background-color: #90EE90;
   color:#8c8c8c;
}

#move {
    margin-top:30px;
    width: 40px;
    height: 40px;
    background-color:#aa2266;
    
}

#walking{
    height: 90px;
    width: 50px;
    background-position: 0px;
    background-image: url("moving.png");
    
}
#walking:hover{
   background-position: -60px; 
}
</style>

<body>

    <div class = "button" id="first_button"><div id ='text'>Don't press the button!</div></div>
    <div class = "button" id="second_button">Box move!</div>
    <div class = "button" id="other_button">Make me move!</div>
    <div style="clear: both;"></div>
    <div id = "move" ></div>
    <div id="walking"></div>
<script>
    var myE = document.getElementById('first_button');
    var myMove = document.getElementById('move');
    var walk=document.getElementById('walking');
    var i = 0;
    var j=0;
    var time;

    
    function makeItWalk(){
        j=j-60;
        walk.style.backgroundPosition= j;
          if (i<300) {
            time = setTimeout(makeItWalk,500);
        }
       
    }
     document.getElementById('other_button').onclick = function(){
        
        makeItWalk();
        
    }
    
    
    function myMoveFunction(){
        i=i+5;    
        myMove.style.marginLeft=i;
           
            //window.clearTimeout(time);
            //console.log("word");
        
      
        if (i<75) {
             time = setTimeout(myMoveFunction,500);
        }
    }
      
    document.getElementById('second_button').onclick = function(){
        
        myMoveFunction();
        
    }
    function $(my){
    
        return document.getElementById(my);
     
    }
    function theFunction()
    {
        //myE.style.backgroundColor = '#ee5599';
        // myE.style.backgroundColor = 'rgb(220,40,100)';
          myE.style.backgroundColor = 'hsl(310,80%,50%)';
          alert("sooo naughty");
    
     }
    myE.onclick=function(){
        theFunction()}
        ;
    
</script>
</body>


</html>