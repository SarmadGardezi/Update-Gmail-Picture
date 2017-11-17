# Update Gmail Picture of Google Apps Users with Google Script

An organisation is running on Google Apps and, as part of a branding exercise, they need to update the profile pictures of all Gmail users. The Google Apps admin can use the Admin Directory API with Google Apps Script to update Gmail photos of all users in the domain. The files can be placed in Google Drive and the script can automatically make it the user’s photo.

The Apps Admin Directory API accepts images in JPEG, PNG, GIF, BMP and TIFF formats. The user is identified by their primary email address and the photo’s upload data should be encoded in web-safe Base64 format.

### usimg URL to Fetch Photo

If an image is on the web (and not on Google Drive), the URL Fetch service can be used to make it the user’s photo.

Written by [SarmadGardezi](https://sarmadgardezi.com) for [Developers](http://thedevelopers.pk).
