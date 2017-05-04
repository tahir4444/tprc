<?php
 /*   // connect to mongodb
   $m = new MongoClient();
	
   echo "Connection to database successfully";
   // select a database
   $db = $m->mydb;
	
   echo "Database mydb selected"; */
?>

<?php
  /*  // connect to mongodb
   $m = new MongoClient();
   echo "Connection to database successfully";
	
   // select a database
   $db = $m->mydb;
   echo "Database mydb selected";
   $collection = $db->createCollection("mycol");
   echo "Collection created succsessfully"; */
?>


<?php
  /*  // connect to mongodb
   $m = new MongoClient();
   // echo "Connection to database successfully";
	
   // select a database
   $db = $m->mydb;
   // echo "Database mydb selected";
   $collection = $db->mycol;
   // echo "Collection selected succsessfully";
	
   $document = array( 
      "title" => "MongoDB", 
      "description" => "database", 
      "likes" => 100,
      "url" => "http://www.tutorialspoint.com/mongodb/",
      "by", "tutorials point"
   );
	
   $collection->insert($document);
   echo "Document inserted successfully"; */
?>

<?php
   // connect to mongodb
   $m = new MongoClient();
   // echo "Connection to database successfully";
	
   // select a database
   $db = $m->mydb;
   // echo "Database mydb selected";
   $collection = $db->mycol;
   // echo "Collection selected succsessfully";

   $cursor = $collection->find();
   // iterate cursor to display title of documents
   
   var_dump($cursor);
	
  /*  foreach ($cursor as $document) {
      echo $document["title"] . "\n <br />";
   } */
?>