<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat with Chatbot</title>
    <style>
        /* Tambahkan styling sesuai kebutuhan Anda */
        body {
            font-family: Arial, sans-serif;
        }
        .chat-container {
            width: 50%;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        #responseOutput {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    

    <flowise-fullchatbot>
    <div class="chat-container">
        <h1>Chat with Chatbot</h1>
        <input 
            type="text" 
            id="questionInput" 
            placeholder="Type your question here..."
            style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">
        <button 
            id="sendButton"
            style="width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer;">
            Send
        </button>
        <div id="responseOutput"></div>
    </div>
    </flowise-fullchatbot>
<script type="module">
    import Chatbot from "https://cdn.jsdelivr.net/npm/flowise-embed/dist/web.js"
    Chatbot.initFull({
        chatflowid: "8a8b5c80-b6d6-423d-bfa6-ac56d9fc0774",
        apiHost: "http://localhost:3000",
    })
</script>
   
</body>
</html>
