function calculate() {
    let p = document.getElementById("amt").value;
    let r = document.getElementById("rate").value / 1200;
    let n = document.getElementById("time").value;

    if (!p || !r || !n) {
        alert("Enter all values!");
        return;
    }

    let emi = (p * r * (1 + r) ** n) / ((1 + r) ** n - 1);
    alert("EMI: RS " + emi);
}