<html>
<head>
<title>mootools</title>
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/MooTools-Core-1.6.0.js"></script>
<script type="text/javascript">

window.addEvent('domready', function(){
// do stuff when the document has loaded but images have not
	console.log('domready');
});

window.addEvent('load', function(){
// do stuff when the document has loaded along with images and other stuff
	// console.log('load');
	
	 $('select_me').addClass('selected');
});

window.addEvent('domready', function(){

  $$('li').each(function(li){
    li.addEvent('mouseenter', function(){  
      li.tween('padding-left', 20);
    }).addEvent('mouseleave', function(){
      li.tween('padding-left', 0);
    });
  });

});


</script>

</head>
<body>
<h1 id="select_me">Select me and add the `selected` class</h1>
<h1>Leave me alone</h1>
<ul>
    <li>Snake man</li>
    <li>Gemini man</li>
    <li>Shadow man</li>
    <li>Spark man</li>
</ul>


</body>
</html>