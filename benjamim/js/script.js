function toggleDropdown() {
    var dropdown = document.getElementById("myDropdown");
    if (dropdown.style.display === "none") {
      dropdown.style.display = "block";
    } else {
      dropdown.style.display = "none";
    }
  }

  $(document).ready(function() {
    $('.add-to-cart').on('click', function() {
        var productId = $(this).data('product-id');
        $.ajax({
            type: 'POST',
            url: 'add-to-cart.php',
            data: { product_id: productId },
            success: function(data) {
                console.log('Product added to cart!');
            }
        });
    });

    $('#view-cart').on('click', function() {
        $.ajax({
            type: 'GET',
            url: 'get-cart.php',
            success: function(data) {
                var cartItems = JSON.parse(data);
                updateCartSidebar(cartItems);
            }
        });
    });

    function updateCartSidebar(cartItems) {
        $('#cart-items').empty();
        $.each(cartItems, function(index, item) {
            $('#cart-items').append('<li>' + item.product_name + ' - R$ ' + item.product_price + '</li>');
        });
        $('#cart-total').text(getCartTotal(cartItems));
    }

    function getCartTotal(cartItems) {
        var total = 0;
        $.each(cartItems, function(index, item) {
            total += item.product_price * item.quantity;
        });
        return total.toFixed(2);
    }
});