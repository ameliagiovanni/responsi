document
  .getElementById("orderForm")
  ?.addEventListener("submit", function (event) {
    alert("Pesanan berhasil dibuat!");
  });

function loadOrders() {
  fetch("view_orders.php")
    .then((response) => response.json())
    .then((data) => {
      const tbody = document.querySelector("#orders tbody");
      tbody.innerHTML = "";
      data.forEach((order) => {
        const row = document.createElement("tr");
        Object.values(order).forEach((text) => {
          const cell = document.createElement("td");
          cell.textContent = text;
          row.appendChild(cell);
        });
        tbody.appendChild(row);
      });
    });
}
