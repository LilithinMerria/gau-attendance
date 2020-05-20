var numbers = [12, 4, 23, 4, ,5, ,7];
var sum = 0;
var average = 0;
var count = 0;
function arrayAvg(){
    for (index =0; index < numbers.length; index++){
        if(numbers[index] != undefined){
            sum += numbers[index];
            count ++;
        }
    }
    average = sum/count;
    document.getElementById("avg").innerHTML= average;
}
