<script>
window.addEventListener('load', function() {
      jQuery.ajax({
            type: "POST",
            url: "/synchronizer/classes/loginToken.php",
            dataType: "json",
            success: function(result){
                   if(result.status == "Success"){
                           $("#submit_btn").before('<input type="hidden" name="csrfToken" value="'+result.value+'">');

                    }
                  else{
                          console.log("no value")
                   }
          },
          error:function(){
                console.log("error")
          }
     })
})

</script>


<!DOCTYPE html>
<html>
	<head>
		<title>Transaction</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>
		<h1>Transaction</h1>
		<form action="./classes/Transfer.php" method="post">
			From Account: <input type="number" name="from"><br/> <br/>
			To Account: <input type="number" name="to"><br/> <br/>
			Amount: <input type="number" name="amount"><br/> <br/>
			<input type="submit" id="submit_btn" value="Transfer">
			</div>
		</form>
	</body>
</html>