<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body>
    <header>
        <div class="header-content">
            <h1>Diet Management System</h1>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="userprofile.html">User Profile</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="services.html">Services</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="bmi-calculator">
            <h2>BMI Calculator</h2>
            <form>
                <div class="input-group">
                    <label for="weight">Weight (kg):</label>
                    <input type="number" id="weight" required>
                </div>
                <div class="input-group">
                    <label for="height">Height (cm):</label>
                    <input type="number" id="height" required>
                </div>
                <button type="button" id="calculate">Calculate BMI</button>
                <p>Your BMI: <span id="result">--</span></p>
                <p id="bmi-category">BMI Category: <span id="bmi-type">--</span></p>
                <p><a href="#" id="diet-plan-link" style="display: none;">Your Diet Plan</a></p>
                <p><a href="#" id="workout-plan-link" style="display: none;">Your Workout Plan</a></p>
            </form>
        </div>
    </div>

    <footer>
        Diet Management System
    </footer>

    <script>
        document.getElementById("calculate").addEventListener("click", function () {
            var weight = parseFloat(document.getElementById("weight").value);
            var height = parseFloat(document.getElementById("height").value);

            if (!isNaN(weight) && !isNaN(height) && height > 0) {
                var bmi = weight / ((height / 100) * (height / 100));
                document.getElementById("result").textContent = bmi.toFixed(2);

                var bmiCategory = getBMICategory(bmi);
                var bmiTypeElement = document.getElementById("bmi-type");
                bmiTypeElement.textContent = bmiCategory;

                var dietPlanLink = document.getElementById("diet-plan-link");
                var workoutPlanLink = document.getElementById("workout-plan-link");

                if (bmiCategory !== "--") {
                    dietPlanLink.style.display = "block";
                    workoutPlanLink.style.display = "block";
                    if (bmiCategory === "Normal Weight") {
                        dietPlanLink.href = "normal.html";
                        workoutPlanLink.href = "normal-workout.html";
                    } else if (bmiCategory === "Underweight") {
                        dietPlanLink.href = "under.html";
                        workoutPlanLink.href = "underweight-workout.html";
                    } else if (bmiCategory === "Overweight") {
                        dietPlanLink.href = "overweight.html";
                        workoutPlanLink.href = "overweight-workout.html";
                    } else if (bmiCategory === "Obese") {
                        dietPlanLink.href = "obese.html";
                        workoutPlanLink.href = "obese-workout.html";
                    }
                } else {
                    dietPlanLink.style.display = "none";
                    workoutPlanLink.style.display = "none";
                }
            } else {
                alert("Please enter valid weight and height.");
            }
        });

        function getBMICategory(bmi) {
            if (bmi < 18.5) {
                return "Underweight";
            } else if (bmi >= 18.5 && bmi < 24.9) {
                return "Normal Weight";
            } else if (bmi >= 25 && bmi < 29.9) {
                return "Overweight";
            } else {
                return "Obese";
            }
        }
    </script>
</body>
</html>
