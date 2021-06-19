var nom = document.getElementById('Nom');
var nomError = document.getElementById('nomError');
nomError.style.display = 'none';
nom.addEventListener('blur', function(){
  if (nom.value ='') {
    nomError.innerHTML = 'Veillez Renseigner ce champ';
    nomError.style.display = 'block';
  }
});


// Masquage Message erreur
var Message_erreur = document.getElementsByClassName('alert');
console.log(Message_erreur);
for (var i = Message_erreur.value.length - 1; i >= 0; i--) {
  Message_erreur.value[i].style.opacity = '0';
}
