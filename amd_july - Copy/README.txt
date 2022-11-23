Project Send SMS about temperature.
This project will send you or anyone you want an SMS
that will contain the current temperature of Thessaloniki.
You must run the sendsms.php file for the procedure to happen
or enter the cronjob to run it automatically whenever you want.(see cron file in the project's folder)

The project takes the temperature from the https://openweathermap.org/
API in Celsius.
Also it calls https://auth.routee.net/oauth/token API to acquire 
the token that needs for authoriazation. 
Then it calls the https://connect.routee.net/sms API service
to Send the SMS with the credentials of the token acquired and with
the current temperature of Thessaloniki that the project obtained.
In case of any error it shows the appropriate message to inform you.
To check the manual for weather api check https://openweathermap.org/api
For the SMS service API visit https://docs.routee.net/docs.
