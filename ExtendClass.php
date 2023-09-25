<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="ExtendClass.php" method="post">
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
        <div class="form-control">
                <label for="email">Diem Java</label>
                <input type="text" id="java" name="java" placeholder="Enter your Java Point" required>
        </div>
        <div class="form-control">
                <label for="email">Diem Php</label>
                <input type="text" id="php" name="php" placeholder="Enter your Php Point" required>
        </div>
        <button type="submit">Submit</button>
        <button type="reset">Clear</button>
    </form> -->
    <table>
        <th>MSV</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Diem Java</th>
        <th>Diem Php</th>
        <th>Diem TB</th>

        <?php

            use SinhVien as GlobalSinhVien;

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
                        
                        echo '<td><input value= "'.$this->msv.'"></td>';
                        echo '<td><input value= "'.$this->name.'"></td>';
                        echo '<td><input value= "'.$this->gender.'"></td>';
                        echo '<td><input value= "'.$this->address.'"></td>';
                        
                    }
                }

                class SinhVienIT extends GlobalSinhVien{
                    private $diemJava;
                    private $diemPhp;

                    public function __construct($msv, $name, $gender, $address, $diemJava, $diemPhp)
                    {
                        parent::__construct($msv, $name, $gender, $address);
                        $this->diemJava= $diemJava;
                        $this->diemPhp = $diemPhp;
                    }

                    public function Show(){
                        parent::GetSV();
                        echo"Diem Java: ".$this->diemJava;
                        echo"Diem Php: " .$this->diemPhp;
                        $this->GetArgPoint();
                        

                    }

                    public function Showed(){
                        
                        echo '<tr>';
                        parent::GetSVByTable();
                        echo '<td><input value= "'.$this->diemJava.'"></td>';
                        echo '<td><input value= "'.$this->diemPhp.'"></td>';
                        echo '<td><input value= "'.$this->GetArgPoint().'"></td>';

                        echo '</tr>';
                    }

                    public function GetArgPoint(){
                        return ($this->diemJava+$this->diemPhp)/2;
                    }
                }

                // $thai = new SinhVienIT('201200327', "Nguyen Ngoc Thai", "Nam", "Ha Noi", '10', '10');
                // $thai->Show();
                // $thai = new SinhVien($_POST['msv'], $_POST['name'], $_POST['gender'], $_POST['address']);
                // // $thai->GetSV();
                // $thai->GetSVByTable();
                $thai = [new SinhVienIT('201200327', "Nguyen Ngoc Thai", "Nam", "Ha Noi", '10', '10'), new SinhVienIT('201200327', "Nguyen Ngoc Thai", "Nam", "Ha Noi", '10', '10'), new SinhVienIT('201200327', "Nguyen Ngoc Thai", "Nam", "Ha Noi", '10', '10')];
                foreach($thai as $sv){
                    $sv->Showed();
                }

        ?>
    </table>
</body>
</html>