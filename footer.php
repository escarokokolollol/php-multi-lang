<footer>
  <h4>footer</h4>
    <select name="lang" id="select-lang">

      <option <?php 
        if($_SESSION['lang'] == "en"){
          echo "selected";
        }
      ?> value="en">
        English
      </option>
      <option <?php 
        if($_SESSION['lang'] == "sv"){
          echo "selected";
        }
      ?>
        value="sv">
        Svenska
      </option>
    </select>

</footer>


<script src="main.js"></script>
</body>
</html>