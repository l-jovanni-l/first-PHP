
function validNum(str) {
    // tests for any valid integer or float
    // number must start with a number or - sign
    // no other characters are allowed
    var re = /^(-?\d+\.\d+)$|^(-?\d+)$/;
    return re.test(str);
}

function sendCalculation(n1, n2, op) {
    $.ajax({
        url: 'calculate.php',
        type: 'POST',
        data: {num1: n1, num2: n2, oper: op},
        success: function (val) {
            console.log(val);
            $("#answer").html("The answer is: " + val);
        },
        error: function () {
            $("#answer").html("Server Error");
        }
    });
}

function calculate() {
    $("#answer").html("");

    let num1 = $("#number1").val().trim();
    let num2 = $("#number2").val().trim();

    if (validNum(num1) && validNum(num2)) {
        let operator = $("input[name='operator']:checked").val();
        num1 = parseFloat(num1);
        num2 = parseFloat(num2);
        console.log("js file says " + num1 + " " + operator + " " + num2); //for debug
        sendCalculation(num1, num2, operator);
    } else {
        $("#answer").html("Your inputs must be a valid numbers.");
    }
}

/*
 * code inside the docready lister is automatically
 * executed when the document is completely downloaded
 * and rendered in the browser. put your event handlers
 * inside a docready lister for safety.
 */
$(document).ready(function () {
    $("#calculate").click(function () {
        calculate();
    });
});
