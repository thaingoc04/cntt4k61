<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="class.php" method="post">
        <div class="form-control">
                <label for="username">Ma Sinh Vien</label>
                <input type="text" id="msv" name="msv" placeholder="Enter your Id" required>
         </div>
        <div class="form-control">
                <label for="email">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-control">
                <label for="email">Gender</label>
                <input type="text" id="gender" name="gender" placeholder="Enter your gender" required>
        </div>
        <div class="form-control">
                <label for="email">Address</label>
                <input type="text" id="address" name="address" placeholder="Enter your address" required>
        </div>
        <button type="submit">Submit</button>
        <button type="reset">Clear</button>
    </form>
    <?php
        class SinhVien{
            private $msv;
            private $name;
            private $gender;
            private $address;
            public function __construct($msv, $name, $gender, $address)
            {
                $this->msv = $msv;
                $this->name = $name;
                $this->gender = $gender;
                $this->address = $address;
            }
            
            public function GetSV(){
                echo "MSV: " .$this->msv;
                echo " -Name: " .$this->name;
                echo " -Gender: " .$this->gender;
                echo " -Address: " .$this->address;
            }

            public function GetSVByTable(){
                echo '<table><str>';
                echo '<td><input value= "'.$this->msv.'"></td>';
                echo '<td><input value= "'.$this->name.'"></td>';
                echo '<td><input value= "'.$this->gender.'"></td>';
                echo '<td><input value= "'.$this->address.'"></td>';
                echo '</str></table>';
            }
        }

        $thai = new SinhVien($_POST['msv'], $_POST['name'], $_POST['gender'], $_POST['address']);
        // $thai->GetSV();
        $thai->GetSVByTable();
    ?>
</body>
</html>