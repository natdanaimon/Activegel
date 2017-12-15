function notification() {
    $.ajax({
        type: 'GET',
        url: 'controller/notificationController.php?func=listNotify',
        beforeSend: function ()
        {
            //$('#se-pre-con').fadeIn(100);
        },
        success: function (data) {
            //debugger;
//            alert(1);
            if (data == '') {
                $('#noti-customer').text("");
                $('#noti-question').text("");

                $('#count-noti-h').text("");
                $('#count-noti-d').text("");
                $('#css_count-noti-h').attr("class", "");
                $("#ul-ddl-noti").attr("style", "height:255px");
                $("#ul-ddl-noti-d").attr("style", "height:200px");
                return;
            }
            var res = JSON.parse(data);
            var count = 0;
            var newsletter = 0;

            var pxRow = 55;
//            debugger;
            $("#ul-ddl-noti-d").empty();
            $.each(res, function (i, item) {
//                debugger;
                var li = '';
                li += '<li><a href="' + noti_link(item.act) + '"> ';
                li += '  <span class="time">' + item.time + '</span> ';
                li += '    <span class="details"> ';
                li += '       <span class="label label-sm label-icon ' + noti_label_bs3(item.act) + '"> ';
                li += '            <i class="fa ' + noti_icon(item.act) + '"></i> ';
                li += '       </span> ' + item.text + '</span> ';
                li += '</a></li>';
                $("#ul-ddl-noti-d").append(li);
                count++;

                newsletter += noti_newsletter(item.act);
//                deposit += noti_dp(item.act);
//                withdraw += noti_wd(item.act);




            });
            $('#count-noti-h').text(count);
            $('#count-noti-d').text(count);
            $('#css_count-noti-h').attr("class", "badge badge-default");

            $("#ul-ddl-noti").attr("style", "height: auto");
//            $("#ul-ddl-noti-d").attr("style", "height:" + pxRow * count + "px");
            $("#ul-ddl-noti-d").attr("style", "height:255px");

            //left menu
            var nagie_bet = newsletter;

            $('#noti-question').text((newsletter > 0 ? newsletter : ""));
            $('#noti-customer').text((nagie_bet > 0 ? nagie_bet : ""));

            //sound
            if (count > 0) {
                var x = document.getElementById("NotiAudio");
//                x.play();

            }


        },
        error: function (data) {

        }

    });

    function noti_label_bs3(act) {
//        if (act == "REG") {
//            return "label-success";
//        } else if (act == "DP") {
//            return "label-info";
//        } else 
        if (act == "QUEST") {
            return "label-danger";
        }
    }
    function noti_icon(act) {
//        if (act == "REG") {
//            return "fa-user";
//        } else if (act == "DP") {
//            return "fa-bell-o";
//        } else 
        if (act == "QUEST") {
            return "fa-bell-o";
        }
    }
    function noti_link(act) {
        if (act == "QUEST") {
            return "cus_question.php";
        }
    }

    function noti_newsletter(act) {
        if (act == "QUEST") {
            return 1;
        } else {
            return 0;
        }
    }

    function noti_dp(act) {
        if (act == "DP") {
            return 1;
        } else {
            return 0;
        }
    }

    function noti_wd(act) {
        if (act == "WD") {
            return 1;
        } else {
            return 0;
        }
    }

}