var leftBtn = document.getElementById("left");
var rightBtn = document.getElementById("right");
var pagination = document.getElementsByClassName("dot");
var currentSlide = 0;
var delicacyContainer = document.getElementById("content-viewer");
var modal = document.getElementsByClassName("modal")
var orderImage = document.getElementById("order-img");
var orderName = document.getElementById("order-name");
var orderTotal = document.getElementById("total-container").firstElementChild.lastElementChild;
var orderPrice = document.getElementById("qty-container").lastElementChild.lastElementChild;
var formName = document.getElementById("form-name");
var formAddress = document.getElementById("form-address");
var qty = document.getElementById("quantity");
var total = 0;
var selectedPrice = 0;

leftBtn.addEventListener('click', e=>{
    delicacyContainer.style.transform = 'translate(100%)';

    setTimeout(function () {
        delicacyContainer.prepend(delicacyContainer.lastElementChild)
        delicacyContainer.style.transition = 'none';
        delicacyContainer.style.transform = "translate(0)";

        setTimeout(function () {
            delicacyContainer.style.transition = 'all 0.5s';
        });
    }, 600)

    currentSlide--
    if (currentSlide >= 0) {
        pagination[currentSlide + 1].removeAttribute("id", "active-dot");
        pagination[currentSlide].setAttribute("id", "active-dot");
    }
    else {
        currentSlide = pagination.length - 1
        pagination[0].removeAttribute("id", "active-dot");
        pagination[currentSlide].setAttribute("id", "active-dot");
    }
});

rightBtn.addEventListener('click', e=>{
    delicacyContainer.style.transform = 'translate(-100%)';

    setTimeout(function () {
        delicacyContainer.appendChild(delicacyContainer.firstElementChild);
        delicacyContainer.style.transition = 'none';
        delicacyContainer.style.transform = "translate(0)";

        setTimeout(function () {
            delicacyContainer.style.transition = 'all 0.5s';
        });
    }, 600)

    currentSlide++
    if (currentSlide < pagination.length) {
        pagination[currentSlide - 1].removeAttribute("id", "active-dot");
        pagination[currentSlide].setAttribute("id", "active-dot");
    }
    else {
        currentSlide = 0
        pagination[pagination.length - 1].removeAttribute("id", "active-dot");
        pagination[currentSlide].setAttribute("id", "active-dot");
    }
});

function order(clicked, price){
    selectedPrice = price;
    modal[0].setAttribute("id", "show");
    orderImage.src = clicked.parentElement.parentElement.firstElementChild.src;
    orderName.innerHTML = clicked.parentElement.firstElementChild.innerHTML;
    orderPrice.innerHTML = "Php " + price + ".00";
    orderTotal.innerHTML = "";
    formName.value = "";
    formAddress.value = "";
}

qty.addEventListener('change', e=>{
    var total = qty.value * selectedPrice;
    orderTotal.innerHTML = "Php " + total + ".00";
})

function finishOrder(){
    modal[0].removeAttribute("id", "show");
}

function sendOrder(){
    alert("We are now preparing your order of " + qty.value + " " + orderName.innerHTML + " \n Please prepare a total of " + orderTotal.innerHTML);
    finishOrder();
}