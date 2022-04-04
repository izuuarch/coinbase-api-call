<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Rangeslider bitcoin</title>
    <style type="text/css">
        input[type=range] {
  -webkit-appearance: none;
  margin: 20px 0;
  width: 100%;
}
input[type=range]:focus {
  outline: none;
}
input[type=range]::-webkit-slider-runnable-track {
  width: 100%;
  height: 4px;
  cursor: pointer;
  animate: 0.2s;
  background: #03a9f4;
  border-radius: 25px;
}
input[type=range]::-webkit-slider-thumb {
  height: 20px;
  width: 20px;
  border-radius: 50%;
  background: #fff;
  box-shadow: 0 0 4px 0 rgba(0,0,0, 1);
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -8px;
}
input[type=range]:focus::-webkit-slider-runnable-track {
  background: #03a9f4;
}
.range-wrap{
  width: 500px;
  position: relative;
}
.range-value{
  position: absolute;
  top: -50%;
}
.range-value span{
  width: 30px;
  height: 24px;
  line-height: 24px;
  text-align: center;
  background: #03a9f4;
  color: #fff;
  font-size: 12px;
  display: block;
  position: absolute;
  left: 50%;
  transform: translate(-50%, 0);
  border-radius: 6px;
}
.range-value span:before{
  content: "";
  position: absolute;
  width: 0;
  height: 0;
/*  border-top: 10px solid #03a9f4;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;*/
  top: 100%;
  left: 50%;
  margin-left: -5px;
  margin-top: -1px;
}
    </style>
  </head>
  <body>
                            <div class="card border-primary rounded-0 col-md-5">
                            <div class="card-header p-0">
                                <div class="text-white text-center py-2" style="background: #2F4F4F;">
                                    <h3>BITCOIN</h3>
                                    <div class="d-flex justify-content-between">
                                      <h2>
                                      <div class="pull-right"><output for="range" class="output pull-right" id="demo"></output><span>USD</span></div>
                                    </h2>
                                     <span id="btc"><h3></h3>BTC</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                               <!--  <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="fname" placeholder="fullname" required>
                                    </div>
                                </div> -->
                                    <div class="form-group">
                                    <div class="input-group mb-2">
                                                                 <div class="range-wrap">
    <!-- <div class="range-value" id="rangeV"></div> -->
    <!-- <output name="" id="rangeV" class="range-value" name=""></output> -->
    <input id="range" type="range" min="50" max="50000" value="50" step="50">
  </div>

                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Check out" class="btn-lg btn-block rounded-2 py-2" name="btn-send" style="background: #DAA520;" id="paybit-btn">
                                </div>
                            </div>

                        </div>
      
      
      <script type="text/javascript">
//          var xhr = new XMLHttpRequest();
//xhr.withCredentials = true;
//
//xhr.addEventListener("readystatechange", function() {
//  if(this.readyState === 4) {
//    console.log(this.responseText);
//  }
//});
//
//xhr.open("GET", "https://api.currencyfreaks.com/latest/convert
//    ?apikey=YOUR_APIKEY
//    &from=USD&to=BTC
//    &amount=10000");
//
//xhr.send();
      
      </script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/cryptoslider.js"></script>

<script>

  //   // Small script for Slider Only
  //   var slider = document.getElementById("range");

  //   var output = document.getElementById("demo");

  //   // Binds Slider value to text value
  //   output.innerHTML = slider.value;

  //   slider.oninput = function () {
  //     // And Viceversa
  //     output.innerHTML = this.value;
  //   }
  //   // Slider script end


  //   // Gets and Convert USD to BTC
  //   $('input#range').click(function () {

  //     var btcamount = $('#btc').val();
  //     // var ethamount = $('#eth').val();
  //     $.ajax({
  //       // 
  //       url: 'https://api.coinbase.com/v2/exchange-rates?currency=USD',
  //       method: 'GET',

  //       // If the GET Request is successful
  //       success: function (result) {

  //         // Logs General Result
  //         console.log(result)

  //         // Logs the value of one bitcoin
  //         console.log(result.data.rates.BTC, result.data.rates.ETH)

  //         // Divides the slider value by the value of 1 BTC to get number of bitcoin 
  //         var btcamount = slider.value * result.data.rates.BTC
  //         // var ethamount = slider.value * result.data.rates.ETH

  //         //Binds Var Amount to #btc *id* to 6 decimal places
  //         $('#btc').text(btcamount.toFixed(6))
  //         // $('#eth').text(ethamount.toFixed(6))
  //       },

  //       // If GET request is unsuccessful
  //       error: function (error) {

  //         // Incase an error occurs
  //         console.log(error.responseText);
  //       }
  //     });
  //   });
  // </script>
 <script type="text/javascript">
  //   $('#paybit-btn').click(function () {

  //     var amount = $('#amount').val();
  //     $.ajax({
  //       url: 'https://api.commerce.coinbase.com/charges',
  //       method: 'POST',
  //       dataType: 'json',
  //       headers: {

  //         // API Key ** Very Important
  //         // get ur own api key from coinbase
  //         "X-CC-Api-Key": "fea87e7f-e1d5-42da-bc1a-dfad4d58cb11",

  //         // API Version Date **
  //         "X-CC-Version": "2018-03-22"
  //       },
  //       // The following data must be sent to the API.
  //       data: {
  //         // Name of Trasaction
  //         "name": " INVESTMENT",

  //         // Description of Transaction from php database
  //         "description": " ",

  //         // Local Price and Amount and Currecny
  //         "local_price": {

  //           //Amount
  //           "amount": "100.00",

  //           // Currency
  //           "currency": "USD"
  //         },
  //         // Don't TOuch
  //         "pricing_type": "fixed_price",

  //         // Customer Details
  //         "metadata": {
  //           // Customer ID from your php database
  //           "customer_id": "",

  //           // Customer Name from php database
  //           "customer_name": ""
  //         },
  //         // URL if payment is successful
  //         "redirect_url": "https://charge/completed/page",

  //         // URL if payment fails
  //         "cancel_url": "https://charge/canceled/page"
  //       },
  //       success: function (result) {

  //         // Logs General Result
  //         console.log(result)

  //         // Concatenates the payment ID to the full link
  //         console.log(result.data.hosted_url)

  //         // Save the Payment link with the variable name "paylink"
  //         var paylink = result.data.hosted_url

  //         //Uncomment below to make the payment link visible
  //         // $('#paylink').text(paylink)

  //         // Loads the requested Link
  //         window.location.href = paylink;


  //       },
  //       error: function (error) {
  //         // Incase an error occurs
  //         console.log(error.responseText);
  //       }
  //     });

  //   });

  </script>

  </body>
</html>