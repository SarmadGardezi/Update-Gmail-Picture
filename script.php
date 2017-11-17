function updateGmailPhotoFromDrive() {
  
  try {
    
    var userEmail = 'mail@sarmadgardezi.com';
    var fileName  = userEmail + ".jpg";
    
    var blob = DriveApp.getFilesByName(fileName).next().getBlob();
    var data = Utilities.base64EncodeWebSafe(blob.getBytes());
    
    AdminDirectory.Users.Photos.update({photoData: data}, userEmail);
    
  }
  
  catch (err) {
    Logger.log(err.toString());
  }
  
}



function updateGmailPhotoFromWeb() {
  
  try {
    
    var userEmail = 'mail@sarmadgardezi.com';
    var webURL    = 'https://ctrlq.org/assets/ctrlq.org.png';
    
    var blob = UrlFetchApp.fetch(webURL).getBlob();
    var data = Utilities.base64EncodeWebSafe(blob.getBytes());
    
    AdminDirectory.Users.Photos.update({photoData: data}, userEmail);
    
  }
  
  catch (err) {
    Logger.log(err.toString());
  }
  
}
