

<body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
        </div>
                <!-- /.col-lg-12 -->
</div>
<div>
<form action="<?php echo base_url('index.php/stock/add_new_item');?>" method="post">
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
<table>
<tr>
<td>Category:</td>
<td><select class="form-control" name="Category">
    <option value="0"> Select Category Name</option>
    <option value="Gold">Gold</option>
    <option value="Diamonds">Diamonds</option>
    <option value="Watches">Watches</option>
    </select>
</td>
</tr>
<tr>
<td>Item name:</td>    
<td><input type="text" class="form-control" name="item_name" id="item-name" class="item-name"></td>
</tr>
<tr>
<td>Cost: </td>
<td><input type="text" class="form-control" name="item_price" id="item-price" class="item-price"></td>
</tr>
<tr>
<td>margin: </td>
<td><input  id="discount" name="discount" class="form-control" type="text" onkeyup="CalcDiscount();"></td>
</tr>
<tr>
<td>selling:</td>
<td> <input  class="form-control" id="total-price" name="totalprice" type="text" ></td>
</tr>
<tr>
<td>Quantity:</td>
<td> <input  class="form-control" id="quantity" name="quantity" type="text" ></td>
</tr>
<tr>

<td> <input type="submit" name="submit" value="Submit"/></td>
</tr>
    
</table>
</form>
</div>
<!--selling:<input type="text" class="ticket-count" id="ticket-count" ><br />-->



    
    
<script type="text/javascript">    
function CalcDiscount()
{
   /* var qty = parseInt(document.getElementById("ticket-count").value);*/
    var value = parseInt(document.getElementById("item-price").value);
    var discount = parseInt(document.getElementById("discount").value);
  /*  var total =  value * qty;*/
    var gtotal =  value + (value*discount/100);
    //document.getElementById("total-price").value = gtotal;    
    $("#total-price").val(gtotal);
}
    </script>
        </div>
        <!-- /#page-wrapper -->

    

</body>
