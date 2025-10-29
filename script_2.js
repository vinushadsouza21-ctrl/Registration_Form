$(document).ready(function () {
  $("#registrationForm").on("submit", function (e) {
    e.preventDefault();

    $(".submit-btn").html("⏳ Processing...").prop("disabled", true);

    $.ajax({
      type: "POST",
      url: "submit.php",
      data: $(this).serialize(),
      success: function (response) {
  // Store the response in sessionStorage to access it on the next page
  sessionStorage.setItem("registrationResponse", response);

  // Redirect to the new page
  window.location.href = "success.html";
},
      error: function () {
        $("#output").html("<p style='color:red;'>❌ Something went wrong. Please try again.</p>").fadeIn();
        $(".submit-btn").html("✨ Submit Application").prop("disabled", false);
      },
    });
  });
});
