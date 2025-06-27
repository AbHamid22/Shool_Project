<?php
if(isset($_POST["btnDetails"])){
	 // $order=Order::find($_POST["txtId"]);
   // $customer=Customer::find($order->customer_id);
}

$order=$arg["order"];
$customer=$arg["customer"];
$order_details= $arg["details"];

//print_r($o);

?>
<style>
 #cmbCustomer{
   padding:5px;
 }
</style>

<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Order Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Order Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> I-SHOP.
                    <small class="float-right">Date: <?=$order->order_date; ?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>ISHOP, Inc.</strong><br>
                    House:12, Road:1<br>
                    Block:E<br>
                    Mobile: 017834433<br>
                    Email: info@ishop.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  Customer
                  <address>
                    <?=$customer->name;?>
                   
                   <div id="customer-info"></div>

                  </address>
                  <div>
                    Shipping Address:
                    <p>
						<?= $order->shipping_address;	?>
					</p>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                 
                  <table>
                    <tr><td><b>Order ID:</b></td><td><input type="text" style="width:60px" value="<?php  echo $order->id;?>"  readonly/></td></tr>
                    <tr><td><b>Order Date:</b></td><td><input type="text" id="txtOrderDate" value=<?php echo $order->order_date;?> /></td></tr>
                    <tr><td><b>Due Date:</b></td><td><input type="text" id="txtDueDate" value=<?php echo $order->delivery_date;?> /></td></tr>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
				<table class="table table-striped">
                    <thead>
                    <tr>
                      <th>SN</th>
                      <th>Product</th>
                      <th>Price</th>
                      <th>Qty</th>                     
                      <th>Discount</th>
                      <th>Subtotal</th>
                      <th></th>
                    </tr>
                    
                    </thead>
                    <tbody>                    
                      <?php
                

                  //print_r($order_details);

                $i=1;
                $sub_total=0;
                foreach($order_details as $line){
                
                  $line_total=$line->price*$line->qty-$line->discount;
                  $sub_total+=$line_total;

                  echo "<tr><th>".$i++."</th>";
                   echo "<td>{$line->name}</td>";
                  echo "<td>{$line->price}</td>";
                   echo "<td>{$line->qty}</td>";                   
                  echo "<td>{$line->discount}</td>";					   
                  echo "<td>{$line_total}</td>";
                 echo "<td></td></tr>";
                }
					  ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <strong>Remark</strong><br>
                 <textarea id="txtRemark" readonly><?= $order->remark;?></textarea>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Amount Due 2/22/2014</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                     <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td id="subtotal"><?=$sub_total;?></td>
                      </tr>
                      
                     
                      <tr>
                        <th>Total:</th>
                        <td id="net-total"><?=$sub_total;?></td>
                      </tr>
                    </tbody></table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="javascript:void(0)" onclick="print()"  rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" id="btnProcessOrder" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Process Order </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->