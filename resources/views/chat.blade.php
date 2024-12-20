<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AraBulus</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="//cdn.arabul.us/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/homepage.css?{{ time(); }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdn.socket.io/4.0.1/socket.io.min.js"></script>
    <script src="//cdn.arabul.us/jquery/jquery-3.7.1.min.js"></script>
    <script>
        FontAwesomeConfig = { autoReplaceSvg: "nest" }
    </script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
    <style>
        /* @import kuralı en üstte olmalı */
        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');

        body {
            font-family: 'Nunito', sans-serif;
        }

        .chat-box:hover {
            background-color: #f8f9fa;
            cursor: pointer;
        }

        .chat-delete {
            cursor: pointer;
        }

        .chat-delete:hover {
            transform: scale(1.2);
        }

        .chat-body {
            height: 300px;
            overflow-y: auto;
            background-color: #f9f9f9;
            padding: 10px;
            border: 1px solid #ddd;
        }

        .chat-footer {
            background-color: #fff;
        }

        .text-muted {
            font-size: 0.875rem;
            color: #6c757d;
            display: block;
            /*blok olarak yanı satırın altı*/
            margin-top: 5px;
            /* Üstten biraz boşluk */
        }

        .container .border {
            border-radius: 5px;
        }

        .chat-body {
            height: 380px;
            overflow-y: auto;
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            font-size: 0.95rem;
        }

        /* Ortak Mesaj Stili */
        .message-box {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 5px;
            margin-bottom: 10px;
            max-width: 50%;
            font-size: 0.95rem;
            word-wrap: break-word;
            /* Uzun kelimelerde satır kaydır */
        }

        /* Gönderen Mesajları */
        .sender {
            background-color: #1a1b41;
            /* Açık gri arka plan */
            margin-left: auto;
            /* Mesajı sağa yasla */
            text-align: left;
            /* Metni sağa hizala */
            color: white;
        }

        /* Alıcı Mesajları */
        .receiver {
            background-color: white;
            /* Daha açık gri arka plan */
            border-color: #1a1b41;
            color: #1a1b41;
            margin-right: auto;
            /* Mesajı sola yasla */
            text-align: left;
            /* Metni sola hizala */
        }

        .custom-input {
            border: 1px solid #1a1b41 !important;
            /* Sınır rengini ve kalınlığını zorla uygular */
            border-radius: 5px !important;
            /* Kenarları yuvarlatır */
            padding: 6px;
            /* İç boşluk */
            box-shadow: none;
            /* Varsayılan gölgeyi kaldırır */
        }

        .custom-input:focus {
            border-color: #1a1b41 !important;
            outline: none;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5) !important;
            /* Hafif mavi bir gölge */
        }

        .chat-footer {
            justify-content: space-between;
            align-items: center;
        }

        /* Butonun yerini sağa kaydırma */
        .button-container {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-left: 10px;
            /* Buton ile input arasına biraz boşluk */
        }

        /* Butonun yuvarlak hale gelmesi */
        .btn-custom {
            border-radius: 50%;
            /* Yuvarlak buton */
            padding: 10px;
            /* Butonun içeriğini büyütmek için */
        }

        .btn-custom i {
            color: white;
        }

        .btn-custom:hover i {
            color: #1a1b41 !important;
            /* İkonun rengi beyaz */
            background-color: transparent;
        }
        footer ul li a:hover {
    color: #ffc107; /* Hover rengi */
    text-decoration: underline;
}
footer ul li{
    margin-top: 5px;
}

footer {
    background-color:#820933; /* Koyu kırmızı */

}
/* Buton Normal Durumu */
.btn-hesap {
    border: 1px solid white;
    color: white;
    transition: all 0.3s ease; /* Hover geçiş animasyonu */
}

