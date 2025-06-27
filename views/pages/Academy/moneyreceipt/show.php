<style>
  /* .receipt-container {
      max-width: 700px;
      margin: auto;
      border: 1px solid #ccc;
      padding: 30px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      background-color:#fff;
    } */


  .receipt-container {
    max-width: 100%;
    width: 100%;
    height: 100%;
    border: none;
    box-shadow: none;
    padding: 40px;
    box-sizing: border-box;

  }

  .header {
    text-align: center;
    margin-bottom: 20px;
  }

  .header h2 {
    margin: 0;
  }

  .receipt-details {
    margin-bottom: 30px;
  }

  .receipt-details table {
    width: 100%;
    border-collapse: collapse;
  }

  .receipt-details td {
    padding: 5px;
  }

  .items-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
  }

  .items-table th,
  .items-table td {
    border: 1px solid #ccc;
    padding: 18px;
    text-align: left;
  }

  .total {
    text-align: right;
    font-size: 30px;
    margin-top: 19px;
  }

  .print {
    text-align: right;
    font-size: 30px;
    margin-top: 50px;
  }

  .footer {
    margin-top: 40px;
    display: flex;
    justify-content: space-between;
  }

  .signature {
    text-align: center;
    margin-top: 50px;
  }

  .signature-line {
    border-top: 1px solid #000;
    width: 200px;
    margin: auto;
    padding-top: 5px;
  }
</style>


<?php
$mr = $moneyreceipt;
// print_r($mr);
$student = AcademyStudent::find($mr->academy_student_id);
$details = MoneyReceiptDetail::Filter($mr->id);
// print_r($details);
?>
<div class="receipt-container">
  <div class="header">
    <h4 style="display: flex;align-items:center;justify-content:center;">
      <img src="<?= asset(); ?>/img/kaiadmin/download.png" alt="navbar brand"
        class="navbar-brand rounded-circle rounded-logo" height="65" />
      <i class="">International Green School.</i>
    </h4>
    <div>
      <p>123 Badda Road,City Dhaka,Bangladesh</p>
      <p> <span style="font-weight: bolder;">Phone:</span>123456789</p>

      <p> <span style="font-weight: bolder;">Email:</span> intgreenschool@gmail.com</p>
      <h1>Money Receipt</h1>
    </div>
  </div>

  <div class="receipt-details">
    <table>
      <tr>
        <td><strong>Receipt No:</strong> MR-<?= $mr->id ?></td>
        <td><strong>Date:</strong> <span id="date"><?= date("d-M-Y", strtotime($mr->created_at)) ?></span></td>
      </tr>
      <tr>
        <td><strong>Received From:</strong>
          <address style="font-weight: bolder; font-size:1.5rem;">
            <?= $student->name;
            ?>
          </address>
          <img src="<?= $base_url ?>/img/<?= $student->photo ?>" width="100" />
        </td>
        <td><strong>Payment Method:</strong> Cash</td>
      </tr>
    </table>
  </div>

  <table class="items-table">
    <thead>
      <tr>
        <th>Services</th>
        <th>No. of Service</th>
        <th>Amount</th>
        <th>Sub-Total</th>
        <th></th>
      </tr>

      <?php
      $total = 0;
      foreach ($details as $item) {
        // $p = Product::find($item->product_id);
        //print_r($p);
        echo "<tr>";
        echo "<td>$item->name</td>";
        echo "<td>$item->qty</td>";
        echo "<td>$item->price</td>";
        $lineTotal = $item->qty * $item->price;
        echo "<td>$lineTotal</td>";
        echo "<td></td>";
        echo "</tr>";

        $total += $lineTotal;
      }
      ?>


    </thead>
    <tbody id="tbody">
    </tbody>
  </table>
  <div class="total">
    <strong id="total">Total:<?= $total ?></strong>
  </div>
  <div class="footer">
    <div class="signature">
      <div class="signature-line">Student Signature</div>
    </div>
  </div>
 
  <div class="print">

  </div>

</div>
<button onclick="printReceipt()" style="margin: 70px; float: right; background-color:green;font-size:20px;">🖨️ Print</button>


<script>
  function printReceipt() {
    const printContent = document.querySelector(".receipt-container").innerHTML;
    const originalContent = document.body.innerHTML;

    document.body.innerHTML = printContent;
    window.print();
    document.body.innerHTML = originalContent;
  }
</script>