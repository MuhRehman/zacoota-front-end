var $element = $('input[type="range"]');

$element
    .rangeslider({
        polyfill: false,
        onInit: function() {
            var $handle = $('.rangeslider__handle', this.$range);
            updateHandle($handle[0], this.value);
        }
    })
    .on('input', function(e) {
        var $handle = $('.rangeslider__handle', e.target.nextSibling);
        updateHandle($handle[0], this.value);
        $('#range_head').val("£" + $(this).val());

    });


$('#range_val').change(function() {
    $('#range_head').val("£" + formatCurrency( $(this).val()));


});

$('#range_val').change(function() {
    $('#range_agent').val("£" + (($(this).val() / 100) * 12));
});

$('#range_val').change(function() {
    $('#range_agent_year').val("(£" + formatCurrency((($(this).val() / 100) * 12) * 12));

});

$('#range_val').change(function() {
    $('#range_agent_mob').val("£" + formatCurrency(($(this).val() / 100) * 12));
});

$('#range_val').change(function() {
    $('#range_agent_year_mob').val("£" + formatCurrency((($(this).val() / 100) * 12) * 12));

});

$('#range_val').change(function() {
    $('#range_agent_total').val("£" + formatCurrency(((($(this).val() / 100) * 12) * 12) - 420));
});

function updateHandle(el, val) {
    el.textContent = val;
}
function formatCurrency(total) {
    var neg = false;
    if(total < 0) {
        neg = true;
        total = Math.abs(total);
    }
    return (neg ? "" : '') + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString();
}


//input with
// var inputEl = document.getElementById("range_agent");
//
// function getWidthOfInput() {
//     var tmp = document.createElement("span");
//     tmp.className = "input-element tmp-element";
//     tmp.innerHTML = inputEl.value.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;');
//     document.body.appendChild(tmp);
//     var theWidth = tmp.getBoundingClientRect().width;
//     document.body.removeChild(tmp);
//     return theWidth;
// }
//
// function adjustWidthOfInput() {
//     inputEl.style.width = getWidthOfInput() + "px";
// }
//
// adjustWidthOfInput();
// inputEl.onkeyup = adjustWidthOfInput;
//
// var inputEN = document.getElementById("#range_agent_year");
//
// function getWidthOfInput() {
//     var tmp = document.createElement("span");
//     tmp.className = "input-element tmp-element";
//     tmp.innerHTML = inputEN.value.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;');
//     document.body.appendChild(tmp);
//     var theWidth = tmp.getBoundingClientRect().width;
//     document.body.removeChild(tmp);
//     return theWidth;
// }
//
// function adjustWidthOfInput() {
//     inputEN.style.width = getWidthOfInput() + "px";
// }
//
// adjustWidthOfInput();
// inputEN.onkeyup = adjustWidthOfInput;