<?php
  require_once 'include/config.php';
  require_once 'include/util.php';
  require_once 'tests/tests.php';

  include 'include/header.html';
?>

<div class="row">
  <div class="col-lg-12">
    <h1>Hello world from PHP</h1>
    <p>You can remix this project for a plain PHP starter. Some database is configured (see sample.sql), but none of the MVC framwork is here. You can write code directly in this file.</p>
    <p>Here's a form that posts to itself!</p>
  </div>
</div>

<div class="row" >
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <form action="index.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col">
                <label for="start">Enter a number between 1 and 50</label>
                <input type="number" class="form-control" id="number" name="number" placeholder="Enter a number between 1 and 50" required value="<?php echo(safeParam($_REQUEST, 'number', '10')); ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row mt-4 float-right">
              <div class="btn-toolbar align-middle">
                <button type="submit" class="btn btn-primary mr-1 d-flex justify-content-center align-content-between"><span class="material-icons">send</span>&nbsp;Submit</button>
                <button class="btn btn-secondary mr-1 d-flex justify-content-center align-content-between" onclick="get('index.php')"><span class="material-icons">cancel</span>&nbsp;Cancel</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4">
  <div class="col-lg-12">
    <h3>Here's some output from the form.</h3>
    
      <?php
        $number = safeParam($_REQUEST, 'number', '10');
        $number = max(min($number, 50), 1);

        echo "<p>The number is {$number}. So here are ${number} lines of output:</p>\n<ul>\n";
        for ($i = 0; $i < $number; ++$i) {
          echo "  <li> This line $i </li>\n";
        }
        echo "</ul>";
      ?>
    <?php echo(runAllTests()); ?>
  </div>
</div>
    
<?php
  include 'include/footer.html';
?>