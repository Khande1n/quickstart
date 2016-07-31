function ExecuteScript(strId)
{
  switch (strId)
  {
      case "5ZjGGa8bx7a":
        Script1();
        break;
  }
}

function Script1()
{
  console.log(" Javascript has started ");

var player = GetPlayer();
var profileName = player.GetVar("profileName");
var email = player.GetVar("email");
var password = player.GetVar("password");

console.log(profileName, email, password);

function myData(data) {
	console.log(data);
 }

$.ajax({
  	url : 'http://localhost:8888/profile?callback?',
  	data : {
		profileName: profileName,
		email: email,
		password: password
	},
	type : 'GET',
	crossDomain: true,
	jsonp: 'myData',
	dataType : 'jsonp',
	success: function(data){
		console.log("Done");
	},
	error: function(data){
		console.log("Errror he ji");
	},

});
console.log("ajax sent");

}

