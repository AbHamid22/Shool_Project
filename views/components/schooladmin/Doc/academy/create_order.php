<style>
  .invoice {
    background-color: #fff;
    border: 2px solid #4CAF50;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    padding: 30px;
    margin: 20px auto;
  }

  h4 {
    color: #4CAF50;
  }

  .table thead th {
    background-color: #4CAF50;
    color: #fff;
    text-align: center;
  }

  .table tbody tr:hover {
    background-color: #f1f1f1;
  }

  #cmbCustomer,
  #txtShippingAddress,
  #txtRemark,
  #txtOrderDate,
  #txtDueDate {
    width: 100%;
    padding: 8px;
    border: 1px solid rgb(76, 144, 175);
    border-radius: 5px;
  }

  input[type="button"],
  .btn-success,
  .btn-primary {
    background-color: #4CAF50;
    border: none;
    color: #fff;
    padding: 10px 20px;
    border-radius: 6px;
    cursor: pointer;
    transition: background 0.3s ease-in-out;
  }

  input[type="button"]:hover,
  .btn-success:hover,
  .btn-primary:hover {
    background-color: #45a049;
  }

  .btn-default {
    background-color: #2196F3;
    color: #fff;
  }
</style>

<style>
  #cmbCustomer {
    padding: 5px;
  }
</style>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
<!-- Content Header (Page header) -->

<!-- Main content -->
<div class="invoice p-3 mb-3">
  <!-- title row -->
  <div class="row">
    <div class="col-12">
      <h4>
        <i class="fas fa-user-graduate"></i> ABC School.
        <small class="float-right">Date: <?php echo date("d M Y") ?></small>
      </h4>
    </div>
    <!-- /.col -->
  </div>
  <!-- info row -->
  <div class="row invoice-info">
    <!-- <div class="col-sm-4 invoice-col">
      From
      <address>
        <strong>ISHOP, Inc.</strong><br>
        House:12, Road:1<br>
        Block:E<br>
        Mobile: 017834433<br>
        Email: info@ishop.com
      </address>
    </div> -->
    <!-- /.col -->
    <div class="col-sm-4 invoice-col">
      <h1>Student</h1>
      <address>
        <?php
        echo Customer::html_select("cmbCustomer");
        ?>
        <div id="customer-info"></div>
      </address>
      <!-- <div>
                Shipping Address:<br>
                <textarea id="txtShippingAddress"></textarea>
              </div> -->
    </div>
    <!-- /.col -->
    <div class="col-sm-4 invoice-col">

      <table>
        <!-- <tr>
          <td><b>Order ID:</b></td>
          <td><input type="text" style="width:60px" value="<?php echo Order::get_last_id() + 1; ?>" readonly /></td>
        </tr> -->
        <tr>
          <td><b>Issue Date:</b></td>
          <td><input type="text" id="txtOrderDate" value=<?php echo date("d-m-Y"); ?> /></td>
        </tr>
        <tr>
          <td><b>Due Date:</b></td>
          <td><input type="text" id="txtDueDate" value=<?php echo date("d-m-Y"); ?> /></td>
        </tr>
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
            <th>Services</th>
            <th>Amount</th>
            <!-- <th>Qty</th>
            <th>Discount</th> -->
            <th>Total</th>
            <th><input type="button" id="clearAll" value="Clear" /></th>
          </tr>
          <tr>
            <th></th>
            <th>
              <?php
              echo Product::html_select();
              ?>
            </th>
            <th><input type="text" id="txtPrice" /></th>
            <!-- <th><input type="text" id="txtQty" /></th>
            <th><input type="text" id="txtDiscount" /></th> -->
            <th></th>
            <th><input type="button" id="btnAddToCart" value=" Add " /></th>
          </tr>
        </thead>
        <tbody id="items">

        </tbody>
      </table>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <div class="row">
    <!-- accepted payments column -->
    <!-- <div class="col-6">
      <strong>Remark</strong><br>
      <textarea id="txtRemark"></textarea>
    </div> -->
    <!-- /.col -->
    <div class="col-6">
      <!-- <p class="lead">Amount Due 2/22/2014</p> -->

      <div class="table-responsive">
        <table class="table">
          <tbody>
            <tr>
              <th style="width:50%">Amount:</th>
              <td id="subtotal">0</td>
            </tr>


            <tr>
              <th>Total:</th>
              <td id="net-total">0</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <!-- this row will not appear when printing -->
  <div class="row no-print">
    <div class="col-12">
      <!-- <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> -->
      <button type="button" id="btnProcessOrder" class="btn btn-success float-right"><i class="far fa-credit-card"></i>Save Invoice </button>
      <!-- <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
        <i class="fas fa-download"></i> Generate PDF
      </button> -->
    </div>
  </div>
