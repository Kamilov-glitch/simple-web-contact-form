<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
          crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <title>Simple Web Contact Form</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tell us about your issue</h3>
            </div>
            <div class="card-body">
                <form action="show.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email">
                    </div>
                    
                    <div class="form-group">
                        <label for="issue">Your issue</label>
                        <select name="issue" id="si">
                            <option value="query">Query</option>
                            <option value="feedback">Feedback</option>
                            <option value="complaint">Complaint</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Description</label><br>
                        <textarea name="description" cols="30" rows="2"></textarea>
                        <script>
                            CKEDITOR.replace( 'description' );
                        </script>
                    </div>
                    
                    <button class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


<?php
// create validations for fields
// make sure to keep filled fields in case of error
?>