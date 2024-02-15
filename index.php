<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student-ERP</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<h2>Student Information & Subject Selection</h2>
    <form action="./controller/insert_data_table.php" method="post">
    <div>
      <label for="name">Student Name:</label>
      <input type="text" id="name" name="name" required style="margin-top: 5px;">
    </div>
    <div>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required style="margin-top: 5px;">
    </div>
    <div>
      <label for="branch">Branch:</label>
      <input type="text" id="branch" name="branch" required style="margin-top: 5px;">
    </div>
    <div>
        <label for="stream" >Stream:</label>
        
        <select id="stream" name="stream" style="margin-top: 5px;">
            <option value="">Select Stream</option>
            <option value="Science">Science</option>
            <option value="Commerce">Commerce</option>
            <option value="Hindi">Hindi</option>
            <option value="Arts">Arts</option>
        </select>
    </div>
    <div>
      <label>Subjects:</label><br>
      
        <div class="subjects">
        <div>
            <input type="checkbox" id="101" name="subjects[]" value="101">
            <label for="maths">Maths</label><br>

            <input type="checkbox" id="102" name="subjects[]" value="102">
            <label for="science">Science</label><br>

            <input type="checkbox" id="103" name="subjects[]" value="103">
            <label for="english">English</label><br>

            <input type="checkbox" id="104" name="subjects[]" value="104">
            <label for="history">History</label><br>
        </div>

        <div>
            <input type="checkbox" id="105" name="subjects[]" value="105">
            <label for="accounting">Accounting</label><br>

            <input type="checkbox" id="106" name="subjects[]" value="106">
            <label for="business_studies">Business Studies</label><br>

            <input type="checkbox" id="107" name="subjects[]" value="107">
            <label for="economics">Economics</label><br>

            <input type="checkbox" id="108" name="subjects[]" value="108">
            <label for="stocks">Stocks</label><br>
        </div>
        </div>
      <!-- Add more subjects as needed -->
    </div>
    <button type="submit">Submit</button>
  </form>
</body>
</html>