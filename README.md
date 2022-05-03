# binghr_interview.github.io  
BingHR Take Home Interview   
A laravel based CRUD Application for BingHR  
Author : MICHEAL AKINBEBIJE  
Email : michealakinbebije@gmail.com  

!!!INSTRUCTIONS!!!  
Please View on PC OR DESKTOP as its not yet responsive  
Above is a green button (code) with the remote link to the repository copy the link in it  
open terminal  
RUN git clone <copied link>  
    cd into the cloned repo folder  
    Run Composer Install  
    Now RUN cp .env.example .env(this copies database username and password into the new .env file)  
    There is a .sql file which contains the database and tables, import into your localhost mysql server  
    Note: in the .env file I put my personal localhost username=root and password=   (its blank) so you can open the .env file and edit to your personal localhost username and password so as to alllow the app access to database  
    Then run php artisan key:generate  
    Then run php artisan migrate  
    Then run php artisan serve  
    Visit localhost:8000 on your broswer or 127.0.0.1:8000  
    
    NOTE : The app is only capable of the CREATE and DELETE operations out of the CRUD operation, I'll only do the READ and UPDATE crud operations as well as the responsiveness if im sure youll be moving forward with me as this is a test app.
    Thank you for the opportunity.
    
