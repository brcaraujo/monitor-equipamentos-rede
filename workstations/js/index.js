
function getSIVBackEnd(){
    let ajax = new XMLHttpRequest();
    ajax.open('POST',"../api/ping.workstation.php");
    ajax.onreadystatechange = ()=>{
        if(ajax.readyState==4&&ajax.status==200){
            // console.log(ajax.response);

            let renderSiv = document.getElementById('renderSiv');
            renderSiv.innerHTML = "";
            let resposta = JSON.parse(ajax.response);
            
            console.log('Buscando SIVS...');
            resposta.forEach((key, value)=> {
                console.log(key);

                let templateSIV = `
                <div class="SIV">
                    <div class="btnStatus ${key.status == 1 ? "down": "up" }"></div>
                    <img src="./img/pc.png" alt="">
                    <span style="margin-top: 5px;">
                        <p style="font-size: 11px; font-weight: bold;">${key.hostname}</p>
                        <p style="font-size: 10px; margin-top: 4px">${key.local}</p>
                    </span>
                </div>    
            `;
            renderSiv.insertAdjacentHTML('beforeend', templateSIV);
            });

            setTimeout(() => {
                getSIVBackEnd();
            }, 10000);
        }
    }
    ajax.send();
}

getSIVBackEnd();

