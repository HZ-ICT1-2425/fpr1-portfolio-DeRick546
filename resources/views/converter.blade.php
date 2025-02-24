
<x-layout.main>
    <div class="columns is-centered">
        <div class="column is-half">
            <div class="block">
                <script>
                    // Convert Decimal to Binary and Hexadecimal
                    function convertDecimal() {
                        let decimalValue = document.getElementById('decimalInput').value;

                        if (!isNaN(decimalValue) && decimalValue !== '') {
                            let hexValue = parseInt(decimalValue, 10).toString(16).toUpperCase();
                            let binaryValue = parseInt(decimalValue, 10).toString(2);
                            document.getElementById('results').innerHTML = `Decimal: ${decimalValue}<br>Hexadecimal: ${hexValue}<br>Binary: ${binaryValue}`;
                        } else {
                            document.getElementById('results').innerHTML = "Please enter a valid decimal number.";
                        }
                    }

                    // Convert Hexadecimal to Decimal and Binary
                    function convertHex() {
                        let hexValue = document.getElementById('hexInput').value;

                        if (/^[0-9A-Fa-f]+$/.test(hexValue)) {
                            let decimalValue = parseInt(hexValue, 16);
                            let binaryValue = decimalValue.toString(2);
                            document.getElementById('results').innerHTML = `Hexadecimal: ${hexValue.toUpperCase()}<br>Decimal: ${decimalValue}<br>Binary: ${binaryValue}`;
                        }
                        else {
                            document.getElementById('results').innerHTML = "Please enter a valid hexadecimal number.";
                        }
                    }

                    // Convert Binary to Decimal and Hexadecimal
                    function convertBinary() {
                        let binaryValue = document.getElementById('binaryInput').value;

                        if (/^[01]+$/.test(binaryValue)) {
                            let decimalValue = parseInt(binaryValue, 2);
                            let hexValue = decimalValue.toString(16).toUpperCase();
                            document.getElementById('results').innerHTML = `Binary: ${binaryValue}<br>Decimal: ${decimalValue}<br>Hexadecimal: ${hexValue}`;
                        } else {
                            document.getElementById('results').innerHTML = "Please enter a valid binary number.";
                        }
                    }

                </script>
                <div>
                    <label for="decimalInput" class="label">Decimal:</label>
                    <div class="control has-icons-right is-display-flex ">
                        <input type="text" name="decimalInput" id="decimalInput" placeholder="Enter Decimal..."
                               class="input @error('decimalInput') is-danger @enderror"
                               value="{{ old('decimalInput') }}" autocomplete="decimalInput" autofocus>
                        <input type="button" value="Convert" onclick="convertDecimal()" class="button is-primary">
                        @error('decimalInput')
                        <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                        @enderror
                    </div>
              <br>
                    <label for="hexInput" class="label">Hexadecimal:</label>
                    <div class="control has-icons-right is-display-flex">
                        <input type="text" name="hexInput" id="hexInput" placeholder="Enter Hexadecimal..."
                               class="input @error('hexInput') is-danger @enderror"
                               value="{{ old('hexInput') }}" autocomplete="hexInput" autofocus>
                        <input type="button" value="Convert" onclick="convertHex()" class="button is-primary">
                        @error('hexInput')
                        <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                        @enderror
                    </div>
                    <br>
                    <label for="binaryInput" class="label">Binary:</label>
                    <div class="control has-icons-right is-display-flex">
                        <input type="text" name="binaryInput" id="binaryInput" placeholder="Enter Binary..."
                               class="input @error('binaryInput') is-danger @enderror"
                               value="{{ old('binaryInput') }}" autocomplete="binaryInput" autofocus>
                        <input type="button" value="Convert" onclick="convertBinary()" class="button is-primary">
                        @error('binaryInput')
                        <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                        @enderror
                    </div>
                </div>
                <br>
                <h1 class="label">Results</h1>
                <p id="results"></p>
                </div>
        </div>
    </div>
    </x-layout.main>
