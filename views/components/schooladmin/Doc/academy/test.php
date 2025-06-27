<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Money Receipt</title>
    <style>
        .container { max-width: 400px; margin: auto; border: 2px solid #4CAF50; border-radius: 10px; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input, select { width: 100%; padding: 8px; box-sizing: border-box; }
        .btn { background-color: #4CAF50; color: #fff; border: none; padding: 10px 20px; cursor: pointer; width: 100%; }
        .btn:hover { background-color: #45a049; }
        .receipt { display: none; border-top: 2px solid #4CAF50; margin-top: 20px; padding-top: 15px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Money Receipt Form</h2>
        <div class="form-group">
            <label>Student Name:</label>
            <input type="text" id="studentName" required>
        </div>
        <div class="form-group">
            <label>Class:</label>
            <input type="text" id="class" required>
        </div>
        <div class="form-group">
            <label>Roll Number:</label>
            <input type="text" id="rollNumber" required>
        </div>
        <div class="form-group">
            <label>Payment Amount (BDT):</label>
            <input type="number" id="amount" required>
        </div>
        <div class="form-group">
            <label>Purpose of Payment:</label>
            <select id="purpose">
                <option>Tuition Fee</option>
                <option>Exam Fee</option>
                <option>Library Fee</option>
                <option>Others</option>
            </select>
        </div>
        <button class="btn" onclick="generateReceipt()">Generate Receipt</button>

        <div class="receipt" id="receipt">
            <h3>Receipt</h3>
            <p><strong>Receipt No:</strong> <span id="receiptNo"></span></p>
            <p><strong>Student Name:</strong> <span id="rStudentName"></span></p>
            <p><strong>Class:</strong> <span id="rClass"></span></p>
            <p><strong>Roll Number:</strong> <span id="rRollNumber"></span></p>
            <p><strong>Amount (BDT):</strong> <span id="rAmount"></span></p>
            <p><strong>Purpose:</strong> <span id="rPurpose"></span></p>
            <p><strong>Date:</strong> <span id="rDate"></span></p>
            <button class="btn" onclick="window.print()">Print Receipt</button>
        </div>
    </div>

    <script>
        function generateReceipt() {
            const receiptNo = 'R' + Math.floor(Math.random() * 1000000);
            const studentName = document.getElementById('studentName').value;
            const className = document.getElementById('class').value;
            const rollNumber = document.getElementById('rollNumber').value;
            const amount = document.getElementById('amount').value;
            const purpose = document.getElementById('purpose').value;
            const date = new Date().toLocaleDateString();

            if (!studentName || !className || !rollNumber || !amount) {
                alert("Please fill out all fields.");
                return;
            }

            document.getElementById('receiptNo').textContent = receiptNo;
            document.getElementById('rStudentName').textContent = studentName;
            document.getElementById('rClass').textContent = className;
            document.getElementById('rRollNumber').textContent = rollNumber;
            document.getElementById('rAmount').textContent = amount;
            document.getElementById('rPurpose').textContent = purpose;
            document.getElementById('rDate').textContent = date;

            document.getElementById('receipt').style.display = 'block';
        }
    </script>
</body>
</html>
