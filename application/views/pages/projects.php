
    <main>
      
      <section class="tiles-list">
          <?php for ($i=0;$i<count($projects_list);$i++)
          {
            $project=$projects_list[$i];
            if ($i%4===0) echo "<ul class='row'>";
          ?>
            <li class="tile col-lg-3 col-md-3 col-sm-3 col-xs-12">
              <a href="/projects/<?php echo $project['id']; ?>"><img src="/img/projects/<?php echo $project['image'];?>" alt="<?php echo $project['name'];?>"  /></a>
            </li>
          <?php
            if ($i%4===3) echo "</ul>";
          }
          ?>
      </section>
    </main>
