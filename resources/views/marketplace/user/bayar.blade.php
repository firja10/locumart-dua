<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-qmdMbgAE1r9qb1Ve"></script>
  </head>
  <body>
    <button id="pay-button">Pay!</button>
    <script type="text/javascript">
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        snap.pay('<?=$snapToken?>');
      });
    </script>
  </body>
</html>