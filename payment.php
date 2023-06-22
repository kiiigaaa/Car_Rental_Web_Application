<?php  include('server.php'); ?>
<link rel="stylesheet" href="css/payment.css">
    <div class="mainscreen">
      <div class="card">
        <div class="leftside">
          <img
            src="img/logo.jpeg"
            class="vehicle"
            alt="type"
          />
        </div>
        <div class="rightside">
        <form method="post">
            <h1>CheckOut</h1>
            <h2>Payment Information</h2>
            <p>Cardholder Name</p>
            <input type="text" class="inputbox" name="name" required />
            <p>Card Number</p>
            <input type="text" class="inputbox" name="card_number" id="card_number" required />

            <p>Card Type</p>
            <select class="inputbox" name="card_type" id="card_type" required>
              <option value="">--Select a Card Type--</option>
              <option value="Visa">Visa</option>
              <option value="MasterCard">MasterCard</option>
            </select>
            <div class="expcvv">

            <p class="expcvv_text">Expiry</p>
            <input type="date" class="inputbox" name="exp_date" id="exp_date" required />

            <p class="expcvv_text2">CVV</p>
            <input type="password" class="inputbox" name="cvv" id="cvv" required />
        </div>
            <p></p>
            <button type="submit" class="button" name="payment">CheckOut</button>
          </form>
        </div>
      </div>
    </div>
    <button class="faq-btn"><a href="payment_list.php">list</a></button>
