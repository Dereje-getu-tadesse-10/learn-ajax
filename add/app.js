
const form = document.querySelector('form');


form.addEventListener('submit', (e)=>{
    e.preventDefault();
    const firstName = document.getElementById('first_name');
    const lastName = document.getElementById('last_name');
    
    // Recup inp value
    let fName = firstName.value;
    let lName = lastName.value;
    // Petite verif inp vide ou pas vide 

    if ((fName == "") || (lName == "")) {
        alert('champ obligatoire');
    }else{
        const data = new FormData();

        // donnée envoyer au PHP pour les ustiliser comme ca : $_POST['first_name'] 
        data.append('first_name', fName);
        data.append('last_name', lName);
    
        let url = 'add.php';
        //  Parametre de l'ajax
        const req = {
           
            method:'post',

            //Ajout données a transmettre dans la requete
            
            body: data
        };
    
        fetch(url,req)
        .then((responses)=>{return responses.json()})
        .then((data)=>{console.log(data);})
    // }
}
})