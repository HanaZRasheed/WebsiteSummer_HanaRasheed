function findFactorial() {
    var fact = 1;
    var x = document.getElementById("factorialInput").value;
    for (var i = x; x > 1; x--) {
        fact *= x;
    }
    document.getElementById("factorialResult").value = fact;


}