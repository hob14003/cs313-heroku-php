



function updateList(client)
{
    console.log(client);
    console.log(client.value);

   

}


let searchElement = document.getElementById("query");
console.log(searchElement);
searchElement.addEventListener("keyup",updateList(this.value));