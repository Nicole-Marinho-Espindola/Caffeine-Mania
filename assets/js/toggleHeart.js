function heartToggle(e){
    const icon = document.getElementById(heart)

    // console.log(heart)
    if (icon.contains("fa-regular fa-heart")) { //se tem coração vazio
        e.icon.class.remove("fa-regular fa-heart"); //remove coração vazio
        e.icon.add("fa-solid fa-heart"); //coloca classe coração cheio
      }
    else{ 
        e.icon.class.remove("glyphicon-eye-close"); //remove classe coração cheio
        e.icon.class.add("glyphicon-eye-open"); //coloca classe coração vazio
      }
}