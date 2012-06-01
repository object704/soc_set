function sendMsg(){
    var id_to1 = document.getElementById("id_to").value;
    var letter1 = document.getElementById("usermsg").value;
    
    $.get("sendMsg.php",
        {id_from:getcookie("id_user"), id_to:id_to1, tema:"", letter:letter1},
        function(data){
            document.getElementById("usermsg").value = "";
        }
    );
}
function onEnterCtrlPr(){
    //alert(event.keyCode);
    if(event.keyCode==13 && event.ctrlKey)
        sendMsg();
}
function removeMsg(id_msg){
    $.get("removeMsg.php",
        {id:id_msg},
        function(data){
            document.getElementById("listdiv").removeChild(document.getElementById("d"+id_msg));
        }
    );
}

var f='true';//флаг=тру означает получить все сообщения, которые есть. фэлс - получать сообщения за прошедшие 5 секунд
var user_name="";
var user_name_with="";

$(document).ready(function() {
    $.getJSON("getNames.php",
        {id1:getcookie("id_user"), id2: document.getElementById("id_to").value},
        function(data){
            user_name = data[0];
            user_name_with = data[1];
            
            $("#sendMsgBtn").button();
            getMsgs();
        }
    );
});

function getMsgs(){
    //alert(1);
    
    $.getJSON("getMessages.php", {all:f, id_user: getcookie("id_user"), id_user_with: document.getElementById("id_to").value}, 
        function(data){
            //alert(data[0]);
            var kol = data[0];
            var i=1;
            for(i=1;i<=kol;i++){
                var msgdiv = document.createElement("div");
                var fname = document.createElement("div");
                var msg_close_theme = document.createElement("div");
                var theme_close = document.createElement("div");
                var theme_msg = document.createElement("div");
                var close = document.createElement("div");
                
                msgdiv.className = "msgdiv";
                fname.className = "fname";
                msg_close_theme.className = "msg_close_theme";
                theme_close.className = "theme_close";
                theme_msg.className = "theme_msg";
                close.className = "close";
                
                if(data[i].id_from == getcookie("id_user")) fname.innerHTML = user_name+":";
                else fname.innerHTML = user_name_with+":";
                if(data[i].tema != "") theme_msg.innerHTML = data[i].tema+"<br>"+data[i].letter;
                else theme_msg.innerHTML = data[i].letter;
                close.innerHTML = 'x';
                msgdiv.id = "d"+data[i].id_msg;
                close.id = "c"+data[i].id_msg;
                close.onclick="removeMsg("+data[i].id_msg+");";
                
                msgdiv.appendChild(fname);
                msgdiv.appendChild(msg_close_theme);
                msg_close_theme.appendChild(theme_close);
                theme_close.appendChild(theme_msg);
                theme_close.appendChild(close);
                document.getElementById("listdiv").appendChild(msgdiv);
            }
            if(kol){
                var vm=document.getElementById("listdiv");
                vm.scrollTop = vm.scrollHeight;
            }
        });
    f='false';
    
    setTimeout(getMsgs, 5000);
}