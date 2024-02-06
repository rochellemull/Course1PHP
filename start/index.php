
<?php
    require 'lib/functions.php';
    $pets = get_pets();
    $pets = array_reverse($pets);

    $welcomeMessage = 'All the love none of the crap!';
    $pupCount = count($pets);




?>
<?php
    require 'layout/header.php';
?>

    <div class="jumbotron">
        <div class="container">


            <h1><?php echo strtoupper(strtolower($welcomeMessage)); ?></h1>

            <p>Over <?php echo $pupCount ?> pet friends!</p>

            <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <?php foreach ($pets as $cutiePet){ ?>

                <div class ="col-lg-4 pet-list-item">
                    <h2><?php echo $cutiePet['name']; ?></h2>
                    <img src = "images/<?php echo $cutiePet['image']; ?>" class="img-rounded"/>
                    <blockquote class = "pet-details">
                        <span class ="label label-info"><?php echo $cutiePet['breed']; ?></span>
                        <?php
                        if(!array_key_exists('age',$cutiePet) || $cutiePet['age'] == '' ){
                            echo 'Unknown';
                        }
                        elseif ($cutiePet['age'] == 'hidden'){
                            echo '(Contact owner for age)';
                        }
                        else{
                            echo $cutiePet['age'];
                        }

                        ?>
                        <?php echo $cutiePet['weight']; ?> lbs

                    </blockquote>
                    <p>
                        <?php echo $cutiePet['bio']; ?>
                    </p>

                </div>
            <?php } ?>

        </div>

        <hr>
<?php
    require 'layout/footer.php';
    ?>
