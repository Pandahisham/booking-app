# booking-app

[![Join the chat at https://gitter.im/zeke8402/booking-app](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/zeke8402/booking-app?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

Laravel web application for booking appointments

## Hello!
This is an open-source web application designed to allow users to book an appointment. This is very much a work in progress, but the end product will:
***
 - Take into account time for each 'package' to be completed, ensuring no appointment overlapping will be possible
 - Implement a robust Administrator interface to easily select the dates and times that are available for appointments
 - Store user information (WITH THEIR PERMISSION) in order to create a database for mailing out newsletters and dealsj


## Instructions
To get this working, you need to first generate the database schema using the migrations and seeds I have set up. The database by default uses the 'booking.sqlite' file included  
```php artisan migrate``` Creates the tables in the database  
```php artisan db:seed``` Seeds the tables with the relevant data  

Alternatively, you can run the script I made to easily remake the database for me, ```sh makedb.sh```

## Resources 
[Laravel](http://www.laravel.com) (obviously) for the framework  
[Foundation](http://foundation.zurb.com) for the front-end    
[jQuery](http://www.jquery.com) for the datepicker

I will be working on this as often as I can in my spare time ( In between work and school )

I encourage and appreciate any feedback related to this app. I am not currently aware of the full scope of the application, but I plan on making it easily customizable to anyone's needs.
