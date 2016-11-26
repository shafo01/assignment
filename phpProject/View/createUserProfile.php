<?php
function populateCountryDropDown()
{
    $jsonStr = file_get_contents('res/countries.json');
    $countries = json_decode($jsonStr, true);
    //print_r($countries[0]['countryName']);
    foreach ($countries as $country) {
        echo "<option value=" . $country['countryShortCode'] . ">" . $country['countryName'] . "</option>";
    }


}

function populateCityDropDown($country){

}
?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link href="res/materialize/css/materialize.css" rel="stylesheet">
    <script src="res/materialize/js/materialize.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script>
        $('#country').change(function(){}
        );
        $.get(
            url: 'registerUser.php',
            parameter:
            function(data) {

            });
    </script>
</head>
<body>
<?php include 'header.php' ?>
<div>
    <div style="width: 50%;margin: 0 auto">
        <h2>Sign up below</h2>
        <form class="col s6" method="post" >
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="first_name" name="fname" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="last_name" name="lname" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                </div>
            </div>
			 <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="username" name="username" type="text" class="validate">
                    <label for="username">Username</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <select id="ethnicity"  name="ethnicity">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="ai">American Indian</option>
                        <option value="a">Asian</option>
                        <option value="aa">African American</option>
                        <option value="nh">Native Hawaiian</option>
                        <option value="w">White</option>
                        <option value="h">Hispanic</option>
                    </select>
                    <label for="ethnicity">Ethnicity</label>
                </div>
            </div>
            <div class="row">
                <label for="dob">Date of birth</label>
                <div class="input-field col s12">
                    <input id="dob" name="dob" type="date" class="datepicker">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">label</i>
                    <input id="password" name="password" type="password" class="validate">
                    <label for="password">Password (Your password must contain at least 8 characters, at least 1 number, capital letter or lowercase letter. </label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" name="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <select id="country" name="country">
                        <?php populateCountryDropDown() ?>
                    </select>
                    <label for="ABC">Country</label>
                </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('select').material_select();
    });
</script>
<?php include 'footer.php' ?>
</body>
</html>