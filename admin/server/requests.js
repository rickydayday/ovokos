import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.8/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.8/firebase-analytics.js";
import { getDatabase, ref, push , set,onValue } from "https://www.gstatic.com/firebasejs/9.6.8/firebase-database.js";
import { getAuth, signInWithEmailAndPassword, signOut} from "https://www.gstatic.com/firebasejs/9.6.8/firebase-auth.js";



// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDEqFJs-S900pexPUDeiPc-7aRrMHhw6Ww",
  authDomain: "e-store-a05b8.firebaseapp.com",
  databaseURL: "https://e-store-a05b8.firebaseio.com",
  projectId: "e-store-a05b8",
  storageBucket: "e-store-a05b8.appspot.com",
  messagingSenderId: "929059030724",
  appId: "1:929059030724:web:307218980d0d2fd30b2b91",
  measurementId: "G-46E6M68KTM"
};

const app = initializeApp(firebaseConfig);

const analytics = getAnalytics(app);

const db = getDatabase(app);
const auth = getAuth(app);



const feedbackReferences = ref(db, 'clients');
const notificationRef = ref(db, 'notifications');




onValue(feedbackReferences, (snapshot) => {
  snapshot.forEach((childSnapshot) => {

    var output = document.getElementById('output');
    const childKey = childSnapshot.key;
    const childData = childSnapshot.val();
    

    console.log(childKey);
    console.log(childData);

   
  output.innerHTML+= `
<tr>  
<td>
<div class="d-flex">
<div class="form-check my-auto">
<input class="form-check-input" type="checkbox" id="customCheck1" checked>
</div>
<img class="w-10 ms-3" src="https://png.pngtree.com/png-vector/20190217/ourmid/pngtree-vector-web-icon-png-image_555441.jpg" alt="hoodie">
<h6 class="ms-3 my-auto">${childData.Name}</h6>
</div>
</td>
<td class="text-sm">${childData.Name}</td>
<td class="text-sm">${childData.Date}</td>
<td class="text-sm">${childData.Url}</td>
<td class="text-sm">${childData.Email}</td>
<td>
<span class="badge badge-danger badge-sm">Paid</span>
</td>
<td class="text-sm">
<a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
<i class="fas fa-eye text-secondary"></i>
</a>
<a href="javascript:;" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit product">
<i class="fas fa-user-edit text-secondary"></i>
</a>
<a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Delete product">
<i class="fas fa-trash text-secondary"></i>
</a>
</td>
</tr>
 
  
  `;

 
  



 function Delete() {


    feedbackReferences.remove();
    
 }

  });

});


onValue(notificationRef, (snapshot) => {
  snapshot.forEach((childSnapshot) => {

    var notify = document.getElementById('notify');

    const dataKey = childSnapshot.key;
    const data = childSnapshot.val();

    console.log(data);


    notify.innerHTML+= `
  
                        <span class="notification__category">${data.Email}</span>
                        <p>${data.Message}</p>
                    
    
    `;

  });
});


var logout = document.getElementById('logout');

logout.addEventListener('click',Logout);





function Logout(){

     signOut(auth).then(() => {


      swal({
            title: "Bye Bye!",
            text: "Your Have Logged Out Successfully",
            icon: "success",
            timer: 2000,
            button: "Okay",
})



.then(() => {
  window.location.href="../login/";
})

  

}).catch((error) => {
  // An error happened.
});


}