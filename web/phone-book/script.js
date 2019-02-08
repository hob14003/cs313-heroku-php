let searchElement = document.getElementById("query");


// fetch the list
fetch("select-clients.php", {
    method: 'Post',
    body: 'client= ',
    headers: { 'Content-type': 'application/x-www-form-urlencoded' }
})
.then(res => res.text()).then(text => populateResults(text))
.catch(error => console.error('DB error: ', error));






/******************
 * 
 * 
 * 
 * ********* */
function populateResults(clients)
{
    console.log(clients);
    let results = document.getElementById("results");

    // create a new button
  //  let newButton = document.createElement("BUTTON"); // this looks good
    // newButton.innerText = clients;

    let newItem = document.createElement("p");
    newItem.innerText = clients;



     // clear it
     results.innerHTML = "";

    // add the new button
    results.appendChild(newItem);

}




/*********************
 * Author: Jesse Hillman
 * Query the database looking for
 * someone with that name
 * ************/
searchElement.addEventListener("keyup",(client) => {

    // for whether its internet explorer or other browsers
    var target = (client.target) ? client.target : client.srcElement;

    // holds the value to be selected
    let dbData = target.value;

    // fetch the list
    fetch("select-clients.php", {
        method: 'Post',
        body: 'client=' + dbData,
        headers: { 'Content-type': 'application/x-www-form-urlencoded' }
    })
    .then(res => res.text()).then(text => populateResults(text))
    .catch(error => console.error('DB error: ', error));
// end of function
});