<html>
  
  <head>
    <title>meu primeiro site em php !woohoo!</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script>
	$(document).ready(function(){
	  alert("woohoo!"); 
	  });
	  
	  </script>
   <style type="text/css">
   .linha{
       font-weight:bold;
       color:green;
       Padding-Left:10px;
       Line-Height:50px;
   }
      </style>
   </head>

  <body>

    <?php
       for( $i = 0 ; $i < 10 ; $i++ ) {
	       print("<span class=\"linha\">Linha número".$i."</span><br/>");
	   }
	?>
<p>text</p>
  </body>	

	  </html>