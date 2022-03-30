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
                        <input type="text" name="name" class="form-control"
                          value="<?php if (isset($_SESSION['name'])) echo $_SESSION['name'] ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control"
                          value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email'] ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="issue">Your issue:  </label>
                        <select name="issue" id="si" clas="form-control"
                          value="<?php if (isset($_SESSION['issue'])) echo $_SESSION['issue'] . ' selected'?>">
                            <option value="query" 
                            <?php if (isset($_SESSION['issue']) && $_SESSION['issue'] == 'query') echo "selected" ?>>Query</option>
                            <option value="feedback"
                            <?php if (isset($_SESSION['issue']) && $_SESSION['issue'] == 'feedback') echo "selected" ?>>Feedback</option>
                            <option value="complaint"
                            <?php if (isset($_SESSION['issue']) && $_SESSION['issue'] == 'complaint') echo "selected" ?>>Complaint</option>
                            <option value="other"
                            <?php if (isset($_SESSION['issue']) && $_SESSION['issue'] == 'other') echo "selected" ?>>Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Description</label><br>
                        <textarea name="description" cols="30" rows="2" class="form-control"></textarea>
                        <script>
                            CKEDITOR.replace( 'description' );
                            <?php
                                $var = $_SESSION['description'];
                                echo isset($_SESSION['description']) ? "let jsvar ='$var';" : "let jsvar = ''";
                            ?>
                            CKEDITOR.instances['description'].
                            setData(jsvar);
                        </script>
                    </div>
                    
                    <button class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>