<div id="chatbot-launcher">
    <img src="assest/image/bot2.png" alt="Chat" id="chatbot-icon" onclick="toggleChat()">
    <span id="chatbot-label">Chat with Neptune</span>
</div>

<div id="chatbot-container" class="hidden">
    <div id="chatbot-header">
        <h2>Chat with Neptune</h2>
        <button id="chatbot-close" onclick="toggleChat()">&times;</button>
    </div>
    
    <div id="chatbot-messages">
        <div id="response">
            <!-- Chat messages will be dynamically added here -->
        </div>
    </div>
    
    <div id="chatbot-input">
        <input type="text" id="text" name="text" placeholder="Type a message...">
        <button onclick="generateResponse();" id="chatbot-send">Send</button>
    </div>
</div>

<script src="assest/js/bot.js"></script>
<script>
    function toggleChat() {
        var chatContainer = document.getElementById("chatbot-container");
        var body = document.body;
        
        if (chatContainer.classList.contains("hidden")) {
            chatContainer.classList.remove("hidden");
            body.classList.add("chat-open");
        } else {
            chatContainer.classList.add("hidden");
            body.classList.remove("chat-open");
        }
    }
    
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
            var newMessage = document.createElement("div");
            newMessage.classList.add("chat-message");
            newMessage.innerHTML = res;
            response.appendChild(newMessage);
            document.getElementById("text").value = ''; // Clear the input field
        })
        .catch(error => console.error('Error:', error));
    }
</script>
