let renderAlert = document.getElementById('renderAlert');

function getSIVBackEnd(){
    let ajax = new XMLHttpRequest();
    ajax.open('POST',"./api/pigaopmw.php");
    ajax.onreadystatechange = ()=>{
        if(ajax.readyState==4&&ajax.status==200){
            // console.log(ajax.response);

            renderAlert.innerHTML = ``;

            let renderSiv = document.getElementById('renderSiv');
            renderSiv.innerHTML = "";
            let resposta = JSON.parse(ajax.response);
            
            console.log('Buscando SIVS...');
            resposta.forEach((key, value)=> {
                console.log(key);

                let templateSIV = `
                <div class="SIV">
                    <div class="btnStatus ${key.status == 1 ? "down": "up" }"></div>
                    <img src="./img/imgSiv.png" alt="">
                    <span style="margin-top: 5px;">
                        <p style="font-size: 11px; font-weight: bold;">${key.local}</p>
                        <p style="font-size: 10px; margin-top: 4px">${key.ip}</p>
                    </span>
                </div>    
            `;
            renderSiv.insertAdjacentHTML('beforeend', templateSIV);
            });

            setTimeout(() => {
                getSIVBackEnd();
                renderAlert.innerHTML=`
                <div class="alert">
                    <div class="IMGalert">
                        <img src="./img/load.gif" alt="">
                    </div>
                    <div class="msgalert">
                        <p>Siv's..</p>
                    </div>
                </div>
                `;       
            }, 10000);
        }
    }
    ajax.send();
}

getSIVBackEnd();




function getIMPBackEnd(){
    let ajax = new XMLHttpRequest();
    ajax.open('POST',"./api/pingimp.php");
    ajax.onreadystatechange = ()=>{
        if(ajax.readyState==4&&ajax.status==200){
            // console.log(ajax.response);
            renderAlert.innerHTML = ``;
            let resposta = JSON.parse(ajax.response);

            let renderIMP= document.getElementById('renderIMP');
            renderIMP.innerHTML = "";
            
            console.log('Buscando IMPRESSORAS. ..');
            resposta.forEach((key, value)=> {
                console.log(key);

                let templateIMP = `
                <div class="SIV">
                    <div class="btnStatus ${key.status == 1 ? "down": "up" }"></div>
                    <img src="./img/impressora.png" alt="">
                    <span style="margin-top: 5px;">
                        <p style="font-size: 11px; font-weight: bold;">${key.local}</p>
                        <p style="font-size: 10px; margin-top: 4px">${key.ip}</p>
                    </span>
                </div>    
            `;
            renderIMP.insertAdjacentHTML('beforeend', templateIMP);
            });

            setTimeout(() => {
                getIMPBackEnd();
                renderAlert.innerHTML=`
                <div class="alert">
                    <div class="IMGalert">
                        <img src="./img/load.gif" alt="">
                    </div>
                    <div class="msgalert">
                        <p>Impressoras..</p>
                    </div>
                </div>
                `;  
            }, 15000);
        }
    }
    ajax.send();
}

getIMPBackEnd();



function getSWBackEnd(){
    let ajax = new XMLHttpRequest();
    ajax.open('POST',"./api/pingswitchs.php");
    ajax.onreadystatechange = ()=>{
        if(ajax.readyState==4&&ajax.status==200){
            // console.log(ajax.response);
            renderAlert.innerHTML = ``;
            let resposta = JSON.parse(ajax.response);

            let renderIMP= document.getElementById('renderSW');
            renderIMP.innerHTML = "";
            
            console.log('Buscando Switchs...');
            resposta.forEach((key, value)=> {
                console.log(key);

                let templateIMP = `
                <div class="SIV">
                    <div class="btnStatus ${key.status == 1 ? "down": "up" }"></div>
                    <img src="./img/sw.png" alt="">
                    <span style="margin-top: 5px;">
                        <p style="font-size: 11px; font-weight: bold;">${key.local}</p>
                        <p style="font-size: 10px; margin-top: 4px">${key.ip}</p>
                    </span>
                </div>    
            `;
            renderIMP.insertAdjacentHTML('beforeend', templateIMP);
            });

            setTimeout(() => {
                getSWBackEnd();
                renderAlert.innerHTML=`
                <div class="alert">
                    <div class="IMGalert">
                        <img src="./img/load.gif" alt="">
                    </div>
                    <div class="msgalert">
                        <p>Switchs..</p>
                    </div>
                </div>
                `;  
            }, 20000);
        }
    }
    ajax.send();
}
getSWBackEnd()