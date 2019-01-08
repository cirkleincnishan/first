<!DOCTYPE html>
<html lang="en">
<head>
  <title>Google Sheet</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Data</h2>
  <form action="https://docs.google.com/forms/d/e/1FAIpQLSe2YKVCOwDmNPWjsup3jZGx374g4lSVUeykCXe-0z3vU2pDTQ/formResponse" target="_self" method="post">
    <div class="form-group">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="entry.47019893">
      </div>
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="entry.699850484">
    </div>
    <div class="form-group">
      <label for="number">Number:</label>
      <input type="number" class="form-control" id="number" placeholder="Enter number" name="entry.1930605453">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
