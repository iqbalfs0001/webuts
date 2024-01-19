<!DOCTYPE html>
<html>
<body>


<form action="/action_page.php">
  <label for="fname">Nama Depan:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Nama Belakang:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <label for="">
        jenis kelamin
        <select name="" id="">
            <option value="">laki laki</option>
            <option value="">perempuan</option>
        </select>
    </label>
    <br>
    <label for="">
        alamat
        <textarea name="" id="" cols="30" rows="10"></textarea>
    </label>

    <br>
    <label for=""> Tanggal Lahir
        <input type="date" name="" id="">
    </label>

    <br>
    <label for=""> Lulus atau nda
        <input type="radio" value="lulus" name="lulus"checked>lulus
        <input type="radio" value="tidak lulus" name="tidak lulus">tidak lulus
    </label>

    <br>
    <form>
<label for="">Hobby :   
  <label for="hobby1">berenang</label>
  <input type="checkbox" id="hobby1" name="hobby1" value="berenang">
  <label for="hobby2">belajar</label>
  <input type="checkbox" id="hobby2" name="hobby2" value="belajar">
  <label for="hobby3">berkebun</label>
  <input type="checkbox" id="hobby3" name="hobby3" value="berkebun">
  <label for="hobby4">bertani</label>
  <input type="checkbox" id="hobby4" name="hobby4" value="bertani">
</label for="">
</form>
    <button>simpan</button>
</form> 

</body>
</html>