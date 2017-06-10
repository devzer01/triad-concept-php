/**
 * Created by nayana on 1/6/2560.
 */
$(document).ready(function (e) {
    $(".connect").click(function (e) {
        var topic = $("#topic").val();
        if (topic.trim() === "") {
            document.location.href = '?action=channel&id=1';
            return;
        }
        var options = {
            url: '/?action=connect',
            data: { topic: topic, x: "ignored" },
            method: 'POST',
            dataType: 'json'
        };
        $.ajax(options).then(function (e) {
            if (e.id > 0) {
                document.location.href = '?action=channel&id=' + e.id;
            }
        });
    });

    if ($("#send")[0] !== undefined) {
        window.setInterval(function () {
            refreshChatBox($("#send").data('topic-id'));
        }, 3000);


        $("#send").click(function (e) {
            var msg = $("#msg").val();
            var id = $(this).data("topic-id");
            var options = {
                url: '/?action=chat',
                data: { topic_id: id, msg: msg },
                method: 'POST',
                dataType: 'json'
            };
            $.ajax(options).then(function (e) {
                $("#msg").val("");
                appendMessage( { msg: msg, sender: "me" } );
            });

        });

        $(".join").click(function (e) {
            var topic = $(this).data('topic');
            var topic_id = $(this).data('id');
            $("#send").data('topic-id', topic_id);
            $("#send").data('topic', topic);
            $("#title").html('"<i>' + topic + '</i>"');
            refreshChatBox(topic_id);

            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            }
        });
    } else {
        $(".join").click(function (e) {
            document.location.href = '?action=channel&id=' + $(this).data("id");
        });
    }
});

function refreshChatBox(topic_id) {
    var options = {
        url: '/?action=msgs',
        data: { id: topic_id },
        method: 'POST',
        dataType: 'json'
    };
    $.ajax(options).then(function (e) {
        $("#msg-container").html("");
        $.each(e.msgs, function (k, v) { appendMessage(v); });
    });
}

function appendMessage(v) {
    $("#msg-container").append("<p class='message'>" + v.sender + ': ' + v.msg + "</p>");
}