var inputs = document.getElementsByClassName('formulario__input');
for (var i = 0; i < inputs.length; i++){
    inputs[i].addEventListener('keyup', function() {
    if(this.value.length>=1){
        this.nextElementSibling.classList.add('fijar')
        this.nextElementSibling.classList.remove('apagar')
    }else{
        this.nextElementSibling.classList.add('apagar')
        this.nextElementSibling.classList.remove('fijar')
    }
    })
}