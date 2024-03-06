#target photoshop

// S'assure que le document est ouvert
if (app.documents.length > 0) {
    var doc = app.activeDocument;

    // Définit les options de sauvegarde pour le JPEG
    var saveOptions = new JPEGSaveOptions();
    saveOptions.embedColorProfile = true;
    saveOptions.formatOptions = FormatOptions.STANDARDBASELINE;
    saveOptions.matte = MatteType.NONE;
    saveOptions.quality = 8; // La qualité va de 0 à 12 dans les scripts Photoshop, 8 ~ 80% de qualité

    // Redimensionne l'image
    var maxWidth = 800;
    if (doc.width > maxWidth) {
        var height = doc.height * (maxWidth / doc.width);
        doc.resizeImage(maxWidth, height, null, ResampleMethod.AUTOMATIC);
    }

    // Sauvegarde l'image
    var folder = Folder.selectDialog("C:\xampp\htdocs\tests\Portfolio\Fish\Cartes");
    if (folder) {
        var fileName = doc.name.replace(/\.[^\.]+$/, '') + ".jpg";
        var saveFile = new File(folder + "/" + fileName);
        doc.saveAs(saveFile, saveOptions, true, Extension.LOWERCASE);
        // Ferme le document sans enregistrer les modifications
        doc.close(SaveOptions.DONOTSAVECHANGES); // Ajouté pour fermer l'image après sauvegarde
   
    }
}