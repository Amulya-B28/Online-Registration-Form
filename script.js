$(document).ready(function () {
    $('#registrationForm').on('submit', function (event) {
        event.preventDefault(); // Prevent the default form submission

        // Collect form data
        const name = $('#name').val();
        const email = $('#email').val();
        const phone = $('#phone').val();
        const dob = $('#dob').val();
        const gender = $('#gender').val();
        const address = $('#address').val();

        // Simple form validation
        if (!name || !email || !phone) {
            alert('Please fill in all required fields!');
            return; // Stop submission if validation fails
        }

        // Prepare data as a JSON object
        const formData = {
            name: name,
            email: email,
            phone: phone,
            dob: dob,
            gender: gender,
            address: address
        };

        // Send form data as JSON via AJAX
        $.ajax({
            url: 'https://your-site-name.netlify.app/.netlify/functions/submit', // Replace with your Netlify function URL
            type: 'POST',
            contentType: 'application/json',  // Send as JSON
            data: JSON.stringify(formData),   // Convert form data to JSON
            success: function (response) {
                alert('Form submitted successfully!');
                console.log(response);
                // Optionally, you can redirect or show a success message
            },
            error: function (xhr, status, error) {
                alert('An error occurred: ' + error);
                console.log(xhr, status, error);
            }
        });
    });
});
