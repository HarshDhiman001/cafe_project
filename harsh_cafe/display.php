<?php
include 'navbar.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<center>
  <h3>
    Bookings
  </h3>
</center>
<table class="table mt-">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sno.</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Subject</th>
      <th scope="col">Date</th>
      <th scope="col">Persons</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include 'connection.php';
    $sql="SELECT * FROM `table_booking`";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
        foreach($result as $row)
        {
    ?>
    <tr>
      <th scope="row"><?php echo $row['sno']; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td><?php echo $row['subject']; ?></td>
      <td><?php echo $row['date']; ?></td>
      <td><?php echo $row['persons']; ?></td>
      <td><?php echo $row['message']; ?></td>
    </tr>
    <?php }}
    else
    {
        echo "record not found";
    } ?>
  </tbody>
</table>
<center>
  <h3>
    Contacts
  </h3>
</center>
<table class="table mt-">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sno.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include 'connection.php';
    $sql="SELECT * FROM `contact`";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
        foreach($result as $row)
        {
    ?>
    <tr>
      <th scope="row"><?php echo $row['sno']; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['subject']; ?></td>
      <td><?php echo $row['message']; ?></td>
    </tr>
    <?php }}
    else
    {
        echo "record not found";
    } ?>
  </tbody>
</table>
<?php
include 'footer.php';
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>