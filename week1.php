<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <!-- 
        1.Indexed Array
-->
<h1 style="color:  red; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 20px; text-align: center; margin-top: 30px; " > Indexer</h1>
<ol class="list-group list-group-numbered">
    

   <?php
   $computer=[
    "Apple",
    "Asus",
    "Dell",
    "Acer",
    "Samsung",
   ];
   for($i=0; $i<count($computer); $i++){   
    echo "<li class='list-group-item text-bg-light text-danger fs-5 font-monospace w-50 m-auto align-items-center  '>$computer[$i]</li>";
   }
   
   ?>
   </ol>
   <!-- 
    2.Associative array
-->
<h1 style="margin-top: 20px; font-size: 20px; text-align:center; color:blue; " > Associative Array</h1>
<ol class="list-group list-group-numbered">
<?php
$user = [
    "Email"=>"sarunkhmer01@gmail.com",
    "Phone"=> "081796275",
    "address"=>"Phnom Penh",
    "Gender"=> "Male",
    "Age"=> "20",
];


echo"<br>";
foreach($user as $key => $value){
    
    echo"<li class='list-group-item text-primary text-bg-light fs-5 font-monospace w-50 align-items-center  m-auto  '>$key : $value</li>";
}

?>
</ol>
<!-- 
    Multidimensional Array
-->
<h1 style="margin-top: 20px; font-size: 20px; text-align:center; color: black; ">Multidimensional Array</h1>
<ol class="list-group list-group-numbered">
<?php
  $product = [
    "Nam"=> "Banana",
    "Price"=> "10$",
    "Quanlity"=> "99.99%",
    "description"=> "Banana good for hearth",
    "color"=> ["red","green","yellow","blue"],
  ] ;
  foreach($product as $key => $value){
    if(is_array($value)){
        foreach($value as $key2 => $value){
            echo"<li class='list-group-item text-info text-bg-light fs-5 font-monospace w-50 align-items-center  m-auto   '>$key : $value</li>";

        }
        break;
  }
  echo"<li class='list-group-item text-info text-bg-light fs-5 font-monospace w-50 align-items-center  m-auto  '>$key : $value</li>";

}
?>

</ol>



</body>
</html>