<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Json Data</title>
</head>
<body>
    <p id="demo"></p>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $.ajax({
                url:"my.json", 
                type: "GET",
                success : function(data){
                    // $("#demo").append(data.id + "<br>" + data.title + "<br>" + data.body);
                    $.each(data, function(key, value){
                     $("#demo").append("Id : "+value.id + "<br>" + value.title + "<br>" + value.body + "<br>");
                    });
                }
            });
        });
    </script>
</body>
</html>