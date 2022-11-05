var product = document.getElementById("product-img");
var smallimg = document.getElementsByClassName("small-img");

smallimg[0].onclick = function(){
    product.src=smallimg[0].src;
}
smallimg[1].onclick = function(){
    product.src=smallimg[1].src;
}
smallimg[2].onclick = function(){
    product.src=smallimg[2].src;
}
smallimg[3].onclick = function(){
    product.src=smallimg[3].src;
}