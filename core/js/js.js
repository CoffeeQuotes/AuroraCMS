function getSelectedText(){
  if(window.getSelection)txt=window.getSelection();
  else if(window.document.getSelection)txt=window.document.getSelection();
  else if(window.document.selection)txt=window.document.selection.createRange().text;
  return txt;
}
function serialize(form){
  let requestArray=[];
  form.querySelectorAll('[name]').forEach((elem)=>{
    requestArray.push(elem.name+'='+elem.value);
  });
  if(requestArray.length > 0)return requestArray.join('&');else return false;
}
function quickview(src,el){
  document.getElementById('quickview-image').setAttribute('src',src);
  var elh=document.querySelectorAll(".quickview-thumbs img");
  elh.forEach(function(elItem){elItem.classList.remove("active")});
  el.classList.add('active');
}
document.addEventListener("submit",function(event){
	if(event.target.closest('.auroraForm')){
    event.preventDefault();
		var formType=event.target.closest('.auroraForm').getAttribute("data-formtype");
    var formButtonText=document.querySelector('#'+formType+'-btn').innerHTML;
    var formAction=event.target.closest('.auroraForm').getAttribute("action");
    var formSerialized=serialize(event.target.closest('.auroraForm'));
    document.querySelector('#'+formType+'-btn').innerHTML='<i class="i i-spin"><svg role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14"><path d="m 4.62,11.2 q 0,0.525 -0.371875,0.8925 Q 3.87625,12.46 3.36,12.46 2.835,12.46 2.4675,12.0925 2.1,11.725 2.1,11.2 2.1,10.675 2.4675,10.3075 2.835,9.94 3.36,9.94 3.87625,9.94 4.248125,10.3075 4.62,10.675 4.62,11.2 z m 3.78,1.68 q 0,0.46375 -0.328125,0.791875 Q 7.74375,14 7.28,14 6.81625,14 6.488125,13.671875 6.16,13.34375 6.16,12.88 6.16,12.41625 6.488125,12.088125 6.81625,11.76 7.28,11.76 q 0.46375,0 0.791875,0.328125 Q 8.4,12.41625 8.4,12.88 z M 3.08,7.28 Q 3.08,7.8575 2.66875,8.26875 2.2575,8.68 1.68,8.68 1.1025,8.68 0.69125,8.26875 0.28,7.8575 0.28,7.28 0.28,6.7025 0.69125,6.29125 1.1025,5.88 1.68,5.88 2.2575,5.88 2.66875,6.29125 3.08,6.7025 3.08,7.28 z m 9.1,3.92 q 0,0.4025 -0.28875,0.69125 Q 11.6025,12.18 11.2,12.18 10.7975,12.18 10.50875,11.89125 10.22,11.6025 10.22,11.2 q 0,-0.4025 0.28875,-0.69125 Q 10.7975,10.22 11.2,10.22 q 0.4025,0 0.69125,0.28875 Q 12.18,10.7975 12.18,11.2 z M 4.9,3.36 Q 4.9,3.99875 4.449375,4.449375 3.99875,4.9 3.36,4.9 2.72125,4.9 2.270625,4.449375 1.82,3.99875 1.82,3.36 1.82,2.72125 2.270625,2.270625 2.72125,1.82 3.36,1.82 3.99875,1.82 4.449375,2.270625 4.9,2.72125 4.9,3.36 z M 8.96,1.68 q 0,0.7 -0.49,1.19 Q 7.98,3.36 7.28,3.36 6.58,3.36 6.09,2.87 5.6,2.38 5.6,1.68 5.6,0.98 6.09,0.49 6.58,0 7.28,0 7.98,0 8.47,0.49 8.96,0.98 8.96,1.68 z m 4.76,5.6 q 0,0.35 -0.245,0.595 Q 13.23,8.12 12.88,8.12 12.53,8.12 12.285,7.875 12.04,7.63 12.04,7.28 12.04,6.93 12.285,6.685 12.53,6.44 12.88,6.44 q 0.35,0 0.595,0.245 Q 13.72,6.93 13.72,7.28 z M 11.9,3.36 q 0,0.28875 -0.205625,0.494375 Q 11.48875,4.06 11.2,4.06 10.91125,4.06 10.705625,3.854375 10.5,3.64875 10.5,3.36 10.5,3.07125 10.705625,2.865625 10.91125,2.66 11.2,2.66 q 0.28875,0 0.494375,0.205625 Q 11.9,3.07125 11.9,3.36 z"/></svg></i>';
		fetch(formAction,{
      method:event.target.closest('.auroraForm').getAttribute("method"),
			headers:{"Content-type":"application/x-www-form-urlencoded; charset=UTF-8"},
			body:formSerialized
    }).then(function(response){
      return response.text();
    }).then(function(r){
			var action=r.split("|");
			var el=document.getElementById(action[0]);
			var notification=document.createElement(action[1]);
			notification.className=action[3];
			notification.innerHTML=action[4];
      if(document.querySelector(".not")!=null)document.querySelector('.not').remove();
			if(action[2]=='prepend')el.insertBefore(notification,el.firstChild);
			else if(action[2]=='append')el.appendChild(notification);
			else if(action[2]=='after')el.after(notification);
			else if(action[2]=='before')el.before(notification);
			else if(action[2]=='replace')el.innerHTML=`<`+action[1]+` class="`+action[3]+`">`+action[4]+`</`+action[1]+`>`;
      if(action[2]!='replace')document.querySelector('#'+formType+'-btn').innerHTML=formButtonText;
		});
	}
});
document.addEventListener('click',function(event){
  if(event.target.closest(".banner-dismiss")){
    event.preventDefault();
    var banner=document.querySelector('.banner').getAttribute("data-banner")
    document.querySelector("#banner").classList.add("slide-out-bottom");
    localStorage.setItem("banner"+banner+"Closed","true");
  }
	if(event.target.closest('.opener'))event.target.parentElement.classList.toggle("open");
	if(event.target.closest('.auroraForm')){
		var formType=event.target.closest('.auroraForm').getAttribute("data-formtype");
		document.querySelector('#'+formType+'-btn').removeAttribute('disabled');
	}
	if(event.target.closest('.getquote')){
		var id=event.target.getAttribute("data-postid");
		var quote=getSelectedText();
		if(quote=='')quote=document.querySelector('#forum-post-'+id).innerHTML;
		var user=document.querySelector('#forum-user-'+id).innerHTML;
		$('#da').summernote('pasteHTML','<blockquote><cite>'+user+' wrote:</cite>'+quote+'</blockquote>');
	}
	if(event.target.closest('.addCart')){
		fetch('core/add_cart.php',{
			method:"POST",
			headers:{"Content-type":"application/x-www-form-urlencoded; charset=UTF-8"},
	  	body:'id='+document.querySelector('.addCart').getAttribute("data-cartid")+'&cid='+document.querySelector('.addCart').getAttribute("data-cartchoice")
		}).then(function(response){
			return response.json();
		}).then(function(j){
			if(j=='nomore'){
				alert('Purchase Limit Reached!');
			}else{
				document.querySelector('.cart').innerHTML=j;
				var cartage=document.querySelector('#cartage');
				var sidecart=document.querySelector('#sidecart')
				if(cartage.hasChildNodes()){
					fetch('core/update_cartage.php').then(function(r){
						return r.text();
					}).then(function(html){
						sidecart.classList.remove('d-none');
						sidecart.classList.remove('jello');
						sidecart.classList.add('jello');
						cartage.innerHTML=html;
					});
				}
			}
		});
	}
});
function clean0(timeto0){
	if(timeto0 < 10)var timeto0='0'+timeto0;
	else var timeto0=timeto0;
	return timeto0;
}
function countdown(){
	var enddate=document.getElementById("countdownDateEnd").value;
	if(enddate!=''){
		var countDownDate=new Date(enddate).getTime();
		var x=setInterval(function(){
			var now=new Date().getTime();
			var distance=countDownDate - now;
			var days=Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours=Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes=Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds=Math.floor((distance % (1000 * 60)) / 1000);
			var days=clean0(days);
			var hours=clean0(hours);
			var minutes=clean0(minutes);
			var seconds=clean0(seconds);
			document.getElementById("countdownDays").innerHTML=days+"<small>Days</small>";
			document.getElementById("countdownHours").innerHTML=hours+"<small>Hours</small>";
			document.getElementById("countdownMinutes").innerHTML=minutes+"<small>Minutes</small>";
			document.getElementById("countdownSeconds").innerHTML=seconds+"<small>Seconds</small>";
			if(distance < 0){
				clearInterval(x);
				document.getElementById("countdowninfo").innerHTML="EXPIRED";
			}
		},1000);
	}else document.getElementById("countdowninfo").innerHTML="EXPIRED";
}
function updateChat(){
  chatTimer=null;
  fetch("core/chat.php",{
    method:"POST",
    headers:{"Content-type":"application/x-www-form-urlencoded;charset=UTF-8"},
    body:"sid="+document.querySelector(`#chatsid`).value
  }).then(function(response){
    return response.text();
  }).then(function(data){
    if(data!=`none`){
      if(data!="|*|*|*|*|*|")document.querySelector("#chatScreen").innerHTML=data;
      if(data!="")document.querySelector("#chatBody").classList.remove("d-none");
      document.querySelector("#chatScreen").scrollTop=9999999;
    }
  });
  clearTimeout(chatTimer);
  chatTimer=setTimeout(function(){updateChat();},2500);
}
function initChat(){
  chatTimer=null;
  fetch("core/chat.php",{
    method:"POST",
    headers:{"Content-type":"application/x-www-form-urlencoded;charset=UTF-8"},
    body:"sid="+document.querySelector(`#chatsid`).value
  }).then(function(response){
    return response.text();
  }).then(function(data){
    if(data!=`none`){
      if(data!="|*|*|*|*|*|")document.querySelector("#chatScreen").innerHTML=data;
      if(data!=""){
        document.querySelector("#chatBody").classList.remove("d-none");
        document.querySelector(".chat-close").classList.toggle("d-none");
        document.querySelector(".chat-open").classList.toggle("d-none");
      }
      if(document.querySelector("#chatBody").classList.contains("d-none")){
        clearTimeout(chatTimer);
      }else{
        var elh=document.querySelectorAll(".chathideme,.chatunhideme");
        elh.forEach(function(elItem){elItem.classList.toggle("d-none")});
        clearTimeout(chatTimer);
      }
    }
    document.querySelector("#chatScreen").scrollTop=9999999;
  });
}
document.addEventListener("DOMContentLoaded",function(event){
  if(document.getElementById("chatHeader") != null){
    document.getElementById("chatHeader").onclick=function(){
      document.querySelector("#chatBody").classList.toggle("d-none");
      document.querySelector(".chat-close").classList.toggle("d-none");
      document.querySelector(".chat-open").classList.toggle("d-none");
      if(document.getElementById("chatBody").classList.contains("d-none"))clearTimeout(chatTimer);
    }
    document.getElementById("startChat").onclick=function(){
      var chatName=document.querySelector("#chatName").value,
          chatEmail=document.querySelector("#chatEmail").value;
      if(!document.querySelector("#chatNameError").classList.contains("d-none"))document.querySelector("#chatNameError").classList.add('d-none');
      if(!document.querySelector("#chatEmailError").classList.contains("d-none"))document.querySelector("#chatEmailError").classList.add('d-none');
      if(chatName==''||chatEmail==''){
        if(chatName=='')document.querySelector("#chatNameError").classList.remove('d-none');
        if(chatEmail=='')document.querySelector("#chatEmailError").classList.remove('d-none');
      }else{
        if(!chatEmail.match( /^[^\s@]+@[^\s@]+\.[^\s@]+$/ )){
          document.querySelector("#chatEmailError").classList.remove('d-none');
        }else{
          fetch("core/chat.php",{
            method:"POST",
            headers:{"Content-type":"application/x-www-form-urlencoded;charset=UTF-8"},
            body:"sid="+document.querySelector("#chatsid").value+"&who="+document.querySelector("#chatwho").value+"&name="+chatName+"&email="+document.querySelector("#chatEmail").value+"&message=|*|*|*|*|*|"
          }).then(function(response){
            return response.text();
          }).then(function(data){
            if(data==`available`&&data!="|*|*|*|*|*|")document.querySelector("#chatScreen").innerHTML=`<ul><li class="admin"><p>Hello `+document.querySelector("#chatName").value+`, how can we assist you?</p></li></ul>`;
            else document.querySelector("#chatScreen").innerHTML=`<ul><li class="admin"><p>Hello `+document.querySelector("#chatName").value+`, there is currently no operators available to assist you, however, you can leave a message that will be stored, along with your email so an operator can contact when available.</p></li></ul>`;
            document.querySelector("#chatScreen").scrollTop=9999999;
            document.querySelector("#chatMessage").value="";
            var elh=document.querySelectorAll(".chathideme,.chatunhideme");
            elh.forEach(function(elItem){elItem.classList.toggle("d-none");});
            clearTimeout(chatTimer);
          });
        }
      }
    }
    document.getElementById("chatButton").onclick=function(){
      fetch("core/chat.php",{
        method:"POST",
        headers:{"Content-type":"application/x-www-form-urlencoded;charset=UTF-8"},
        body:"sid="+document.querySelector("#chatsid").value+"&who="+document.querySelector("#chatwho").value+"&name="+document.querySelector("#chatName").value+"&email="+document.querySelector("#chatEmail").value+"&message="+document.querySelector("#chatMessage").value
      }).then(function(response){
        return response.text();
      }).then(function(data){
        if(data!="|*|*|*|*|*|")document.querySelector("#chatScreen").innerHTML=data;
        document.querySelector("#chatScreen").scrollTop=9999999;
        document.querySelector("#chatMessage").value="";
        clearTimeout(chatTimer);
        chatTimer=setTimeout(function(){updateChat();},2500);
      });
    }
    document.getElementById("chatMessage").onkeyup=function(event){
      if(event.keyCode===13){
        event.preventDefault();
        fetch("core/chat.php",{
          method:"POST",
          headers:{"Content-type":"application/x-www-form-urlencoded;charset=UTF-8"},
          body:"sid="+document.querySelector("#chatsid").value+"&who="+document.querySelector("#chatwho").value+"&name="+document.querySelector("#chatName").value+"&email="+document.querySelector("#chatEmail").value+"&message="+document.querySelector("#chatMessage").value
        }).then(function(response){
          return response.text();
        }).then(function(data){
          if(data!="|*|*|*|*|*|")document.querySelector("#chatScreen").innerHTML=data;
          document.querySelector("#chatScreen").scrollTop=9999999;
          document.querySelector("#chatMessage").value="";
          clearTimeout(chatTimer);
          chatTimer=setTimeout(function(){updateChat();},2500);
        });
      }
    }
  }
});
