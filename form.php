<style type="text/css">
	body{
		background: #218789;
	}
	form{
		border: 1px solid #D7B31E;
		text-align: center;
		margin-top: -5px;
	}
	
 p{
 	text-align: center;
 	background: #ffff;
 }
.sub{
	background: #11A00E;
	border: none;

}
.clear{
	background: #D13C11 ;
	border: none;
	margin-left: 20%;
}

</style>

<p>Regestration form</p>


<form action="display.php" method="POST"> <br>
name:<input type="text" name="fname" class="fname" placeholder="pls enter your name "  required=required><br> <br> 

District:<input type="text" name="dist" class="district" placeholder="pls eter your district" required=required><br> <br>

Email:<input type="email" name="email" class="email" placeholder="pls enter your email" required=required> <br> <br>

password:<input type="password" name="password" class="password" placeholder="pls enter pasword" required=required><br> <br>
Date Birth:<input type="date" name="date" class="date" required=required><br> <br>

phone:<input type="number" name="phone" class="phone" placeholder="pls enter your phone" required=required><br> <br>
<input type="submit" class="sub" value="send"  >
<input type="reset" class="clear" value="clear"> <br>
<p>       </p>






</form>