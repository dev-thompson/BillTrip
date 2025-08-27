  const balanceEl = document.getElementById("balance");
  const toggleBtn = document.getElementById("toggleBalance");

  let isVisible = true;
  const actualBalance = "₦5,000.00";
  const hiddenBalance = "**********";

  toggleBtn.addEventListener("click", () => {
    isVisible = !isVisible;

    balanceEl.textContent = isVisible ? actualBalance : hiddenBalance;
    toggleBtn.className = isVisible ? "far fa-eye" : "far fa-eye-slash";
  });