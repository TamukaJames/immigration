<html>
    <body>
        <?php
        //Connection

        $conn = new mysqli('localhost','root','');

        //conn confirm 
        if ($conn->connect_error) {
            die("Connection failed:" . $conn->connect_error);
        }
        echo "DB Connect Successfully";

        mysqli_select_db($conn,"immigration");

        echo "\n DB is selected Successfully";

        //inserting

        $sql = "INSERT INTO appform (idnum, benum, surname, fname, namechng, chngtimes, marital, sex, dob, country, dateofm, spousename, placeofm, spouse, marriedonce, kin, kinrel, kinres, kinnum, citizenship, radiotrav, foreignpass, fpdetails, radiobr, paspno, lostpassno, issdate, bname, lostreason) 
        VALUES ($_POST['idnum'], 
        $_POST['benum'], 
        $_POST['surname'], 
        $_POST['fname'],
        $_POST['namechang'],
        $_POST['chngtimes'],
        $_POST['marital'],
        $_POST['sex'],
        $_POST['dob'],
        $_POST['country'],
        $_POST['dateofm'],
        $_POST['spousename'],
        $_POST['placeofm'],
        $_POST['spouse'],
        $_POST['marriedonce'],
        $_POST['kin'],
        $_POST['kinrel'],
        $_POST['kinres'],
        $_POST['kinnum'],
        $_POST['citizenship'],
        $_POST['radiotrav'],
        $_POST['foreignpass'],
        $_POST['fpdetails'],
        $_POST['radiobr'],
        $_POST['paspno'],
        $_POST['lostpassno'],
        $_POST['issdate'],
        $_POST['bname'],
        $_POST['lostreason']
        )";
        
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        ?>
    </body>
</html>