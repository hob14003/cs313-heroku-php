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

//   alert(username);
//   alert(password);

   // fetch the list
   fetch("verify.php", {
      method: 'Post',
      body: 'username=' + username + '&' + 'password=' + password,
      headers: { 'Content-type': 'application/x-www-form-urlencoded' }
  })
  .then(res => res.text()).then(text => createDetailView(text))
  .catch(error => console.error('DB error: ', error));


}



/**********
 * Author: Jesse Hillman
 * 
 * 
 * Purpose: Create the message
 * *************** */
function createDetailView(text)
{
   alert("we are in create View");
   console.log(text);

}



