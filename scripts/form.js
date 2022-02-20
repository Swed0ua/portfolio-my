document.addEventListener('DOMContentLoaded', () => {
    let form = document.querySelector('#form'),
        val = document.querySelectorAll('._val'),
        emptyVal = "emptyVal";

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        formValidate(e);
    })

    const formValidate = e => {
        let error = '';
        val.forEach(element => {
            formAddEmptyVal(element.parentElement);

            if (element.classList.contains('_mail')){
                if(element.value.trim() == "") {
                    error+="input line 'mail' is empty <br>";
                    return;   
                } 
                else if (!element.value.match(/^[a-z].+@.+\..+/gm)){
                    error+="input line 'mail' not have email address<br>"
                    return;
                }
            }
            if (element.classList.contains('_user')){
                if(element.value.trim() == "") {
                    error+="input line 'user' is empty <br>";
                    return;
                } 
            }
            formRemoveEmptyVal(element.parentElement);
        });  
        
        if (error != "") {createPopup(error)}
            else{formSend()};
    }

    async function formSend() {
        let formData = new FormData(form);
        let responce = await fetch('scripts/form.php', {
            method: 'POST',
            body: formData
        })

        console.log(responce);

        if (responce.ok){
            form.reset();
            createPopup('Cool! Form sent =)')
        } else {
            createPopup('Error'+ responce.status +'! Form not sent')
        }
    }
    
    const  formRemoveEmptyVal = element => {
        element.classList.remove(emptyVal);
    };

    const  formAddEmptyVal = element => {
        element.classList.add(emptyVal);
    };

})