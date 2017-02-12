<hml>
<head>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css"/> 
<style type="text/css">
    #stocktb{
        margin-left: 20%;
        width: 75%;
    }
    .search{
        margin-top: 2%;
        margin-left: 20%;
    }

</style>
</head>
<body>
   <!---->
    <div class="search">
        <select id="myInput" onChange="myFunction()" class="form-control" placeholder="&#x26B2   Search by Category..." style="width: 320px; height: 50px"><option selected>Select Category ..</option><option>Gold</option><option>Diamonds</option><option>Watches</option></select>

    </div>
    <br>
    <table class="ui celled structured table" id="stocktb" border="1" cellpadding="5">
    <tr class="active">
        <th scope="col">Item ID</th> 
        <th scope="col">Category</th> 
        <th scope="col">Item Name</th>
        <th scope="col">Cost</th> 
        <th scope="col">Margin</th> 
        <th scope="col">Selling</th> 
        <th scope="col">Quantity</th> 
        <th colspan="2" scope="col"><center>Action</center></th> 
    </tr>
    <?php 
    foreach($stock_list as $u_key){?>
    <tr> 
        <td><?php echo $u_key->Item_ID; ?></td> 
        <td><?php echo $u_key->Category; ?></td>
        <td><?php echo $u_key->Item_Name; ?></td>
        <td><?php echo $u_key->Cost; ?></td>
        <td><?php echo $u_key->Margin; ?></td>
        <td><?php echo $u_key->Selling; ?></td>
        <td><?php echo $u_key->Quantity; ?></td>
        <td><a href="<?php echo base_url().'index.php/stock/delete_stock/'.$u_key->Item_ID;?>">Delete</a></td>
        <td><a href="<?php echo base_url().'index.php/stock/edit_stock/'.$u_key->Item_ID;?>">Update</a></td>
    </tr>
    <?php }?>
</table>     

    
</body>
    
    
<script>
            function myFunction() {
                var input, filter, table, tr, td, i;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("stocktb");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[1];
                    if (td) {
                        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        </script>
</hml>