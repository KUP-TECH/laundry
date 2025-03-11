




function auto_val() {
    
    let val = parseInt(document.getElementById('weight').value);
    console.log(val);
    document.getElementById('payable').value = (val * 15);

}