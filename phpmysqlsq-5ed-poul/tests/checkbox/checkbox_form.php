<?php include 'header.php';?>

      <h1>Week</h1>
      <p class="fs-5 col-md-8">Choose some of the days in the week.</p>

      <!-- FORM START -->
      <form action="checkbox_handler.php" method="post" class="fs-5">

        <div class="my-3 form-check">
          <input class="form-check-input" type="checkbox" name="monday" value="monday" id="monday">
          <label class="form-check-label" for="monday">
            <strong>Monday</strong>
          </label>
        </div>

        <div class="my-3 form-check">
          <input class="form-check-input" type="checkbox" name="tuesday" value="tuesday" id="tuesday">
          <label class="form-check-label" for="tuesday">
            <strong>Tuesday</strong>
          </label>
        </div>

        <div class="my-3 form-check">
          <input class="form-check-input" type="checkbox" name="wednesday" value="wednesday" id="wednesday">
          <label class="form-check-label" for="wednesday">
            <strong>Wednesday</strong>
          </label>
        </div>

        <div class="my-3 form-check">
          <input class="form-check-input" type="checkbox" name="thursday" value="thursday" id="thursday">
          <label class="form-check-label" for="thursday">
            <strong>Thursday</strong>
          </label>
        </div>

        <div class="my-3 form-check">
          <input class="form-check-input" type="checkbox" name="friday" value="friday" id="friday">
          <label class="form-check-label" for="friday">
            <strong>Friday</strong>
          </label>
        </div>

        <div class="my-3 form-check">
          <input class="form-check-input" type="checkbox" name="saturday" value="saturday" id="saturday">
          <label class="form-check-label" for="saturday">
            <strong>Saturday</strong>
          </label>
        </div>

        <div class="my-3 form-check">
          <input class="form-check-input" type="checkbox" name="sunday" value="sunday" id="sunday">
          <label class="form-check-label" for="sunday">
            <strong>Sunday</strong>
          </label>
        </div>
        <div class="mb-5">
          <button type="submit" name="submit" class="my-3 btn btn-primary btn-lg px-4">Submit to PHP handler</button>
        </div>
        
      </form>
      <!-- FORM END OF -->



      
<?php include 'footer.php';?>