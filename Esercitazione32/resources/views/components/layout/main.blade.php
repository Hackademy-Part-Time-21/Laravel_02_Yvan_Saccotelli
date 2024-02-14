<div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <title>Sito di yvan</title>
    
    </head>
    <body>
    
        <x-Navbar/>
    


        {{$slot}}

    
        <h1 class="row display flex-column align-content-center  ">sono un footer</h1>


    </body>
    </html> 
</div>