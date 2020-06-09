<?php include 'inc/header.php'; ?>

    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-4">Find a Job</h1>
              <form method="get" action="index.php">
                <select name="category" id="category" class="form-control">
                  <option value="0">Choose Category</option>
                    <?php foreach ($categories as $category): ?>
                      <option value="<?php echo $category->id; ?>">
                          <?php echo $category->name; ?>
                      </option>
                    <?php endforeach; ?>
                </select>
                <br>
                <input type="submit" class="btn btn-lg btn-success" value="FIND">
              </form>
            </div>
        </div>

        <div class="container">

          <h3 class="display-6"><?php echo $title; ?></h3>

            <?php foreach ($jobs as $job): ?>
              <div class="row">
                  <div class="col-md-12">
                      <h4><?php echo $job->job_title; ?></h4>
                      <p>
                          <?php echo $job->description; ?>
                      </p>
                      <p>
                        <a class="btn btn-secondary" href="job.php?id=<?php echo $job->id; ?>" role="button">
                          View &raquo;
                        </a>
                      </p>
                  </div>
              </div>
              <hr>
            <?php endforeach; ?>
        </div>
    </main>

<?php include 'inc/footer.php'; ?>