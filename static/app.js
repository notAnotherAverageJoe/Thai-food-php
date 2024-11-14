$(document).ready(function () {
  $(".add-to-cart").on("click", function () {
    var itemId = $(this).data("item-id");

    // Send AJAX request to add item to cart
    $.ajax({
      url: "add_to_cart.php",
      method: "POST",
      data: { itemId: itemId },
      dataType: "json",
      success: function (response) {
        if (response.success) {
          alert("Item added to cart!");
          // Optionally update UI or redirect to cart page
        } else {
          alert("Failed to add item to cart. Please try again.");
        }
      },
      error: function (xhr, status, error) {
        console.error("Error adding item to cart:", error);
        alert("Error adding item to cart. Please try again later.");
      },
    });
  });
});
