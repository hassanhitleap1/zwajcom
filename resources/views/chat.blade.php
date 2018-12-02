<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.dev.js"></script>
</head>
<body>
    <script>
    var scoket =io.connect('http://localhost:3000');
    scoket.on("new_order",function (data) {
        console.log(data);
        
    })
    </script>
    <div id="clik">jojojoj</div>
    <script>
    $(document).ready(function () {
        $("#clik").click(function (e) { 
            e.preventDefault();
            
        $.ajax({
    
            url: "send",
            data: {message:"mmmm"},
            dataType: "json",
            success: function (response) {
                console.log('jjjjjjj');
                
            }
        })
            
        });

        
    });
    </script>
</body>
</html>