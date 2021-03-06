<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Iconic Gym</title>
  </head>
  <body> -->
    <div class="container">
        <br><br>
        <h1 class="text-center">Your Pending Bookings</h1>
        <p>view pending Bookings table</p>
        <br><br>
        <?php if($result): ?>
            <table class="table table-hover text-center">
                <tr>
                    <th>ID</th>
                    <th>RESIDENT</th>
                    <th>DATE</th>
                    <th>TIME FROM</th>
                    <th>TIME TO</th>
                </tr>
                <?php foreach($result as $row): ?>
                    <tr>
                        <td><?php echo $row['booking_id']; ?></td>
                        <td><?php echo $row['resident_name']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['time_from']; ?></td>
                        <td><?php echo $row['time_to']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <hr>
            <br><br>
            <div class="row">
                <div class="col-sm-6">
                    <h3>Accept Bookings</h3>
                    <hr>
                    <form action="accept_booking" method="post">
                        <div class="form-group">
                            <label for="bid">Booking ID:</label>
                            <input type="text" class="form-control ml-sm-2" id="bidaccept" placeholder="Enter booking ID" name="bidaccept" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-sm-6">
                    <h3>Reject Bookings</h3>
                    <hr>
                    <form action="cancel_booking" method="post">
                        <div class="form-group">
                            <label for="bid">Booking ID:</label>
                            <input type="text" class="form-control ml-sm-2" id="bid" placeholder="Enter booking ID" name="bid" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        <?php else :?>
            <h5 class="text-center">You Currently Have No Pending Bookings</h5>
        <?php endif; ?>
    </div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>