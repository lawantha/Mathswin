// implement leaderboard function when page loading
window.onload = leaderBoard();

//sign up function
function signUp(){
	
    var email = document.getElementById("email");
    var password = document.getElementById("password");
	var username = document.getElementById("username");
	var profilepic = document.getElementById("contentFile").files[0];

	//START auth signup with email and password
    firebase.auth().createUserWithEmailAndPassword(email.value, password.value)
	  .then((userCredential) => {
		// Signed in 
		var user = userCredential.user;
		var userId = firebase.auth().currentUser.uid;
		
			// START db write new user data
			firebase.database().ref('users/' + userId).set({
			username: username.value,
			email: email.value,
			score: 0,
			img: 'https://firebasestorage.googleapis.com/v0/b/mathswin-c1317.appspot.com/o/images%2Fuser.png?alt=media&token=35202115-9f1e-4746-9024-9dd8bbc79bbd'
		    }).catch((error) => {
				// An error happened.
				var errorCode = error.code;
				var errorMessage = error.message;
				alert(errorMessage);
			});
			// END db write new user data
			
		// call upload image function to upload profile picture
		// if user not selected a profile picture then it upload a default picture 
		if(profilepic != null || profilepic =='undefined'){
			uploadimg(userId);
		}
		alert("Signed up successfully");
		// Sleep for the number of seconds until the upload image function compile
		sleep(4000).then(() => {
			window.location.href = "login.php";
		});
		}).catch((error) => {
			// An error happened.
			var errorCode = error.code;
			var errorMessage = error.message;
			alert(errorMessage);
		});
	  //END signup with email and password

  }
  
  
//log in function
function login(){
	var email = document.getElementById("email");
	var password = document.getElementById("password");

//START auth signin with email and password
	firebase.auth().signInWithEmailAndPassword(email.value, password.value)
	  .then((userCredential) => {
		// Signed in
			var user = userCredential.user;
			var userId = firebase.auth().currentUser.uid;
			
			alert("logged in");
			document.cookie = "userId="+userId;
			
			// call get data function to obtain user data
			getData(userId);
			
			// Sleep for the number of seconds until the get data function compile
			sleep(1000).then(() => {
				//go to location after sleep time
				window.location.href = "index.php";
			});
		}).catch((error) => {
			// An error happened.
			var errorCode = error.code;
			var errorMessage = error.message;
			alert(errorMessage);
	    });
		//END auth signin with email and password
}


//upload images function
function uploadimg(uid){
	
	var profilepic = document.getElementById("contentFile").files[0];
	// metadata [getting the type of the file]
	const metadata = {
		'contentType': profilepic.type
	  };
	  
	  // START storage on complete
	  firebase.storage().ref().child('images/' + uid).put(profilepic, metadata)
		.then((snapshot) => {
		  console.log('Uploaded', snapshot.totalBytes, 'bytes.');
		  console.log('File metadata:', snapshot.metadata);
		  
			// Obtain a download URL for the file.
			snapshot.ref.getDownloadURL().then((url) => {
			console.log('File available at', url);
			
			db.ref('users/' + uid).update({
				img: url
				}).catch((error) => {
					// An error happened.
					var errorCode = error.code;
					var errorMessage = error.message;
					alert(errorMessage);
				});
			
			// store profile picture url to cookies
			var imgURL = url.replace('https://firebasestorage.googleapis.com/v0/b/mathswin-c1317.appspot.com/o/images%2F', ' ')
			document.cookie = "propic="+imgURL;
		  
			});
		}).catch((error) => {
			// An error happened.
			console.error('Upload failed', error);
		});
	  // END storage on complete.
	  var bool = 'true';
}
  
  
//get data function
function getData(uid){
	
	var uid = getCookie("userId");
	
	// START reading values from database
	db.ref().child("users").child(uid).get().then((snapshot) => {
	  if (snapshot.exists()) {
		var username = (snapshot.val() && snapshot.val().username);
		var email = (snapshot.val() && snapshot.val().email);
		var score = (snapshot.val() && snapshot.val().score);
		var img = (snapshot.val() && snapshot.val().img);
		var imgURL = img.replace('https://firebasestorage.googleapis.com/v0/b/mathswin-c1317.appspot.com/o/images%2F', ' ')
		
		// store  data get from database(user name, score, profile picture url) to cookies
		document.cookie = "userName="+username;
		document.cookie = "score="+score;
		document.cookie = "propic="+imgURL;
	  } else {
			// db is empty
			console.log("No data available");
	  }
	}).catch((error) => {
		// An error happened.
		var errorCode = error.code;
		var errorMessage = error.message;
		console.log(errorMessage);
	});
	// END reading values from database
}



