document.addEventListener("DOMContentLoaded", function() {
    const tabs = document.querySelectorAll(".tab");
    const tabContents = document.querySelectorAll(".tab-content");

    tabs.forEach(function(tab) {
        tab.addEventListener("click", function(event) {
            event.preventDefault();
            const targetId = this.getAttribute("href").substr(1);
            tabContents.forEach(function(tabContent) {
                tabContent.classList.remove("active");
            });
            document.getElementById(targetId).classList.add("active");
        });
    });

    const orderForm = document.getElementById("orderForm");
    const termsCheckbox = document.getElementById("terms");
    const submitBtn = document.getElementById("submitBtn");
    const activeOrdersList = document.getElementById("activeOrders");

    termsCheckbox.addEventListener("change", function() {
        if (this.checked) {
            submitBtn.disabled = false;
        } else {
            submitBtn.disabled = true;
        }
    });

    orderForm.addEventListener("submit", function(event) {
        event.preventDefault();
        const task = orderForm.elements["task"].value;
        const payment = orderForm.elements["payment"].value;
        if (task && payment && termsCheckbox.checked) {
            const listItem = document.createElement("li");
            listItem.textContent = `Задание: ${task}, Оплата: ${payment} конфет`;
            activeOrdersList.appendChild(listItem);
            orderForm.reset();
        } else {
            alert("Заполните все поля!");
        }
    });
});