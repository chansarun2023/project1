<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Navbar</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

<div class="container-fluid">
     
     <nav class="navbar navbar-expand-lg bg-primary fixed-top">
         <div class="container-lg">
           <a class="navbar-brand" href="#"><strong>RUN</strong></a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" ">
             <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse flex-row justify-content-end" id="nav" >
             <ul class="nav nav-pills pt-2 ">
                 <li class="nav-item"><a href="#" class="nav-link btn bg-danger text-white">Home</a> </li>
                 <li class="nav-item"><a href="#scrollspyHeading1" class="nav-link text-white ">About</a> </li>
                 <li class="nav-item"><a href="#scrollspyHeading2" class="nav-link text-white" id="list-1">Product</a> </li>
                 <li class="nav-item"><a href="#scrollspyHeading3" class="nav-link text-white" id="list-2">Service</a> </li>
                 <li class="nav-item"><a href="#scrollspyHeading4" class="nav-link text-white">Contact</a> </li>
                 <form class="d-flex  justify-content-end" role="search">
                   <input class="form-control me-2 search"  type="search" placeholder="Search" aria-label="Search">
              
                 </form>
             </ul>
       
     </div>
         </div>
       </nav>
     
     </div>
    
     <div class="container ">
  
  <div class="row m-5 ">


  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<script >
   
  $(document).ready(function(){
    $.ajax({
      type:"GET",
      dataType: "json",
      data:{

      },
      url:"https://fakestoreapi.com/products",
      success:function(data){
        $.each(data,function(key,value){
          console.log(value);
          $(".row").append("<div class='card' style='width: 18rem;'><img src="+value.image+" 'class='card-img-top' alt='...'><div class='card-body'><h5 class="+value.title+">Card title</h5><p class='card-text'>"+value.description+"</p><a href='#' class='btn btn-primary'>Go somewhere</a></div></div>");

        });
        console.log(data);
      }
    });
  });
</script>
    
</body>
</html>