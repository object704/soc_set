function addZF(userID, z_friendID, b){
    //alert(userID+" "+z_friendID);
    $.get("addZF.php", {u_id: userID, zf_id: z_friendID},
        function(data){
            /*
            if(data=="2"){
                document.getElementById("buttonFriend").value="Отменить заявку";
                document.getElementById("buttonFriend").onclick="cancelZF("+userID+", "+z_friendID+");"
                //document.getElementById("buttonFriend").addEventListener("click", cancelZF(userID,z_friendID), false)
            }else if(data=="1"){
                document.getElementById("buttonFriend").value="Убрать из друзей";
                document.getElementById("buttonFriend").onclick="cancelF("+userID+", "+z_friendID+");"
            }else if(data=="0"){
                alert("error");
            }*/
            if(data=="0"){
                alert("error");
            }else{
                document.getElementById("friendBtnDiv").removeChild(document.getElementById("buttonFriend"));
                var d = document.createElement("div");
                d.id="vmestoBtn";
                if(data=="1")
                    d.innerHTML = "<center>В друзьях</center>";
                else
                    d.innerHTML = "<center>Вы подали заявку в друзья</center>";
                document.getElementById("friendBtnDiv").appendChild(d);
                $("#vmestoBtn").css("height","24px");   
            }
        }
    );
}

function cancelZF(userID, z_friendID, b){
    //alert(userID+"-"+z_friendID);
    $.get("cancelZF.php", {u_id: userID, zf_id: z_friendID},
        function(data){
            //alert(data);
            /*
            if(data=="1"){
                document.getElementById("buttonFriend").value="Добавить в друзья";
                document.getElementById("buttonFriend").onclick="addZF("+userID+", "+z_friendID+");"
            }else {
                alert("error");
            }*/
            if(data!="1"){
                alert("error");
            }else{
                document.getElementById("friendBtnDiv").removeChild(document.getElementById("buttonFriend"));
                var d = document.createElement("div");
                d.id="vmestoBtn";
                d.innerHTML = "<center>Вы отменили заявку</center>";
                document.getElementById("friendBtnDiv").appendChild(d);
                $("#vmestoBtn").css("height","24px");
            }
        }
    );
}

function cancelF(userID, friendID, b){
    //alert(userID+"+"+friendID);
    $.get("cancelF.php", {u_id: userID, f_id: friendID},
        function(data){
            //alert(data);
            /*
            if(data=="1"){
                document.getElementById("buttonFriend").value="Добавить в друзья";
                document.getElementById("buttonFriend").onclick="addZF("+userID+", "+friendID+");"
            }else {
                alert("error");
            }*/
            if(data!="1"){
                alert("error");
            }else{
                document.getElementById("friendBtnDiv").removeChild(document.getElementById("buttonFriend"));
                var d = document.createElement("div");
                d.id="vmestoBtn";
                d.innerHTML = "<center>Вы удалили из друзей</center>";
                document.getElementById("friendBtnDiv").appendChild(d);
                $("#vmestoBtn").css("height","24px");
                
            }
        }
    );
}
