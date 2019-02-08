let searchElement = document.getElementById("query");
console.log(searchElement);
searchElement.addEventListener("keyup",(client) => {

    // for whether its internet explorer or other browsers
    var target = (client.target) ? client.target : client.srcElement;
    console.log(target.value);

    // fetch the list
    fetch("select-clients.php", {
        method: 'Post',
        body: dbData
    })
    .then(res => res.text()).then(text => console.log(text))
    .catch(error => console.error('DB error: ', error));








// end of function
});