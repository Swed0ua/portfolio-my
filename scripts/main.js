document.addEventListener('DOMContentLoaded', () => {
   
    setTimeout(()=>{
         document.querySelector('header').style.top = '0';
    }, 1500)
    setTimeout(()=>{
        document.querySelector('html').style.overflowY = "scroll";
        document.querySelector('.first-screen__content ').style.position = "relative";
        document.querySelector('header').style.top = '0';
    }, 3000);
})




let menuItems = document.querySelectorAll('.menu__item');
const burgerMenu = {
    burgerIco : document.querySelector('.menu__burger-ico'),
    bugerActive : 'menu__burger_active',
    burgerArea : document.querySelector('.menu-burger__content'),
    burgerItem : document.querySelectorAll('.burger-menu__item')
}

burgerMenu.burgerIco.addEventListener('click', () => {
    burgerMenu.burgerItem = document.querySelectorAll('.burger-menu__item');
    rewriteMenu();
    burgerMenu.burgerIco.classList.toggle(burgerMenu.bugerActive);
    if (burgerMenu.burgerIco.classList.contains(burgerMenu.bugerActive)){
        burgerMenu.burgerArea.classList.add('_active');
    } else {
        burgerMenu.burgerArea.classList.remove('_active');
    }
})


let businesCardWrapper = document.querySelector('.my-cont__card');
const businesCard = {
    cardName : businesCardWrapper.querySelector('.my-cont__nameNet'),
    cardLink : businesCardWrapper.querySelector('.my-cont__link-text'),
    cardColor : businesCardWrapper.querySelector('.contact__mes-color'),
    cardMes : businesCardWrapper.querySelectorAll('.my-cont__mes-ico[data-mes]'),
    cardMesActive : 'my-cont__mes-ico_active'
}


const rewriteMenu = () => {
    let menu = '';
    menuItems.forEach(element => {
        menu += `<a href="${element.childNodes[0].href}" class="burger-menu__item">${element.childNodes[0].innerHTML}</a>`;
    });
    burgerMenu.burgerArea.innerHTML = menu;
}

const setBusinesCardInfo = (mes="telegram") => {
    businesCard.cardMes.forEach(element => {
        element.classList.remove(businesCard.cardMesActive);
        if (element.dataset.mes == mes) {
            element.classList.add(businesCard.cardMesActive);
            businesCard.cardName.innerHTML = mes;
            businesCard.cardLink.value = element.dataset.link;
            businesCard.cardColor.style.background = element.dataset.color;
            console.log(element.dataset.color);
        }
    });
    
} 

setTimeout( setBusinesCardInfo, 0);

const listenArr = (d) => {
    return document.querySelectorAll(d);
}


let popupArea = document.querySelector('.popup__area');
let popup = listenArr(".popup");
 

const createPopup = (n) => {
        
        popup = listenArr(".popup");
        
        if (popup.length == 0 ){
            innerPopup ();
        } else if (popup[popup.length-1].querySelector('.popup__text').innerHTML == n) {
            
        } else {
            innerPopup();
        }
        

        function innerPopup () {
            

                let a =  popupArea.insertAdjacentHTML("beforeEnd",
            `< class="popup">
            <div onclick="hidePopup()" class="popup__close"></div>
            <div class="popup__text">${n}</div>
            </>`
            );
            setTimeout(() => {
                popup = listenArr(".popup");
                hidePopup(popup[0]);
                }, 3000);
        
        }
}

const copyButton = () => {
    let linkInput = document.querySelector('.my-cont__link-text');

    linkInput.select();

    document.execCommand("copy");
    createPopup("you copied text :  " + linkInput.value);
}



const hidePopup = (e) => {
    let lastPopup = e;
    lastPopup.classList.add('popup__closing');


    setTimeHide().then(()=> lastPopup.remove())
  
}

const setTimeHide = () => {
    return new Promise(a => {
        setTimeout( () => a(), 500)
    })
}


document.querySelector('.popup__area').addEventListener('click',(e) => {
    if (e.path[0].className == "popup__close"){
        hidePopup(e.path[1]);
    }
})


const AnimateText = () => {
    
    let text = document.querySelector('.logo__text');
    let wholeText = text.innerHTML;
    let textOne = text.dataset.textOne,
        textTwo = text.dataset.textTwo;
    let interval = 250;
    let addText = textTwo;    
    
    text.classList.add('logo__text_active');


    if (text.innerHTML == textTwo){
        addText = textOne;
    } 

    let textRedactor = setInterval(() => {
        text.innerHTML = text.innerHTML.slice(0, -1);
        if (text.innerHTML.length == 0) {
            clearInterval(textRedactor)
            text.innerHTML = '&nbsp';
            textAdd();
        };    
    }, interval);

    const textAdd = () => {
        let index = 0;
        text.innerHTML = "";
        let textRedactor = setInterval(() => {
            text.innerHTML += addText[index]; 
            if (index >= addText.length-1) {
                clearInterval(textRedactor);
                text.classList.remove('logo__text_active');
            };    
            index++;
        }, interval);
    }

}


setInterval(AnimateText, 30000);




