<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
<title>Main form</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="https://bootstraptema.ru/snippets/style/2015/bootswatch/bootstrap-darkly-v3.3.6.css" media="screen">
<link rel="stylesheet" href="https://bootstraptema.ru/snippets/style/2015/bootswatch/custom.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>



</head>
<body>
  

<form action="/post" method="post">
    @csrf 
    <div class="row mb-3">
        <div class="col-sm-4 mb-3">
          <input type="text" class="form-control" id="sname" name="sname" placeholder="Фамилия">
        </div>
        <div class="col-sm-4 mb-3">
         <input type="text" class="form-control" id="name" name="name" placeholder="Имя">
        </div>
        <div class="col-sm-4 mb-3">
          <input type="text" class="form-control" id="lname" name="lname" placeholder="Отчество">
        </div>
        <div class="col-sm-4 mb-3">
          <select id="gender" name="gender" class="form-control">
            <option selected>Мужчина</option>
            <option>Женщина</option>
          </select>
        </div>
        <div class="col-sm-4 mb-3">
          <input type="text" class="form-control" id="bdate" name="bdate" placeholder="Дата рождения">
        </div>
        <div class="col-sm-4 mb-3">
          <input type="text" class="form-control" id="phone" name="phone" placeholder="Телефон">
        </div>
        <div class="col-sm-4 mb-3">
         <input type="text" class="form-control" id="snils" name="snils" placeholder="СНИЛС">
        </div>
        <div class="col-sm-4 mb-3">
          <select id="document" name="document" class="form-control" >
            <option selected value="0">Паспорт РФ</option>
            <option value="1">Паспорт иностранного гражданина</option>
            <option value="2">Свидетельство о рождении</option>
            <option value="3">Вид на жительство</option>
          </select>
        </div>
        <div class="col-sm-4 mb-3">
          <input type="text" class="form-control" id="dserial" name="dserial" maxlength="11" placeholder="Серия">
        </div>
        <div class="col-sm-4 mb-3">
          <input type="text" class="form-control" id="dnumber" name="dnumber" maxlength="14" placeholder="Номер">
        </div>
        <div class="col-sm-4 mb-3">
          <input type="submit" >
        </div>
     </div>
</form>   

<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/formcontrol.js"></script>

</body>
</html>