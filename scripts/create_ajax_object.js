function create_ajax_object() {
    // Création de l'objet xmlhttp
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        if (window.ActiveXObject)
            try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    return NULL;
                }
            }
    }
    return xmlhttp;
}
