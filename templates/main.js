
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
import {getAuth, GoogleAuthProvidersignInWithPopup} from "firebase/auth";
const firebaseConfig = {
  apiKey: "AIzaSyC65AwXUJ4zKJ6MSNcN8tSGMnsyjOgCraQ",
  authDomain: "local-e-158e2.firebaseapp.com",
  projectId: "local-e-158e2",
  storageBucket: "local-e-158e2.appspot.com",
  messagingSenderId: "809087946243",
  appId: "1:809087946243:web:8dd26bbdb7041fee658836",
  measurementId: "G-XMR5SYGWYP"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const auth = getAuth(app);
auth.languageCode = 'en'
const provider = new GoogleAuthProvider();

const googleLogin = document.getElementById("google-login-btn");
googleLogin.addEventListener("click",function() {
    alert(5)
})