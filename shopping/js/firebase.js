function signout(){
firebase.auth().signOut().then(() => {
  // Sign-out successful.
  //alert("Signout successfully!");
  window.location="index1.php";
}).catch((error) => {
  // An error happened.
});
}
function createUser() {
    var email=document.getElementById("userEmail").value;
    var password=document.getElementById("userPassword").value;
    var confirmPassword=document.getElementById("confirmPassword").value;
    var name=document.getElementById("name").value;

    //console.log(name);

    //validate that both passwords are same
    if(password==confirmPassword)
    {
        if(password.length<6 && confirmPassword.length<6)
        {
            
        alert("password must be atleast 6 digits");

        }
        else
        {
            //Here we will write create Account code
        //firebase has its own built in create account method
        //lets start
        //it takes two param first one email and second is password
        //console.log(firebase.auth().createUserWithEmailAndPassword(email,password));
        firebase.auth().createUserWithEmailAndPassword(email,password).then(
            function () {
                //this function executes when account is successfully created
                //console.log(email);
                var user = firebase.auth().currentUser;

                user.updateProfile({
                  displayName:name
                }).then(function() {
                  // Update successful.
                }).catch(function(error) {
                  // An error happened.
                });
                
                window.location="Buyer_login.php";


        }).catch(function (error) {
           //this function handles errors
            var errorCode = error.code;
              var errorMessage = error.message;
              if (errorCode == 'auth/weak-password') {
                alert('The password is too weak.');
              } else {
                alert(errorMessage);
              }
              var email = error.email;
      // The firebase.auth.AuthCredential type that was used.
      var credential = error.credential; 
      // [START_EXCLUDE]
      if (errorCode === 'auth/account-exists-with-different-credential') {
        alert("You have already signed up with a different auth provider for that email.");
        // If you are using multiple auth providers on your app you should handle linking
        // the user's accounts here.
      }
  else if (errorCode === 'auth/auth-domain-config-required') {
    alert("An auth domain configuration is required"); 
      }
      
      else if (errorCode === 'auth/operation-not-allowed') {
          alert("Operation is not allowed");
      }
      else if (errorCode === 'auth/operation-not-supported-in-this-environment') {
          alert("Operation is not supported in this environment");
      }
      
      else if (errorCode === 'auth/unauthorized-domain') {
          alert("Unauthorized domain");
      }
       else {
        console.error(error);
      }

              

        });

        }
        
    }
    else
    {
        //alert when password did not matches
        alert("password does not matches");

    }

}
function GoogleLogin() {
    //first of all create google provider object

    var provider=new firebase.auth.GoogleAuthProvider();
    //Login with popup window
    firebase.auth().signInWithPopup(provider).then(function () {
        //code executes after successful login
        console.log(provider);
        var user = firebase.auth().currentUser;

if (user != null) {
  user.providerData.forEach(function (profile) {
    //console.log("Sign-in provider: " + profile.providerId);
    //console.log("  Provider-specific UID: " + profile.uid);
    //console.log("  Name: " + profile.displayName);
    //console.log("  Email: " + profile.email);
    //console.log("  Photo URL: " + profile.photoURL);
    window.location="index1.php?name="+profile.displayName+"&email="+profile.email;
  });
}
        
    }).catch(function (error) {
        var errorCode = error.code;
        var errorMessage=error.message;
        alert(errorMessage);
        var email = error.email;
      // The firebase.auth.AuthCredential type that was used.
      var credential = error.credential; 
      // [START_EXCLUDE]
      if (errorCode === 'auth/account-exists-with-different-credential') {
        alert("You have already signed up with a different auth provider for that email.");
        // If you are using multiple auth providers on your app you should handle linking
        // the user's accounts here.
      }
  else if (errorCode === 'auth/auth-domain-config-required') {
    alert("An auth domain configuration is required"); 
      }
      else if (errorCode === 'auth/cancelled-popup-request') {
          alert("Popup Google sign in was canceled");
      }
      else if (errorCode === 'auth/operation-not-allowed') {
          alert("Operation is not allowed");
      }
      else if (errorCode === 'auth/operation-not-supported-in-this-environment') {
          alert("Operation is not supported in this environment");
      }
      else if (errorCode === 'auth/popup-blocked') {
          alert("Sign in popup got blocked");
      }
      else if (errorCode === 'auth/popup-closed-by-user') {
          alert("Google sign in popup got cancelled");
      }
      else if (errorCode === 'auth/unauthorized-domain') {
          alert("Unauthorized domain");
      }
       else {
        console.error(error);
      }
    });
}   

function loginUser() {
    var email=document.getElementById("email").value;
    var password=document.getElementById("password").value;

    //firebase have pre built login function
    //it takes two parameters first email and second is password
if(email=="" && password=="")
{
  alert("Please enter details!");
}
else
{

  firebase.auth().fetchSignInMethodsForEmail(email)
  .then((signInMethods) => {
    if (signInMethods.length) {
      // The email already exists in the Auth database. You can check the
      // sign-in methods associated with it by checking signInMethods array.
      // Show the option to sign in with that sign-in method.
      firebase.auth().signInWithEmailAndPassword(email, password)
  .then((userCredential) => {
    // Signed in
    var user = userCredential.user;
    //console.log(user)
    //console.log(userCredential);
    var user = firebase.auth().currentUser;
var name, email, photoUrl, uid, emailVerified;

if (user != null) {
  name = user.displayName;
  email = user.email;
  photoUrl = user.photoURL;
  emailVerified = user.emailVerified;
  uid = user.uid;  // The user's ID, unique to the Firebase project. Do NOT use
                // this value to authenticate with your backend server, if
                   // you have one. Use User.getToken() instead.
  window.location="index1.php?name="+user.displayName+"&email="+user.email;
}
else
{
  alert("Doesnot exist!");
}
    
  })
  .catch((error) => {
    
      var errorCode = error.code;
  var errorMessage = error.message;
  
    var email = error.email;
      // The firebase.auth.AuthCredential type that was used.
      var credential = error.credential; 
      // [START_EXCLUDE]
      if (errorCode === 'auth/account-exists-with-different-credential') {
        alert("You have already signed up with a different auth provider for that email.");
        // If you are using multiple auth providers on your app you should handle linking
        // the user's accounts here.
      }
  else if (errorCode === 'auth/auth-domain-config-required') {
    alert("An auth domain configuration is required"); 
      }
      
      else if (errorCode === 'auth/operation-not-allowed') {
          alert("Operation is not allowed");
      }
      else if (errorCode === 'auth/operation-not-supported-in-this-environment') {
          alert("Operation is not supported in this environment");
      }
      else if (errorCode === 'auth/unauthorized-domain') {
          alert("Unauthorized domain");
      }
      else if(errorCode == 'auth/wrong-password')
      {
        alert("The password is invalid or the user does not have a password.");
      }
       else {
        //console.error(error);
      }

  });
    } else {
      // User does not exist. Ask user to sign up.
      alert("User does not exist!");
    }
  })
  .catch((error) => { 
    // Some error occurred.
  });


}

   
}
