<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Typed.js - Type your heart out</title>
    <!-- Get jQuery -->
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/typed.js" type="text/javascript"></script>
    <script>
   /*  $(function(){

        $("#typed").typed({
            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            stringsElement: $('#typed-strings'),
            typeSpeed: 30,
            backDelay: 500,
            loop: false,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    });*/

    //function newTyped(){ /* A new typed object */ }

    /* function foo(){ console.log("Callback"); } */

    </script>
	<script>
		$(function(){
			$(".element").typed({
				strings: ["Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, similique, nesciunt, quo atque magnam aliquid porro aspernatur tenetur laudantium repudiandae nam maxime commodi eum doloribus illo quae perspiciatis dolor esse.", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, pariatur, ratione, aut aliquid dolor in incidunt minima adipisci voluptas dolorum saepe quae cum natus! Aspernatur, repellat nobis harum suscipit sapiente?."],
				typeSpeed: -9990000
			});
		});
	</script>
	<style>
		.typed-cursor{
    opacity: 1;
    -webkit-animation: blink 0.7s infinite;
    -moz-animation: blink 0.7s infinite;
    animation: blink 0.7s infinite;
}
@keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-webkit-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-moz-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
	</style>
</head>
<body>

<div class="element"></div>

</body>
</html>