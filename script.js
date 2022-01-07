


document.getElementsByName("products[]").forEach(item => {
  item.addEventListener('change', event => { 
    var product1 = parseInt(document.getElementById("product1").value);
    var product2 = parseInt(document.getElementById("product2").value);
    var product3 = parseInt(document.getElementById("product3").value);
    var price1 = parseInt(document.getElementById("price1").value);
    var price2 = parseInt(document.getElementById("price2").value);
    var price3 = parseInt(document.getElementById("price3").value);
    var total = product1*price1 + product2*price2 + product3*price3;
    document.getElementById("total_price").innerHTML = total;
  }); 
});

function process() {
  document.getElementById("hidden").value = document.getElementById("total_price").innerHTML;
  return true;
}