

<body>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css"/>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
        </div>
                <!-- /.col-lg-12 -->
</div>
<div>
<form action="<?php echo base_url('index.php/stock/update');?>" method="post">
<?php foreach($item as $row ){ ?>
<table  class="ui compact celled definition table">
<tr>   
<td><input type="text"  value="<?php echo $row->Item_ID ?>"  name="item_id" id="item-id" hidden="hidden"></td>

<tr>
<td>Category:</td>
<td><input type="text" value="<?php echo $row->Category ?>" class="form-control" name="item_name" id="item-name" class="item-name" disabled></td>
</tr>
<tr>
<td>Item name:</td>    
<td><input type="text" value="<?php echo $row->Item_Name ?>" class="form-control" name="item_name" id="item-name" class="item-name"></td>
</tr>
<tr>
<td>Cost: </td>
<td><input type="text" value="<?php echo $row->Cost ?>" class="form-control" name="item_price" id="item-price" class="item-price"></td>
</tr>
<tr>
<td>margin: </td>
<td><input  id="discount" name="discount" value="<?php echo $row->Margin ?>" class="form-control" type="text" onkeyup="CalcDiscount();" ></td>
</tr>
<tr>
<td>selling:</td>
<td> <input  class="form-control" id="total-price" value="<?php echo $row->Selling ?>" name="totalprice" type="text" ></td>
</tr>
<tr>
<td>Quantity:</td>
<td> <input  class="form-control" id="quantity" value="<?php echo $row->Quantity ?>" name="quantity" type="text" ></td>
</tr>
<tr>

<td colspan="2"> <center><input type="submit" name="update" value="Update"/></center></td>
</tr>
    
</table>
<?php } ?>
</form>
</div>
<!--selling:<input type="text" class="ticket-count" id="ticket-count" ><br />-->



    
    

        </div>
        <!-- /#page-wrapper -->
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
    

</body>
