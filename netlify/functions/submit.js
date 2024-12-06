// netlify/functions/submit.js
exports.handler = async function(event, context) {
  // Check if the method is POST
  if (event.httpMethod === "POST") {
    try {
      // Parse the incoming JSON data
      const { name, email, phone, dob, gender, address } = JSON.parse(event.body);
      
      // Process the data (for now, just return it)
      return {
        statusCode: 200,
        body: JSON.stringify({
          message: "Submission Successful",
          data: { name, email, phone, dob, gender, address }
        })
      };
    } catch (error) {
      return {
        statusCode: 400,
        body: JSON.stringify({ message: "Invalid JSON data", error: error.message })
      };
    }
  }

  // Return a 405 if the method is not POST
  return { statusCode: 405, body: "Method Not Allowed" };
};