//submit answer function
function SubmitAnswe(){
	//obtaining id sent via url
	var urlParams = new URLSearchParams(window.location.search);
	var mod = urlParams.get('mod');
	// Obtain a download URL for the file. marks from cookies
	var score = getCookie("score");
	var ans4 = getCookie("ans4");
	// Obtain user input answer
	var answer = document.getElementById("answer").value;
	
	// check user input answer
	if(answer==ans4){
		// increase marks by 1 if answer is correct
		alert("answer is correct '+1' ");
		score++
		// call update function to update score to database
		update(score)
		// Sleep for the number of seconds until the upload image function compile
		sleep(500).then(() => {
			window.location.href = "gameGUI.php?mod="+mod;
		});
		
	}else{
		// decrease marks by 1 if answer is wrong
		alert("answer is wrong '-1' ");
		score--
		// call update function to update score to database
		update(score)
		// Sleep for the number of seconds until the upload image function compile
		sleep(500).then(() => {
			//back to the game window
			window.location.href = "gameGUI.php?mod="+mod;
		});
	}
}


//firbase database update score function
function update(score){
	console.log("........score.....");
	var uid = getCookie("userId");
	
	// update data to the database
	db.ref('users/'+uid).update({
			score: score
		    }).catch((error) => {
				// An error happened.
				var errorCode = error.code;
				var errorMessage = error.message;
		    });
		// call get data function to obtain updated data from database
		getData(uid);
}

//firbase database update profile function
function updateProfile(){
	var uid = getCookie("userId");
	var username = document.getElementById("newUsername");
	var profilepic = document.getElementById("contentFile").files[0];
	
	// upload image
	if(profilepic != null || profilepic =='undefined'){
			uploadimg(uid);
		}
		
	// update data to the database
	db.ref('users/'+uid).update({
			username: username.value
		    }).catch((error) => {
				// An error happened.
				var errorCode = error.code;
				var errorMessage = error.message;
		    });
		console.log("Successfully Updated");
		// call get data function to obtain updated data from database
		getData(uid);
}


//leaderBoard function
function leaderBoard(){
	
	// Obtain user data(user name, score, profile picture url) from the database in ascending order by score
	db.ref("users").orderByChild("score").on("child_added", snapshot => {
	    if (snapshot.exists()) {
			var score = (snapshot.val() && snapshot.val().score);
			var userName = (snapshot.val() && snapshot.val().username);
			var imgURL = (snapshot.val() && snapshot.val().img);
			
			//make leader board using little jquery code
			var edata = '';
			
				edata += '<li class="list-group-item d-flex justify-content-between">';
				edata += '<img class="prof img-circle" src="'+imgURL+'" alt="">';
				edata += userName;
				edata += '<span class="badge badge-primary badge-pill">'+score+'</span>';
				edata += '</li>';
			// use prepend to show data in revers order
			$('#printlist').prepend(edata);
	    } else {
			console.log("No data available");
	    }
	}).catch((error) => {
		// An error happened.
		var errorCode = error.code;
		var errorMessage = error.message;
		console.log(errorMessage);
	});
	console.log('scores');
}


//log out function
function logout(){
	//should initializeApp again since navbar stored as a separate file
	firebase.initializeApp(firebaseConfig);
	// START auth sign out
	firebase.auth().signOut().then(() => {
	  // Sign-out successful.
		window.location.href = "index.php";
		// remove all stored cookies
		var cookies = document.cookie.split(";");
		for (var i = 0; i < cookies.length; i++) {
			var cookie = cookies[i];
			var eqPos = cookie.indexOf("=");
			var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
			document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
		}
		alert('logout successfully');
	}).catch((error) => {
	  // An error happened.
		var errorCode = error.code;
		var errorMessage = error.message;
		alert(errorMessage);
	});
}



//get cookies function
function getCookie(cname) {
  let name = cname + "=";
  // decoded Cookies 
  let decodedCookie = decodeURIComponent(document.cookie);
  
  // without decoded Cookies
  let ca = document.cookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}


//sleep time function
function sleep(time) {
  return new Promise((resolve) => setTimeout(resolve, time));
}
