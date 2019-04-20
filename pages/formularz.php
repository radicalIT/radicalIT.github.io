<div class="container">
<form action="index.php?page=welcome" method="post">
        <div class="form-group">
          <label for="exampleFormControlInput1">Imię</label>
          <input type="text" class="form-control" id="name" name="Name" placeholder="Twoje Imię">
          <br>
          <div class="alert alert-danger" id="eName" role="alert">
            Imię jest za krótkie
          </div>
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Nazwisko</label>
          <input type="text" class="form-control" id="surname" name="Surname" placeholder="Twoje Nazwisko">
          <br>
          <div class="alert alert-danger" id="eSurname" role="alert">
            Nazwisko jest za krótkie
          </div>
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Płeć</label>
          <select class="form-control" name="Gender" id="sex">
            <option>Mężczyzna</option>
            <option>Kobieta</option>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Data Urodzenia</label>
          <input type="text" class="form-control" name="Birthday" id="birthday" placeholder="DD/MM/RRRR">
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Adres Email</label>
          <input type="email" class="form-control" id="email" name="Email" placeholder="nazwa@domena.pl">
        </div>
        <div class="alert alert-danger" id="eEmail" role="alert">
          Podaj poprawny adres email
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Podaj Hasło</label>
          <input type="password" name="Password" class="form-control" id="pwr1" placeholder="********">
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Powtórz Hasło</label>
          <input type="password" class="form-control" id="pwr2" placeholder="********">
        </div>
        <div class="alert alert-danger" id="ePwr" role="alert">
          Hasła się nie zgadzają
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Ilość sztuk prospektów za 20zł</label>
          <input type="text" class="form-control" id="buy1" placeholder="20 PLN">
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Ilość sztuk prospektów za 38zł</label>
          <input type="text" class="form-control" id="buy2" placeholder="38 PLN">
        </div>


        <div class="form-group">
          <label for="exampleFormControlInput1">Cena Końcowa:</label>
          <input type="text" readonly="true" class="form-control" id="summary" placeholder="PLN">
        </div>
        <input type="submit" disabled="true" id="regBtn" value="Zarejestruj się!" class="btn btn-primary">
      </form>
      </div>

      <br />

      <div class="alert alert-secondary" role="alert">
        Pamiętaj aby nie udostępniać nikomu swojego loginu i hasła
      </div>
    </center>
  </div>>

  <!-- Validation Script -->

  <script>
    var iName = document.getElementById("name");
    var iSurname = document.getElementById("surname");
    var iPwr1 = document.getElementById("pwr1");
    var iPwr2 = document.getElementById("pwr2");
    var iEmail = document.getElementById("email");

    var eName = document.getElementById("eName");
    var eSurname = document.getElementById("eSurname");
    var ePwr = document.getElementById("ePwr");
    var eEmail = document.getElementById("eEmail");

    var regBtn = document.getElementById("regBtn");

    var buy1 = document.getElementById("buy1");
    var buy2 = document.getElementById("buy2");
    var summ = document.getElementById("summary");

    iName.addEventListener("keyup", vName);
    iSurname.addEventListener("keyup", vSurname);
    iPwr1.addEventListener("keyup", vPwr);
    iPwr2.addEventListener("keyup", vPwr);
    iEmail.addEventListener("keyup", vEmail);

    buy1.addEventListener("keyup", countP);
    buy2.addEventListener("keyup", countP);

    eHide();

    function eHide() {
      eName.style.display = "none";
      eSurname.style.display = "none";
      ePwr.style.display = "none";
      eEmail.style.display = "none";
    }

    function vName() {
      if (iName.value.length < 3) {
        eName.style.display = "block";
      }
      else {
        eName.style.display = "none";
      }
      chkBtn();
    }
    function vEmail()
    {
      const reg = new RegExp(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
      if(!reg.test(iEmail.value))
      {
        eEmail.style.display = "block";
      }
      else {
        eEmail.style.display = "none";
      }
      chkBtn();

    }
    function vSurname() {
      if (iSurname.value.length < 3) {
        eSurname.style.display = "block";
      }
      else {
        eSurname.style.display = "none";
      }
      chkBtn();
    }
    function vPwr() {
      if (iPwr1.value !== iPwr2.value) {
        ePwr.style.display = "block";
      }
      else {
        ePwr.style.display = "none";
      }
      chkBtn();
    }
    function chkBtn() {
      if (eName.style.display == "none" &&
        eSurname.style.display == "none" &&
        ePwr.style.display == "none" &&
        eEmail.style.display == "none" &&
        iPwr1.value != "") {
        regBtn.disabled = false;
      }
      else {
        regBtn.disabled = true;
      }
    }

    function countP() {
      if (buy1.value == "") {
        buy1.value = 0;
      }
      if (buy2.value == "") {
        buy2.value = 0;
      }
      if (isNaN(buy1.value) || isNaN(buy2.value)) {
        summ.value = "Wprowadz poprawna liczbe";
      }
      else {
        summ.value = (parseInt(buy1.value) * 20) + (parseInt(buy2.value) * 38);
      }
      if (buy1.value == 0) {
        buy1.value = "";
      }
      if (buy2.value == 0) {
        buy2.value = "";
      }
    }

  </script>
</div>
    
</form>