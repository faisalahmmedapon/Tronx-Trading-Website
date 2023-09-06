import './bootstrap';

// alert('Hello Faisal')
//
//
// import Alpine from 'alpinejs';
//
// window.Alpine = Alpine;
//
// Alpine.start();


$(document).ready(function () {


    // let username = document.getElementById('username');
    let username = ''; // Initialize the username variable


    $('select').on('change', function () {
        username = this.value;
        // console.log(username);
        let auth_user_id = $('#auth_user_id').val();

        $.ajax({
            method: 'get',
            url: '/get-chat-user/' + username,
            success: function (res) {
                console.log(res.chat_messages);
                // console.log(res.get_user_messages);
                // console.log(res.sent_user_messages);


                // $('#messages').remove();
                // $('#chat_with_user_name').innerHTML = res.username.name;

                const chat_with_user_name = document.getElementById('chat_with_user_name');
                chat_with_user_name.innerHTML = res.receive_user.name;

                // console.log(res.username.name)
                // var html = '';
                // res.messages.forEach(function (message) {
                //     // console.log(message.user.name);
                //     // console.log(auth_user_id);
                //     html += '<div class="chat-container darker ${(message.sent_user_id == auth_user_id) ? \'text-right\' : \'\' } ">'
                //     html += '   <img  src="https://t4.ftcdn.net/jpg/03/64/21/11/360_F_364211147_1qgLVxv1Tcq0Ohz3FawUfrtONzz8nq3e.jpg" alt="Avatar" style="width:50px;height: 50px;border-radius: 50%">'
                //     html += '      <p> ' + message.user.name + ' : ' + message.message + ' </p>'
                //     html += '     <span class="time-right">' + message.created_at + '</span>'
                //     html += ' </div>'
                // });
                // $('#messages').html(html);

                if (res.chat_messages != null) {
                    $('#messages').html('');
                    $.each(res.chat_messages.chat_messages, function (i, message) {
// console.log(message)
                        $('#messages').append(`
                        <div class="card">
                        <div class="card-body ${(message.sent_user_id == auth_user_id) ? 'text-end' : ''}" >
                            <b>${message.sender.name}</b> <br>
                             <img  src="https://t4.ftcdn.net/jpg/03/64/21/11/360_F_364211147_1qgLVxv1Tcq0Ohz3FawUfrtONzz8nq3e.jpg" alt="Avatar" style="width:50px;height: 50px;border-radius: 50%; ${(message.sent_user_id == auth_user_id) ? 'float: right;' : ''}">
                            ${message.message} <br>
                            <i>${new Date(message.created_at)}</i>
                       </div>
                       </div><br>
                        `);
                    })
                }
            }


        });


    });

    $(document).on('click', '#send_message', function (e) {
        e.preventDefault();

        // alert(username+message)
        let auth_user_id = $('#auth_user_id').val();
        let message = $('#message').val();

        if (username == '' || message == '') {
            alert('Please enter both username and message')
            return false;
        }

        $.ajax({
            method: 'post',
            url: '/send-message',
            data: {auth_user_id: auth_user_id, username: username, message: message},
            success: function (res) {
                // console.log(res)
            }
        });

    });
});

window.Echo.channel('chat')
    .listen('.message', (e) => {

        // console.log(e.chat_messages.chat_messages);


        if (e.chat_messages.chat_messages != null) {
            $('#messages').html('');
            $.each(e.chat_messages.chat_messages, function (i, message) {
// console.log(message)
                $('#messages').append(`
                        <div class="card">
                        <div class="card-body ${(message.sent_user_id == auth_user_id) ? 'text-end' : ''}" >
                            <b>${message.sender.name}</b> <br>
                             <img  src="https://t4.ftcdn.net/jpg/03/64/21/11/360_F_364211147_1qgLVxv1Tcq0Ohz3FawUfrtONzz8nq3e.jpg" alt="Avatar" style="width:50px;height: 50px;border-radius: 50%; ${(message.sent_user_id == auth_user_id) ? 'float: right;' : ''}">
                            ${message.message} <br>
                            <i>${new Date(message.created_at)}</i>
                       </div>
                       </div><br>
                        `);
            })
        }

        // $('#messages').append('' +
        // '<p><strong>' + e.username + '</strong>' + ': ' + e.message + '</p>' +
        // '<div class="chat-container darker">',
        // '   <img src="" alt="Avatar" style="width:100%;">',
        // '      <p> ' + e.username + ' : ' + e.message + ' </p>',
        // '     <span class="time-right">11:00</span>',
        // ' </div>');
        // $('#username').val('');

        // var html2 = '';
        // html2 += '<div class="chat-container darker ">'
        // html2 += '   <img  src="https://t4.ftcdn.net/jpg/03/64/21/11/360_F_364211147_1qgLVxv1Tcq0Ohz3FawUfrtONzz8nq3e.jpg" alt="Avatar" style="width:50px;height: 50px;border-radius: 50%">'
        // html2 += '      <p> ' + e.message + ' </p>'
        // html2 += '     <span class="time-right">11:00</span>'
        // html2 += ' </div>'
        //
        // $('#recent_messages').append(html2);

        $('#message').val('');
    });



