if(document.querySelector('.empty')) {
    document.querySelector('.title-error').style.display = "flex";
    document.querySelector('.body-error').style.display = "flex";
}

function books() {
    document.querySelector("#category").value = "books";
    document.submitCategory.submit();
}
function games() {
    document.querySelector("#category").value = "games";
    document.submitCategory.submit();
}
function electronics() {
    document.querySelector("#category").value = "electronics";
    document.submitCategory.submit();
}
function furniture() {
    document.querySelector("#category").value = "furniture";
    document.submitCategory.submit();
}
function clothing() {
    document.querySelector("#category").value = "clothing";
    document.submitCategory.submit();
}