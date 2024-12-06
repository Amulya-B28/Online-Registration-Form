$(document).ready(function () {
    $('#registrationForm').on('submit', function (event) {
        const name = $('#name').val();
        const email = $('#email').val();
        const phone = $('#phone').val();

        if (!name || !email || !phone) {
            alert('Please fill in all required fields!');
            event.preventDefault(); // Prevent form submission
        }
    });
});