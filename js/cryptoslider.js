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
 
 // Small script for Slider Only
 var slider = document.getElementById("range");

 var output = document.getElementById("demo");

 // Binds Slider value to text value
 output.innerHTML = slider.value;

 slider.oninput = function () {
   // And Viceversa
   output.innerHTML = this.value;
 }
 // Slider script end


 // Gets and Convert USD to BTC
 $('input#range').click(function () {

   var btcamount = $('#btc').val();
   // var ethamount = $('#eth').val();
   $.ajax({
     // 
     url: 'https://api.coinbase.com/v2/exchange-rates?currency=USD',
     method: 'GET',

     // If the GET Request is successful
     success: function (result) {

       // Logs General Result
       console.log(result)

       // Logs the value of one bitcoin
       console.log(result.data.rates.BTC, result.data.rates.ETH)

       // Divides the slider value by the value of 1 BTC to get number of bitcoin 
       var btcamount = slider.value * result.data.rates.BTC
       // var ethamount = slider.value * result.data.rates.ETH

       //Binds Var Amount to #btc *id* to 6 decimal places
       $('#btc').text(btcamount.toFixed(6))
       // $('#eth').text(ethamount.toFixed(6))
     },

     // If GET request is unsuccessful
     error: function (error) {

       // Incase an error occurs
       console.log(error.responseText);
     }
   });
 });


 $('#paybit-btn').click(function () {

   var amount = $('#amount').val();
   $.ajax({
     url: 'https://api.commerce.coinbase.com/charges',
     method: 'POST',
     dataType: 'json',
     headers: {

       // API Key ** Very Important
       // get ur own api key from coinbase
       "X-CC-Api-Key": "b2b2a9c7-33da-4141-b628-dd643ab96df3",

       // API Version Date **
       "X-CC-Version": "2018-03-22"
     },
     // The following data must be sent to the API.
     data: {
       // Name of Trasaction
       "name": " Checking",

       // Description of Transaction from php database
       "description": " ",

       // Local Price and Amount and Currecny
       "local_price": {

         //Amount
         "amount": "100.00",

         // Currency
         "currency": "USD"
       },
       // Don't TOuch
       "pricing_type": "fixed_price",

       // Customer Details
       "metadata": {
         // Customer ID from your php database
         "customer_id": "",

         // Customer Name from php database
         "customer_name": ""
       },
       // URL if payment is successful
       "redirect_url": "https://charge/completed/page",

       // URL if payment fails
       "cancel_url": "https://charge/canceled/page"
     },
     success: function (result) {

       // Logs General Result
       console.log(result)

       // Concatenates the payment ID to the full link
       console.log(result.data.hosted_url)

       // Save the Payment link with the variable name "paylink"
       var paylink = result.data.hosted_url

       //Uncomment below to make the payment link visible
       // $('#paylink').text(paylink)

       // Loads the requested Link
       window.location.href = paylink;


     },
     error: function (error) {
       // Incase an error occurs
       console.log(error.responseText);
     }
   });

 });