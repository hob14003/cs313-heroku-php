let searchElement = document.getElementById("query");


// fetch the list
fetch("select-clients.php", {
    method: 'Post',
    body: 'client= ',
    headers: { 'Content-type': 'application/x-www-form-urlencoded' }
})
.then(res => res.text()).then(text => populateResults(text))
.catch(error => console.error('DB error: ', error));



/***********
 * Author: Jesse Hillman
 * 
 * // bring up a page with details about that person
 * 
 * ******** */
function findDetails(client)
{
    // give me what is inside the button
    client = client.innerText;

   // fetch the list
fetch("findDetails.php", {
    method: 'Post',
    body: 'client=' + client,
    headers: { 'Content-type': 'application/x-www-form-urlencoded' }
})
.then(res => res.text()).then(text => createDetailView(text))
.catch(error => console.error('DB error: ', error));
}


/**********
 * 
 * 
 * 
 * *********** */
function createDetailView(text)
{
    console.log(text);

    // clear it
  let clientlist = document.getElementById("clientlist");
  clientlist.innerHTML = "";

  

    clientlist.innerHTML = text;

}




/******************
 * 
 * 
 * 
 * ********* */
function populateResults(clients)
{
    console.log(clients);
    let results = document.getElementById("results");

     // clear it
     results.innerHTML = "";

    results.innerHTML = clients;

}




/*********************
 * Author: Jesse Hillman
 * Query the database looking for
 * someone with that name
 * ************/
searchElement.addEventListener("keyup",(client) => {

    // for whether its internet explorer or other browsers
    let target = (client.target) ? client.target : client.srcElement;

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