/* Hover Durumu */
.btn-hesap:hover {
    background-color: transparent; /* Hover'da arka plan rengi */
    color: #1a1b41; /* Metin rengi */
    border-color: #1a1b41; /* Hover'da mavi ton border */
    transform: translateY(-5px); /* Butonu yukarı hareket ettir */
}
    </style>
</head>

<body class="d-flex flex-column" style="min-height: 100vh;">
    @include('partials.navbar')

    <div class="container border mt-4"
        style="border-radius:10px; border: 1px solid #1a1b41 !important; box-shadow: 0 0 5px rgba(52, 152, 219, 0.5) !important; ">
        <div class="row">
            <!-- Inbox Section -->
            <div class="col-6 border-end">
                <h5 class="mt-3 fw-bold text-center">GELEN KUTUSU</h5>
                <hr>
                <!-- Chat Box -->
                @if($chats->isEmpty())
                <div class="text-center text-muted">Henüz hiç mesajınız yok.</div>
                @endif
                @foreach($chats as $chat)

                <div class="chat-box d-flex align-items-center p-1 border-bottom"
                    data-conversation-id="{{ $chat->id }}">
                    <img src="{{ $chat->recipient()->profile_picture }}" alt="Profile Photo" class="rounded-circle me-1"
                        width="40" height="40" />
                    <div>
                        <strong class="ms-2">{{ $chat->recipient()->name }}</strong><br />
                        <span class="ms-2 text-muted">Son mesaj: {{ $chat->lastMessage() }}</span>
                    </div>
                    <i class="fa-solid fa-xmark ms-auto text-danger chat-delete"></i>
                </div>

                @endforeach
            </div>

            <!-- Chat Section -->
            <div class="col-6">
                @if($lastConvo === null)
                <div class="text-center text-muted mt-3">Mesaj seçin.</div>
                @else
                <div class="chat-header p-3 border-bottom d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="{{$lastConvo->recipient()->profile_picture}}" alt="Profile Photo"
                            class="rounded-circle me-2" width="40" height="40" />
                        <div>
                            <strong>{{$lastConvo->recipient()->name}}</strong><br />
                            <small id="listingTitle">Satılan Ürün: <a class="listingTitle" style="text-decoration: none; color:black;" href='{{route('listings.show',[$lastConvo->listing->id, '-', $lastConvo->slug])}}'>{{$lastConvo->listing->title}}</a></small>
                        </div>
                    </div>
                    <div>
                        <strong class="mt-2" id="listingPrice">{{$lastConvo->listing->price}} TL</strong>
                    </div>
                </div>

                <!-- Chat Body -->
                <div id="messages" class="chat-body p-3">

                    @foreach($lastConvo->messages as $message)
                    <div class="{{ $message->sender_id === auth()->user()->id ? 'sender' : 'receiver' }} message-box">
                        {{ $message->message }}
                    </div>
                    @endforeach
                </div>

                <!-- Message Input -->
                <div class="chat-footer p-3 border-top">
                    <form id="message-form" class="d-flex">
                        <input type="text" id="message-input" class="form-control custom-input"
                            placeholder="Mesajınızı yazın..." autocomplete="off" required />
                        <button type="submit" class="btn btn-custom">
                            <i class="fa-regular fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('partials.footer')


    @if($lastConvo !== null)
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const socket = io('wss://arabul.us:2087', { transports: ['websocket'], upgrade: false });

            let currentConversationId = "{{$lastConvo->id}}"; // Initial conversation ID
            const userId = {{ auth() -> user() -> id
        }};  // Current user ID

        // When the socket connection is established
        socket.on('connect', () => {
            console.log('Connected to Socket.IO server');
            // Emit joinRoom event for the first active conversation when the client connects
            socket.emit('joinRoom', currentConversationId);
        });

        // Function to load messages for the selected conversation
        function loadMessages(conversationId) {
            fetch(`/api/conversations/${conversationId}/messages`)
                .then(response => response.json())
                .then(data => {
                    const messageList = document.getElementById('messages');
                    messageList.innerHTML = ''; // Clear existing messages

                    // Populate the chat with the conversation's messages
                    data.messages.forEach(message => {
                        const newMessage = document.createElement('div');
                        newMessage.textContent = message.content;
                        newMessage.classList.add(message.sender_id === userId ? 'sender' : 'receiver', 'message-box');
                        messageList.appendChild(newMessage);
                    });

                    // Scroll to the bottom of the chat
                    document.getElementById('messages').scrollTop = document.getElementById('messages').scrollHeight;
                });
        }

        // Listen for clicks on the chat boxes to switch conversations
        document.querySelectorAll('.chat-box').forEach(chatBox => {
            chatBox.addEventListener('click', function () {
                const conversationId = this.getAttribute('data-conversation-id');

                // Update the current active conversation ID
                currentConversationId = conversationId;

                // Load the messages for the newly selected conversation
                loadMessages(conversationId);

                // Update the chat header with the recipient's name (this could be dynamic, too)
                const recipientName = this.querySelector('strong').textContent;
                const chatHeader = document.querySelector('.chat-header');
                chatHeader.querySelector('strong').textContent = recipientName;


                // fetch the listing title and price
                fetch(`/api/conversations/${conversationId}/listing`)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('listingTitle').textContent = `Satılan Ürün: ${data.title}`;
                        document.getElementById('listingPrice').textContent = `${data.price} TL`;
                    });

                // Join the new conversation room
                socket.emit('joinRoom', conversationId);
            });
        });

        // Event listener for sending messages
        document.getElementById('message-form').addEventListener('submit', function (event) {
            event.preventDefault();
            const messageInput = document.getElementById('message-input');
            const message = messageInput.value;

            // Display the sent message locally (sender side)
            const messageList = document.getElementById('messages');
            const newMessage = document.createElement('div');
            newMessage.textContent = message;
            newMessage.classList.add('sender', 'message-box');
            messageList.appendChild(newMessage);

            // Clear the input field
            messageInput.value = '';

            // Scroll to the bottom
            document.getElementById('messages').scrollTop = document.getElementById('messages').scrollHeight;

            // Emit the message to the server
            socket.emit('sendMessage', {
                conversationId: currentConversationId,
                message: message,
                senderId: userId
            });

            // Save the message to the database
            fetch(`/api/conversations/${currentConversationId}/create-message`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    content: message,
                    sender_id: userId,
                    _token: '{{ csrf_token() }}',
                    chat_id: currentConversationId,
                }),
            });
        });

        // Listen for incoming messages
        socket.on('receiveMessage', function (data) {
            console.log('Received message:', data);  // Debugging log

            // Only display messages for the current conversation
            if (data.conversationId === currentConversationId && data.senderId !== userId) {
                const messageList = document.getElementById('messages');
                const newMessage = document.createElement('div');
                newMessage.textContent = data.message;
                newMessage.classList.add(data.senderId === userId ? 'sender' : 'receiver', 'message-box');
                messageList.appendChild(newMessage);

                // Scroll to the bottom of the chat
                document.getElementById('messages').scrollTop = document.getElementById('messages').scrollHeight;
            }
        });

        // Listen for the delete chat event
        document.querySelectorAll('.chat-delete').forEach(deleteIcon => {
            deleteIcon.addEventListener('click', function () {
                const conversationId = this.parentElement.getAttribute('data-conversation-id');

                // Remove the chat box from the UI
                this.parentElement.remove();

                // Emit the delete chat event to the server
                socket.emit('deleteChat', conversationId);

                // Delete the chat from the database
                fetch(`/api/conversations/${conversationId}/delete`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        _token: '{{ csrf_token() }}',
                    }),
                });
            });
        });
});


    </script>

    @endif
    @if($openChat !== null)
    <script>
        document.querySelector(`.chat-box[data-conversation-id="{{$openChat->id}}"]`).click();
    </script>
    @endif
</body>

</html>
