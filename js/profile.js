document.addEventListener("DOMContentLoaded", async function () {
    const accountCreationDate = document.getElementById("account-creationdate");
    const userEmail = document.getElementById("user-email");
    const userInfo = document.getElementById("user-info");
    //функция для загрузки инфо о пользователе
    async function loadProfileInfo() {

        try {
            const response = await fetch('getProfileInfo.php', {
                method: 'POST',
            });
            const data = await response.text();
            //Разбиваем строку на отдельные значения 
            const [email, created, info] = data.spilit('|');
            userEmail.innerText = email;
            accountCreationDate.innerText = created;
            userInfo.innerText = info;
        } catch(error) {
            console.error(error.message);
        }
}
//загружаенм инфо о пользователе при закгрузке страницы
loadProfileInfo(); 
})    
