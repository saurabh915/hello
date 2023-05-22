function calcNumbers(result){
    form.displayResult.value=form.displayResult.value+result;
    
    
  }
  function preload(){
    location.reload()
    
  }
  function clearn(){
    form.displayResult.value=form.displayResult.value.substring(0, form.displayResult.value.length-1);
  }