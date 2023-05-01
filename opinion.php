<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="./Styles/style.css" />
        <link rel="icon" type="image/svg+xml" href="./src/image 1.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Opinion</title>
    </head>
    <body>
            <?php
                $email = $_GET['email'];
                $fname = $_GET['f_name'];
                $lname = $_GET['l_name'];
            ?>
        <div class="position-absolute top-50 start-50 translate-middle">
            <p class="hello">Hello <span class="name"><?php echo $fname," ",$lname ?></span></p>
            <button type="button" class="opinion_btn position-absolute top-60 start-50 translate-middle" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Share your opinion
            </button>
        </div>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="padding: 10px 0px 10px 0px">
                <div class="modal_container align-middle">
                    <p class="modal_title">Your Opinion on this Strike / Protest</p>
                    <form  id="opinion_form" name="opinion_form" method="POST" action="./Logics/Opinion.php?email=<?php echo $email ?>">
                        <textarea placeholder="Start typing..." class="text_area" maxlength="500" id="opinion" name="opinion"></textarea>
                        <div style="margin-top: 20px;">
                            <button type="submit" class="modal_sub_btn">
                                Share my voice
                            </button>
                            <button onclick="" type="submit" class="modal_close_btn" data-bs-dismiss="modal">
                                Cancel
                            </button>
                        </div>
                        
                    </form>
                </div>
            </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>