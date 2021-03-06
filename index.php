<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width , initial-scale=1.0">
        <title>A chat bot written in PHP</title>
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="http://sstatic.net/stackoverflow/img/favicon.ico">
    </head>
    <body>
        <div class="wrapper">
            <div class="title">Get to know me. Let's chat</div>
            <div class="form">
                <div class="bot-inbox inbox">
                    <div class="icon">
                        <img src="1624541939884.jpg" class="image" alt="image-icon">
                    </div>
                    <div class="msg-header">
                        <p>Hello there, my name is Nomthandazo Thabethe, say hi &#128512;</p>
                    </div>
                </div>
                <!-- <div class="user-inbox inbox">
                    <div>
                        <div class="msg-header">
                            <p>message from sender jighb hgcgfchvbn jgv gvuyghjbjbk hvjgyoiuhn</p>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="typing-field">
			<input class="user-text"type="text" placeholder="Type something here" required>
            <button class="send-button">Send</button>
			</div>
        </div>

        <script>
            $(document).ready(function(){
                $("#send-button").on("click", function(){
                    $value = $("#data").val();
                    $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                    $(".form").append($msg);
                    $("#data").val('');
    
                    // start ajax code
                    $.ajax({
                        url: 'message.php',
                        type: 'POST',
                        data: 'text='+$value,
                        success: function(result){
                            $replay = '<div class="bot-inbox inbox"><div class="icon"></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                            $(".form").append($replay);
                            // when chat goes down the scroll bar automatically comes to the bottom
                            $(".form").scrollTop($(".form")[0].scrollHeight);
                        }
                    });
                });
            });
        </script>
    </body>
</html>