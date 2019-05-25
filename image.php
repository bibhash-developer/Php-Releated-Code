<html>
<head>
  <title>image</title>
</head>
<body>
<form id="all" method="post" action ="image2.php" enctype="multipart/form-data">
  <input type="text" name="name" id="name"><br>
  <input type="file" name="image" id="image"><br>
  <input type="submit" value="submit" id="submit">
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $("#submit").click(function(){

    var image = $('#image').val();
    var name  = $('#name').val();
    
    alert(image);

    $.ajax({ 
        type : "post",
        url  : "image2.php",
        data : { image: image, name: name },
        success: function(data){
             alert(data);
          }
       });
  });
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</body>
</html>

