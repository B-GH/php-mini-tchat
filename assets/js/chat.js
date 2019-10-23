setInterval( function () { refresh(); }, 3000 );
$('#bloc_messages').scrollTop(1E10);

function refresh() {
  $.ajax(
    {
      type: "POST",
      dataType: "json",
      url: "../controleurs/refresh.php",
      success: function (data) {
        messages = data['messages'];
        users = data['users'];

        var contenu_table_messages = '';
        for (var i = 0; i < messages.length; i++) {
          contenu_table_messages += '<div class="outgoing_msg"><div class="sent_msg">';
          contenu_table_messages += messages[i]['message'] + '<span class="time_date"><b>' + messages[i]['pseudo'] + '</b> | ' + messages[i]['date_post'] + '</span>';
          contenu_table_messages += '</div></div>';
        }
        $('#bloc_messages').html(contenu_table_messages).scrollTop(1E10);

        var contenu_table_users = '';
        for (var i = 0; i < users.length; i++) {
          contenu_table_users += '<li>\n' +
            '<img src="https://i.ibb.co/6JpcfrK/p4.png" alt="">\n' +
            '<span>' + users[i]['pseudo'] + '</span>\n' +
            '<span class="chat-time"> <i class="fas fa-circle text-success" id="back"></i> </span>\n' +
            '</li>\n';
        }
        $('#bloc_users').html(contenu_table_users);
      }
    }
  );
}
