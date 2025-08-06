<form action="re_check.php" method="post" id="myForm">
  <!-- Your form fields -->
  <input type="text" name="name" required>
  
  <!-- reCAPTCHA widget -->
  <div class="g-recaptcha" data-callback="enable_button" value="" data-expired-callback="disable_button"data-error-callback="disable_button" data-sitekey="SITE KEY"></div>
  <input type="text" id="recaptcha_token" name="recaptcha_response" value="">
  <button id="submitBtn" disabled type="submit">Submit</button>
</form>

<!-- Load reCAPTCHA API -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
  function enable_button(token) {
    document.getElementById("submitBtn").disabled = false;
      document.getElementById('recaptcha_token').value = token;
  }

  function disable_button() {
    
    document.getElementById("submitBtn").disabled = true;
  }
</script>