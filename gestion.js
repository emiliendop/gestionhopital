




window.onload = () => {
    let imc = document.querySelector("#imc");
  
    // Function for calculating BMI
    imc.addEventListener("click", calculateBMI);
};
function calculateBMI() 
{
    let taille = document.getElementById('taille').value

    let poids = document.getElementById('poids').value
   
  
    
   {
        let bmi = (poids / (taille * taille));  
    }
}