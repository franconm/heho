const inputs = document.querySelectorAll('input');
const form = document.getElementById('codeForm');

inputs.forEach((input, index) => {
    input.addEventListener('input', (event) => {
        const value = event.target.value;

        if (value.length === 1 && index < inputs.length - 1) {
            inputs[index + 1].focus();
        }

        // Check if all input fields are filled
        const isFormFilled = Array.from(inputs).every(input => input.value.length === 1);
        if (isFormFilled) {
            form.submit(); // Submit the form
        }
        
    });
});