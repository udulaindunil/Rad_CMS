
        <br><br>
        <!-- <h1 class="text-center">Register</h1> -->
        <div class="row justify-content-center">
            <div class="jumbotron col-sm-4" id="registerform">
                <h2 class="text-center">Login</h2>
                <form action="login" method="post">
                    <!-- <input type="hidden" id ="uid" name="uid" value="A123"> -->
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
                        <!-- <div class="valid-feedback">Valid.</div> -->
                        <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                        <!-- <div class="valid-feedback">Valid.</div> -->
                        <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
                    </div>
                    <!-- <input type="hidden" id ="type" name="type" value="resident"> -->
                    <button type="submit" class="formbutton">Submit</button>
                </form>
            </div>
        </div>
        
    </div>
   

<?php include 'fotter.php' ?>