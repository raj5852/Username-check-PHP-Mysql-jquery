


<html>
<head>
    <link rel="stylesheet" href="lib/bootstrap.min.css">
    <script src="lib/jquery.min.js"></script>

</head>
<style>
    .color-green{
        border-bottom: 2.5px solid green;
    }
    .color-red{
         border-bottom: 2px solid red;
     }
</style>
<body>



<div class="container bg-light">
    <h1 class="text-center">Username Check</h1>
    <form method="post" >

        <div class="form-group">
            <label for="user">Username</label>
            <input type="text" class="form-control " placeholder="Username" id="user">

        </div>

    </form>
    <br>
    <br>
    <br>

</div>


<script>
    $(document).ready(function (){
        $("#user").keyup(function (){
            var data = $(this).val();

            $.ajax({
                url:'check.php',
                method:'post',
                data:{data:data},
                success:function (data){



                    if(data != 0){

                        $('#user').addClass('color-red');
                        $('#user').removeClass('color-green');
                    }else{
                        $('#user').addClass('color-green');
                        $('#user').removeClass('color-red');
                    }
                }
            })
        })

    })


</script>




</body>

</html>