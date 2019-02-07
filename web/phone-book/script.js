



function updateList(client)
{
    console.log(client);

    client.value;
    console.log(client.value);


}


let searchElement = document.getElementById("query");
console.log(searchElement);
searchElement.addEventListener("keyup",updateList(this));