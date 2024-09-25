
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IPT Laboratory Quiz</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    
    
    <script>
        function autoSubmitForm() {
            setTimeout(function() {
                document.getElementById("Form").submit();
            }, 60000); 
        }

        
        window.onload = autoSubmitForm;

    </script>
   
</head>

<body>
    <section class="section">
        <h1 class="title">Quiz</h1>

        <form id="Form" method="POST" action="result.php">
            
            Name: <input type="text" name="full_name"/>
            <br></br>
            Email: <input name="email" type="email"/>
            <br> </br>  
            Birthdate: <input type="text" name="birthdate" />
            <br></br>
            Contact Number: <input name="contact_number" type="contact_number"/>
            <br>  </br> 
           
             

            <div class="field">
                <label class="label">Question 1: On what date is the Philippines Independence Day celebrated?</label>
                <div class="control">
                    <input type="radio" name="answer_1" value="A" required> December 25<br>
                    <input type="radio" name="answer_1" value="B" required> November 1<br>
                    <input type="radio" name="answer_1" value="C" required> May 4<br>
                    <input type="radio" name="answer_1" value="D" required> June 12<br>
                </div>
            </div>

            <div class="field">
                <label class="label">Question 2: In which year did the Bataan Death March take place?</label>
                <div class="control">
                    <input type="radio" name="answer_2" value="A" required> 1890<br>
                    <input type="radio" name="answer_2" value="B" required> 1942<br>
                    <input type="radio" name="answer_2" value="C" required> 1950<br>
                    <input type="radio" name="answer_2" value="D" required> 1560<br>
                </div>
            </div>

           
            <div class="field">
                <label class="label">Question 3: In which province is the Mayon Volcano located?</label>
                <div class="control">
                    <input type="radio" name="answer_3" value="A" required> Albay<br>
                    <input type="radio" name="answer_3" value="B" required> Batanes<br>
                    <input type="radio" name="answer_3" value="C" required> Cagayan<br>
                    <input type="radio" name="answer_3" value="D" required> Davao<br>
                </div>
            </div>

         
            <div class="field">
                <label class="label">Question 4: What pen name did Marcelo H del Pilar use in his writings?</label>
                <div class="control">
                    <input type="radio" name="answer_4" value="A" required> Laong Laan<br>
                    <input type="radio" name="answer_4" value="B" required> Plaridel<br>
                    <input type="radio" name="answer_4" value="C" required> Leon Guerero<br>
                    <input type="radio" name="answer_4" value="D" required> Agila<br>
                </div>
            </div>

           
            <div class="field">
                <label class="label">Question 5: Mt. Pinatubo is located in the province of Luzon at the intersection of the borders of the provinces of Zambales, Tarlac, and which other province?</label>
                <div class="control">
                    <input type="radio" name="answer_5" value="A" required> Bataan<br>
                    <input type="radio" name="answer_5" value="B" required> Subic<br>
                    <input type="radio" name="answer_5" value="C" required> Pampanga<br>
                    <input type="radio" name="answer_5" value="D" required> Cavite<br>
                </div>
            </div>

                    <button type="submit" class="button is-result.php">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>






  
        </form>
    </section>
</body>

</html>
