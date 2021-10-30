$(document).ready(function() {
    $.fn.deleteProduct = function(productID) {
        console.log(productID);
    }
    $('[data-toggle="tooltip"]').tooltip();
});


function deleteProduct(productID) {
    // make a request to the backend basically things would be called without refreshing 
    // deleting an individual product
    fetch(`index.php?deleteProductID=${productID}`)
        .then(function(value) {
            $(`#product-${productID}`).remove()

        }).catch(function(reason) {
            console.log(reason);
        });
}

function deleteCategory(catID) {
    fetch(`index.php?deleteCategoryID=${catID}`)
        .then(function(value) {
            $(`#cat-${catID}`).remove()

        }).catch(function(reason) {
            console.log(reason);
        });
}

function deleteUser(userId) {
    fetch(`index.php?deleteUserID=${userId}`)
        .then(function(value) {
            $(`#user-${userId}`).remove()

        }).catch(function(reason) {
            console.log(reason);
        });
}