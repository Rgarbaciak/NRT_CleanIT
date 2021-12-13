 function search_bar() {
    // Déclaration des variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("search_group"); // Ce que l'on cherche
    filter = input.value.toUpperCase(); // valeur -> VALEUR
    table = document.getElementById("table_group"); // GET l'élément html du tableau
    tr = table.getElementsByTagName("tr"); // GET le BODY du tableau

    console.log(filter);
    // Bouclage sur les lignes du tableau
    for (i = 0; i < tr.length; i++) {
      colonneLibelle = tr[i].getElementsByTagName("td")[0]; //get la cellule de la 1er colonne 
      colonneLibelle1 = tr[i].getElementsByTagName("td")[1]; //get la cellule de la 2eme colonne
      colonneLibelle2 = tr[i].getElementsByTagName("td")[2]; //Get la cellule de la 3eme colonne 
      colonneLibelle3 = tr[i].getElementsByTagName("td")[3]; //Get la cellule de la 4eme colonne 
      if (colonneLibelle || colonneLibelle || colonneLibelle2 || colonneLibelle3) {
        libelle = colonneLibelle.textContent || colonneLibelle.innerText ; //Get la valeur de la 1er colonne 
        libelle1 = colonneLibelle1.textContent || colonneLibelle1.innerText; //get la valeur de la 2eme colonne
        libelle2=  colonneLibelle2.innerText || colonneLibelle2.innerText; //Get la valeur de la 3eme colonne
        libelle3=  colonneLibelle3.innerText || colonneLibelle3.innerText; //Get la valeur de la 4eme colonne



        //On regarde si la ligne contient une des 3 valeurs
        if ((libelle.toUpperCase().indexOf(filter) > -1) ||  
            libelle1.toUpperCase().indexOf(filter) > -1 ||  
            libelle2.toUpperCase().indexOf(filter) > -1 ||  
            libelle3.toUpperCase().indexOf(filter) > -1) 
            { // Si oui on l'affiche
          tr[i].style.display = "";
        } else { // Sinon on ne l'affiche pas
          tr[i].style.display = "none";
        }
      }
    }
  }

