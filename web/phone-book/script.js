// function updateList(client)
// {
//     console.log(client);
//     console.log(client.value);
// }

let searchElement = document.getElementById("query");
console.log(searchElement);
searchElement.addEventListener("keyup",(client) => {

    
    var target = (client.target) ? client.target : client.srcElement;
    console.log(target.value);

}


);