<script>
    function validateNumberInput(event) {
            const input = event.target;
            input.value = input.value.replace(/[^0-9.]/g, '');
        }
        
    function calculateInverter() {
            let totalUnits = 0;
            for (let i = 1; i <= 12; i++) {
                const monthInput = document.getElementById(`month-${i}`);
                const units = parseFloat(monthInput.value);
                if (isNaN(units) || units <= 0) {
                    document.getElementById('result').innerHTML = "Please enter valid units for all months.";
                    document.getElementById('choice').style.display = 'flex';
                    return;
                }
                totalUnits += units;
            }
            

            const averageUnits = totalUnits / 12;
            const dailyAverage = averageUnits / 30;
            const finalResult = dailyAverage / 4;
            document.getElementById('result').innerHTML = `
                Total units: ${totalUnits.toFixed(2)} kWh<br>
                Monthly Average Units Consumption: ${averageUnits.toFixed(2)} kWh<br>
                Daily Units Consumption: ${dailyAverage.toFixed(2)} KWh<br>
                System Required: ${finalResult.toFixed(2)} kW
            `;

            if (finalResult > 12) {
                document.getElementById('result').innerHTML += "<br>According to your requirements on-Grid Inverter is suitable.";
                displayInverterSize('on-grid', finalResult);
            } else {
                document.getElementById('result').innerHTML += "<br>Please choose an inverter type:<br>";
                document.getElementById('choice').style.display = 'block';
            }
        }

        function chooseInverter(type) {
            const resultText = document.getElementById('result').innerHTML;
            const finalResult = parseFloat(resultText.match(/System Required: ([\d\.]+) kW/)[1]);
            displayInverterSize(type, finalResult);
        }

        function displayInverterSize(type, result) {
            let inverterSize;
            let inverterSizeKw;

            if (type === 'hybrid') {
                if (result <= 1.2) {
                    inverterSize = '1.2 kW';
                    inverterSizeKw = 1.2;
                }else if (result > 1.2 && result <= 2.5) {
                    inverterSize = '2.5 kW';
                    inverterSizeKw = 2.5;
                } else if (result > 2.5 && result <= 3.2) {
                    inverterSize = '3.2 kW';
                    inverterSizeKw = 3.2;
                } else if (result > 3.2 && result <= 3.6) {
                    inverterSize = '3.6 kW';
                    inverterSizeKw = 3.6;
                } else if (result > 3.6 && result <= 5.6) {
                    inverterSize = '5.6 kW';
                    inverterSizeKw = 5.6;
                } else if (result > 5.6 && result <= 6.6) {
                    inverterSize = '6.6 kW';
                    inverterSizeKw = 6.6;
                } else if (result > 6.6 && result <= 8) {
                    inverterSize = '8 kW';
                    inverterSizeKw = 8;
                } else if (result > 8 && result <= 12) {
                    inverterSize = '12 kW';
                    inverterSizeKw = 12;
                }
        }else if (type === 'on-grid') {
            if(result<5){
                inverterSize = '5 kW'; 
                inverterSizeKw = 5;
            }else if (result > 5 && result <= 10) {
                    inverterSize = '10 kW';
                    inverterSizeKw = 10;
                } else if (result > 10 && result <= 15) {
                    inverterSize = '15 kW';
                    inverterSizeKw = 15;
                } else if (result > 15 && result <= 20) {
                    inverterSize = '20 kW';
                    inverterSizeKw = 20;
                } else if (result > 20 && result <= 25) {
                    inverterSize = '25 kW';
                    inverterSizeKw = 25;
                } else if (result > 25 && result <= 30) {
                    inverterSize = '30 kW';
                    inverterSizeKw = 30;
                } else if (result > 30 && result <= 35) {
                    inverterSize = '35 kW';
                    inverterSizeKw = 35;
                } else if (result > 35 && result <= 40) {
                    inverterSize = '40 kW';
                    inverterSizeKw = 40;
                } else if (result > 40 && result <= 45) {
                    inverterSize = '45 kW';
                    inverterSizeKw = 45;
                } else if (result > 45 && result <= 50) {
                    inverterSize = '50 kW or higher';
                    inverterSizeKw = 50;
                }else{
                    inverterSize = 'Unknown size' ;
                    inverterSizeKw = 0;
                }
            }
            let inverterSizeWatts = inverterSizeKw * 1000;
            let numberOfPanels = inverterSizeWatts / 585;

            document.getElementById('result').innerHTML += `<br>${type.charAt(0).toUpperCase() + type.slice(1)} inverter size: ${inverterSize}`;
            document.getElementById('result').innerHTML += `<br>Inverter size in Watts: ${inverterSizeWatts} W`;
            document.getElementById('result').innerHTML += `<br>Number of 585W solar plates needed: ${Math.ceil(numberOfPanels)}`;
            document.getElementById('choice').style.display = 'flex';
        }
    </script>