function appendUserList(){
	var target = $("#userlist");
	var data = JSON.parse(users);
	$.each(data, function(key, value){
		target.append(`<option value="` + value.email + `"` + 
						`label="` + value.email + `"></option>`);
	});
}

function appendUserInfo(){
	var target = $("#user-info");
	var data = JSON.parse(users);
	target.append(`<thead><tr>
            <th>Roles</th>
            <th>Email</th>
            <th>Password</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
          </tr></thead>`);
	$.each(data, function(key,value){
		target.append(`<tr>
						 <td>User</td>
						 <td>` + value.email + `</td>` + 
						`<td>` + `********` + `</td>` + 
						`<td>` + value.firstname + `</td>` + 
						`<td>` + value.lastname + `</td>` + 
						`<td>` + value.phone + `</td>` + 
						`</tr>`)
	});
}

function searchUser(){
	$("#search").click(function(){
		var target = $("#user-info");
		var data = JSON.parse(users);
		var email = $("#userInput").val();
		target.html('');
		if($("#userInput").val()==""){
			appendUserInfo();
		}else{
			target.append(`<thead><tr>
            <th>Roles</th>
            <th>Email</th>
            <th>Password</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
          </tr></thead>`);
			console.log(email);
			$.each(data, function(keys, value){
				if(email == value.email){
					target.append(`<tr>
						 <td>User</td>
						 <td>` + value.email + `</td>` + 
						`<td>` + `********` + `</td>` + 
						`<td>` + value.firstname + `</td>` + 
						`<td>` + value.lastname + `</td>` + 
						`<td>` + value.phone + `</td>` + 
						`</tr>`)
				}
			});
		}
	});
}