<?php
if (isset($_POST["btnDetails"])) {
  // $order = Order::find($_POST["txtId"]);
  // $customer = Customer::find($order->customer_id);
}

$order = $arg["order"];
$customer = $arg["customer"];
$order_details = $arg["details"];
?>

<style>
  .invoice {
    background: #fff;
    border: 1px solid #dee2e6;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  }

  .invoice h1,
  .invoice h4 {
    margin-bottom: 20px;
    color: #343a40;
  }

  .invoice address {
    font-weight: bold;
    font-size: 1.3rem;
    color: #495057;
  }

  .table-striped th,
  .table-striped td {
    vertical-align: middle;
    padding: 10px;
    border: 1px solid #dee2e6;
  }

  .table th {
    background-color: #e9ecef;
    color: #343a40;
    text-align: left;
  }

  .table td {
    color: #212529;
  }

  .table-responsive {
    margin-top: 20px;
  }

  .btn-success {
    background-color: #28a745;
    border: none;
    padding: 10px 20px;
    font-weight: bold;
    border-radius: 5px;
  }

  .btn-success:hover {
    background-color: #218838;
  }

  .invoice-info h1 {
    font-size: 1.5rem;
    color: #007bff;
  }

  input[type="text"] {
    border: none;
    background-color: transparent;
    font-weight: bold;
    font-size: 14px;
    color: #495057;
  }

  input[type="text"]:focus {
    outline: none;
  }

  @media print {
    body * {
      visibility: hidden;
    }

    #print-area,
    #print-area * {
      visibility: visible;
    }

    #print-area {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      padding: 20px;
    }

    .no-print {
      display: none !important;
    }

    .invoice {
      box-shadow: none;
      border: none;
    }
  }
</style>


<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>Payment Details</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right no-print">
        <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Order Details</li> -->
      </ol>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <!-- Invoice Start -->
        <div class="invoice p-3 mb-3" id="print-area">
          <!-- Title Row -->
          <div class="row">
            <div class="col-12">
            <h4>
            <i class="fas fa-user-graduate"></i> ABC School.<br>
            <small class="float-right">Date: <?= $order->order_date; ?></small>
              </h4>
            </div>
          </div>

          <!-- Info Row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              <h1>Student</h1>
              <address style="font-weight: bolder; font-size:2rem;">
                <?= $customer->name; ?>
              </address>
            </div>

            <div class="col-sm-4 invoice-col">
             
            <table>
                <!-- <tr>
                  <td><b>Order ID:</b></td>
                  <td><input type="text" style="width:60px" value="<?php echo $order->id; ?>" readonly /></td>
                </tr> -->
                <tr>
                  <td><b>Issue Date:</b></td>
                  <td><input type="text" id="txtOrderDate" value=<?php echo $order->order_date; ?> /></td>
                </tr>
                <tr>
                  <td><b>Due Date:</b></td>
                  <td><input type="text" id="txtDueDate" value=<?php echo $order->delivery_date; ?> /></td>
                </tr>
              </table>
            </div>
          </div>

          <!-- Table Row -->
          <div class="row">
            <div class="col-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>SN</th>
                    <th>Services</th>
                    <th>Amount</th>
                    <th>Total</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  $sub_total = 0;
                  foreach ($order_details as $line) {
                    $line_total = $line->price;
                    $sub_total += $line_total;

                    echo "<tr><th>" . $i++ . "</th>";
                    echo "<td>" . $line->name . "</td>";
                    echo "<td>" . $line->price . "</td>";
                    echo "<td>" . $line_total . "</td>";
                    echo "<td></td></tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>

          <!-- Total Row -->
          <div class="row">
            <div class="col-6">
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <th style="width:50%">Amount:</th>
                      <td id="subtotal"><?= $sub_total; ?></td>
                    </tr>
                    <tr>
                      <th>Total:</th>
                      <td id="net-total"><?= $sub_total; ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Print Button Row -->
          <div class="row no-print">
            <div class="col-6">
              <a href="javascript:void(0)" onclick="window.print()" class="btn btn-success"><i class="fas fa-print"></i> Print</a>
            </div>
          </div>
        </div>
        <!-- Invoice End -->

      </div>
    </div>
  </div>
</section>
