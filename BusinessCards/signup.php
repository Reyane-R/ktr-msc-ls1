<?php 
    require "header.php";    
?>

    <main>
    <div >
        <div>
            <div>
                <h1>Signup</h1>
                    <?php
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == "emptyfields") {
                                echo '<p class="text-center danger">Fill in all fields!</p>';
                            }
                            else if ($_GET['error'] == "invalidemailuserusername") {
                                echo '<p class="text-center danger">Invalid name and email!</p>';
                            }
                            else if ($_GET['error'] == "invalidemail") {
                                echo '<p class="text-center danger">Invalid email!</p>';
                            }
                            else if ($_GET['error'] == "invaliduserusername") {
                                echo '<p class="text-center danger">Invalid name!</p>';
                            }
                            else if ($_GET['error'] == "invalidpassword") {
                                echo '<p class="text-center danger">Your passwords do no match!</p>';
                            }
                            else if ($_GET['error'] == "userusernametaken") {
                                echo '<p class="text-center danger">name is already taken!</p>';
                            }
                        }
                        else if (isset($_GET['signup']) == "success") {
                            echo '<p class="text-center success">Signup successful!</p>';
                        }
                    ?>
                    <form class="text-center" action="includes/signup.inc.php" method="post">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="name" require>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="E-mail" require>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" require>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password-repeat" placeholder="Repeat Password" require>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-dark" type="submit" name="signup-submit">Signup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

<?php
    require "footer.php";
?>