</div>
<!-- /.invoice -->


<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.14.1/jquery-ui.min.js" integrity="sha256-AlTido85uXPlSyyaZNsjJXeCs07eSv3r43kyCVc8ChI=" crossorigin="anonymous"></script>

<script>
  $(function() {


    let base_url = `http://localhost/My School Project/School_Management_Project/api`;

    const cart = new Cart("order");

    printCart();

    //Show calander in textbox
    $("#txtOrderDate").datepicker({
      dateFormat: 'dd-mm-yy'
    });
    $("#txtDueDate").datepicker({
      dateFormat: 'dd-mm-yy'
    });


    //Save into database table
    $("#btnProcessOrder").on("click", function() {

      if (confirm("Are you sure?")) {

        let customer_id = $("#cmbCustomer").val();
        let order_date = $("#txtOrderDate").val();
        let due_date = $("#txtDueDate").val();
        // let discount = 0;
        // let vat = 0;
        // let shipping_address = $("#txtShippingAddress").val();
        // let remark = $("#txtRemark").val();
        let order_total = $("#net-total").text();

        let products = cart.getCart();

        $.ajax({
          url: `${base_url}/order/save`,
          type: 'POST',
          data: {
            "customer_id": customer_id,
            "order_date": order_date,
            "delivery_date": due_date,
            // "shipping_address": shipping_address,
            // "discount": discount,
            // "vat": vat,
            // "remark": remark,
            "order_total": order_total,
            "products": products
          },
          success: function(res) {
            console.log(res);
            cart.clearCart();
            $("#items").html("");
          }
        });

      }

    });

    //Show customer other information
    $("#cmbCustomer").on("change", function() {
      $.ajax({
        url: `${base_url}/Customer/find`,
        type: 'GET',
        data: {
          "id": $(this).val()
        },
        success: function(res) {
          console.log(res)
          let data = JSON.parse(res);
          // console.log(data.customer);
          let customer = data.customer;

          $("#customer-info").html(customer.mobile + "<br>" + customer.address);
        }
      });


    }); //    

    //Show customer other information
    $("#cmbProduct").on("change", function() {

      $.ajax({
        url: `${base_url}/product/find`,
        type: 'GET',
        // contentType:"application/json",        
        data: {
          "id": $(this).val()
        },
        success: function(res) {
          console.log(res);
          let data = JSON.parse(res);
          let product = data.product;

          $("#txtPrice").val(product.offer_price);
          $("#txtQty").val(1);
        }
      });



    }); //  


    //Add item to bill temporarily       


    $("#btnAddToCart").on("click", function() {

      let item_id = $("#cmbProduct").val();
      let name = $("#cmbProduct option:selected").text();

      let price = $("#txtPrice").val();
      // let qty = $("#txtQty").val();
      // let discount = $("#txtDiscount").val();

      // let total_discount = discount * qty;
      let subtotal = price;

      let item = {
        "name": name,
        "item_id": item_id,
        "price": price,
        // "qty": parseFloat(qty),
        // "discount": discount,
        // 'total_discount': total_discount,
        "subtotal": subtotal
      };

      cart.save(item);

      printCart();

    });

    $("body").on("click", ".delete", function() {
      let id = $(this).data("id");
      cart.delItem(id)
      printCart();
    });

    $("#clearAll").on("click", function() {
      cart.clearCart();
      printCart();
    });


    //------------------Cart Functions----------//     


    function printCart() {

      let orders = cart.getCart();
      let sn = 1;
      let $bill = "";
      let subtotal = 0;
     

      if (orders != null) {

        orders.forEach(function(item, i) {
          //console.log(item.name);
          subtotal +=parseFloat(item.subtotal);
       

          let $html = "<tr>";
          $html += "<td>";
          $html += sn;
          $html += "</td>";
          $html += "<td>";
          $html += item.name;
          $html += "</td>";
          $html += "<td data-field='price'>";
          $html += item.price;
          $html += "</td>";
          // $html += "<td data-field='qty'>";
          // $html += item.qty;
          // $html += "</td>";
          // $html += "<td data-field='discount'>";
          // $html += item.total_discount;
          // $html += "</td>";
          $html += "<td data-field='subtotal'>";
          $html += item.subtotal;
          $html += "</td>";
          $html += "<td>";
          $html += "<input type='button' class='delete' data-id='" + item.item_id + "' value='-'/>";
          $html += "</td>";
          $html += "</tr>";
          $bill += $html;
          sn++;
        });
      }

      $("#items").html($bill);

      //Order Summary
      $("#subtotal").html(subtotal);

      $("#net-total").html(parseFloat(subtotal));
    }



  });
</script>