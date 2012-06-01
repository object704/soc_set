function search(){
    //alert(1);
    var fisName = trim(document.getElementById("fisName").value);
    var secName = trim(document.getElementById("secName").value);
    var spec=0;
    var grp=0;
    
    if(document.getElementById("select1").selectedIndex){
        spec = document.getElementById("select1").options[document.getElementById("select1").selectedIndex].value;
        grp = document.getElementById("select2").options[document.getElementById("select2").selectedIndex].value;
    }
    //alert(spec);alert(grp);
    var link;
    var url;
    
    if (window.XMLHttpRequest){
        link = new XMLHttpRequest();
    }else {
        if(window.ActiveXObject){
            var XMLHTTP = ["MSXML2.XMLHTTP.6.0","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP","Microsoft.XMLHTTP"];
            for(var i=0;i<4;i++){
                try{
                    link=new ActiveXObject(XMLHTTP[i]);
                    break;
                }catch(e){};
            }
        }
    }
    if(!link){
        window.alert("Ваш браузер не поддерживает AJAX!");
        return false;
    }
    url="getPeopleSearch.php?fn="+encodeURIComponent(fisName)+"&sn="+encodeURIComponent(secName)+"&id_spec="+spec+"&id_grp="+grp+"&my_id="+getcookie("id_user");
    link.open('GET',url,false);
    link.onreadystatechange = function(){analysisRequestSearch(link);};
    link.send(null);
    //alert(getcookie("id_user"));
}

function analysisRequestSearch(link){
    if(link.readyState == 4){
        if(link.status == 200){
            var json = link.responseText;
            //alert(json);
            var mass = eval('('+ json +')');
            var ins;
            ins = document.getElementById("searchList");
            while (ins.childNodes.length) {
                ins.removeChild(ins.firstChild);
            }
            
            if(mass[0]==0){
                var d = document.createElement("div");
                d.id = "nothingSearched";
                d.innerHTML = "<center><br><br><br><br><br>Ничего не найдено</center>";
                document.getElementById("searchList").appendChild(d);
            }
            
            for(i=1;i<=mass[0];i++){
                var divMain = document.createElement("div");
                divMain.className="main-man-div";
                var foto = document.createElement("div");
                foto.className = "foto-man-div";
                var fgsbtn = document.createElement("div");
                fgsbtn.className = "fgs-btn-man-div";
                var fgs = document.createElement("div");
                fgsbtn.className = "fgs-man-div";
                var fio = document.createElement("div");
                fio.className = "fio-man-div";
                var grp = document.createElement("div");
                grp.className = "grp-man-div";
                var status = document.createElement("div");
                status.className = "status-man-div";
                var btn = document.createElement("div");
                btn.className = "btn-man-div";
                var btn1 = document.createElement("div");
                btn1.className = "btn1-man-div";
                var btn2 = document.createElement("div");
                btn2.className = "btn2-man-div";
                
                fio.innerHTML = '<a href="user.php?id='+mass[i]["id"]+'">'+mass[i]["fsname"]+'</a>';
                foto.innerHTML = '<a href="user.php?id='+mass[i]["id"]+'">'+'<img src="users/'+mass[i]["id"]+'/avaSmall.jpg">'+'</a>';
                grp.innerHTML = mass[i]["grp"];
                status.innerHTML = mass[i]["status"];
                //btn1.innerHTML = "12345";
                /*btn1.innerHTML = '<input type="button" value="Написать сообщение" onclick="" class="textBtn">';
                if(mass[i]["flag_friend"]==2){
                    btn2.innerHTML = '<input type="button" value="Отменить заявку" onclick="cancelZF('+getcookie("id_user")+', '+mass[i]["id"]+', "b'+mass[i]["id"]+'");" class="textBtn" id="b'+mass[i]["id"]+'">';
                }else if(mass[i]["flag_friend"]==1){
                    
                }else if(mass[i]["flag_friend"]==0){
                    
                }
                */
                fgs.appendChild(fio);
                fgs.appendChild(grp);
                fgs.appendChild(status);
                fgsbtn.appendChild(fgs);
                fgsbtn.appendChild(btn);
                divMain.appendChild(foto);
                divMain.appendChild(fgsbtn);
                
                document.getElementById("searchList").appendChild(divMain);
            }
            //$("head").append("<link rel='stylesheet' href='../css/main.css'  type='text/css'>");
            //document.getElementById("searchBtn").nodeValue = "Подождите";
            //устанавливаем высоту searchPanel
            var hl = $("#searchList").css("height");
            var hp = $("#searchPanel").css("height");
            var i=0;
            var hl1="";
            var hp1="";
            //убираем px из height
            while(hl[i]!='p'){
                hl1+=hl[i]+"";
                i++;
            }

            i=0;
            //убираем px из height
            while(hp[i]!='p'){
                hp1+=hp[i]+"";
                i++;
            }
            if(hp1<=hl1) {
                $("#searchPanel").css("height",hl1);
                //$("#context").css("height",hl1);
            }
            else $("#searchPanel").css("height",$("#searchForm").css("height"));
            //alert($("#searchForm").css("height"));
            
        }else alert("error");
    }
}
/*
function addZF(userID, z_friendID, bid){
    //alert(userID+" "+z_friendID);
    $.get("addZF.php", {u_id: userID, zf_id: z_friendID},
        function(data){
            //alert(data);
            if(data=="2"){
                document.getElementById(bid).value="Отменить заявку";
                document.getElementById(bid).onclick="cancelZF("+userID+", "+z_friendID+", "+bid+");"
            }else if(data=="1"){
                document.getElementById(bid).value="Убрать из друзей";
                document.getElementById(bid).onclick="cancelF("+userID+", "+z_friendID+", "+bid+");"
            }else if(data=="0"){
                alert("error");
            }
        }
    );
}

function cancelZF(userID, z_friendID, bid){
    //alert(userID+"-"+z_friendID);
    $.get("cancelZF.php", {u_id: userID, zf_id: z_friendID},
        function(data){
            //alert(data);
            if(data=="1"){
                document.getElementById(bid).value="Добавить в друзья";
                document.getElementById(bid).onclick="addZF("+userID+", "+z_friendID+", "+bid+");"
            }else {
                alert("error");
            }
        }
    );
}

function cancelF(userID, friendID, bid){
    //alert(userID+"+"+friendID);
    $.get("cancelF.php", {u_id: userID, f_id: friendID},
        function(data){
            //alert(data);
            if(data=="1"){
                document.getElementById(bid).value="Добавить в друзья";
                document.getElementById(bid).onclick="addZF("+userID+", "+friendID+", "+bid+");"
            }else {
                alert("error");
            }
        }
    );
}
*/