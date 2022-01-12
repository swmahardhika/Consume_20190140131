function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
	localStorage.setItem("nama",profile.getName());
	localStorage.setItem("image",profile.getImageUrl());
	localStorage.setItem("email", profile.getEmail());
}

function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    console.log(gapi.auth2);
    auth2.signOut().then(function() {
    alert("User signed out");
    localStorage.removeItem("nama");
    localStorage.removeItem("image");
    localStorage.removeItem("email");
    window.location.href="/";
    })
    .catch(error => {console.log(error)});
}

function onLoad(){
    gapi.load("auth2", function(){
        gapi.auth2.init();
        
    })
}
$("#user").ready(function () {
	var user = document.getElementById("user")
	user.innerHTML = `Selamat Datang, ${localStorage.getItem("nama")}`
});