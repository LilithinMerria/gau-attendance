var flowers = ["Rose", "Orchid", "Lotus"];

function loadFlowers(){
    document.getElementById("addMe").innerHTML = flowers;
}
function addFlower(){
    var flower = prompt("Please Add Your Favourite Flower");
    flowers[flowers.length] = flower;
    document.getElementById("addMe").innerHTML = flowers;
}