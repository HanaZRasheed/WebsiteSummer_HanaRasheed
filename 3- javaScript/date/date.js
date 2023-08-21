function function1() {
    document.querySelector("#myBtn").addEventListener('click', function() {
        document.querySelector("#demo").innerHTML = Date();
    })
};

document.addEventListener('DOMContentLoaded', function1);