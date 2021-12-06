
  function search_group() {
    // Déclaration des variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("search_group"); // Ce que l'on cherche
    filter = input.value.toUpperCase(); // valeur -> VALEUR
    table = document.getElementById("table_group"); // GET l'élément html du tableau
    tr = table.getElementsByTagName("tr"); // GET le BODY du tableau

    console.log(filter);
    // Bouclage sur les lignes du tableau
    for (i = 0; i < tr.length; i++) {
      colonneType = tr[i].getElementsByTagName("td")[0]; //get la cellule de la colonne type sur la ligne n
     
      if (colonneType) {
        type = colonneType.textContent || colonneType.innerText; //Get la valeur de la cellule type
        console.log(type);

        //On regarde si la ligne contient une des deux valeurs
        if ((type.toUpperCase().indexOf(filter) > -1) ) { // Si oui on l'affiche
          tr[i].style.display = "";
        } else { // Sinon on ne l'affiche pas
          tr[i].style.display = "none";
        }
      }
    }
  }

  function search_group2() {
    // Déclaration des variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("search_group"); // Ce que l'on cherche
    filter = input.value.toUpperCase(); // valeur -> VALEUR
    table = document.getElementById("table_group"); // GET l'élément html du tableau
    tr = table.getElementsByTagName("tr"); // GET le BODY du tableau

    console.log(filter);
    // Bouclage sur les lignes du tableau
    for (i = 0; i < tr.length; i++) {
      colonneType = tr[i].getElementsByTagName("td")[0]; //get la cellule de la colonne type sur la ligne n
      colonneLibelle = tr[i].getElementsByTagName("td")[1]; //get la cellule de la colonne libelle sur la ligne n
      if (colonneType || colonneLibelle) {
        type = colonneType.textContent || colonneType.innerText; //Get la valeur de la cellule type
        libelle = colonneLibelle.textContent || colonneLibelle.innerText; //Get la valeur de la cellule libelle
        console.log(type);
        console.log(libelle);

        //On regarde si la ligne contient une des deux valeurs
        if ((type.toUpperCase().indexOf(filter) > -1) ||  libelle.toUpperCase().indexOf(filter) > -1) { // Si oui on l'affiche
          tr[i].style.display = "";
        } else { // Sinon on ne l'affiche pas
          tr[i].style.display = "none";
        }
      }
    }
  }

