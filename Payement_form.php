
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payement form</title>
    <link rel="stylesheet" href="newstyle.css">
</head>
<body>
    <div class="container">
    <form action="" method="post" >
 <h1 class="main_heading">Payement Form </h1>
 <hr>
 <!-- <p>Required Field Are followerd by *</p> -->
 <h2>User Information</h2>
 <p>Name: *<input type="text" name="name" id="name" required placeholder="Ali"> </p>
 <fieldset>
    <legend>Gender</legend>
 <p>Male <input type="radio" name="gender" id="male"> Female <input type="radio" name="gender" id="female"></p>

</fieldset>
<p>Adress: <textarea name="address" id="adress" cols="100" rows="8" placeholder="Enter your address"></textarea></p>
<p>Email: *<input type="email" name="email" id="email" placeholder="Ali@gmail.com"></p>
<p>Pincode:* <input type="number" name="number" id="number" placeholder="0000"></p>
<br>
<h2>Payment Information</h2>    
<p>Card Type:*
    <select name="cardtype" id="cardtpe">
        <option value="">---Select the Card Type---</option>
        <option value="visa">Visa</option>
        <option value="Master Card">Master Card</option>
        <option value="Sada Pay">Sada Pay</option>
    </select>
</p>
<p>Card Number * <input type="number" name="cardNumber" id="cardNumber" placeholder="0000012267748"></p>
<p>Expiration Date *
    <input type="date" name="expdate" id="expdate" placeholder="02/08/2022">
</p>
<p>CVV * <input type="password" placeholder="010101"></p>
<input type="submit" Paynow>


</form>
</div>
</body>
</html>