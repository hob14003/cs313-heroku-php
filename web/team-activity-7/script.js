let searchElement = document.getElementById("query");


/**********
 * Author:Jesse Hillman
 * 
 * Purpose: Verifies whether
 * credentials are correct.
 * 
 * ************** */
function verifyLogin()
{

   let username = document.getElementById("name").value;
   let password = document.getElementById("password").value;

   alert(username);
   alert(password);

   // fetch the list
//    fetch("findDetails.php", {
//       method: 'Post',
//       body: 'client=' + client,
//       headers: { 'Content-type': 'application/x-www-form-urlencoded' }
//   })
//   .then(res => res.text()).then(text => createDetailView(text))
//   .catch(error => console.error('DB error: ', error));





}



