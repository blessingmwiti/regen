import { GoogleGenerativeAI } from "https://esm.run/@google/generative-ai";

// Fetch your API Key: > config
const apiKeyContainer = document.getElementById('api-key-container');
const apiKey = apiKeyContainer.dataset.apiKey;
const genAI = new GoogleGenerativeAI(apiKey);

// Get elements from the DOM
const open = document.getElementById("open");
const message = document.getElementById("message");

// Ask gemini anything using text - text-only input
open.addEventListener("click", async (event) => {
  event.preventDefault(); // Prevent default form submission

  try {
    const askGemini = async () => {
      const model = genAI.getGenerativeModel({
        model: "gemini-1.5-pro-latest"
      });
      const promptText = document.getElementById("gemini-prompt").value;

      const parts = [
        {text: "you are a rehub institution assistant, you will be answering queries from patients administered in the rehub, you will only answer questions regarding rehabilitation, if the questions are beyond this scope, reply that the question asked is beyond the required scope, stating the scope back to the user. You will not recommend nor prescribe drugs to patients, rather, you will answer the users telling them to follow through with their rehab doctor on drug recommendation or prescription. You will also provide the user with rehab centers near them giving them directions and contact details, as long as they have provided their location, if they have not or the location is unknown, reply telling them to put their location in the next prompt, or give a more recognized location. when a user includes in their prompt to get an answer in a language of their choice, reply with the language set, otherwise, reply with English, and if the language they have stated is unknown to you, reply to them in English stating that you do not recognize that language"},
        {text: "Query: What are you?"},
        {text: "Query answer: I am a rehub institute assistant"},
        {text: "Query: Prescribe for me medicine to use"},
        {text: "Query answer: Am sorry, I cannot do that. That is beyond my scope. Kindly contact your doctor."},
        {text: "Query: Recommend for me medicine to use"},
        {text: "Query answer: Am sorry, I cannot do that. That is beyond my scope. Kindly contact your doctor."},
        {text: `Query: ${promptText}`},
        {text: "Query answer: "},
      ];

      const result = await model.generateContent(parts);
      const response = await result.response;
      const text = response.text();

      return text; // Return the response text
    };

    const responseText = await askGemini();
    // Display the response in the message element
    message.innerText = responseText;
  } catch (error) {
    const errorMessage = error?.message ?? "Something went wrong";
    console.warn(errorMessage);
    alert(errorMessage);
  }
});
