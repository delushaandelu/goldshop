<html>
<head></head>
<body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
Cost: <input type="text" id="item-price" class="item-price"><br />
<!--selling:<input type="text" class="ticket-count" id="ticket-count" ><br />-->

margin: <input class="discount" id="discount" name="discount" type="text" onkeyup="CalcDiscount();"> <br /><br />
selling: <input class="total-price" id="total-price" name="totalprice" type="text" >
    
    
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

</html>