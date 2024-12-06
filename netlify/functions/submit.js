// netlify/functions/submit.js
exports.handler = async function(event, context) {
    if (event.httpMethod === "POST") {
      const { name, email, phone, dob, gender, address } = JSON.parse(event.body);
  
      // Process the data as needed, such as saving to a database or sending an email
  
      return {
        statusCode: 200,
        body: JSON.stringify({
          message: "Submission Successful",
          data: { name, email, phone, dob, gender, address }
        })
      };
    }
  
    return { statusCode: 405, body: "Method Not Allowed" };
  };
  