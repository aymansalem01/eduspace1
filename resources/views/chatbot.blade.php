<div id="chatbot-launcher">
    <img src="assest/image/bot2.png" alt="Chat" id="chatbot-icon">
    <span id="chatbot-label">Chat with neptune</span>

</div>

<div id="chatbot-container">
    <div id="chatbot-header">
        <h2>Chat with neptune</h2>
        <button id="chatbot-close">&times;</button>
    </div>
    
    <div id="chatbot-input">
        <input type="text" id="text" name="text" placeholder="Type a message...">
        <button onclick="generateResponse();" id="chatbot-send">Send</button>
    </div>
    <div id="response">
        <!-- Chat messages will be dynamically added here -->
    </div>
</div>
<script src="assest/js/bot.js"></script>
<script>
    function generateResponse() {
        var text = document.getElementById("text").value;
        var response = document.getElementById("response");

        fetch("/chat", { // Update with the correct route
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // CSRF token
            },
            body: JSON.stringify({ text: text }),
        })
        .then(res => res.text())
        .then(res => {
            response.innerHTML = res;
        })
        .catch(error => console.error('Error:', error));
    }
</script>