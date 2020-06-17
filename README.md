## mailVerify

Package to verify if email address is real

## Initialize

Start the MailVerify object with the language you want the messages
`$mail = new mailVerify('en'); // English`
`$mail = new mailVerify('es'); // Spanish`
`$mail = new mailVerify; // Default language (Spanish)`

## methods
Checks if the email address format is correct:
`$mail->verify_formatting($emailString)`

Checks if the email address is not coming from a public server (hotmail, gmail, live..):
`$mail->isGeneric($emailString);`

Checks if the email address is coming from a existing domain:
`$mail->verify_domain($emailString);`

Checks if the email is a not a no-reply email (sales, office, admin):
`$mail->isNoReply($emailString);`

Do all the above methods:
`$mail->check_email($emailString);`

## Response

Return an object:
success: true or false
message: text describing the problem ( if success = true, message is empty '')
