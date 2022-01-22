
// web app's Firebase configuration
var firebaseConfig = {
	apiKey: "AIzaSyDqUMbLmg0UPkjgpeF_wg3uXY9JkWpY5eA",
	authDomain: "mathswin-c1317.firebaseapp.com",
	databaseURL: "https://mathswin-c1317-default-rtdb.asia-southeast1.firebasedatabase.app",
	projectId: "mathswin-c1317",
	storageBucket: "mathswin-c1317.appspot.com",
	messagingSenderId: "810297450910",
	appId: "1:810297450910:web:4df66a02359133d7e0368f",
	measurementId: "G-LRZ8009JYS"
	};
	// Initialize Firebase
	firebase.initializeApp(firebaseConfig);
	
	// START db_get_reference
	var db = firebase.database();
	// START db_get_reference
	var storage = firebase.storage();
