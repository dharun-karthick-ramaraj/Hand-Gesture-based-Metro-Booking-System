<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
    .dropdown {
    position: relative;
    display: inline-block;
    }

    .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
    }

    .dropdown:hover .dropdown-content {
    display: block;
    }
</style>
</head>
<body style="background-color:silver;">
<div class="bg-dark p-4">
    <div class="container">
    <div class="row">
        <div class="col-" style="margin-right:70px; margin-top:25px;">
        <h3 style="display:inline-block; color:white;">Select Language</h3>
        </div>
        <span></span>
        <div class="col-md">
        <button class="button button5" style="width:100%;">English</button>
        </div>
        <div class="col-md">
        <button class="button button5" style="width:100%;">தமிழ்</button>
        </div>
        <div class="col-md">
        <button class="button button5" style="width:100%;">हिन्दी</button>
        </div>
        <div class="col-md">
        <button class="button button5" style="width:100%;">తెలుగు</button>
        </div>
    </div>
    </div>

    
</div>


    <div style="display: inline-block; width:48%; text-align:center; vertical-align:top">
        <h3 style="margin-right:630px; padding-top:40px;">From</h3>
        <div class="dropdown">
        <button class="button button5" style="padding:10px margin-bottom:0; width:700px"><span style="color:black">Choose location</span></button>
                <div class="dropdown-content" style="padding:0; width: 700px">
                        <button class="button button5 from" role="button" style="width:100%; padding:10px; border:0; border-radius:0; margin:0;" name="Anna Nagar East">Anna Nagar East</button>
                        <button class="button button5 from" role="button" style="width:100%; padding:10px; border:0; border-radius:0; margin:0;" name="Chennai Central">Chennai Central</button>
                        <button class="button button5 from" role="button" style="width:100%; padding:10px; border:0; border-radius:0; margin:0;" name="Arumbakkam">Arumbakkam</button>
                        <button class="button button5 from" role="button" style="width:100%; padding:10px; border:0; border-radius:0; margin:0;" name="Ashok Nagar">Ashok Nagar</button>
                        <button class="button button5 from" role="button" style="width:100%; padding:10px; border:0; border-radius:0; margin:0;" name="Kilpauk">Kilpauk</button>
                        <button class="button button5 from" role="button" style="width:100%; padding:10px; border:0; border-radius:0; margin:0;"  name="Thousand Lights">Thousand Lights</button>
                </div>           
        </div>
        <h3 style="margin-right:550px; padding-top:40px;">Destination</h3>
        <div class="dropdown" style="text-align:center;">
        <button class="button button5" style="padding:10px margin-bottom:0; width:700px"><span style="color:black">Choose location</span></button>
                <div class="dropdown-content" style="padding:0; width:700px">
                        <button class="button button5 dest" role="button" style="width:100%; padding-top:10px; border:0; border-radius:0; margin:0;" name="Anna Nagar East">Anna Nagar East</button>
                        <button class="button button5 dest" role="button" style="width:100%; padding:10px; border:0; border-radius:0; margin:0;" name="Chennai Central">Chennai Central</button>
                        <button class="button button5 dest" role="button" style="width:100%; padding:10px; border:0; border-radius:0; margin:0;" name="Arumbakkam">Arumbakkam</button>
                        <button class="button button5 dest" role="button" style="width:100%; padding:10px; border:0; border-radius:0; margin:0;" name="Ashok Nagar">Ashok Nagar</button>
                        <button class="button button5 dest" role="button" style="width:100%; padding:10px; border:0; border-radius:0; margin:0;" name="Kilpauk">Kilpauk</button>
                        <button class="button button5 dest" role="button" style="width:100%; padding:10px; border:0; border-radius:0; margin:0;" name="Thousand Lights">Thousand Lights</button>
                </div>           
        </div>
        <h3 style="margin-right:550px; padding-top:40px;">Choose Trip</h3>
        <div>
        <button class="button button5 trip" style="margin:0; border-radius:0; width:350px;" name="One-Way Trip">One-Way Trip</button>
        <button class="button button5 trip" style="margin:0; border-radius:0; width:350px;" name="Round Trip">Round Trip</button>
        </div>


        <h3 style="margin-right:485px; padding-top:40px;">Payment Method</h3>
        <div>
            <table style="margin: 0px auto; margin-bottom:50px;">
                <tr>
                    <td><button class="button button5 payment" style="width:350px; margin:0; border-radius:0;" name="Cash">Cash</button></td>
                    <td><button class="button button5 payment" style="width:350px; margin:0; border-radius:0;"name="Card">Card</button></td>
                </tr>
                <tr>
                    <td><button class="button button5 payment" style="width:100%; margin:0; border-radius:0;" name="UPI">UPI</button></td>
                    <td><button class="button button5 payment" style="width:100%; margin:0; border-radius:0;" name="Metro Card">Metro Card</button></td>
                </tr>
            </table>
        </div>

    </div>





    <div style="display:inline-block; width:48%; text-align:center; height:100%;">
        <div style="padding-top:35px;">
            <table style="margin: 10px auto 0px; width:90%; height:300px; background-color:white; border-radius:10px;">
                <tr style="background-color:black;"><td style="color:white;" colspan="2"><h3>Trip Details</h3></td></tr>
                <tr style="text-align: left;">
                    <td colspan="2">
                        <h3 id="triptype" style="padding-left:20px; padding-top:10px; padding-bottom:10px;">One-Way Trip</h3>
                    </td>
                </tr>
                <tr style="text-align: left;">
                    <td style="width:50%"><h4 style="padding-left:20px; padding-top:10px; padding-bottom:10px;">From</h4></td>
                    <td><h4 style="padding-left:20px;">To</h4></td>
                </tr>
                <tr style="text-align: left;">
                    <td><h4 id="fromloc" style="padding-left:20px; padding-top:10px; padding-bottom:10px;">Arumbakkam</h4></td>
                    <td><h4 id="destloc" style="padding-left:20px;">Chennai Central</h4></td>
                </tr>
                <tr style="text-align: left;">
                    <td><h4 style="padding-left:20px; padding-top:10px; padding-bottom:10px;">Payment Method</h4></td>
                    <td><h4 id="paymeth" style="padding-left:20px;">UPI</h4></td>
                </tr>
                <tr style="text-align: left;">
                    <td><h4 style="padding-left:20px; padding-top:10px; padding-bottom:10px;">Total Fare </h4></td>
                    <td><h4 style="padding-left:20px;">Rs.120</h4></td>
                </tr>
            </table>
        </div>
        <div style="margin-top:42px;">
        <button class="button button5 confirm" style="width:90%; border-radius:0; height:342px;">Confirm</button>

        </div>
    </div>    
    <div style="text-align:center;">
    <h2>Thumbs up to click!!</h2>
    </div>
    <script src="js1.js"></script>
</body>
</html>


