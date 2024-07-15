document.addEventListener("DOMContentLoaded", function () {
    const calculateButton = document.getElementById("calculate");
    const weightInput = document.getElementById("weight");
    const heightInput = document.getElementById("height");
    const resultSpan = document.getElementById("result");

    calculateButton.addEventListener("click", function () {
        const weight = parseFloat(weightInput.value);
        const height = parseFloat(heightInput.value) / 100; // Convert height to meters
        const bmi = weight / (height * height);

        if (!isNaN(bmi)) {
            resultSpan.textContent = bmi.toFixed(2); // Display BMI with 2 decimal places
        } else {
            resultSpan.textContent = "Invalid Input";
        }
    });
});
