<style type="text/css">
	table{
  background: #13B8B6;
border-top: 1px solid #0A2652;
border-left: 1px solid #0A2652;
margin-left: 25%;
border-collapse: collapse;


	}
	td{
		border-bottom: 1px solid #0A2652;
		border-right: 1px solid #0A2652;
		padding: 5px;
		padding-left: 20px;

	}
	td:hover{
		background: #EBEEAC;

	}
	.y{
		font-weight: bold;
		font-family: initial;
		color: #711330;
		font-size: 12;


	}







</style>




<?php
$item_ID=1233;
$item_name="computer";
$qty=12;
$price=120;
$total=$qty*$price;
$discount=10;
$cash=1200


?>
<table>
<tr><td class="y">item ID</td><td><?php echo "$item_ID"; ?></td></tr>


<tr><td class="y">item Name</td><td><?php echo "$item_name"; ?></td></tr>
<tr><td class="y">quantity</td><td><?php echo "$qty"; ?></td></tr>
<tr><td class="y">Price</td><td><?php echo "$price"; ?></td></tr>
<tr><td class="y">total</td><td><?php echo "$total"; ?></td></tr>
<tr><td class="y">discount</td><td><?php echo "$discount"; ?></td></tr>

<tr><td class="y">cash</td><td><?php echo "$cash"; ?></td></tr>
<tr><td class="y">blance</td><td><?php echo $total-$discount-$cash; ?></td></tr>






</table>
