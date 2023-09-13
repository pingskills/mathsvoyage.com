<?php
include __DIR__.'/../layout/header.html.php';
include __DIR__.'/../layout/navbar.html.php';
?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Curriculum</h1>
        <?php
           include __DIR__.'/../layout/flash.html.php';
?>
        <?php if ($isAdmin) { ?>
          <a href="/curriculum/new" class="btn btn-primary">
            <i class="bi bi-plus"></i> New Curriculum</a>
          <a href="/topics/new" class="btn btn-primary">
            <i class="bi bi-plus"></i> New Topic</a>
          <a href="/skills/new" class="btn btn-primary">
            <i class="bi bi-plus"></i> New Skill</a>
          <a href="/skill-questions/new" class="btn btn-primary">
            <i class="bi bi-plus"></i> New Skill Question</a>
          <a href="/videos/new" class="btn btn-primary">
            <i class="bi bi-plus"></i> New Video</a>
          <a href="/worked-solutions/new" class="btn btn-primary">
            <i class="bi bi-plus"></i> New Worked Solution</a>
        <?php } ?>
        <hr />
        <?php foreach ($curriculum as $c) { ?>
          <h2><a href="/curriculum/<?= $this->esc($c['curriculum_slug']) ?>"><?= $this->esc($c['curriculum_name']) ?> Curriculum</a></h2>
        <?php } ?>
      </div>
    </div>
<?php
include __DIR__.'/../layout/footer.html.php';
?>
  </div><!-- container -->
</body>
</html>
