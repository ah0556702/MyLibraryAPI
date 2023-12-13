
<!-- Audrey Harmon
MyAPI - Final 
BackEnd WebDev 
12/13/2023 -->


<?php
    include "../../Model/library_db.php";
    include "../nav.php";

    $apikey = isset($_SESSION['apikey']) ?? null; // api key is checked for null and stored
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> <!-- ACCESS JAVASCRIPT -->
    <title>Document</title>
</head>
<body>
    <br>
    <div id='bookInfo'></div>
    <div class="accordion accordion-flush" id="accordionFlushExample">
    <script>
        function getInventory(){
            axios.get('../Catalog/libraryapi.php?api_key=${apikey}') // apikey is passed in the url 
                .then(function(response) {
                    const books = response.data; // array of books stores data returned by the api in accessible form
                    let count = 0; // count is set for bootstrap integration
                    let html = '<div class="accordion" id="accordionPanelsStayOpenExample">'; // opening tag is declared
                    books.forEach(book => { // for each book in the returned response data
                        html +=  `<div class="accordion-item">
                                    <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse${count}" aria-expanded="true" aria-controls="collapse${count}">
                                        ${book.Title} - ${book.Author_fName} ${book.Author_lName}
                                    </button>
                                    </h2>
                                    <div id="collapse${count}" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        ${book.Book_Desc}
                                    </div>
                                    </div>
                                </div>` // all tags are appended to the opening tag
                        count++; // count increments
                    });
                    html += '</div>'; // closing tag is appended
                    document.getElementById('bookInfo').innerHTML = html; // book information is displayed
                })
                .catch(function (error) {
                    console.log("UNABLE TO LOAD API DATA"); // if the api fails to load error message displays in the console
                });
            }


        getInventory();
        
    </script>
    </div>
</body>
</html>